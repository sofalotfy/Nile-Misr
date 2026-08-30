@include('header')

<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background top-space-margin" style="background-image: url('{{ asset('storage/' . $pageData['hero-image']) }}')">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">
                            {{ $pageData['hero-title'] }}
                        </h1>

                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">
                            {{ $pageData['hero-sub-title'] }}
                        </p>

                    </div>

                    <!-- start breadcrumb -->
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                            <li>
                                <a href="{{ url('/') }}" class="text-white">
                                    الرئيسية
                                </a>
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
<section class="pt-3 sm-pt-50px">
    <div class="container">

        <div class="row justify-content-center">

            @php
                $sites = $pageData['sites'] ?? [];
                $half = (int) ceil(count($sites) / 2);

                $firstHalf = array_slice($sites, 0, $half);
                $secondHalf = array_slice($sites, $half);
            @endphp


            <!-- First Half -->
            <div class="col-xl-6 col-lg-8 col-md-10 lg-mb-50px"
                 data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>

                <div class="row row-cols-1 justify-content-center"
                     data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                    @foreach($firstHalf as $site)

                        <!-- start services box item -->
                        <div class="col services-box-style-02 mb-30px">

                            <div class="row g-0 box-shadow-quadruple-large border-radius-6px overflow-hidden">

                                <div class="col-lg-6 col-sm-6">
                                    <div
                                        class="h-100 cover-background xs-h-300px"
                                        style="background-image: url('{{ asset('storage/' . $site['image']) }}')">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 bg-white box-shadow-extra-large p-40px xl-p-30px">

                                    <div class="services-box-content last-paragraph-no-margin">

                                        <span class="d-block text-dark-gray primary-font fw-700 fs-19 mb-10px">
                                            {{ $site['name'] }}
                                        </span>

                                        <p class = "">
                                            {{ $site['address'] }}
                                        </p>

                                        <a
                                            href="{{ $site['location'] }}"
                                            target="_blank"
                                            class="fs-16 lh-20 primary-font fw-500 text-dark-gray text-decoration-line-bottom d-inline-block mb-25px"
                                        >
                                            View on map
                                        </a>

                                        <div class="text-dark-gray fw-600">

                                            <i class="feather icon-feather-phone-call icon-small me-10px text-dark-gray"></i>

                                            <a href="tel:{{ $site['number'] }}">
                                                {{ $site['number'] }}
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- end services box item -->

                    @endforeach

                </div>

            </div>


            <!-- Second Half -->
            <div class="col-xl-6 col-lg-8 col-md-10">

                <div class="row row-cols-1 justify-content-center"
                     data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                    @foreach($secondHalf as $site)

                        <!-- start services box item -->
                        <div class="col services-box-style-02 mb-30px">

                            <div class="row g-0 box-shadow-quadruple-large border-radius-6px overflow-hidden">

                                <div class="col-lg-6 col-sm-6">
                                    <div
                                        class="h-100 cover-background xs-h-300px"
                                        style="background-image: url('{{ asset('storage/' . $site['image']) }}')">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 bg-white box-shadow-extra-large p-40px xl-p-30px">

                                    <div class="services-box-content last-paragraph-no-margin">

                                        <span class="d-block text-dark-gray primary-font fw-700 fs-19 mb-10px">
                                            {{ $site['name'] }}
                                        </span>

                                        <p class = "w-90">
                                            {{ $site['address'] }}
                                        </p>

                                        <a
                                            href="{{ $site['location'] }}"
                                            target="_blank"
                                            class="fs-16 lh-20 primary-font fw-500 text-dark-gray text-decoration-line-bottom d-inline-block mb-25px"
                                        >
                                            View on map
                                        </a>

                                        <div class="text-dark-gray fw-600">

                                            <i class="feather icon-feather-phone-call icon-small me-10px text-dark-gray"></i>

                                            <a href="tel:{{ $site['number'] }}">
                                                {{ $site['number'] }}
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <!-- end services box item -->

                    @endforeach

                </div>

            </div>

        </div>

    </div>
</section>
<!-- end section -->


