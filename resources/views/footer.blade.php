<!-- start footer -->
@php
    $sites = $siteData['sites'] ?? [];
    $siteColumns = array_chunk($sites, (int) ceil(count($sites) / 2));

    $phones = $siteData['phones'] ?? [];
    $emails = $siteData['emails'] ?? [];
@endphp

<footer class="bg-base-color sm-pt-20px xs-pb-30px"
    style="background-image: url('{{ asset('imgs/footer.png') }}')"
>
    <div class="container">

        <div class="row">

            <!-- Logo + Social Media -->
            <div class="col-12 col-xl-3 col-lg-12 col-md-6 d-flex flex-column lg-mb-30px sm-mb-20px order-md-1">

                <a href="{{ route('home') }}" class="footer-logo d-inline-block lg-mb-30px">
                    <img
                        src="{{ asset('storage/' . $siteData['footer-logo']) }}"
                        data-at2x="{{ asset('storage/' . $siteData['footer-logo']) }}"
                        alt="Nile Misr"
                    >
                </a>

                <div  class="elements-social social-icon-style-04 mt-auto text-center text-md-start ps-lg-0" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <ul class="small-icon light">

                        @if(!empty($siteData['tiktok']))
                            <li class="m-0">
                                <a
                                    class="tiktok"
                                    href="{{ $siteData['tiktok'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <i class="fa-brands fa-tiktok"></i>
                                    <span></span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($siteData['twitter']))
                            <li class="m-0">
                                <a
                                    class="x-twitter"
                                    href="{{ $siteData['twitter'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <i class="fa-brands fa-x-twitter"></i>
                                    <span></span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($siteData['instgram']))
                            <li class="m-0">
                                <a
                                    class="instagram"
                                    href="{{ $siteData['instgram'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <i class="fa-brands fa-instagram"></i>
                                    <span></span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($siteData['facebook']))
                            <li class="m-0">
                                <a
                                    class="facebook"
                                    href="{{ $siteData['facebook'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <span></span>
                                </a>
                            </li>
                        @endif

                    </ul>
                </div>

            </div>


            <!-- Sites Column 1 -->
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin order-lg-2 order-md-3 sm-mb-20px">

                @foreach($siteColumns[0] ?? [] as $site)

                    <span class="fs-16 fw-600 d-block text-white text-uppercase">
                        {{ $site['name'] ?? '' }}
                    </span>

                    <p class="mb-1 text-white mb-7">
                        {{ $site['address'] ?? '' }}
                    </p>

                    <!-- @if(!empty($site['number']))
                        <p class="text-white">
                            ت:
                            <a href="tel:{{ $site['number'] }}">
                                {{ $site['number'] }}
                            </a>
                        </p>
                    @endif -->

                @endforeach

            </div>


            <!-- Sites Column 2 -->
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin order-md-4 sm-mb-30px">

                @foreach($siteColumns[1] ?? [] as $site)

                    <span class="fs-16 fw-600 d-block text-white text-uppercase">
                        {{ $site['name'] ?? '' }}
                    </span>

                    <p class="mb-1 text-white mb-7">
                        {{ $site['address'] ?? '' }}
                    </p>

                    <!-- @if(!empty($site['number']))
                        <p class="text-white">
                            ت:
                            <a href="tel:{{ $site['number'] }}">
                                {{ $site['number'] }}
                            </a>
                        </p>
                    @endif -->

                @endforeach

            </div>


            <!-- Contact Information -->
            <div class="col-12 col-xl-3 col-lg-4 col-md-6 order-lg-4 order-md-2 md-mb-30px sm-mb-0">

                <!-- <span class="fs-16 fw-600 d-block text-white text-uppercase">
                    تواصل معنا
                </span>

                <p class="mb-0 text-white">
                    للاستفسار والحجز:
                </p>

                @foreach($phones as $phone)

                    @php
                        $phoneNumber = is_array($phone)
                            ? ($phone['phone'] ?? '')
                            : $phone;
                    @endphp

                    @if($phoneNumber)
                        <a
                            href="tel:{{ $phoneNumber }}"
                            class="text-white text-decoration-line-bottom fw-500 fs-16 mb-15px d-inline-block"
                        >
                            {{ $phoneNumber }}
                        </a>
                        <br>
                    @endif

                @endforeach


                @if(!empty($siteData['hotline']))
                    <a
                        href="tel:{{ $siteData['hotline'] }}"
                        class="text-white text-decoration-line-bottom fw-500 fs-16 mb-15px d-inline-block"
                    >
                        Hotline : {{ $siteData['hotline'] }}
                    </a>
                    <br>
                @endif


                @foreach($emails as $email)

                    @php
                        $emailAddress = is_array($email)
                            ? ($email['email'] ?? '')
                            : $email;
                    @endphp

                    @if($emailAddress)
                        <a  href="mailto:{{ $emailAddress }}" class="text-white text-decoration-line-bottom fw-500 fs-16 d-inline-block" >
                            {{ $emailAddress }}
                        </a>
                        <br>
                    @endif

                @endforeach -->

                <ul class="">

                    <li>
                        <a href="{{ route('home') }}" class="text-white">
                            الرئيسية
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}" class="text-white">
                            من نحن؟
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}" class="text-white">
                            خدماتنا
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('hajj.index') }}" class="text-white">
                            برامج الحج
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('umrah.index') }}" class="text-white">
                            برامج العمرة
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('whyus') }}" class="text-white">
                            لماذا نيل مصر؟
                        </a>
                    </li>

                </ul>

            </div>

        </div>


        <!-- Bottom Footer -->

    </div>
