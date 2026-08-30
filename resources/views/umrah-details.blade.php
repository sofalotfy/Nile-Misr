@include('header')

@php

    /*
    |--------------------------------------------------------------------------
    | Dynamic package data
    |--------------------------------------------------------------------------
    */

    $programIncludes = $package->program_includes ?? [];
    $generalNotes = $package->general_notes ?? [];
    $requiredPapers = $package->required_papers ?? [];
    $cancelationPolicy = $package->cancelation_policy ?? [];
    $externalVisas = $package->external_visas ?? [];

    /*
    |--------------------------------------------------------------------------
    | Prices
    |--------------------------------------------------------------------------
    |
    | Assuming the relationship in UmrahPackages is:
    | $package->umrahPrices
    |
    */

    $prices = $package->umrahPrices ?? collect();

    /*
    |--------------------------------------------------------------------------
    | Helper
    |--------------------------------------------------------------------------
    */

    $formatPrice = function ($price) {
        return number_format((float) $price);
    };

    /*
    |--------------------------------------------------------------------------
    | Helper for JSON/list fields
    |--------------------------------------------------------------------------
    |
    | Your model is already casting these fields, but this also safely
    | handles a string in case one isn't cast.
    |
    */

    $normalizeList = function ($items) {

        if (is_null($items)) {
            return [];
        }

        if (is_string($items)) {
            $decoded = json_decode($items, true);

            return is_array($decoded) ? $decoded : [$items];
        }

        return is_array($items) ? $items : $items->toArray();
    };

    $programIncludes = $normalizeList($programIncludes);
    $generalNotes = $normalizeList($generalNotes);
    $requiredPapers = $normalizeList($requiredPapers);
    $cancelationPolicy = $normalizeList($cancelationPolicy);
    $externalVisas = $normalizeList($externalVisas);

@endphp


<!-- start page title -->
<section class="ipad-top-space-margin">

    <div class="container mt-4">

        <div class="row align-items-center justify-content-center">

            <div class="col-12 col-xl-6 col-lg-8 text-center position-relative page-title-double-large">

                <div class="d-flex flex-column justify-content-center extra-very-small-screen">

                    <h1 class="text-dark-gray alt-font ls-minus-1px fw-700 mb-20px">
                        {{ $pageData->title }}
                    </h1>

                    <p class="text-dark-gray fs-20">
                        {{ $pageData->quote }}
                    </p>

                </div>

                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-dark-gray">

                    <ul>

                        <li>
                            <a href="/" class="text-dark-gray text-dark-gray-hover">
                                الرئيسية
                            </a>
                        </li>

                        <li>
                            <a href="/umrah" class="text-dark-gray text-dark-gray-hover">
                                برامج العمرة
                            </a>
                        </li>

                        <li>
                            {{ $package->title }}
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end page title -->


