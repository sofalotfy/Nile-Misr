@include('header')
<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background  top-space-margin position-relative" top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('storage/' . $pageData['hero-image']) }}')">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column">
                    <div class="" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">
                            {{ $pageData['hero-title'] }}
                        </h1>

                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">
                            {{ $pageData['hero-sub-title'] }}
                        </p>
                    </div>

                    <!-- start breadcrumb -->
                    <div class=" justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li>
                                <a href="{{ url('/') }}" class="text-white">الرئيسية</a>
                            </li>

                            <li>
                                {{ $pageData['hero-title'] }}
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
<section class="overflow-hidden big-section bg-gradient-very-light-gray pb-0">
    <div class="container">

        <div class="row mb-5">

            <div class="col-xxl-6 col-lg-7" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <div>
                    <h3 class="fw-500 text-dark-gray ls-minus-2px">
                        {{ $pageData['media-solutions-title'] }}
                    </h3>
                </div>

            </div>

            <div class="col-lg-5 offset-xxl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <div class="sm-mb-30px last-paragraph-no-margin">

                    <span class="d-inline-block text-tussock-yellow fs-22 fw-600 mb-5px">
                        {!! $pageData['media-solutions-quote'] !!}
                    </span>

                    <p>
                        {!! $pageData['media-solutions-text'] !!}
                    </p>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
        <section class="big-section pt-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{"el": "childs", "translateY": [0, 0], "perspective": [1000,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-03 transition-inner-all md-mb-30px">
                        <div class="position-relative overflow-hidden border-radius-6px last-paragraph-no-margin">
                            <figure class="m-0">
                                <div class="bg-gradient-gray-light-dark-transparent position-absolute top-0px left-0px w-100 h-100 z-index-1"></div>
                                <img src="https://placehold.co/800x1100" alt="" />
                                <figcaption class="d-flex flex-column w-100 h-100 p-60px lg-p-35px z-index-1">
                                    <span class="mb-auto fs-24 text-white text-white-hover w-90 lg-w-100">Preferred style of accommodation.</span>
                                    <a href="{{ route('media-details') }}" class="align-self-start fs-15 fw-500 ls-1px text-uppercase text-white"><i class="bi bi-bookmark-heart align-middle icon-extra-medium me-10px"></i>Superior service</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- end interactive banner item -->
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-03 transition-inner-all md-mb-30px">
                        <div class="position-relative overflow-hidden border-radius-6px last-paragraph-no-margin">
                            <figure class="m-0">
                                <div class="bg-gradient-gray-light-dark-transparent position-absolute top-0px left-0px w-100 h-100 z-index-1"></div>
                                <img src="https://placehold.co/800x1100" alt="" />
                                <figcaption class="d-flex flex-column w-100 h-100 p-60px lg-p-35px z-index-1">
                                    <span class="mb-auto fs-24 text-white text-white-hover w-90 lg-w-100">Our local guides and tour directors.</span>
                                    <a href="{{ route('media-details') }}" class="align-self-start fs-15 fw-500 ls-1px text-uppercase text-white"><i class="bi bi-award align-middle icon-extra-medium me-10px"></i>Greatest guides</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- end interactive banner item -->
                    <!-- start interactive banner item -->
                    <div class="col interactive-banner-style-03 transition-inner-all">
                        <div class="position-relative overflow-hidden border-radius-6px last-paragraph-no-margin">
                            <figure class="m-0">
                                <div class="bg-gradient-gray-light-dark-transparent position-absolute top-0px left-0px w-100 h-100 z-index-1"></div>
                                <img src="https://placehold.co/800x1100" alt="" />
                                <figcaption class="d-flex flex-column w-100 h-100 p-60px lg-p-35px z-index-1">
                                    <span class="mb-auto fs-24 text-white text-white-hover w-90 lg-w-100">The best consumer protection plan.</span>
                                    <a href="{{ route('media-details') }}" class="align-self-start fs-15 fw-500 ls-1px text-uppercase text-white"><i class="bi bi-shield-check align-middle icon-extra-medium me-10px"></i>Fully protected</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- end interactive banner item -->
                </div>
            </div>
        </section>
        <!-- end section -->
@include('footer')