</footer>
<section class="p-0 bg-dark-gray">
    <div class="container">
        <div class="row justify-content-center align-items-center sm-pt-35px bg-dark-gray">

            <!-- Copyright -->
            <div class="col-lg-5 pt-15px pb-15px md-pt-0 fs-15 order-2 order-lg-1 text-center text-lg-start last-paragraph-no-margin">

                <p class="text-white">
                    &copy; 2025 نيل مصر للسياحة -
                    <a
                        href="https://www.dawayerstudio.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-white fw-500"
                    >
                        Dawayer Studio
                    </a>
                </p>

            </div>

            <div class="col-lg-7 pt-15px pb-15px md-pb-5px fs-15 order-1 order-lg-2 text-center text-lg-end">

                <p class="text-white">
                    &copy; 2025 نيل مصر للسياحة -
                    <a
                        href="https://www.dawayerstudio.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-white fw-500"
                    >
                        Dawayer Studio
                    </a>
                </p>

            </div>


            <!-- Footer Menu -->
            <!-- <div class="col-lg-7 pt-15px pb-15px md-pb-5px fs-15 order-1 order-lg-2 text-center text-lg-end">

                <ul class="footer-navbar sm-lh-normal">

                    <li>
                        <a href="{{ route('home') }}" class="nav-link text-white">
                            الرئيسية
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}" class="nav-link text-white">
                            من نحن؟
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('services') }}" class="nav-link text-white">
                            خدماتنا
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('hajj.index') }}" class="nav-link text-white">
                            برامج الحج
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('umrah.index') }}" class="nav-link text-white">
                            برامج العمرة
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('whyus') }}" class="nav-link text-white">
                            لماذا نيل مصر؟
                        </a>
                    </li>

                </ul>

            </div> -->

        </div>
    </div>
