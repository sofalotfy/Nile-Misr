@include('header')
<!-- Hero Section -->
<section
    class="page-title-separate-breadcrumbs cover-background top-space-margin" top-space-margin" data-parallax-background-ratio="0.5"
    style="background-image: url({{ $pageData['hero-image'] ? asset('storage/' . $pageData['hero-image']) : asset('imgs/why.jpg') }})"
>
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column">

                    <div class="">
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">
                            {!! $pageData['hero-title'] ?? 'لماذا نيل مصر؟' !!}
                        </h1>

                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">
                            {!! $pageData['hero-sub-title'] ?? 'ريادة اعترفت بها الدولة... وثقة منحها لنا عملاؤنا.' !!}
                        </p>
                    </div>

                    <div class=" justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}" class="text-white">الرئيسية</a>
                            </li>
                            <li>
                                {!! $pageData['hero-title'] ?? 'لماذا نيل مصر؟' !!}
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Accreditations -->
<section class="pb-0">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-md-11 text-center">

                <h2 class="text-dark-gray ls-minus-1px">
                    {!! $pageData['accreditations-title'] ?? 'الاعتمادات والتكريمات' !!}
                </h2>

                {!! $pageData['accreditations-text'] ?? '' !!}

                @if(!empty($pageData['accreditations-note']))
                    <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-5px">
                        {!! $pageData['accreditations-note'] !!}
                    </span>
                @endif

            </div>
        </div>
    </div>
</section>


<!-- Accreditations Images -->
<section class="big-section pt-2">
    <div class="container-fluid">
        <div class="row position-relative clients-style-08 mt-25px">

            <div
                class="col swiper text-center feather-shadow"
                data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false } }'
            >

                <div class="swiper-wrapper marquee-slide">

                    @foreach($pageData['accreditations-images'] ?? [] as $image)
                        <div class="swiper-slide">
                            <a href="#">
                                <img
                                    src="{{ asset('storage/' . $image['image']) }}"
                                    class="h-90px xs-h-70px"
                                    alt=""
                                >
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
</section>


<!-- Strategic Partnerships -->
<section class="p-0">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-md-11 text-center">

                <h2 class="text-dark-gray ls-minus-1px">
                    {!! $pageData['strategic-partnerships-title'] ?? 'شراكات استراتيجية' !!}
                </h2>

                {!! $pageData['strategic-partnerships-text'] ?? '' !!}

            </div>
        </div>
    </div>
</section>


<!-- Strategic Partnerships Images -->
<section class="big-section pb-4 pt-4">
    <div class="container-fluid">
        <div class="row position-relative clients-style-08 mt-25px">

            <div
                class="col swiper text-center feather-shadow"
                data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false } }'
            >

                <div class="swiper-wrapper marquee-slide">

                    @foreach($pageData['strategic-partnerships-images'] ?? [] as $image)
                        <div class="swiper-slide">
                            <a href="#">
                                <img
                                    src="{{ asset('storage/' . $image['image']) }}"
                                    class="h-90px xs-h-70px"
                                    alt=""
                                >
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
</section>


<!-- Our Partnerships -->
<section class="pt-0">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-md-11 text-center">

                <h2 class="text-dark-gray ls-minus-1px">
                    {!! $pageData['partnerships-title'] ?? 'شركائنا في النجاح' !!}
                </h2>

                {!! $pageData['partnerships-text'] ?? '' !!}

                @if(!empty($pageData['partnerships-note']))
                    <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-5px">
                        {!! $pageData['partnerships-note'] !!}
                    </span>
                @endif

            </div>
        </div>
    </div>
</section>


<!-- Royal Inn -->
<section
    class="position-relative"
    data-parallax-background-ratio="0.5"
    style="background-image: url('{{ $pageData['royal-inn-image'] ? asset('storage/' . $pageData['royal-inn-image']) : asset('imgs/royal.jpg') }}');"
>
    <div class="opacity-medium bg-black"></div>

    <div class="container">
        <div class="row justify-content-center align-items-center min-h-500px">

            <div class="col-12 col-xl-12 col-lg-10 position-relative text-center parallax-scrolling-style-1">

                @if(!empty($pageData['royal-inn-logo']))
                    <img
                        src="{{ asset('storage/' . $pageData['royal-inn-logo']) }}"
                        alt="" class="w-20"
                    >
                @endif

                <h3 class="text-white mx-auto alt-font fw-500 mt-40px ls-minus-2px mb-0">
                    {!! $pageData['royal-inn-titlle'] ?? 'سلسلة فنادق رويال إن' !!}
                </h3>

                @if(!empty($pageData['royal-inn-tag']))
                    <span class="fw-500 text-tussock-yellow mb-5px d-inline-block ls-1px">
                        {!! $pageData['royal-inn-tag'] !!}
                    </span>
                @endif

                {!! $pageData['royal-inn-text'] ?? '' !!}

            </div>

        </div>
    </div>
</section>


<!-- Noon Logo -->
<section class="pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-4 col-md-6 text-center md-mb-35px">

                @if(!empty($pageData['noon-logo']))
                    <img
                        src="{{ asset('storage/' . $pageData['noon-logo']) }}"
                        alt="" class="w-70"
                    >
                @endif

            </div>

        </div>
    </div>
</section>


<!-- Noon -->
<section class="position-relative pt-0 pb-0">
    <div class="container">
        <div class="row justify-content-center align-items-center min-h-500px">

            <div class="col-12 col-xl-12 col-lg-10 position-relative text-center parallax-scrolling-style-1">

                <h1 class="text-base-color mx-auto alt-font fw-500 mb-40px ls-minus-2px">
                    {!! $pageData['noon-titlle'] ?? 'مدرسة نوون' !!}
                </h1>

                @if(!empty($pageData['noon-tag']))
                    <span class="fw-500 text-tussock-yellow mb-5px d-inline-block ls-1px">
                        {!! $pageData['noon-tag'] !!}
                    </span>
                @endif

                {!! $pageData['noon-text'] ?? '' !!}

            </div>

        </div>
    </div>
</section>


<!-- Noon Background -->
<section
    class="position-relative pt-0"
    data-parallax-background-ratio="0.5"
    style="background-image: url('{{ $pageData['noon-image'] ? asset('storage/' . $pageData['noon-image']) : asset('imgs/noon.jpg') }}');"
>
    <div class="container">
        <div class="row justify-content-center align-items-center min-h-500px">
            <div class="col-12 col-xl-12 col-lg-10 position-relative text-center parallax-scrolling-style-1">
            </div>
        </div>
    </div>
</section>
<a href="javascript:void(0);"
           class="floating-book-btn"
           id="global-floating-book-btn"
           data-bs-toggle="modal"
           data-bs-target="#quickBookingModal">
            <!-- <i class="feather icon-feather-calendar"></i> -->
            <span class="">احجز <br> الآن</span>
        </a>
@include('footer')