<!-- start section -->
<section class="position-relative pb-4 pt-0">

    <div class="container">

        <div class="row list-style-02 d-flex flex-wrap border-bottom border-color-extra-medium-gray pt-20px">

            <div class="col-lg-12 md-mb-50px sm-mb-35px">

                <div class="row align-items-center mb-25px">

                    <div class="col-sm-9">

                        <h4 class="alt-font text-dark-gray fw-500 mb-10px ls-minus-1px">
                            {{ $package->title }}
                        </h4>


                        @if($package->category || $package->dates)

                            <p class="fs-14 text-medium-gray mb-0 mt-1">

                                @if($package->category)
                                    {{ $package->category }}
                                @endif

                                @if($package->category && $package->dates)
                                    —
                                @endif

                                @if($package->dates)

                                    @if(is_array($package->dates))

                                        <strong class="text-dark-gray">
                                            {{ implode(' , ', $package->dates) }}
                                        </strong>

                                    @else

                                        <strong class="text-dark-gray">
                                            {{ $package->dates }}
                                        </strong>

                                    @endif

                                @endif

                            </p>

                        @endif


                        <div class="d-flex align-items-center flex-wrap gap-2 mt-2">

                            <!-- Airline Badge -->

                            @if($package->{'flight-host'})

                                <div class="d-flex align-items-center gap-1 bg-white border-radius-30px px-3 py-2 border border-color-extra-medium-gray text-nowrap">

                                    <i class="fa fa-plane text-base-color ms-2 fs-15"></i>

                                    <span class="fw-700 text-dark-gray fs-13">

                                        {{ $package->{'flight-host'} }}

                                    </span>

                                </div>

                            @endif


                            <!-- Route -->

                            @if($package['flight-stops'])

                                <div class="d-flex align-items-center flex-wrap gap-2 fs-13 fw-600 text-dark-gray bg-very-light-gray border-radius-30px px-3 py-2">

                                    @foreach($package['flight-stops'] as $stop)


                                        <span>
                                            {{ $stop }}
                                        </span>

                                        @if(!$loop->last)

                                            <i class="bi bi-arrow-left text-medium-gray fs-12 mx-1"></i>

                                        @endif

                                    @endforeach

                                </div>

                            @endif

                        </div>

                    </div>


                    <div class="col-sm-3 text-sm-end xs-mt-10px">

                        @if($prices->count())

                            <h4 class="text-dark-gray fw-600 mb-0">

                                {{ $formatPrice($prices->min('price')) }}

                                <span class="fs-14 fw-600">
                                    جنية
                                </span>

                            </h4>

                            <span class="d-block lh-22">
                                تبدأ من
                            </span>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end section -->


<!-- ===== Hotel Details Section ===== -->

