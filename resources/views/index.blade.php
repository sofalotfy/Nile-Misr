@include('header.php');
<!-- start banner slider -->
<section class="p-0 bg-dark-gray position-relative">
    <!-- Static Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100 z-index-9">
        <div class="opacity-extra-medium bg-black"></div>
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <style>
                    @keyframes customSpin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }

                    .patt6-spin {
                        animation: customSpin 60s linear infinite;
                    }
                </style>
                <div class="position-absolute d-none d-xl-flex justify-content-center align-items-center opacity-5" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 708px; z-index: 0; pointer-events: none;">
                    <img src="imgs/pattern/patt6.png" class="patt6-spin" style="width: 100%;" alt="">
                </div>

                <div class="col-xxl-8 col-xl-10 h-100 text-center d-flex flex-column align-items-center justify-content-center position-relative z-index-1">
                    <div class="" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="text-tussock-yellow fs-20 fw-600 text-uppercase" style="color: #dda947ff;">{!! $pageData['hero-tag'] ?? 'نحمل قلوبكم لبيت الله' !!}</div>
                    </div>
                    <h1 class="fw-600 ls-minus-1px text-white mb-20px" data-fancy-text='{ "scale": [1.1, 1], "rotateX": [20, 0], "opacity": [0, 1], "translateX": [-20, 0], "translateY": [20, 0], "delay": 0, "speed": 40, "easing": "easeOutQuad" }'>{!! $pageData["hero-title"] ?? 'نيل مصر للسياحة' !!}</h1>
                    <p class="w-50 fs-20 mb-30px md-w-80 sm-w-100 text-very-light-gray" data-anime='{ "el": "lines", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay":500, "staggervalue": 300, "easing": "easeOutQuad" }'>{!! $pageData["sub-title"] ?? 'الشركة الرائدة للحج والعمرة في مصر أكثر من عشرين عاما في خدمة زوار بيت الله' !!}</p>
                    <div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start pointer-events-auto" data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay":600, "staggervalue": 600, "easing": "easeOutQuad" }'>
                        <a href="javascript:void(0);" class="btn btn-yellow btn-large btn-rounded btn-box-shadow me-15px xs-ms-15px sm-mb-15px left-icon" data-bs-toggle="modal" data-bs-target="#quickBookingModal">إحجز الأن</a>
                        <div class="btn btn-large btn-base-color-2 btn-rounded btn-box-shadow sm-mb-15px" style="color: #ffc251ff; background-color: #2e2006ff;">{!! $pageData["hajj-season"] ?? 'موسم حج 1448هـ' !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper full-screen ipad-top-space-margin md-h-600px sm-h-500px swiper-number-pagination-style-01 base-color" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 5000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade" }' data-number-pagination="1" data-anime-text='{ "translateY": [50,0], "opacity": [0,1], "easing": "easeOutQuad", "duration": 500, "delay": { "staggervalue": 20 } }'>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="position-absolute left-0px top-0px w-100 h-100 cover-background" style="background-image:url('imgs/banner-1.jpg');" data-anime='{ "translateY": [0, 0], "opacity": [1,1], "scale": [1,1.1], "duration": 7000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'></div>
                <div class="opacity-light bg-gradient-nero-grey-brown"></div>
            </div>
            <div class="swiper-slide">
                <div class="position-absolute left-0px top-0px w-100 h-100 cover-background" style="background-image:url('imgs/banner-2.jpg');" data-anime='{ "translateY": [0, 0], "opacity": [1,1], "scale": [1,1.1], "duration": 7000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'></div>
                <div class="opacity-light bg-gradient-nero-grey-brown"></div>
            </div>
            <div class="swiper-slide">
                <div class="position-absolute left-0px top-0px w-100 h-100 cover-background" style="background-image:url('imgs/banner-4.jpg');" data-anime='{ "translateY": [0, 0], "opacity": [1,1], "scale": [1,1.1], "duration": 7000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'></div>
                <div class="opacity-light bg-gradient-nero-grey-brown"></div>
            </div>
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination container right-0px text-center swiper-pagination-clickable swiper-number fs-14 xs-w-100 z-index-9 pointer-events-auto"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <div class="slider-one-slide-next-1 icon-very-small text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-light h-55px w-55px d-none d-sm-flex border-radius-100 z-index-9 pointer-events-auto "><i class="fa-solid fa-chevron-right"></i></div>
        <div class="slider-one-slide-prev-1 icon-very-small text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-light h-55px w-55px d-none d-sm-flex border-radius-100 z-index-9 pointer-events-auto"><i class="fa-solid fa-chevron-left"></i></div>
        <!-- end slider navigation -->
    </div>
</section>
<!-- end banner slider -->
<!-- start section -->
<section class="p-0 border-bottom border-color-extra-medium-gray">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center"
            data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 500, "easing": "easeOutQuad" }'>
            <!-- start content box item -->
            <div
                class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                <div
                    class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                    <div class="flex-shrink-0 me-15px md-me-0">
                        <h2 class="mb-0 fw-800"><sup class="fs-24">+</sup>{!! $pageData["pilgrim-count"] ?? '250k'!!}</h2>
                    </div>
                    <div>
                        <span class="lh-24 fw-600 d-block">{!! $pageData["pilgrim-text"] ?? 'اكثر من 250 الف حاج ومعتمر' !!}</span>
                    </div>
                </div>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div
                class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                <div
                    class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                    <div class="flex-shrink-0 me-15px md-me-0">
                        <h2 class="mb-0 fw-800 ls-minus-3px">{!! $pageData["rating"] ?? '4.9' !!}</h2>
                    </div>
                    <div>
                        <div class="review-star-icon fs-20 d-inline-block text-gradient-orange-sky-blue">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <span class="lh-24 fw-600 d-block">{!! $pageData["rate-text"] ?? 'أفضل شركة سياحة دينية' !!}</span>
                    </div>
                </div>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div class="col pt-35px pb-35px text-dark-gray">
                <div
                    class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                    <div class="flex-shrink-0 me-15px md-me-0">
                        <h2 class="mb-0 fw-800"><sup class="fs-24">+</sup>">{!! $pageData["review-count"] ?? '3.5k' !!}</h2>
                    </div>
                    <div>
                        <span class="lh-24 fw-600 d-block">{!! $pageData["review-text"] ?? '+3500 ريفيو ع جوجل' !!}</span>
                    </div>
                </div>
            </div>
            <!-- end content box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row justify-content-between align-items-center sm-pb-9">
            <div class="col-lg-6 col-md-9 position-relative md-mb-15 text-center text-lg-start d-flex align-items-center justify-content-center"
                data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 15, "easing": "easeOutQuad" }'>
                <img src="{{ $pageData['section1-image'] ? 'storage/' . $pageData['section1-image'] : asset('imgs/journy.jpg') }}" alt="">
                <img src="{{ $pageData['section1-floating-image'] ? 'storage/' . $pageData['section1-floating-image'] : asset('imgs/pattern/patt12.png') }}imgs/pattern/patt12.png" class="position-absolute top-50 left-minus-100px lg-left-minus-40px sm-left-minus-30px lg-w-50 sm-w-55" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-220px)" alt="">
                <!-- <img src="images/demo-corporate-02.png" class="position-absolute top-0px xl-top-minus-10px w-170px right-20px md-right-40px xs-w-40" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt=""> -->
            </div>
            <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                <span class="mb-10px text-tussock-yellow fs-22 fw-600 d-block">{!! $pageData["section1-tag"] ?? 'نحمل قلوبكم لبيت الله' !!}</span>
                <h2 class="alt-font text-dark-gray ls-minus-2px">{!! $pageData["section1-tittle"] ?? 'رحلة نيل مصر عبر ربع قرن من الإنجاز' !!}</h2>
                <p class="mb-35px xs-mb-10px">{!! $pageData["section1-description"] ?? '
                    مسيرة الشركة الكبيرة منذ عام ٢٠٠١ بداية من سياحة المستقدمين الأجانب إلى معالم ومدن مصر السياحية و البدأ في
                    السياحة الدينية للمملكة العربية السعودية لخدمة حجاج و معتمري بيت الله الحرام عام ٢٠٠ ٨ و تقديم أعلى خدمة و أرقى
                    خدمة للعملاء و حتى تكريم الشركة كأفضل شركة حج و عمرة بجمهورية مصر العربية من وزارة السياحة المصرية وتقديم نيل
                    مصر الدعم الكامل والخدمة المتفانية لأكثر من 25 0 ألف حاج ومعتمر .. محطات كثيرة يمكننا الوقوف فيها لعرض النجاحات
                    والتميز الخالص نتيجة العمل المتفاني في خلال ٢٥ عام نستعرض منها القمم القليلة و المحطات المميزة' !!}
                </p>
                <a href="about.php" class="btn btn-large btn-yellow btn-hover-animation-switch btn-box-shadow btn-rounded me-25px xs-me-0">
                    <span>
                        <span class="btn-text">{!! $pageData["btn-text"] ?? 'من نــحــن؟' !!}</span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-left"></i></span>
                        <span class="btn-icon"><i class="feather icon-feather-arrow-left"></i></span>
                    </span>
                </a>
                <span class="text-dark-gray fw-700 ls-minus-05px d-block d-sm-inline-block sm-mt-15px"><a href="tel:19740"><i class="feather icon-feather-phone-call me-10px"></i>{!! $pageData["hotline"] ?? '19740' !!}19740</a></span>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overflow-hidden pb-0">
    <div class="container-fluid">
        <div class="row justify-content-center mb-1">
            <div class="col-xxl-4 col-xl-5 col-lg-7 col-sm-9 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="fs-15 text-uppercase text-base-color fw-600 mb-10px d-block ls-1px">{!! $pageData["section2-tag"] ?? 'برامج العمرة' !!}</span>
                <h3 class="fw-700 text-dark-gray ls-minus-1px">{!! $pageData["section2-title"] ?? 'أحدث برامج العمرة المتاحة' !!}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 position-relative p-0">
                <div class="outside-box-right-15 sm-outside-box-right-0 outside-box-left-15 sm-outside-box-left-0">
                    <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }' data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper-wrapper pt-20px pb-20px">
                            <?php
                            include_once 'umrah-data.php';
                            include_once 'umrah-card.php';
                            foreach ($umrah_programs as $program):
                            ?>
                                <!-- start slider item -->
                                <div class="swiper-slide sm-p-15px d-flex h-auto" dir="rtl">
                                    <?php umrah_card($program); ?>
                                </div>
                                <!-- end slider item -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                <!-- end slider pagination -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0 position-relative overflow-hidden">
    <!-- <img class="position-absolute end-0 top-150px lg-w-250px d-none d-md-inline-block" src="https://placehold.co/335x434" data-bottom-top="transform: translateY(-100px)" data-top-bottom="transform: translateY(100px)" alt=""> -->
    <div class="text-center position-absolute top-150px mt-70px sm-mt-0 w-100 d-flex justify-content-center align-items-center" style="opacity: 0.5; z-index: 0; pointer-events: none;" data-bottom-top="transform: translate3d(0px, 0px, 0px) scale(.8);" data-top-bottom="transform: translate3d(0px, 0px, 0px) scale(1.3);">
        <img src="{{ $pageData['section3-floating-image'] ? 'storage/' . $pageData['section3-floating-image'] : asset('/pattern/patt7.png') }}" class="patt6-spin" style="max-width: 600px; width: 80vw;" alt="">
    </div>
    <div class="position-relative" style="z-index: 1;">
        <div class="row p-0">
            <div class="col-12 text-center" data-anime='{ "translateY": [50, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
                <img src="{{ $pageData['section3-image'] ? 'storage/' . $pageData['section3-image'] : asset('imgs/eff-3.png') }}" class="" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="py-0">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12">
                <!-- start stack card -->
                <div class="stack-card cards" data-scale="false" data-top-space="0" data-top-padding="0">
                    <div class="stack-item bg-very-light-gray border-top border-color-transparent-dark-very-light overflow-hidden" data-index="0">
                        <img class="position-absolute bottom-minus-100px right-80px z-index-minus-1 animation-rotation d-none d-lg-flex" src="imgs/pattern/patt15.png" alt="">

                        <div class="container">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 pt-30px pb-30px md-pt-50px md-pb-50px">
                                    <span class="h-50px w-50px border border-color-transparent-dark-very-light fs-13 fw-500 text-dark-gray d-flex align-items-center justify-content-center border-radius-100 mb-35px">01</span>
                                    <h2 class="fw-300 text-dark-gray mb-25px w-70">الحج مع نيل مصر للسياحة</h2>
                                    <div class="text-end me-50px md-me-0"><i class="bi bi-arrow-down-right icon-very-medium text-dark-gray"></i></div>
                                    <div class="border-top border-color-transparent-dark-very-light pt-40px mt-40px lg-pt-20px lg-mt-20px md-pt-30px md-mt-30px">
                                        <p class="w-70 text-dark-gray mb-35px lg-w-90 sm-w-100">
                                            في نيل مصر، ندرك أن رحلة الحج ليست مجرد سفر، بل هي رحلة العمر التي يتمنى المسلم أن يؤديها مرةًً بإخلاص وخشوع. لذلك، نحرص على أن نكون رفقاء دربكم من اللحظة الأولى وحتى العودة، فنقدم كل ما يلزم لراحة الحاج وطمأنينته </p>
                                        <a href="hajj.php" class="btn btn-yellow btn-box-shadow fw-500 btn-large btn-rounded right-icon btn-switch-text left-icon mt-auto" aria-label="link">
                                            <span>
                                                <!-- <span><i class="feather icon-feather-briefcase"></i></span> -->
                                                <span class="btn-double-text" data-text="برامج الحج">برامج الحج</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-7 border-start md-border-start-0 border-color-transparent-dark-very-light pt-12 pb-12 xxl-pt-8 xxl-pb-8 xxl-ps-4 xxl-pe-4 md-p-0 md-mb-50px">
                                    <figure class="position-relative outside-box-right-5 xl-m-0">
                                        <img class=" w-100" src="imgs/haj-4.jpg" alt="">

                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stack-item bg-very-light-gray border-top border-color-transparent-dark-very-light overflow-hidden" data-index="1">
                        <img class="position-absolute bottom-minus-100px right-80px z-index-minus-1 animation-rotation d-none d-lg-flex" src="imgs/pattern/patt15.png" alt="">
                        <div class="container">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 pt-30px pb-30px md-pt-50px md-pb-50px">
                                    <span class="h-50px w-50px border border-color-transparent-dark-very-light fs-13 fw-500 text-dark-gray d-flex align-items-center justify-content-center border-radius-100 mb-35px">02</span>
                                    <h2 class="fw-300 text-dark-gray mb-25px w-70">العمرة مع نيل مصر للسياحة</h2>
                                    <div class="text-end me-50px md-me-0"><i class="bi bi-arrow-down-right icon-very-medium text-dark-gray"></i></div>
                                    <div class="border-top border-color-transparent-dark-very-light pt-40px mt-40px lg-pt-20px lg-mt-20px md-pt-30px md-mt-30px">
                                        <p class="w-70 text-dark-gray mb-35px lg-w-90 sm-w-100">
                                            رحلة العمرة مع نيل مصر هي فسحة روح ولقاء مع أطهر البقاع. نوفر برامج متنوعة تناسب جميع الميزانيات والمواعيد، تبدأ من استخراج التأشيرات بسرعة وسهولة </p>
                                        <a href="omra.php" class="btn btn-yellow btn-box-shadow fw-500 btn-large btn-rounded right-icon btn-switch-text left-icon mt-auto" aria-label="link">
                                            <span>
                                                <!-- <span><i class="feather icon-feather-briefcase"></i></span> -->
                                                <span class="btn-double-text" data-text="برامج العمرة">برامج العمرة</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-7 border-start md-border-start-0 border-color-transparent-dark-very-light pt-12 pb-12 xxl-pt-8 xxl-pb-8 xxl-ps-4 xxl-pe-4 md-p-0 md-mb-50px">
                                    <figure class="position-relative outside-box-right-5 xl-me-0">
                                        <img class=" w-100" src="imgs/omra-3.jpg" alt="">

                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stack-item bg-very-light-gray border-bottom border-top border-color-transparent-dark-very-light overflow-hidden" data-index="2">
                        <div class="container">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 pt-30px pb-30px md-pt-50px md-pb-50px">
                                    <span class="h-50px w-50px border border-color-transparent-dark-very-light fs-13 fw-500 text-dark-gray d-flex align-items-center justify-content-center border-radius-100 mb-35px">03</span>
                                    <h2 class="fw-300 text-dark-gray mb-25px">خدمات الحج للمصريين المقيمين بدول الخليج</h2>
                                    <div class="text-end me-50px md-me-0"><i class="bi bi-arrow-down-right icon-very-medium text-dark-gray"></i></div>
                                    <div class="border-top border-color-transparent-dark-very-light pt-40px mt-40px lg-pt-20px lg-mt-20px md-pt-30px md-mt-30px">
                                        <p class="w-70 text-dark-gray mb-35px lg-w-90 sm-w-100">
                                            من خلال مكتبنا في دبي بدولة الإمارات، نوفر للمغتربين في دول الخليج العربي إمكانية حجز رحلات الحج بسهولة ويسر، دون الحاجة للسفر إلى مصر لاستكمال الإجراءات. نحرص على تيسير كل الخطوات من حيث الإجراءات الحكومية وحجز الرحلات والإقامة، ليكون تركيزكم منصبًًا على الاستعداد الروحي لأداء المناسك في أجواء من الطمأنينة والخشوع. </p>
                                        <!-- <a href="demo-branding-studio-services.html" class="btn btn-dark-gray btn-box-shadow fw-500 btn-large btn-rounded right-icon btn-switch-text left-icon mt-auto" aria-label="link">
                                                    <span>
                                                        <span><i class="feather icon-feather-briefcase"></i></span>
                                                        <span class="btn-double-text" data-text="Our services">Our services</span>
                                                    </span>
                                                </a> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-7 border-start md-border-start-0  border-color-transparent-dark-very-light pt-12 pb-12 xxl-pt-8 xxl-pb-8 xxl-ps-4 xxl-pe-4 md-p-0 md-mb-50px">
                                    <figure class="position-relative outside-box-right-5 xl-me-0">
                                        <img class=" w-100" src="imgs/egy-2.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="stack-item bg-very-light-gray border-bottom border-top border-color-transparent-dark-very-light overflow-hidden" data-index="2">
                        <div class="container">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 pt-30px pb-30px md-pt-50px md-pb-50px">
                                    <span class="h-50px w-50px border border-color-transparent-dark-very-light fs-13 fw-500 text-dark-gray d-flex align-items-center justify-content-center border-radius-100 mb-35px">04</span>
                                    <h2 class="fw-300 text-dark-gray mb-25px">مشرفين نيل مصر</h2>
                                    <div class="text-end me-50px md-me-0"><i class="bi bi-arrow-down-right icon-very-medium text-dark-gray"></i></div>
                                    <div class="border-top border-color-transparent-dark-very-light pt-40px mt-40px lg-pt-20px lg-mt-20px md-pt-30px md-mt-30px">
                                        <p class="w-70 text-dark-gray mb-35px lg-w-90 sm-w-100">
                                            تعد خدمة الإشراف خلال تأدية الحاج و المعتمر لرحلته المقدسة خارج أرض الوطن هي العمل الأسمى على الإطلاق لنيل مصر للسياحة .. و هو العنصر الأساسي لنجاح الشركة و إتمام الوظيفة المنوطة بفريق عمل نيل مصر بشكل صحيح يرضي العملاء المميزين في رحلتهم المقدسة
                                        </p>
                                        <a href="moderators.php" class="btn btn-yellow btn-box-shadow fw-500 btn-large btn-rounded right-icon btn-switch-text left-icon mt-auto" aria-label="link">
                                            <span>
                                                <!-- <span><i class="feather icon-feather-briefcase"></i></span> -->
                                                <span class="btn-double-text" data-text="تعرف على مشرفينا">تعرف على مشرفينا</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 ps-7 border-start md-border-start-0  border-color-transparent-dark-very-light pt-12 pb-12 xxl-pt-8 xxl-pb-8 xxl-ps-4 xxl-pe-4 md-p-0 md-mb-50px">
                                    <figure class="position-relative outside-box-right-5 xl-me-0">
                                        <img class=" w-100" src="imgs/org-2.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end stack card -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overflow-hidden big-section position-relative">
    <img src="imgs/pattern/patt6.png" class="position-absolute top-80px right-270px opacity-7 z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt="" />

    <div class="container">
        <div class="row">
            <div class="col-xl-4 lg-mb-45px xs-mb-30px text-sm-start text-center">
                <span class="fs-60 xs-fs-50 fw-500 text-dark-gray mb-0 ls-minus-2px">{!! $pageData["experiences-title"] ?? 'تجارب ضيوف الرحمن' !!}</span>
            </div>
            <div class="col-xl-8">
                <div class="outside-box-right-45 sm-outside-box-right-0">
                    <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 60, "loop": true, "parallax": true, "speed": 1200, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-2", "prevEl": ".slider-one-slide-prev-2" }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper testimonials-style-13">
                            <!-- start review item -->
                            <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin" data-swiper-parallax="700">
                                <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Hatem ElAttar</span>
                                <p class="fs-22 lh-36 text-dark-gray">
                                    رحلة الحج كانت ممتازة و المشرفين بقيادة أ. ايهاب ( أ. حسام ، أ. سيد و أ. تامر) قمة في وسرعة
                                    التعامل مع المواقف الطارئة والاحترافية و التنظيم و الرقي
                                    لو كتب الله لنا الحج مرة اخرى ستكون مع نيل مصر للسياحة بإذن الله
                                </p>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin" data-swiper-parallax="700">
                                <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Mahmude Abdelbaqy </span>
                                <p class="fs-22 lh-36 text-dark-gray">
                                    ترتيب المواقيت و المناسك و الإجراءات و بشاشة الوجهه و طولة البال علي كل الأسئله و التسامح و الإبتسامه الدائمه منكم كلم فعلا .... جزاكم الله عنا كل خير على هذا المجهود الرائع..... ولا نزكي علي الله أحد ربنا يبارك فيكم و يكرمكم.... شكرا جزيلا لكم جميعا..
                                    دكتور محمود عبد الباقي محمود </p>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin" data-swiper-parallax="700">
                                <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Mazen Mohamed</span>
                                <p class="fs-22 lh-36 text-dark-gray">
                                    بسم الله ماشاء الله شركة محترمة جداً انصحكم بالتجربة ويبقي حظكم حلو جدا لو معاكم المشرف الحج عبد المحسن قمة الاحترام وتسهيل الاموار للحجاج جزاه الله كل خيراً عنا ربنا يعطيه الصحه والعافية
                                </p>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin" data-swiper-parallax="700">
                                <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Hatem ElAttar</span>
                                <p class="fs-22 lh-36 text-dark-gray">
                                    رحلة الحج كانت ممتازة و المشرفين بقيادة أ. ايهاب ( أ. حسام ، أ. سيد و أ. تامر) قمة في وسرعة
                                    التعامل مع المواقف الطارئة والاحترافية و التنظيم و الرقي
                                    لو كتب الله لنا الحج مرة اخرى ستكون مع نيل مصر للسياحة بإذن الله
                                </p>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin" data-swiper-parallax="700">
                                <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Mahmude Abdelbaqy </span>
                                <p class="fs-22 lh-36 text-dark-gray">
                                    ترتيب المواقيت و المناسك و الإجراءات و بشاشة الوجهه و طولة البال علي كل الأسئله و التسامح و الإبتسامه الدائمه منكم كلم فعلا .... جزاكم الله عنا كل خير على هذا المجهود الرائع..... ولا نزكي علي الله أحد ربنا يبارك فيكم و يكرمكم.... شكرا جزيلا لكم جميعا..
                                    دكتور محمود عبد الباقي محمود </p>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                            <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin" data-swiper-parallax="700">
                                <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@ Mazen Mohamed</span>
                                <p class="fs-22 lh-36 text-dark-gray">
                                    بسم الله ماشاء الله شركة محترمة جداً انصحكم بالتجربة ويبقي حظكم حلو جدا لو معاكم المشرف الحج عبد المحسن قمة الاحترام وتسهيل الاموار للحجاج جزاه الله كل خيراً عنا ربنا يعطيه الصحه والعافية
                                </p>
                            </div>
                            <!-- end review item -->
                            <!-- start review item -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="separator-line-5px w-100 bg-extra-medium-gray mt-45px mb-45px xs-mt-30px xs-mb-30px"></div>
                    </div>
                    <div class="col-md-6 col-sm-4 xs-mb-30px">
                        <div class="d-flex justify-content-center justify-content-sm-start">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-2 text-black swiper-button-prev slider-navigation-style-04 bg-tussock-yellow h-65px w-65px" tabindex="0" role="button" aria-label="Previous slide"><i class="fa-solid fa-arrow-right text-white"></i></div>
                            <div class="slider-one-slide-next-2 text-black swiper-button-next slider-navigation-style-04 bg-tussock-yellow h-65px w-65px" tabindex="0" role="button" aria-label="Next slide"><i class="fa-solid fa-arrow-left text-white"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                            <div class="fw-700 fs-70 text-dark-gray me-15px ls-minus-1px">{!! $pageData["rating"] ?? '4.9' !!}</div>
                            <div class="text-center">
                                <div class="bg-dark-gray text-white border-radius-30px ps-20px pe-20px fs-13">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <span class="text-dark-gray fs-13 fw-700 text-uppercase">{!! $pageData["experiences-opinion"] ?? 'آراء العملاء' !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@include('footer.php');