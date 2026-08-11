document.addEventListener("DOMContentLoaded", () => {

    // ─────────────────────────────────────────────────────────────────────────
    // 1. Lenis — smooth scroll initialisation
    //    FIX: Remove the manual requestAnimationFrame loop.
    //    We only drive Lenis through gsap.ticker to avoid double-ticking.
    // ─────────────────────────────────────────────────────────────────────────
    const lenis = new Lenis({
        duration: 2,                                          // slow, cinematic
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        gestureDirection: 'vertical',
    });

    // ─────────────────────────────────────────────────────────────────────────
    // 2. GSAP + ScrollTrigger registration
    //    Single ticker drives both GSAP and Lenis — no duplicate RAF.
    // ─────────────────────────────────────────────────────────────────────────
    gsap.registerPlugin(ScrollTrigger);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);     // convert GSAP seconds → ms for Lenis
    });
    gsap.ticker.lagSmoothing(0);    // prevent large delta spikes

    // Keep ScrollTrigger positions in sync with Lenis virtual scroll
    lenis.on('scroll', ScrollTrigger.update);

    // ─────────────────────────────────────────────────────────────────────────
    // 3. Guard: prevent multiple redirects if onLeave fires more than once
    // ─────────────────────────────────────────────────────────────────────────
    let isLeaving = false;

    // ─────────────────────────────────────────────────────────────────────────
    // 4. Premium cinematic exit function
    //    Called once when the scroll-scrub reaches the very end.
    //    • Stops Lenis so no more scroll input is processed
    //    • Locks all pointer interaction on the body
    //    • Runs a single clean GSAP timeline:
    //        – opacity  : 1 → 0   (soft, main fade)
    //        – scale    : 1 → 1.04 (barely visible push — keeps energy alive)
    //        – filter   : blur(0) → blur(6px)  (silky depth cue)
    //    • Redirects with replace() so Back button won't loop intro
    // ─────────────────────────────────────────────────────────────────────────
    function triggerPremiumExit() {
        if (isLeaving) return;          // guard against double-fire
        isLeaving = true;

        // Stop Lenis — no more scroll events after this point
        lenis.stop();

        // Block all interaction during exit animation
        document.body.style.pointerEvents = 'none';
        document.body.style.userSelect    = 'none';

        // One clean GSAP timeline — GPU-accelerated properties only
        gsap.timeline()
            .to('.cinematic-wrapper', {
                opacity:  0,
                scale:    1.04,                   // almost unnoticeable push
                filter:   'blur(6px)',            // subtle depth cue
                duration: 1.4,
                ease:     'power3.inOut',         // smooth, premium easing
                force3D:  true,                   // keep on GPU compositor
                onComplete: () => {
                    // Navigate AFTER animation fully completes
                    // replace() prevents Back button from replaying the intro
                    window.location.replace('index.php');
                }
            });
    }

    // ─────────────────────────────────────────────────────────────────────────
    // 5. Scroll-scrubbed opening timeline
    //    onUpdate fires every frame — we trigger exit when zoom is 98% done.
    //    This eliminates the freeze caused by scrub lag (onLeave fires too early).
    // ─────────────────────────────────────────────────────────────────────────
    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.scroll-spacer',
            start:   'top top',
            end:     'bottom bottom',
            scrub:   1.5,
            // onUpdate fires every animation frame — check if we're at the end
            onUpdate: (self) => {
                // Trigger when animation is 98% complete (not 100% to avoid scrub lag gap)
                if (self.progress >= 0.98) {
                    triggerPremiumExit();
                }
            }
        }
    });

    // Zoom the hero image (GPU: transform only)
    tl.to('.scene-1 .bg-image', {
        scale:           3,
        transformOrigin: 'center center',
        ease:            'power2.inOut',
        force3D:         true,
    }, 0)

    // Fade + lift text/logo out early
    .to('.scene-1 .content', {
        opacity: 0,
        y:       -50,
        ease:    'power2.inOut',
    }, 0);

});
