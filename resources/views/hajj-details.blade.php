@include('header')

@php
/*
|--------------------------------------------------------------------------
| Package data
|--------------------------------------------------------------------------
*/


$events = $package->events ?? [];
$flightStops = $package->{'flight-stops'} ?? [];
$notes = $package->notes ?? [];
$prices = $package->hajjPrices ?? [];

/*
|--------------------------------------------------------------------------
| Helpers
|--------------------------------------------------------------------------
*/

$formatPrice = function ($price) {
    return number_format((float) $price);
};

$getPrice = function ($type) use ($prices) {
    $price = collect($prices)->firstWhere('type', $type);

    return $price?->price;
};


@endphp
<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background  top-space-margin position-relative" top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{  $pageData['image']?asset("storage/" . $pageData['image']):asset("imgs/service-banner-2.jpg")   }})">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column">
                    <div class="" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">{{ $pageData->title }}</h1>
                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">{{ $pageData->quote }}</p>
                    </div>
                    <!-- start breadcrumb -->
                    <div class=" justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li><a href="/" class="text-white">الرئيسية</a></li>
                            <li>{{ $pageData->title }}</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start page title -->

<!-- <section class="ipad-top-space-margin">

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
                        <a href="/hajj" class="text-dark-gray text-dark-gray-hover">
                            برامج الحج
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


</section> -->
<!-- end page title -->

<!-- start section -->

<section class="pb-0">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-12 text-center"
                 data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>


            <h5 class="alt-font text-base-color ls-minus-1px mb-0 fs-30">

                {{ $package['description'] }}

            </h5>

        </div>
    </div>
</div>


</section>
<!-- end section -->

<!-- start section -->

<section class="position-relative pb-4">
    <div class="container">


    <div class="row list-style-02 d-flex flex-wrap border-bottom border-color-extra-medium-gray pt-20px">

        <div class="col-lg-12 md-mb-50px sm-mb-35px">

            <div class="row align-items-center mb-25px">

                <div class="col-sm-9">

                    <h4 class="alt-font text-dark-gray fw-500 mb-10px ls-minus-1px">
                        {{ $package->title }}
                    </h4>

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
                                            {{ $stop['stop'] }}
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

                    @if($prices->isNotEmpty())

                        @php
                            $minimumPrice = $prices->min('price');
                        @endphp

                        <h4 class="text-dark-gray fw-600 mb-0">
                            {{ $formatPrice($minimumPrice) }}

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

<!-- start section -->

<style>
    .custom-scrollbar::-webkit-scrollbar {
        height: 8px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #c59b46;
        border-radius: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #a07830;
    }
    /* For Firefox */
    .custom-scrollbar {
        scrollbar-width: thin;
        scrollbar-color: #c59b46 #f1f1f1;
    }
</style>

<section class="position-relative pt-0">
    <div class="container">


    <!-- Itinerary -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="table-responsive box-shadow-quadruple-large border-radius-8px custom-scrollbar">

                    <table class="table table-bordered text-center align-middle mb-0 umrah-table" style="min-width: 700px;">

                        <thead>
                            <tr>
                                <th class="py-3 fs-22">التاريخ</th>
                                <th class="py-3 fs-22">المكان</th>
                                <th class="py-3 fs-22">الفندق</th>
                                <th class="py-3 fs-22">الفترة</th>
                                <th class="py-3 fs-22">الوجبات</th>
                            </tr>
                        </thead>

                        <tbody class="fw-500 text-dark-gray fs-20">

    @foreach($events as $event)

        @php
            $type = $event['type'] ?? null;
            $eventData = $event['data'] ?? [];

            /*
             * Keep the original alternating table colors.
             * Even event index  -> very light gray
             * Odd event index   -> tussock light
             */
            $isTussock = $loop->index % 2 !== 0;

            $rowClass = $isTussock
                ? 'bg-tussock-light text-dark-gray'
                : 'bg-very-light-gray';

            $cellClass = $isTussock
                ? 'bg-tussock-light text-dark-gray'
                : '';
        @endphp


        {{-- Flight --}}
        @if($type === 'flight')

            <tr class="{{ $rowClass }}">

                <td class="py-3 text-center fw-600 {{ $cellClass }}">

                    {{ $eventData['date'] ?? '' }}

                </td>

                <td colspan="4"
                    class="py-3 text-center fw-600 {{ $cellClass }}">

                    {{ $eventData['text'] ?? '' }}

                </td>

            </tr>


        {{-- Stay --}}
        @elseif($type === 'stay')

            <tr class="{{ $rowClass }}">

                <td class="py-3 {{ $cellClass }}">
                    {{ $eventData['date'] ?? '' }}
                </td>

                <td class="py-3 {{ $cellClass }}">
                    {{ $eventData['area'] ?? '' }}
                </td>

                <td class="py-3 {{ $cellClass }}">
                    {{ $eventData['hotel'] ?? '' }}
                </td>

                <td class="py-3 {{ $cellClass }}">
                    {{ $eventData['duration'] ?? '' }}
                </td>

                <td class="py-3 {{ $cellClass }}">
                    {{ $eventData['meals'] ?? '' }}
                </td>

            </tr>

        @endif

    @endforeach

