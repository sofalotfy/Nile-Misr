@include('header'); ?>

@php

    $data = [
            "pageData"  => $pageData,
            "package"   => $package,
        ];
    dd($data);

@endphp
<!-- start page title -->
<section class="ipad-top-space-margin md-pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-8 text-center position-relative page-title-double-large">
                <div class="d-flex flex-column justify-content-center extra-very-small-screen">
                    <h1 class="text-dark-gray alt-font ls-minus-1px fw-700 mb-20px">برامج العمرة 1447 هـ</h1>
                    <p class="text-dark-gray fs-20">رحلة روحانية تبدأ بالنية... وتكتمل بخدمة تليق بضيوف الرحمن.</p>
                </div>
                <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 fs-14 text-dark-gray">
                    <ul>
                        <li><a href="/" class="text-dark-gray text-dark-gray-hover">الرئيسية</a></li>
                        <li><a href="/umrah" class="text-dark-gray text-dark-gray-hover">برامج العمرة</a></li>
                        <li>برامج العمرة 1447 هـ</li>
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
                        <h4 class="alt-font text-dark-gray fw-500 mb-10px ls-minus-1px">عمرة المولد النبوي 1447 هـ </h4>
                        <p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>

                        <div class="d-flex align-items-center flex-wrap gap-2 mt-2">
                            <!-- Airline Badge -->
                            <div class="d-flex align-items-center gap-1 bg-white border-radius-30px px-3 py-2 border border-color-extra-medium-gray text-nowrap">
                                <i class="fa fa-plane text-base-color ms-2 fs-15"></i>
                                <span class="fw-700 text-dark-gray fs-13">طيران القاهرة</span>
                            </div>

                            <!-- Route -->
                            <div class="d-flex align-items-center flex-wrap gap-2 fs-13 fw-600 text-dark-gray bg-very-light-gray border-radius-30px px-3 py-2">
                                <span>القاهرة</span>
                                <i class="bi bi-arrow-left text-medium-gray fs-12 mx-1"></i>
                                <span>جدة</span>
                                <i class="bi bi-arrow-left text-medium-gray fs-12 mx-1"></i>
                                <span>المدينة</span>
                                <i class="bi bi-arrow-left text-medium-gray fs-12 mx-1"></i>
                                <span>القاهرة</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 text-sm-end xs-mt-10px">
                        <h4 class="text-dark-gray fw-600 mb-0">57,100 <span class="fs-14 fw-600">جنية</span></h4>
                        <span class="d-block lh-22">تبدأ من</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- <img src="imgs/bann.jpg" alt="" /> -->
    </div>
