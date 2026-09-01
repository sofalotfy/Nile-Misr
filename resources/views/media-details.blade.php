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
<section class="overflow-hidden big-section bg-gradient-very-light-gray">
    <div class="container">

        <!-- <div class="row mb-5">

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

        </div> -->


        <div class="row">

            <div class="col-12 position-relative">

                <div class="outside-box-right-25 xs-outside-box-right-0">

                    <div class="swiper swiper-width-auto magic-cursor drag-cursor"
                         data-slider-options='{ "slidesPerView": "auto", "spaceBetween": 30, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination-bullets-02", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-01", "prevEl": ".slider-one-slide-prev-01" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "spaceBetween": 80 }, "992": { "spaceBetween": 50 } }, "effect": "slide" }'>

                        <div class="swiper-wrapper">

                            @foreach($pageData['images'] ?? [] as $image)

                                <!-- start content carousal item -->
                                <div class="swiper-slide">
                                    <img
                                        src="{{ asset('storage/' . $image) }}"
                                        class="md-h-400px sm-h-250px"
                                        alt=""
                                    />
                                </div>
                                <!-- end content carousal item -->

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
<!-- end section -->

<!-- start videos section -->
<section class="pt-0 pb-5">
    <div class="container">
        <!-- <div class="row mb-4">
            <div class="col-12 text-center">
                <h4 class="fw-500 text-dark-gray">الفيديوهات</h4>
            </div>
        </div> -->
        <div class="row">
            @php
                // يمكنك تمرير الروابط (مثل روابط YouTube Embed أو أي رابط فيديو خارجي) من الكنترولر هنا
                $videoLinks = !empty($pageData['video_links']) ? $pageData['video_links'] : ['https://www.youtube.com/embed/7CUBw9pYO18'];
            @endphp

            @forelse($videoLinks as $link)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="position-relative overflow-hidden border-radius-6px h-550px d-flex align-items-center justify-content-center bg-dark-gray">
                    <!-- استخدمنا iframe ليدعم روابط يوتيوب وغيرها من منصات الفيديو الخارجية -->
                    <iframe class="w-100 h-100 border-0" src="{{ $link }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            @empty
            <!-- يمكن إزالة هذه الرسالة أو تركها تظهر في حال عدم وجود فيديوهات -->
            <div class="col-12 text-center">
                <p>لا توجد فيديوهات متاحة حالياً.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- end videos section -->


<!-- start section -->
<section class="ps-2 pe-2 pt-0">

    <div class="container-fluid">

        <div class="row">

            <div class="col sm-p-0">

                <div class="justified-gallery image-gallery-style-06"
                     data-justified-options='{ "rowHeight": 500, "maxRowHeight": false, "captions": false, "margins": 15, "waitThumbnailsLoad": true }'
                     data-anime='{ "el": "childs", "translateY": [0, 0],"opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>

                    @php
                        $mediaImages = [
                            $pageData['media-image-1'] ?? null,
                            $pageData['media-image-2'] ?? null,
                            $pageData['media-image-3'] ?? null,
                            $pageData['media-image-4'] ?? null,
                            $pageData['media-image-5'] ?? null,
                            $pageData['media-image-6'] ?? null,
                        ];
                    @endphp

                    @foreach($mediaImages as $image)

                        @if($image)

                            <!-- start gallery item -->
                            <div class="gallery-box transition-inner-all">

                                <a
                                    href="{{ asset('storage/' . $image) }}"
                                    data-group="lightbox-group-gallery-item-6"
                                    title="Lightbox gallery image title"
                                >

                                    <div class="position-relative bg-dark-gray">

                                        <img
                                            src="{{ asset('storage/' . $image) }}"
                                            alt=""
                                        />

                                        <div class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">

                                            <i class="icon feather icon-feather-search icon-very-medium text-white absolute-middle-center"></i>

                                        </div>

                                    </div>

                                </a>

                            </div>
                            <!-- end gallery item -->

                        @endif

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end section -->

@include('footer')