<section class="position-relative p-0" id="hotel-details">

    <div class="container">

        <div class="row">


            <!-- ===== HOTEL 1: MAKKAH ===== -->

            @if($package->makaHotel)

                @php
                    $makaHotel = $package->makaHotel;
                @endphp

                <div class="col-lg-6 mb-5">

                    <div class="row align-items-center mb-25px">

                        <div class="col-sm-12">

                            <span
                                class="badge fw-600 fs-13 px-3 py-2 border-radius-30px mb-2"
                                style="background-color:#55442b; color:#e4b869;"
                            >
                                مكة المكرمة
                            </span>

                            <h4 class="alt-font text-dark-gray fw-500 mb-10px ls-minus-1px">
                                {{ $makaHotel->name }}
                            </h4>


                            <ul class="p-0 m-0 list-style-02 d-block d-sm-flex">

                                <li class="text-dark-gray fw-500">

                                    <i class="bi bi-geo-alt icon-small me-5px"></i>

                                    {{ $makaHotel->address }}

                                </li>


                                <li class="ms-20px xs-ms-0">

                                    <div class="review-star-icon fs-18 me-5px">

                                        @for($i = 1; $i <= 5; $i++)

                                            <i class="bi bi-star-fill"></i>

                                        @endfor

                                    </div>

                                    <a
                                        href="#reviews"
                                        class="text-dark-gray text-dark-gray-hover fw-500 d-inline-block section-link"
                                    >
                                        {{ $makaHotel->rating_count }} تقييم
                                    </a>

                                </li>

                            </ul>

                        </div>


                        <div class="d-flex align-items-start gap-3 mt-3">

                            <i class="feather icon-feather-navigation fs-18"></i>

                            <div class="lh-sm">

                                <div class="text-dark-gray fw-500 fs-16 d-block">
                                    المسافة من المسجد الحرام
                                </div>

                                <div class="fs-14 opacity-8 mt-2">
                                    {{ $makaHotel->distance }}
                                </div>

                            </div>

                        </div>


                        <div class="d-flex align-items-start gap-3 mt-2 mb-2">

                            <i class="feather icon-feather-calendar fs-18"></i>

                            <div class="text-dark-gray fw-500 fs-16 d-block">

                                {{ $package['maka-duration'] }} ليالي

                            </div>


                            @if($makaHotel->{'iftar-included'})

                                <div class="fs-18 ms-2">
                                    شامل الافطار
                                </div>

                            @endif

                        </div>

                    </div>


                    <div
                        class="hotel-detail-card"
                        data-anime='{ "translateY": [40, 0], "opacity": [0,1], "duration": 900, "delay": 0, "easing": "easeOutQuad" }'
                    >

                        <div
                            class="bg-white border-radius-12px overflow-hidden"
                            style="box-shadow: 0 8px 40px rgba(85,68,43,0.10);"
                        >

                            <!-- Main Hotel Image Slider -->

                            <div
                                class="hotel-main-image position-relative overflow-hidden"
                                style="height: 360px;"
                            >

                                <div
                                    id="hotelCarousel1"
                                    class="carousel slide h-100"
                                    data-bs-ride="carousel"
                                >

                                    <div class="carousel-inner h-100">

                                        @php
                                            $makaImages = $normalizeList($makaHotel->images ?? []);
                                        @endphp

                                        @forelse($makaImages as $image)

                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} h-100">

                                                <img
                                                    src="{{ asset('storage/' . $image['image']) }}"
                                                    class="d-block w-100 h-100"
                                                    style="object-fit:cover;"
                                                    alt="{{ $makaHotel->name }}"
                                                >

                                            </div>

                                        @empty

                                            <div class="carousel-item active h-100">

                                                <div class="w-100 h-100 d-flex align-items-center justify-content-center bg-very-light-gray">

                                                    <span class="text-dark-gray">
                                                        لا توجد صور للفندق
                                                    </span>

                                                </div>

                                            </div>

                                        @endforelse

                                    </div>


                                    @if(count($makaImages) > 1)

                                        <button
                                            class="carousel-control-prev"
                                            type="button"
                                            data-bs-target="#hotelCarousel1"
                                            data-bs-slide="prev"
                                        >
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>


                                        <button
                                            class="carousel-control-next"
                                            type="button"
                                            data-bs-target="#hotelCarousel1"
                                            data-bs-slide="next"
                                        >
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>

                                    @endif

                                </div>

                            </div>


                            <!-- Hotel Info Body -->

                            <div class="p-4 pt-4">

                                <div class="row align-items-start">

                                    <div class="col-12">

                                        <a
                                            href="{{ $makaHotel->location }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-large w-100 fw-600 fs-16 border-radius-50px d-flex align-items-center justify-content-center gap-2"
                                            style="background: linear-gradient(135deg,#55442b,#7a6242); color:#e4b869; border:none; transition: all 0.3s ease; height:52px;"
                                            onmouseover="this.style.background='linear-gradient(135deg,#3d3020,#55442b)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(85,68,43,0.35)';"
                                            onmouseout="this.style.background='linear-gradient(135deg,#55442b,#7a6242)'; this.style.transform='translateY(0)'; this.style.boxShadow='none';"
                                        >

                                            <i class="feather icon-feather-map-pin"></i>

                                            عرض على خرائط جوجل

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @endif


            <!-- ===== HOTEL 2: MADINAH ===== -->

            @if($package->madinaHotel)

                @php
                    $madinaHotel = $package->madinaHotel;
                @endphp

                <div class="col-lg-6 mb-5">

                    <div class="row align-items-center mb-25px">

                        <div class="col-sm-12">

                            <span
                                class="badge fw-600 fs-13 px-3 py-2 border-radius-30px mb-2"
                                style="background-color:#55442b; color:#e4b869;"
                            >
                                المدينة المنورة
                            </span>

                            <h4 class="alt-font text-dark-gray fw-500 mb-10px ls-minus-1px">
                                {{ $madinaHotel->name }}
                            </h4>


                            <ul class="p-0 m-0 list-style-02 d-block d-sm-flex">

                                <li class="text-dark-gray fw-500">

                                    <i class="bi bi-geo-alt icon-small me-5px"></i>

                                    {{ $madinaHotel->address }}

                                </li>


                                <li class="ms-20px xs-ms-0">

                                    <div class="review-star-icon fs-18 me-5px">

                                        @for($i = 1; $i <= 5; $i++)

                                            <i class="bi bi-star-fill"></i>

                                        @endfor

                                    </div>

                                    <a
                                        href="#reviews"
                                        class="text-dark-gray text-dark-gray-hover fw-500 d-inline-block section-link"
                                    >
                                        {{ $madinaHotel->rating_count }} تقييم
                                    </a>

                                </li>

                            </ul>

                        </div>


                        <div class="d-flex align-items-start gap-3 mt-3">

                            <i class="feather icon-feather-navigation fs-18"></i>

                            <div class="lh-sm">

                                <div class="text-dark-gray fw-500 fs-16 d-block">
                                    المسافة من المسجد النبوي
                                </div>

                                <div class="fs-14 opacity-8 mt-2">
                                    {{ $madinaHotel->distance }}
                                </div>

                            </div>

                        </div>


                        <div class="d-flex align-items-start gap-3 mt-2 mb-2">

                            <i class="feather icon-feather-calendar fs-18"></i>

                            <div class="text-dark-gray fw-500 fs-16 d-block">

                                {{ $package['madina-duration'] }} ليالي

                            </div>


                            @if($madinaHotel->{'iftar-included'})

                                <div class="fs-18 ms-2">
                                    شامل الافطار
                                </div>

                            @endif

                        </div>

                    </div>


                    <div
                        class="hotel-detail-card"
                        data-anime='{ "translateY": [40, 0], "opacity": [0,1], "duration": 900, "delay": 0, "easing": "easeOutQuad" }'
                    >

                        <div
                            class="bg-white border-radius-12px overflow-hidden"
                            style="box-shadow: 0 8px 40px rgba(85,68,43,0.10);"
                        >

                            <!-- Main Hotel Image Slider -->

                            <div
                                class="hotel-main-image position-relative overflow-hidden"
                                style="height: 360px;"
                            >

                                <div
                                    id="hotelCarousel2"
                                    class="carousel slide h-100"
                                    data-bs-ride="carousel"
                                >

                                    <div class="carousel-inner h-100">

                                        @php
                                            $madinaImages = $normalizeList($madinaHotel->images ?? []);
                                        @endphp

                                        @forelse($madinaImages as $image)

                                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} h-100">

                                                <img
                                                    src="{{ asset('storage/' . $image['image']) }}"
                                                    class="d-block w-100 h-100"
                                                    style="object-fit:cover;"
                                                    alt="{{ $madinaHotel->name }}"
                                                >

                                            </div>

                                        @empty

                                            <div class="carousel-item active h-100">

                                                <div class="w-100 h-100 d-flex align-items-center justify-content-center bg-very-light-gray">

                                                    <span class="text-dark-gray">
                                                        لا توجد صور للفندق
                                                    </span>

                                                </div>

                                            </div>

                                        @endforelse

                                    </div>


                                    @if(count($madinaImages) > 1)

                                        <button
                                            class="carousel-control-prev"
                                            type="button"
                                            data-bs-target="#hotelCarousel2"
                                            data-bs-slide="prev"
                                        >
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>


                                        <button
                                            class="carousel-control-next"
                                            type="button"
                                            data-bs-target="#hotelCarousel2"
                                            data-bs-slide="next"
                                        >
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>

                                    @endif

                                </div>

                            </div>


                            <!-- Hotel Info Body -->

                            <div class="p-4 pt-4">

                                <div class="row align-items-start">

                                    <div class="col-12">

                                        <a
                                            href="{{ $madinaHotel->location }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="btn btn-large w-100 fw-600 fs-16 border-radius-50px d-flex align-items-center justify-content-center gap-2"
                                            style="background: linear-gradient(135deg,#55442b,#7a6242); color:#e4b869; border:none; transition: all 0.3s ease; height:52px;"
                                            onmouseover="this.style.background='linear-gradient(135deg,#3d3020,#55442b)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(85,68,43,0.35)';"
                                            onmouseout="this.style.background='linear-gradient(135deg,#55442b,#7a6242)'; this.style.transform='translateY(0)'; this.style.boxShadow='none';"
                                        >

                                            <i class="feather icon-feather-map-pin"></i>

                                            عرض على خرائط جوجل

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            @endif

        </div>

    </div>