<!-- start section -->
<section class="bg-very-light-gray position-relative">

    <div class="container">

        <div class="row mb-8">

            <div class="col-xl-5 col-lg-6 md-mb-50px"
                 data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <div
                    class="bg-white border-radius-6px box-shadow-quadruple-large p-10 ps-12 pe-12 lg-ps-8 lg-pe-8 h-100 d-flex flex-wrap flex-column justify-content-center"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'
                >

                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex align-self-start">

                        <i class="bi bi-chat-square-dots fs-16 me-5px"></i>

                        {{ $pageData['card-tag'] }}

                    </span>

                    <h4 class="text-dark-gray ls-minus-1px fw-700 mb-15px">
                        {{ $pageData['card-title'] }}
                    </h4>

                    <p class="">
                        {{ $pageData['card-sub-title'] }}
                    </p>


                    <div class="cols-2 cols-sm-2">

                        <div class="col last-paragraph-no-margin mb-25px">

                            <p>
                                {{ $siteData['hotline'] }}
                            </p>

                            <a
                                href="tel:{{ $siteData['hotline'] }}"
                                class="text-dark-gray fw-600"
                            >
                                {{ $siteData['hotline'] }}
                            </a>

                        </div>

                    </div>


                    <div class="cols-2 cols-sm-2">

                        <div class="col last-paragraph-no-margin mb-25px">

                            <p>
                                تواصل معنا عبر what's app
                            </p>

                            @foreach(explode('-', $siteData['card-whatsapp'] ?? '') as $whatsapp)

                                @if(trim($whatsapp))

                                    <a
                                        href="https://wa.me/{{ trim($whatsapp) }}"
                                        class="text-dark-gray fw-600"
                                    >
                                        {{ trim($whatsapp) }}
                                    </a>

                                    @if(!$loop->last)
                                        <span class="text-dark-gray fw-600">-</span>
                                    @endif

                                @endif

                            @endforeach

                        </div>

                    </div>


                    <div class="cols-1 cols-sm-2">

                        <div class="col last-paragraph-no-margin sm-mb-25px">

                            <p>
                                تواصل مع فريق المبيعات
                            </p>

                            <a
                                href="mailto:{{ $pageData['card-sales-contact'] }}"
                                class="text-dark-gray fw-600"
                            >
                                {{ $pageData['card-sales-contact'] }}
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6 offset-xl-1 md-mb-50px sm-mb-0"
                 data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <h3 class="text-dark-gray ls-minus-2px fw-700">
                    {{ $pageData['form-title'] }}
                </h3>

                <form action="{{ route('contact.store') }}" method="POST" class="contact-form-style-03">
                    @csrf

                    <label for="name"
                        class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">
                        {{ $pageData['form-name-title'] }}
                    </label>

                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon">
                            <i class="bi bi-emoji-smile text-dark-gray"></i>
                        </span>

                        <input
                            class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                            id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="{{ $pageData['form-name-place-holder'] }}"
                            required
                        />

                    </div>


                    <label for="email"
                        class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">
                        {{ $pageData['form-email-title'] }}
                    </label>

                    <div class="position-relative form-group mb-20px">

                        <span class="form-icon">
                            <i class="bi bi-envelope text-dark-gray"></i>
                        </span>

                        <input
                            class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="{{ $pageData['form-email-place-holder'] }}"
                            required
                        />

                    </div>


                    <label for="message"
                        class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">
                        {{ $pageData['form-message-title'] }}
                    </label>

                    <div class="position-relative form-group form-textarea mb-0">

                        <textarea
                            class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required"
                            id="message"
                            name="message"
                            placeholder="{{ $pageData['form-message-place-holder'] }}"
                            rows="3"
                            required
                        >{{ old('message') }}</textarea>

                        <span class="form-icon">
                            <i class="bi bi-chat-square-dots text-dark-gray"></i>
                        </span>

                    </div>


                    <div class="row mt-25px align-items-center">

                        <div class="col-xl-7 col-lg-12 col-sm-7 lg-mb-30px md-mb-0">

                            <p class="mb-0 fs-14 lh-22 text-center text-sm-start">
                                {!! $pageData['form-note'] !!}
                            </p>

                        </div>


                        <div class="col-xl-5 col-lg-12 col-sm-5 text-center text-sm-end text-lg-start text-xl-end xs-mt-25px">

                            <button
                                class="btn btn-dark-gray btn-medium btn-round-edge btn-box-shadow"
                                type="submit"
                            >
                                {{ $pageData['form-button-text'] }}
                            </button>

                        </div>


                        <div class="col-12 mt-20px mb-0 text-center text-md-start">

                            @if($errors->any())

                                <div class="text-danger mb-3">

                                    @foreach($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach

                                </div>

                            @endif


                            @if(session('success'))

                                <div class="text-success mb-3">
                                    {{ session('success') }}
                                </div>

                            @endif

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>
<!-- end section -->


<!-- start section -->
<section class="">

    <div class="container">

        <div class="row align-items-center justify-content-center">

            <div class="col-md-auto text-center text-md-end sm-mb-20px"
                 data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <h5 class="alt-font text-dark-gray fw-500 mb-0">
                    {!! $pageData['social-quote'] !!}
                </h5>

            </div>


            <div class="col-2 d-none d-lg-inline-block"
                 data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>

            </div>


            <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0"
                 data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <ul class="large-icon dark">

                    <li class="m-0">
                        <a class="tiktok" href="{{ $pageData['tiktok'] }}" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                            <span></span>
                        </a>
                    </li>

                    <li class="m-0">
                        <a class="x-twitter" href="{{ $pageData['twitter'] }}" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
                            <span></span>
                        </a>
                    </li>

                    <li class="m-0">
                        <a class="instagram" href="{{ $pageData['instgram'] }}" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            <span></span>
                        </a>
                    </li>

                    <li class="m-0">
                        <a class="facebook" href="{{ $pageData['facebook'] }}" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                            <span></span>
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>
<!-- end section -->

@include('footer')