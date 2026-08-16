@include('header')

<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background  top-space-margin position-relative" style="background-image: url(imgs/service-banner-2.jpg)">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">
                            {{ $pageData['hero-tag'] }}
                        </h1>

                        <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100 mt-1">
                            {!! $pageData['hero-text'] !!}
                        </p>
                    </div>

                    <!-- start breadcrumb -->
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li>
                                <a href="{{ url('/') }}" class="text-white">الرئيسية</a>
                            </li>

                            <li>
                                {{ $pageData['hero-tag'] }}
                            </li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->


<!-- start section -->
<section class="overflow-hidden big-section position-relative">

    <img
        src="imgs/pattern/patt6.png"
        class="position-absolute top-80px right-270px opacity-7 z-index-minus-1"
        data-bottom-top="transform: rotate(0deg) translateY(0)"
        data-top-bottom="transform:rotate(-15deg) translateY(0)"
        alt=""
    />

    <div class="container">
        <div class="row">

            <div class="col-xl-4 lg-mb-45px xs-mb-30px text-sm-start text-center">

                <span class="fs-60 xs-fs-50 fw-500 text-dark-gray mb-0 ls-minus-2px">
                    {{ $pageData['experiences-title'] }}
                </span>

            </div>

            <div class="col-xl-8">

                <div class="outside-box-right-45 sm-outside-box-right-0">

                    <div class="swiper magic-cursor"
                         data-slider-options='{ "slidesPerView": 1, "spaceBetween": 60, "loop": true, "parallax": true, "speed": 1200, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-2", "prevEl": ".slider-one-slide-prev-2" }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>

                        <div class="swiper-wrapper testimonials-style-13">

                            @foreach($reviews as $review)

                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin" data-swiper-parallax="700">

                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">
                                        @ {{ $review['name'] }}
                                    </span>

                                    <p class="fs-22 lh-36 text-dark-gray">
                                        {{ $review['review'] }}
                                    </p>

                                </div>
                                <!-- end review item -->

                            @endforeach

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
                            <div class="slider-one-slide-prev-2 text-black swiper-button-prev slider-navigation-style-04 bg-tussock-yellow h-65px w-65px"
                                 tabindex="0"
                                 role="button"
                                 aria-label="Previous slide">
                                <i class="fa-solid fa-arrow-right text-white"></i>
                            </div>

                            <div class="slider-one-slide-next-2 text-black swiper-button-next slider-navigation-style-04 bg-tussock-yellow h-65px w-65px"
                                 tabindex="0"
                                 role="button"
                                 aria-label="Next slide">
                                <i class="fa-solid fa-arrow-left text-white"></i>
                            </div>
                            <!-- end slider navigation -->

                        </div>

                    </div>

                    <div class="col-md-6 col-sm-8">

                        <div class="d-flex align-items-center justify-content-center justify-content-sm-end">

                            <div class="fw-700 fs-70 text-dark-gray me-15px ls-minus-1px">
                                4.9
                            </div>

                            <div class="text-center">

                                <div class="bg-dark-gray text-white border-radius-30px ps-20px pe-20px fs-13">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>

                                <span class="text-dark-gray fs-13 fw-700 text-uppercase">
                                    آراء العملاء
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</section>
<!-- end section -->


<!-- start section -->
<section class="half-section pt-0">

    <div class="container">

        <div class="row position-relative z-index-1 m-0">

            <div class="col-12 position-relative overflow-hidden border-radius-6px h-700px lg-h-550px md-h-400px d-flex align-items-center justify-content-center">

                <video muted class="video-bg html-video border-radius-6px video-play-icon" poster="{{$pageData['video_poster']?asset("storage/" . $pageData['video_poster']):asset("imgs/banner-1.jpg")}}">

                    <source
                        type="video/mp4"
                        src="{{ asset('storage/' . $pageData['vidoe']) }}"
                    />

                    <source
                        type="video/webm"
                        src="{{ asset('storage/' . $pageData['vidoe']) }}"
                    />

                </video>

                <a href="{{$pageData['vidoe']}}" class="html-video-play video-icon-box video-icon-extra-large position-relative">

                    <span>
                        <span class="video-icon bg-white">

                            <i class="play-icon feather icon-feather-play text-dark-gray ms-0" aria-hidden="true"></i>

                            <i class="pause-icon feather icon-feather-pause text-dark-gray ms-0" aria-hidden="true"></i>

                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                            </span>

                        </span>
                    </span>

                </a>

            </div>

            <!-- <div class="col-12 text-center position-absolute left-0px bottom-minus-100px md-bottom-minus-80px z-index-9">
                <img src="images/demo-hotel-and-resort-about-us-09.png" alt="" data-bottom-top="transform: translate3d(100px, 0px, 0px);" data-top-bottom="transform: translate3d(-100px, 0px, 0px);" />
            </div> -->

        </div>

    </div>

</section>
<!-- end section -->

@include('footer')