</section>
<!-- end section -->
<!-- ===== Hotel Details Section ===== -->
<section class="position-relative p-0" id="hotel-details">
    <div class="container">
        <div class="row">

            <!-- ===== HOTEL 1: MAKKAH ===== -->
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center mb-25px">
                    <div class="col-sm-12">
                        <span class="badge fw-600 fs-13 px-3 py-2 border-radius-30px mb-2" style="background-color:#55442b; color:#e4b869;">مكة المكرمة</span>
                        <h4 class="alt-font text-dark-gray fw-500 mb-10px ls-minus-1px">موفنبيك هاجر</h4>
                        <ul class="p-0 m-0 list-style-02 d-block d-sm-flex">
                            <li class="text-dark-gray fw-500"><i class="bi bi-geo-alt icon-small me-5px"></i>مكة , السعودية</li>
                            <li class="ms-20px xs-ms-0">
                                <div class="review-star-icon fs-18 me-5px">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <a href="#reviews" class="text-dark-gray text-dark-gray-hover fw-500 d-inline-block section-link">16 تقيم</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-start gap-3 mt-3">
                        <i class="feather icon-feather-navigation fs-18"></i>
                        <div class="lh-sm">
                            <div class="text-dark-gray fw-500 fs-16 d-block">المسافة من المسجد الحرام</div>
                            <div class="fs-14 opacity-8 mt-2">يسير على الأقدام حوالي 300 متر</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mt-2 mb-2">
                        <i class="feather icon-feather-calendar fs-18"></i>
                        <div class="text-dark-gray fw-500 fs-16 d-block">3 ليالي</div>
                        <div class="fs-18 ms-2">شامل الافطار</div>
                    </div>
                </div>

                <div class="hotel-detail-card" data-anime='{ "translateY": [40, 0], "opacity": [0,1], "duration": 900, "delay": 0, "easing": "easeOutQuad" }'>
                    <div class="bg-white border-radius-12px overflow-hidden" style="box-shadow: 0 8px 40px rgba(85,68,43,0.10);">
                        <!-- Main Hotel Image Slider -->
                        <div class="hotel-main-image position-relative overflow-hidden" style="height: 360px;">
                            <div id="hotelCarousel1" class="carousel slide h-100" data-bs-ride="carousel">
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active h-100">
                                        <img src="imgs/maka-bann.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="فندق مكة المكرمة">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 1">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 2">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 3">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 4">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 5">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <!-- Hotel Info Body -->
                        <div class="p-4 pt-4">
                            <div class="row align-items-start">
                                <!-- CTA Button -->
                                <div class="col-12">
                                    <a href="https://maps.google.com/?q=Movenpick+Hotel+Hajar+Makkah" target="_blank" rel="noopener noreferrer" class="btn btn-large w-100 fw-600 fs-16 border-radius-50px d-flex align-items-center justify-content-center gap-2" style="background: linear-gradient(135deg,#55442b,#7a6242); color:#e4b869; border:none; transition: all 0.3s ease; height:52px;" onmouseover="this.style.background='linear-gradient(135deg,#3d3020,#55442b)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(85,68,43,0.35)';" onmouseout="this.style.background='linear-gradient(135deg,#55442b,#7a6242)'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                        <i class="feather icon-feather-map-pin"></i>
                                        عرض على خرائط جوجل
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ===== HOTEL 2: MADINAH ===== -->
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center mb-25px">
                    <div class="col-sm-12">
                        <span class="badge fw-600 fs-13 px-3 py-2 border-radius-30px mb-2" style="background-color:#55442b; color:#e4b869;">المدينة المنورة</span>
                        <h4 class="alt-font text-dark-gray fw-500 mb-10px ls-minus-1px"> الحارثية </h4>
                        <ul class="p-0 m-0 list-style-02 d-block d-sm-flex">
                            <li class="text-dark-gray fw-500"><i class="bi bi-geo-alt icon-small me-5px"></i>المدينة المنورة, السعودية</li>
                            <li class="ms-20px xs-ms-0">
                                <div class="review-star-icon fs-18 me-5px">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <a href="#reviews" class="text-dark-gray text-dark-gray-hover fw-500 d-inline-block section-link">16 تقيم</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-start gap-3 mt-3">
                        <i class="feather icon-feather-navigation fs-18"></i>
                        <div class="lh-sm">
                            <div class="text-dark-gray fw-500 fs-16 d-block">المسافة من المسجد النبوي</div>
                            <div class="fs-14 opacity-8 mt-2">يسير على الأقدام حوالي 600 متر</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3 mt-2 mb-2">
                        <i class="feather icon-feather-calendar fs-18"></i>
                        <div class="text-dark-gray fw-500 fs-16 d-block">3 ليالي</div>
                        <div class="fs-18 ms-2">شامل الافطار</div>
                    </div>
                </div>

                <div class="hotel-detail-card" data-anime='{ "translateY": [40, 0], "opacity": [0,1], "duration": 900, "delay": 0, "easing": "easeOutQuad" }'>
                    <div class="bg-white border-radius-12px overflow-hidden" style="box-shadow: 0 8px 40px rgba(85,68,43,0.10);">
                        <!-- Main Hotel Image Slider -->
                        <div class="hotel-main-image position-relative overflow-hidden" style="height: 360px;">
                            <div id="hotelCarousel2" class="carousel slide h-100" data-bs-ride="carousel">
                                <div class="carousel-inner h-100">
                                    <div class="carousel-item active h-100">
                                        <img src="imgs/maka-bann.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="فندق المدينة المنورة">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 1">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 2">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 3">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 4">
                                    </div>
                                    <div class="carousel-item h-100">
                                        <img src="imgs/maka-bann-2.jpg" class="d-block w-100 h-100" style="object-fit:cover;" alt="صورة 5">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <!-- Hotel Info Body -->
                        <div class="p-4 pt-4">
                            <div class="row align-items-start">
                                <!-- CTA Button -->
                                <div class="col-12">
                                    <a href="https://maps.google.com/?q=Movenpick+Hotel+Hajar+Makkah" target="_blank" rel="noopener noreferrer" class="btn btn-large w-100 fw-600 fs-16 border-radius-50px d-flex align-items-center justify-content-center gap-2" style="background: linear-gradient(135deg,#55442b,#7a6242); color:#e4b869; border:none; transition: all 0.3s ease; height:52px;" onmouseover="this.style.background='linear-gradient(135deg,#3d3020,#55442b)'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(85,68,43,0.35)';" onmouseout="this.style.background='linear-gradient(135deg,#55442b,#7a6242)'; this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                                        <i class="feather icon-feather-map-pin"></i>
                                        عرض على خرائط جوجل
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- start section -->
<!-- start section -->
<section class=" position-relative pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive border-0 box-shadow-none">
                    <div class="text-dark-gray fw-600 fs-24 text-center mb-2">
                        سعر الفرد في الغرفة
                    </div>
                    <table class="custom-pricing-table mb-0 w-100">
                        <tbody>
                            <tr>
                                <td class="cpt-header fs-24 cpt-rounded-tr">
                                    فردي
                                </td>
                                <td class="cpt-header fs-24">
                                    ثنائي
                                </td>
                                <td class="cpt-header fs-24">
                                    ثلاثي
                                </td>
                                <td class="cpt-header cpt-rounded-tl fs-24">
                                    رباعي أو خماسي
                                </td>
                            </tr>
                            <tr>
                                <td class="cpt-price fs-24">
                                    89,100 جنية
                                </td>
                                <td class="cpt-price fs-24">
                                    64,900 جنية
                                </td>
                                <td class="cpt-price fs-24">
                                    59,700 جنية
                                </td>
                                <td class="cpt-price fs-24">
                                    56,100 جنية
                                </td>
                            </tr>

                        </tbody>
                    </table>
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
                        <h5 class="alt-font text-dark-gray fw-600 sm-mb-15px">مميزات وشروط الحجز</h5>
                    </div>
                    <div class="col-12">
                        <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-chevron-down" data-inactive-icon="icon-feather-chevron-right">
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">
                                            <span class="fw-600 lh-normal"> البرامج تشمل :</span>
                                            <i class="feather icon-feather-chevron-down"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <ul class="list-style-04 text-dark-gray fw-500">
                                            <li>قطار الحرمين</li>
                                            <li>تكاليف استخراج التأشيرة</li>
                                            <li>باركود وزارة السياحة</li>
                                            <li>تذكرة الطيران</li>
                                            <li>المزارات الدينية بمكة والمدينة</li>
                                            <li>الإقامة بالفنادق حسب كل برنامج</li>
                                            <li>الانتقالات الداخليه بأتوبيسات حديثه ومكيفه</li>
                                            <li>السفر على الخطوط السعوديه او مصر للطيران وليس طيران خاص او شارتر</li>
                                            <li>اشراف دينى وادارى عالى الكفاءة والخبرة في خدمة وفود الرحمن بالحرمين الشريفين</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">
                                            <span class="fw-600 lh-normal">ملاحظات عامه :</span>
                                            <i class="feather icon-feather-chevron-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                        <ul class="list-style-04 text-dark-gray fw-500">
                                            <li>يلتزم العميل بخط سير البرنامج وتعليمات المشرف حتى لا يتحمل اى أعبا ء لمخالفته</li>
                                            <li>الفنادق الاقتصاديه الت ي توفر باصات ه ي مسئولية الفندق فقط</li>
                                            <li>في حالة الرغبة ف ي إضافة الإفطار موفنبيك انوار المدينة يتم زيادة 70 ريال على الفرد في الغرفه المغلقه فقط</li>
                                            <li>في حالة طلب تعديل الغرفه وقت الحجز للبرامج التي بها موفنبيك الخلفى يتم إضاف ة 110 ريال للغرف المغقله فقط بعد التأكد من الامكانية وسداد اجمالى المبلغ</li>
                                            <li>تذاكر الطيران خاصه بمجموعات العمره وبأسعار شركات الطيران واى زياده تطرأ من شركات الطيران تطبق على البرنامج مباشرة ويلتزم العميل بسدادها</li>
                                            <li>اى زيادة تطرأ من الجهات الرسميه بالمملكة او مصر يتم اضافها على البرنامج ويلتزم العميل بسدادها</li>
                                            <li>حجز الطيران وحجز القطار السريع يكون على الدرجة الاقتصاديه السياحيه وفى حالة حجز VIP يكون بتكلفة إضافي ة ويتم ابلاغ الشركة قبل السفر. ( اثناء الحج ز وبوقت كا ف )</li>
                                            <li>يتحمل العميل تكلفة الانتقال من المطار الى الفندق في حالة عدم استخراج تأشيرة من الشركة</li>
                                            <li>الغرف ف ي مكة ف ي جميع الفنادق والبرامج لا تكون مطلة على الكعبه او الحرم ويكون بحجز مسبق وحسب الامكانيه وبسداد كامل الفارق اثناء الحجز وليس عند الوصول</li>
                                            <li>الغرفه الثلاثيه في فنادق 5 نجوم ) 2 سرير + سرير اضافى ( الغرفه الرباعيه ) 2 سرير أساسي + 2 سرير اضافى (</li>
                                            <li>لمشاهدة صور الفنادق أ ضغط على اسم الفندق</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">
                                            <span class="fw-600 lh-normal">المستندات المطلوبة :</span>
                                            <i class="feather icon-feather-chevron-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-extra-medium-gray">
                                        <ul class="list-style-04 text-dark-gray fw-500">
                                            <li>جواز سفر حديث سارى لمدة 6 شهور على الأقل تحسب من تاريخ السفر</li>
                                            <li>صورة شخصيه حديثه 4 * 6 خلفيه بيضاء</li>
                                            <li>شهادة التطعيمات الخاصه بالعمره من مكت ب الصحة. ) بطاقة التطعيمات لونها أخضر (</li>
                                            <li>لا يشترط وجود محرم للسيدات اقل من 45 عام</li>
                                            <li>تصريح السفر الخاص بالتجنيد او جهات العمل المتنوعه مسئولية العميل مسئولية كامل ة</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-04" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">
                                            <span class="fw-600 lh-normal">شروط وسياسة الإلغاء :</span>
                                            <i class="feather icon-feather-chevron-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-04" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-extra-medium-gray">
                                        <ul class="list-style-04 text-dark-gray fw-500">
                                            <li>تحدد حسب العقد وبما تضمنته استمارة الحجز</li>
                                            <li>في حالة انه تم اتخاذ اى إجراءات في الحجز بمكاملة مسجلة او مستند مطبوع او تم ابلاغ الموظف للعميل باى وسيلة سيتم تنفيذه فورا دون نزاع </li>
                                            <li>الغرف المفتوحه نظام التسكين فيها يكون بمتابعة العميل وترقية الإقامة للمستوى الأعلى وليس على الشركة مسئولية اكتمال الغرف</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent">
                                    <a href="" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-05" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="gap-2 d-flex align-items-center position-relative text-dark-gray mb-0">
                                            <span class="fw-600 lh-normal">التأشيرات الخارجية :</span>
                                            <i class="feather icon-feather-chevron-right"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-05" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                                        <ul class="list-style-04 text-dark-gray fw-500">
                                            <li>في حالة الحجز بدون تأشيرة وباركود يتم خصم 9 الاف للفرد او الطفل و 9 الاف للرضيع</li>
                                            <li>عند إضافة باركود للتأشيرة السياحيه او الزياره الشخصية يتم سداد 3000 جنيه للفرد او الطفل</li>
                                            <li>حجز الروضة الشريفه مسئولية العميل كاملة لمن هم بدون تأشيرة العمرة</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-2 pb-0">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-12" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- <span class="fs-20 mb-15px text-base-color fw-500 d-block">Life around great food</span> -->
                <h5 class="alt-font text-base-color ls-minus-1px mb-0 fs-30">
                    ماء زمزم هدية مجانية في العودة للمجموعات
                </h5>
                <h5 class="alt-font text-base-color ls-minus-1px mb-0 fs-30">
                    تنشيط كارت الولاء ( حجيج ) بعد العودة
                </h5>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-2">
    <div class="container overlap-gap-section">
        <div class="row">
            <div class="col-xl-10 col-md-9 " data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h5 class="alt-font text-base-color ls-minus-1px mb-0 fs-30">جميع البرامج تشمل قطار الحرمين السريع والافطار بمكة</h5>
                <span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة الطيران في البرنامج 16000 جنيه وأي تغيير في سعر التذكرة يطبق تلقائياً علي سعر البرنامج</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب البرنامج علي سعر صرف الريال 13.10 جنيه وأي زيادة تطبق تلقائياً على البرنامج ويتحملها المعتمر</span>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- Floating Book Now Button -->
<a href="javascript:void(0);" class="floating-book-btn open-booking-modal"
    data-name="عمرة المولد النبوي 1447 هـ"
    data-type="umrah"
    data-date="13 , 20 , 24 أغسطس 2026"
    data-duration="10 أيام"
    data-category="مستوى خمس نجوم"
    data-price-single="89100"
    data-price-double="64900"
    data-price-triple="59700"
    data-price-quad="56100">
    <i class="feather icon-feather-calendar"></i>
    <span>احجز الآن</span>
</a>




@include('footer');