</tbody>
                    </table>

                </div>
            </div>
        </div>


    <!-- Pricing -->
    <div class="row mb-5">
        <div class="col-12">

            <div class="table-responsive border-0 box-shadow-none custom-scrollbar pb-3">

                <table class="custom-pricing-table mb-0 w-100" style="min-width: 800px;">

                    <tbody>

                        <tr>

                            <td rowspan="2"
                                class="cpt-info cpt-rounded-tr">

                                <span class="fs-24 d-block mb-1 fw-700">
                                    سعر الفرد في الغرفة
                                </span>

                                <span class="fs-24 fw-normal text-white opacity-8">
                                    السعر غير شامل تذكرة الطيران
                                </span>

                            </td>


                            @foreach($prices as $index => $price)

                                <td class="cpt-header fs-24 {{ $loop->last ? 'cpt-rounded-tl' : '' }}">

                                    {{ $price->type }}

                                </td>

                            @endforeach

                        </tr>


                        <tr>

                            @foreach($prices as $price)

                                <td class="cpt-price fs-24">

                                    {{ $formatPrice($price->price) }}
                                    جنية

                                </td>

                            @endforeach

                        </tr>


                        <tr>

                            <td class="cpt-info cpt-rounded-br fw-700 fs-24">

                                مقدم الحجز :

                                {{ $formatPrice($package->Deposit) }}

                                جنية

                            </td>


                            <td colspan="{{ max($prices->count(), 1) }}"
                                class="cpt-price cpt-rounded-bl fw-700 fs-24 text-center">

                                {{ $formatPrice($package->{'entrey-fee'}) }}

                                جنية رسوم إلكترونية لدخول القرعة وغير مستردة

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </div>


    <!-- Notes -->
    <div class="row">
        <div class="col-12">

            <div>

                <h4 class="text-dark-gray fw-700 mb-3 fs-22 border-bottom border-color-extra-medium-gray pb-3">

                    <i class="feather icon-feather-info text-tussock-yellow me-2"></i>

                    ملاحظات هامة

                </h4>


                <ul class="row list-unstyled notes-list mb-0">

                    @foreach($notes as $note)

                        @php
                            $noteText = is_array($note)
                                ? ($note['note'] ?? '')
                                : $note;
                        @endphp

                        <li class="col-md-6 mb-1 d-flex align-items-start">

                            <i class="feather icon-feather-check-circle text-tussock-yellow me-2 mt-1 fs-18"></i>

                            <span class="fs-15 text-dark-gray fw-500">

                                {{ $noteText }}

                            </span>

                        </li>

                    @endforeach

                </ul>

            </div>

        </div>
    </div>

</div>


</section>
<!-- end section -->

<!-- Floating Book Now Button -->

<a href="javascript:void(0);"
class="floating-book-btn open-booking-modal"

data-package-id="{{ $package->id }}"

data-name="{{ $package->title }}"

data-type="hajj"

data-date="{{ $package->date }}"

data-duration="{{ $package->duration }} يوم"

data-category="{{ $package->level }}"

@foreach($prices as $price)


   @if($loop->first)
       data-price-double="{{ $price->price }}"
   @elseif($loop->iteration === 2)
       data-price-triple="{{ $price->price }}"
   @elseif($loop->iteration === 3)
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