</section>


<!-- Pricing -->

<section class="position-relative pt-0">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="table-responsive border-0 box-shadow-none">

                    <div class="text-dark-gray fw-600 fs-24 text-center mb-2">
                        سعر الفرد في الغرفة
                    </div>


                    @if($package['umrahPrices'])
                        <table class="custom-pricing-table mb-0 w-100">

                            <tbody>

                                <tr>

                                    @foreach($package['umrahPrices'] as $price)

                                        <td class="cpt-header fs-24
                                            {{ $loop->first ? 'cpt-rounded-tr' : '' }}
                                            {{ $loop->last ? 'cpt-rounded-tl' : '' }}
                                        ">

                                            {{ $price->type }}

                                        </td>

                                    @endforeach

                                </tr>


                                <tr>

                                    @foreach($package['umrahPrices'] as $price)

                                        <td class="cpt-price fs-24">

                                            {{ $formatPrice($price->price) }}

                                            جنية

                                        </td>

                                    @endforeach

                                </tr>

                            </tbody>

                        </table>

                    @endif

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end section -->


<!-- start section -->

<section class="position-relative p-0">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 md-mb-50px sm-mb-35px">

                <div class="row justify-content-center">

                    <div class="col-12">

                        <h5 class="alt-font text-dark-gray fw-600 sm-mb-15px">
                            مميزات وشروط الحجز
                        </h5>

                    </div>


                    <div class="col-12">

                        <div
                            class="accordion accordion-style-02"
                            id="accordion-style-02"
                            data-active-icon="icon-feather-chevron-down"
                            data-inactive-icon="icon-feather-chevron-right"
                        >


                            <!-- ================= PROGRAM INCLUDES ================= -->

                            <div class="accordion-item active-accordion">

                                <div class="accordion-header border-bottom border-color-extra-medium-gray">

                                    <a
                                        href=""
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-02-01"
                                        aria-expanded="true"
                                        data-bs-parent="#accordion-style-02"
                                    >

                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">

                                            <span class="fw-600 lh-normal">
                                                البرامج تشمل :
                                            </span>

                                            <i class="feather icon-feather-chevron-down"></i>

                                        </div>

                                    </a>

                                </div>


                                <div
                                    id="accordion-style-02-01"
                                    class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion-style-02"
                                >

                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                        <ul class="list-style-04 text-dark-gray fw-500">

                                            @foreach($programIncludes as $item)

                                                <li>
                                                    {{ is_array($item) ? ($item['text'] ?? $item['value'] ?? '') : $item }}
                                                </li>

                                            @endforeach

                                        </ul>

                                    </div>

                                </div>

                            </div>


                            <!-- ================= GENERAL NOTES ================= -->

                            <div class="accordion-item">

                                <div class="accordion-header border-bottom border-color-extra-medium-gray">

                                    <a
                                        href=""
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-02-02"
                                        aria-expanded="false"
                                        data-bs-parent="#accordion-style-02"
                                    >

                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">

                                            <span class="fw-600 lh-normal">
                                                ملاحظات عامه :
                                            </span>

                                            <i class="feather icon-feather-chevron-right"></i>

                                        </div>

                                    </a>

                                </div>


                                <div
                                    id="accordion-style-02-02"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02"
                                >

                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                        <ul class="list-style-04 text-dark-gray fw-500">

                                            @foreach($generalNotes as $item)

                                                <li>
                                                    {{ is_array($item) ? ($item['text'] ?? $item['note'] ?? $item['value'] ?? '') : $item }}
                                                </li>

                                            @endforeach

                                        </ul>

                                    </div>

                                </div>

                            </div>


                            <!-- ================= REQUIRED PAPERS ================= -->

                            <div class="accordion-item">

                                <div class="accordion-header border-bottom border-color-extra-medium-gray">

                                    <a
                                        href=""
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-02-03"
                                        aria-expanded="false"
                                        data-bs-parent="#accordion-style-02"
                                    >

                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">

                                            <span class="fw-600 lh-normal">
                                                المستندات المطلوبة :
                                            </span>

                                            <i class="feather icon-feather-chevron-right"></i>

                                        </div>

                                    </a>

                                </div>


                                <div
                                    id="accordion-style-02-03"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02"
                                >

                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                        <ul class="list-style-04 text-dark-gray fw-500">

                                            @foreach($requiredPapers as $item)

                                                <li>
                                                    {{ is_array($item) ? ($item['text'] ?? $item['value'] ?? '') : $item }}
                                                </li>

                                            @endforeach

                                        </ul>

                                    </div>

                                </div>

                            </div>


                            <!-- ================= CANCELLATION POLICY ================= -->

                            <div class="accordion-item">

                                <div class="accordion-header border-bottom border-color-extra-medium-gray">

                                    <a
                                        href=""
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-02-04"
                                        aria-expanded="false"
                                        data-bs-parent="#accordion-style-02"
                                    >

                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">

                                            <span class="fw-600 lh-normal">
                                                شروط وسياسة الإلغاء :
                                            </span>

                                            <i class="feather icon-feather-chevron-right"></i>

                                        </div>

                                    </a>

                                </div>


                                <div
                                    id="accordion-style-02-04"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02"
                                >

                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">

                                        <ul class="list-style-04 text-dark-gray fw-500">

                                            @foreach($cancelationPolicy as $item)

                                                <li>
                                                    {{ is_array($item) ? ($item['text'] ?? $item['value'] ?? '') : $item }}
                                                </li>

                                            @endforeach

                                        </ul>

                                    </div>

                                </div>

                            </div>


                            <!-- ================= EXTERNAL VISAS ================= -->

                            <div class="accordion-item">

                                <div class="accordion-header border-bottom border-color-transparent">

                                    <a
                                        href=""
                                        data-bs-toggle="collapse"
                                        data-bs-target="#accordion-style-02-05"
                                        aria-expanded="false"
                                        data-bs-parent="#accordion-style-02"
                                    >

                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">

                                            <span class="fw-600 lh-normal">
                                                التأشيرات الخارجية :
                                            </span>

                                            <i class="feather icon-feather-chevron-right"></i>

                                        </div>

                                    </a>

                                </div>


                                <div
                                    id="accordion-style-02-05"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-style-02"
                                >

                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">

                                        <ul class="list-style-04 text-dark-gray fw-500">

                                            @foreach($externalVisas as $item)

                                                <li>
                                                    {{ is_array($item) ? ($item['text'] ?? $item['value'] ?? '') : $item }}
                                                </li>

                                            @endforeach

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- end section -->