</section>
<!-- end footer -->

        <!-- javascript libraries -->

        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

                <!-- end footer -->

        <!-- Quick Booking Modal -->
        @php
            $modalData = \App\Models\HomePage::first();
            $modalImage = !empty($modalData->contact_form_image) ? asset('storage/' . $modalData->contact_form_image) : asset('imgs/saa1.jpg');
            $modalNamePlaceholder = $modalData->contact_form_name_placeholder ?? 'الاسم بالكامل';
            $modalPhonePlaceholder = $modalData->contact_form_phone_placeholder ?? 'رقم التليفون الخاص بك';
            $modalEmailPlaceholder = $modalData->contact_form_email_placeholder ?? 'البريد الإلكتروني';
        @endphp
        <div class="modal fade" id="quickBookingModal" tabindex="-1"
             aria-labelledby="quickBookingModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 bg-transparent box-shadow-none">

                    <div class="position-relative w-100"
                         style="height: 220px; background-image: url('{{ $modalImage }}'); background-size: cover; background-position: center; border-radius: 30px;">

                        <div class="opacity-extra-medium bg-black overflow-hidden border-radius-30px"></div>

                        <h3 class="position-absolute fs-30 top-50 start-50 text-center flex justify-content-center align-items-center translate-middle text-white fw-500">
                            سجل بياناتك للتواصل
                        </h3>

                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-4 z-index-9" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                    <div class="bg-white position-relative"
                         style="margin-top: -50px; border-radius: 30px; padding: 40px 30px; box-shadow: 0 5px 30px rgba(0,0,0,0.1); z-index: 5;">

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf

                            <div class="mb-4 mt-3">
                                <div class="d-flex gap-3 booking-type-selector justify-content-center">

                                    <div class="w-50">
                                        <input type="radio"
                                               name="type"
                                               id="bookingTypeUmrah"
                                               value="عمرة"
                                               class="btn-check"
                                               autocomplete="off"
                                               checked>

                                        <label class="btn btn-outline-dark-gray border-radius-50px fw-700 px-5 py-3 fs-15 w-100 text-center"
                                               for="bookingTypeUmrah">
                                            عمرة
                                        </label>
                                    </div>

                                    <div class="w-50">
                                        <input type="radio"
                                               name="type"
                                               id="bookingTypeHajj"
                                               value="حج"
                                               class="btn-check"
                                               autocomplete="off">

                                        <label class="btn btn-outline-dark-gray border-radius-50px fw-700 px-5 py-3 fs-15 w-100 text-center"
                                               for="bookingTypeHajj">
                                            حج
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="position-relative mb-4 mt-4 custom-input-wrap">
                                <input type="text"
                                       class="form-control bg-very-light-gray text-dark-gray border-radius-50px"
                                       id="userName"
                                       name="name"
                                       required
                                       placeholder="{{ $modalNamePlaceholder }}">
                            </div>

                            <div class="position-relative mb-4 mt-4 custom-input-wrap">
                                <input type="tel"
                                       class="form-control bg-very-light-gray text-dark-gray border-radius-50px"
                                       id="userPhone"
                                       name="phone"
                                       required
                                       placeholder="{{ $modalPhonePlaceholder }}">
                            </div>

                            <div class="position-relative mb-5 mt-4 custom-input-wrap">
                                <input type="email"
                                       class="form-control bg-very-light-gray text-dark-gray border-radius-50px"
                                       id="userEmail"
                                       name="email"
                                       placeholder="{{ $modalEmailPlaceholder }}">
                            </div>

                            <button type="submit"
                                    class="btn btn-large btn-yellow border-radius-50px w-100 fw-700 fs-18">
                                احجز الأن
                            </button>

                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- Premium Booking Modal -->
        <div class="modal fade"
            id="bookingModal"
            tabindex="-1"
            aria-labelledby="bookingModalLabel"
            aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content border-0 border-radius-10px box-shadow-extra-large">

            <div class="modal-header bg-base-color border-0 border-radius-10px-top p-4">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-white fw-700 fs-22"
                    id="bookingModalLabel">

                    طلب حجز
                    <span id="bm-program-type"></span>

                </h5>


            </div>


            <div class="modal-body p-4 p-md-5">

                <div class="booking-summary-header mb-4 pb-4 border-bottom border-color-extra-medium-gray">

                    <h4 class="text-dark-gray fw-700 fs-20 mb-2"
                        id="bm-package-name">
                    </h4>

                    <div class="d-flex flex-wrap gap-3 fs-14 fw-500 text-medium-gray">

                        <div class="text-nowrap">
                            <i class="feather icon-feather-calendar text-tussock-yellow me-1"></i>
                            <span id="bm-date"></span>
                        </div>

                        <div class="text-nowrap">
                            <i class="feather icon-feather-clock text-tussock-yellow me-1"></i>
                            <span id="bm-duration"></span>
                        </div>

                        <div class="text-nowrap">
                            <i class="feather icon-feather-star text-tussock-yellow me-1"></i>
                            <span id="bm-category"></span>
                        </div>

                    </div>

                </div>

                <form id="premiumBookingForm"
                      action="{{ route('hajj.store') }}"
                      method="POST">

                    @csrf
                    <input type="hidden"
                           name="package_id"
                           id="bm-package-id">

                    <input type="hidden"
                           name="price_id"
                           id="bm-price-id">


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label fw-600 text-dark-gray fs-15">
                                الاسم بالكامل
                            </label>

                            <input type="text"
                                   name="name"
                                   id="bm-name"
                                   placeholder="أدخل اسمك بالكامل"
                                   class="form-control border-radius-50px bg-very-light-gray border-1 border-color-extra-medium-gray px-4"
                                   required>

                        </div>


                        <div class="col-md-6 mb-4">

                            <label class="form-label fw-600 text-dark-gray fs-15">
                                رقم الهاتف (واتساب)
                            </label>

                            <input type="tel"
                                   name="phone"
                                   id="bm-phone"
                                   placeholder="أدخل رقم هاتفك"
                                   class="form-control border-radius-50px bg-very-light-gray border-1 border-color-extra-medium-gray px-4"
                                   required>

                        </div>

                    </div>


                    <div class="mb-4">

                        <label class="form-label fw-600 text-dark-gray fs-16 mb-3 d-block">
                            سعر الفرد في الغرفة
                        </label>

                        <div class="row room-type-selector gap-3 gap-md-0">

                            <div class="col-md-3 mb-2"
                                 id="bm-room-single-wrapper">

                                <input type="radio"
                                       name="room-type"
                                       id="bm-room-single"
                                       value="single"
                                       class="btn-check"
                                       autocomplete="off">

                                <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                       for="bm-room-single">

                                    <span class="fs-15">فردي</span>

                                    <span class="fs-12 opacity-7 bm-room-price"
                                          id="bm-price-single"></span>

                                </label>

                            </div>


                            <div class="col-md-3 mb-2"
                                 id="bm-room-double-wrapper">

                                <input type="radio"
                                       name="room-type"
                                       id="bm-room-double"
                                       value="double"
                                       class="btn-check"
                                       autocomplete="off"
                                       checked>

                                <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                       for="bm-room-double">

                                    <span class="fs-15">ثنائـــــــــي</span>

                                    <span class="fs-12 opacity-7 bm-room-price"
                                          id="bm-price-double"></span>

                                </label>

                            </div>


                            <div class="col-md-3 mb-2"
                                 id="bm-room-triple-wrapper">

                                <input type="radio"
                                       name="room-type"
                                       id="bm-room-triple"
                                       value="triple"
                                       class="btn-check"
                                       autocomplete="off">

                                <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                       for="bm-room-triple">

                                    <span class="fs-15">ثلاثــــــــي</span>

                                    <span class="fs-12 opacity-7 bm-room-price"
                                          id="bm-price-triple"></span>

                                </label>

                            </div>


                            <div class="col-md-3 mb-2"
                                 id="bm-room-quad-wrapper">

                                <input type="radio"
                                       name="room-type"
                                       id="bm-room-quad"
                                       value="quad"
                                       class="btn-check"
                                       autocomplete="off">

                                <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                       for="bm-room-quad">

                                    <span class="fs-15">رباعي/خماسي</span>

                                    <span class="fs-12 opacity-7 bm-room-price"
                                          id="bm-price-quad"></span>

                                </label>

                            </div>

                        </div>

                    </div>


                    <div class="col-12 d-flex align-items-center justify-content-between">

                        <div class="mb-4 col-3">

                            <label class="form-label fw-600 text-dark-gray fs-16 mb-2">
                                عدد الأفراد (المسافرين)
                            </label>

                            <div class="d-flex align-items-center">

                                <button type="button"
                                        class="btn btn-light border border-color-extra-medium-gray fs-20 w-40px h-40px p-0 d-flex align-items-center justify-content-center border-radius-5px"
                                        id="bm-qty-minus">
                                    -
                                </button>

                                <input type="number"
                                       name="count"
                                       id="bm-travelers-qty"
                                       class="form-control text-center fw-700 fs-18 mx-2 border-0 bg-transparent w-100px"
                                       value="1"
                                       min="1"
                                       readonly>

                                <button type="button"
                                        class="btn btn-light border border-color-extra-medium-gray fs-20 w-40px h-40px p-0 d-flex align-items-center justify-content-center border-radius-5px"
                                        id="bm-qty-plus">
                                    +
                                </button>

                            </div>

                        </div>


                        <div class="col-8 p-4 border-radius-5px">

                            <div class="d-flex justify-content-between align-items-center mb-2">

                                <span class="fs-15 text-dark-gray fw-600">
                                    سعر الفرد
                                </span>

                                <span class="fs-16 fw-700 text-base-color"
                                      id="bm-summary-pp">
                                    0 جنية
                                </span>

                            </div>


                            <div class="d-flex justify-content-between align-items-center pt-2 border-top border-color-extra-medium-gray">

                                <span class="fs-18 text-dark-gray fw-700">
                                    الإجمالي التقديري
                                </span>

                                <span class="fs-24 fw-800 text-dark-gray">

                                    <span id="bm-summary-total">
                                        0
                                    </span>

                                    <span class="fs-14 fw-600">
                                        جنية
                                    </span>

                                </span>

                            </div>

                        </div>

                    </div>

                </form>

            </div>


            <div class="modal-footer border-0 pt-0 px-4 pb-4">

                <button type="button"
                        class="btn btn-transparent-dark-gray btn-rounded border-1 flex-grow-1 mx-1 py-3"
                        data-bs-dismiss="modal">
                    إلغاء
                </button>

                <button type="submit"
                        form="premiumBookingForm"
                        class="btn btn-yellow btn-rounded flex-grow-1 mx-1 fw-700 py-3"
                        id="bm-confirm-btn">
                    تأكيد الحجز
                </button>

            </div>


        <!-- Premium Booking Modal -->
        <div class="modal fade"
             id="bookingModal"
             tabindex="-1"
             aria-labelledby="bookingModalLabel"
             aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content border-0 border-radius-10px box-shadow-extra-large">

                    <div class="modal-header bg-base-color border-0 border-radius-10px-top p-4">

                        <h5 class="modal-title text-white fw-700 fs-22"
                            id="bookingModalLabel">

                            طلب حجز
                            <span id="bm-program-type"></span>

                        </h5>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>


                    <div class="modal-body p-4 p-md-5">

                        <div class="booking-summary-header mb-4 pb-4 border-bottom border-color-extra-medium-gray">

                            <h4 class="text-dark-gray fw-700 fs-20 mb-2"
                                id="bm-package-name">
                            </h4>

                            <div class="d-flex flex-wrap gap-3 fs-14 fw-500 text-medium-gray">

                                <div class="text-nowrap">
                                    <i class="feather icon-feather-calendar text-tussock-yellow me-1"></i>
                                    <span id="bm-date"></span>
                                </div>

                                <div class="text-nowrap">
                                    <i class="feather icon-feather-clock text-tussock-yellow me-1"></i>
                                    <span id="bm-duration"></span>
                                </div>

                                <div class="text-nowrap">
                                    <i class="feather icon-feather-star text-tussock-yellow me-1"></i>
                                    <span id="bm-category"></span>
                                </div>

                            </div>

                        </div>


                        <form id="premiumBookingForm">

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label class="form-label fw-600 text-dark-gray fs-15">
                                        الاسم بالكامل
                                    </label>

                                    <input type="text"
                                           placeholder="أدخل اسمك بالكامل"
                                           class="form-control border-radius-50px bg-very-light-gray border-1 border-color-extra-medium-gray px-4"
                                           required>

                                </div>


                                <div class="col-md-6 mb-4">

                                    <label class="form-label fw-600 text-dark-gray fs-15">
                                        رقم الهاتف (واتساب)
                                    </label>

                                    <input type="tel"
                                           placeholder="أدخل رقم هاتفك"
                                           class="form-control border-radius-50px bg-very-light-gray border-1 border-color-extra-medium-gray px-4"
                                           required>

                                </div>

                            </div>


                            <div class="mb-4">

                                <label class="form-label fw-600 text-dark-gray fs-16 mb-3 d-block">
                                    سعر الفرد في الغرفة
                                </label>

                                <div class="row room-type-selector gap-3 gap-md-0">

                                    <div class="col-md-3 mb-2"
                                         id="bm-room-single-wrapper">

                                        <input type="radio"
                                               name="room-type"
                                               id="bm-room-single"
                                               value="single"
                                               class="btn-check"
                                               autocomplete="off">

                                        <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                               for="bm-room-single">

                                            <span class="fs-15">فردي</span>
                                            <span class="fs-12 opacity-7 bm-room-price"
                                                  id="bm-price-single"></span>

                                        </label>

                                    </div>


                                    <div class="col-md-3 mb-2"
                                         id="bm-room-double-wrapper">

                                        <input type="radio"
                                               name="room-type"
                                               id="bm-room-double"
                                               value="double"
                                               class="btn-check"
                                               autocomplete="off"
                                               checked>

                                        <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                               for="bm-room-double">

                                            <span class="fs-15">ثنائـــــــــي</span>
                                            <span class="fs-12 opacity-7 bm-room-price"
                                                  id="bm-price-double"></span>

                                        </label>

                                    </div>


                                    <div class="col-md-3 mb-2"
                                         id="bm-room-triple-wrapper">

                                        <input type="radio"
                                               name="room-type"
                                               id="bm-room-triple"
                                               value="triple"
                                               class="btn-check"
                                               autocomplete="off">

                                        <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                               for="bm-room-triple">

                                            <span class="fs-15">ثلاثــــــــي</span>
                                            <span class="fs-12 opacity-7 bm-room-price"
                                                  id="bm-price-triple"></span>

                                        </label>

                                    </div>


                                    <div class="col-md-3 mb-2"
                                         id="bm-room-quad-wrapper">

                                        <input type="radio"
                                               name="room-type"
                                               id="bm-room-quad"
                                               value="quad"
                                               class="btn-check"
                                               autocomplete="off">

                                        <label class="btn btn-outline-dark-gray w-100 border-radius-5px fw-600 py-2 d-flex flex-column align-items-center"
                                               for="bm-room-quad">

                                            <span class="fs-15">رباعي/خماسي</span>
                                            <span class="fs-12 opacity-7 bm-room-price"
                                                  id="bm-price-quad"></span>

                                        </label>

                                    </div>

                                </div>

                            </div>


                            <div class="col-12 d-flex align-items-center justify-content-between">

                                <div class="mb-4 col-3">

                                    <label class="form-label fw-600 text-dark-gray fs-16 mb-2">
                                        عدد الأفراد (المسافرين)
                                    </label>

                                    <div class="d-flex align-items-center">

                                        <button type="button"
                                                class="btn btn-light border border-color-extra-medium-gray fs-20 w-40px h-40px p-0 d-flex align-items-center justify-content-center border-radius-5px"
                                                id="bm-qty-minus">
                                            -
                                        </button>

                                        <input type="number"
                                               id="bm-travelers-qty"
                                               class="form-control text-center fw-700 fs-18 mx-2 border-0 bg-transparent w-100px"
                                               value="1"
                                               min="1"
                                               max="2"
                                               readonly>

                                        <button type="button"
                                                class="btn btn-light border border-color-extra-medium-gray fs-20 w-40px h-40px p-0 d-flex align-items-center justify-content-center border-radius-5px"
                                                id="bm-qty-plus">
                                            +
                                        </button>

                                    </div>

                                </div>


                                <div class="col-8 p-4 border-radius-5px">

                                    <div class="d-flex justify-content-between align-items-center mb-2">

                                        <span class="fs-15 text-dark-gray fw-600">
                                            سعر الفرد
                                        </span>

                                        <span class="fs-16 fw-700 text-base-color"
                                              id="bm-summary-pp">
                                            0 جنية
                                        </span>

                                    </div>


                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top border-color-extra-medium-gray">

                                        <span class="fs-18 text-dark-gray fw-700">
                                            الإجمالي التقديري
                                        </span>

                                        <span class="fs-24 fw-800 text-dark-gray">

                                            <span id="bm-summary-total">
                                                0
                                            </span>

                                            <span class="fs-14 fw-600">
                                                جنية
                                            </span>

                                        </span>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>


                    <div class="modal-footer border-0 pt-0 px-4 pb-4">

                        <button type="button"
                                class="btn btn-transparent-dark-gray btn-rounded border-1 flex-grow-1 mx-1 py-3"
                                data-bs-dismiss="modal">
                            إلغاء
                        </button>

                        <button type="button"
                                class="btn btn-yellow btn-rounded flex-grow-1 mx-1 fw-700 py-3"
                                id="bm-confirm-btn">
                            تأكيد الحجز
                        </button>

                    </div>

                </div>

            </div>

        </div>


        <!-- Booking Modal Script -->
        <script>
        $(document).ready(function() {

            let currentPrices = {
                single: 0,
                double: 0,
                triple: 0,
                quad: 0
            };

            let currentMax = 2;

            function formatCurrency(num) {
                if (!num) return '0';

                return num
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            function parsePrice(str) {
                if (!str) return 0;

                return parseInt(
                    str.toString().replace(/,/g, '')
                );
            }

            function calculateTotal() {

                let selectedRoom =
                    $('input[name="room-type"]:checked').val();

                let pp = currentPrices[selectedRoom] || 0;

                let qty =
                    parseInt($('#bm-travelers-qty').val()) || 1;

                let total = pp * qty;

                $('#bm-summary-pp')
                    .text(formatCurrency(pp) + ' جنية');

                $('#bm-summary-total')
                    .text(formatCurrency(total));
            }


            $(document).on('click', '.open-booking-modal', function(e) {

                e.preventDefault();

                let btn = $(this);

                $('#bm-package-id').val(btn.data('package-id'));

                $('#bm-package-name')
                    .text(btn.data('name'));

                $('#bm-program-type')
                    .text(
                        btn.data('type') === 'hajj'
                            ? 'الحج'
                            : 'العمرة'
                    );


                $('#premiumBookingForm').attr(
                    'action',
                    btn.data('type') === 'hajj'
                        ? "{{ route('hajj.store') }}"
                        : "{{ route('umrah.store') }}"
                );

                $('#bm-date')
                    .text(btn.data('date'));

                $('#bm-duration')
                    .text(btn.data('duration'));

                $('#bm-category')
                    .text(btn.data('category'));


                currentPrices = {

                    single: parsePrice(
                        btn.data('price-single')
                    ),

                    double: parsePrice(
                        btn.data('price-double')
                    ),

                    triple: parsePrice(
                        btn.data('price-triple')
                    ),

                    quad: parsePrice(
                        btn.data('price-quad')
                    )

                };


                $('#bm-price-single')
                    .text(formatCurrency(currentPrices.single));

                $('#bm-price-double')
                    .text(formatCurrency(currentPrices.double));

                $('#bm-price-triple')
                    .text(formatCurrency(currentPrices.triple));

                $('#bm-price-quad')
                    .text(formatCurrency(currentPrices.quad));


                if (
                    currentPrices.single === 0 ||
                    isNaN(currentPrices.single)
                ) {

                    $('#bm-room-single-wrapper').hide();

                    if (
                        $('#bm-room-single').is(':checked')
                    ) {
                        $('#bm-room-double')
                            .prop('checked', true);
                    }

                } else {

                    $('#bm-room-single-wrapper').show();

                }


                if (
                    currentPrices.double === 0 ||
                    isNaN(currentPrices.double)
                ) {
                    $('#bm-room-double-wrapper').hide();
                } else {
                    $('#bm-room-double-wrapper').show();
                }


                if (
                    currentPrices.triple === 0 ||
                    isNaN(currentPrices.triple)
                ) {
                    $('#bm-room-triple-wrapper').hide();
                } else {
                    $('#bm-room-triple-wrapper').show();
                }


                if (
                    currentPrices.quad === 0 ||
                    isNaN(currentPrices.quad)
                ) {
                    $('#bm-room-quad-wrapper').hide();
                } else {
                    $('#bm-room-quad-wrapper').show();
                }


                $('input[name="room-type"]:checked')
                    .trigger('change');

                $('#bm-travelers-qty')
                    .val(1);

                calculateTotal();


                const modalElement =
                    document.getElementById('bookingModal');

                if (!modalElement) {
                    console.error('bookingModal not found');
                    return;
                }

                const modal =
                    bootstrap.Modal.getOrCreateInstance(modalElement);

                modal.show();

            });


            $('input[name="room-type"]').on(
                'change',
                function() {

                    let type = $(this).val();

                    if (type === 'single')
                        currentMax = 1;
                    else if (type === 'double')
                        currentMax = 2;
                    else if (type === 'triple')
                        currentMax = 3;
                    else if (type === 'quad')
                        currentMax = 5;


                    let qtyEl =
                        $('#bm-travelers-qty');

                    let currentQty =
                        parseInt(qtyEl.val());

                    if (currentQty > currentMax) {
                        qtyEl.val(currentMax);
                    }

                    calculateTotal();

                }
            );


            $('#bm-qty-plus').on('click', function() {

                let qtyEl =
                    $('#bm-travelers-qty');

                let currentQty =
                    parseInt(qtyEl.val());

                if (currentQty < currentMax) {

                    qtyEl.val(currentQty + 1);

                }

                calculateTotal();

            });


            $('#bm-qty-minus').on('click', function() {

                let qtyEl =
                    $('#bm-travelers-qty');

                let currentQty =
                    parseInt(qtyEl.val());

                if (currentQty > 1) {

                    qtyEl.val(currentQty - 1);

                }

                calculateTotal();

            });




        });
        @if(session()->has('success'))
            alert("تم إرسال طلب الحجز بنجاح");
        @endif
        @if($errors->any())
            alert(@json($errors->first()));
        @endif
        </script>

    </body>
</html>