<!-- Additional package notes -->

@if($package->notes)

    <section class="pt-2 pb-0">

        <div class="container overlap-gap-section">

            <div class="row justify-content-center">

                <div
                    class="col-12"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'
                >

                    {!! $package->notes !!}

                </div>

            </div>

        </div>

    </section>

@endif


<!-- Floating Book Now Button -->

<a
    href="javascript:void(0);"
    class="floating-book-btn open-booking-modal"

    data-name="{{ $package->title }}"

    data-type="umrah"

    data-date="{{ is_array($package->dates) ? implode(' , ', $package->dates) : $package->dates }}"

    data-duration="{{ $package->duration }}"

    data-category="{{ $package->category }}"

    @foreach($prices as $price)

        @php
            $priceType = mb_strtolower(trim($price->type));
        @endphp

        @if($loop->first)
            data-price-single="{{ $price->price }}"
        @elseif($loop->iteration === 2)
            data-price-double="{{ $price->price }}"
        @elseif($loop->iteration === 3)
            data-price-triple="{{ $price->price }}"
        @elseif($loop->iteration === 4)
            data-price-quad="{{ $price->price }}"
        @endif

    @endforeach
>

    <i class="feather icon-feather-calendar"></i>

    <span>
        احجز الآن
    </span>

</a>


@include('footer')