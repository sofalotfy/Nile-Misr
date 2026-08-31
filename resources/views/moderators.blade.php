@include('header')
<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background  top-space-margin position-relative" top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{  $pageData['hero-image']?asset("storage/" . $pageData['hero-image']):asset("imgs/service-banner-2.jpg")   }})">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">{!! $pageData['hero-title']?? 'مشرفين نيل مصر' !!}</h1>
                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">{!! $pageData["hero-sub-title"] ?? 'برامج متكاملة للحج والعمرة بخدمة راقية واهتمام روحي كامل' !!}</p>
                    </div>
                    <!-- start breadcrumb -->
                    <div class=" justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li><a href="/" class="text-white">الرئيسية</a></li>
                            <li>{!! $pageData["hero-title"] ?? 'المشرفين' !!}</li>
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
<section class="pb-0 position-relative">
    <div class="position-absolute left-0px top-0px d-none d-lg-inline-block">
        <img src="imgs/pattern/patt3.png" alt="" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 md-mb-20px sm-mb-0" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="text-dark-gray fw-500 ls-minus-2px alt-font">{!! $pageData["our-supervisors-tag"]?? "مشرفين نيل مصر" !!}</h2>
                <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-5px">{!! $pageData["our-supervisors-quote"]?? "علم مضيء في سماء السياحة الدينية" !!}</span>
                <img src="imgs/arrow.png" class="position-relative mt-5" alt="" data-bottom-top="transform: rotate(120deg);" data-top-bottom="transform: rotate(0);" />
            </div>
            <div class="col-lg-8" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="row">
                    <div class="last-paragraph-no-margin">
                        {!! $pageData["our-supervisors-text"]?? "
                        <p>تعد خدمة الإشراف خلال تأدية الحاج و المعتمر لرحلته المقدسة
                            خارج أرض الوطن هي العمل الأسمى على الإطلاق لنيل
                            مصر للسياحة .. و هو العنصر الأساسي لنجاح الشركة و إتمام
                            الوظيفة المنوطة بفريق عمل نيل مصر بشكل صحيح يرضي
                            العملاء المميزين في رحلتهم المقدسة .. تقف نيل مصر على
                            ذلك الدور الهام بكل همة و إهتمام .. متفردة بالإهتمام بكل
                            صغيرة و كبيرة و تفصيلة خلال رحلة الحاج و المعتمر من بداية
                            الرحلة بمطار القاهرة و حتى العودة مرة أخرى لأرض الوطن ..
                            دعم كامل ديني و معنوي .. عملي و نظري في كل لحظة من
                            لحظات الرحلة و في كل مشهد وموقف للمناسك و الأركان
                            سواء بسواء لجميع العملاء.
                        </p>
                        " !!}
                        <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mt-30px">{!!$pageData['our-supervisors-include-text']??"وتشمل الخدمة ما يلي"!!}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative overflow-hidden">

    <div class="container">
        <div class="row" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12 tab-style-08">
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_eight1">
                        <div class="row align-items-center justify-content-center g-0">
                            <div class="col-lg-6 md-mb-30px position-relative">
                                <img src="{{  $pageData['organizational-supervisors-image']?asset("storage/" . $pageData['organizational-supervisors-image']):asset("imgs/org.jpg")   }}" alt="" class="w-100">
                                <!-- <div class="position-absolute top-30px xs-top-0px left-minus-80px lg-left-minus-50px xs-left-minus-0px xs-w-130px"><img src="images/demo-hotel-and-resort-amenities-07.png" alt="" /></div> -->
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <!-- <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-10px">الإشراف الإداري والتنظيمي</span> -->
                                <h3 class="alt-font fw-500 text-dark-gray">{!! $pageData['organizational-supervisors-title']?? "الإشراف الإداري والتنظيمي" !!}</h3>
                                {!! $pageData['organizational-supervisors-text']?? "
                                <p class='mb-30px'>
                                    لأيتولى فريقنا المتخصص إدارة جميع الجوانب الإدارية للرحلة من إعداد الوثائق والتصاريح اللازمة إلى التنسيق مع السلطات السعودية والجهات المختصة. نحرص على متابعة جداول الرحلات والانتقالات بين المشاعر المقدسة بدقة عالية، مع إدارة الحجوزات وتوزيع الغرف بما يضمن راحة جميع الحجاج. كما نقوم بالتأكد من استكمال جميع إجراءات الدخول والخروج وتوزيع بطاقات الهوية والأساور الخاصة لضمان سير منظم للرحلة.
                                </p>
                                " !!}
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-very-light-gray position-relative overflow-hidden">
    <div class="container">
        <div class="row" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12 tab-style-08">
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_eight1">
                        <div class="row align-items-center justify-content-center g-0">
                            <div class="col-lg-6 md-mb-30px position-relative">
                                <img src="{{ $pageData['service-supervisors-image']?asset("storage/" . $pageData['service-supervisors-image']):asset("imgs/logi.JPG") }}" alt="" class="w-100">
                                <!-- <div class="position-absolute top-30px xs-top-0px left-minus-80px lg-left-minus-50px xs-left-minus-0px xs-w-130px"><img src="images/demo-hotel-and-resort-amenities-07.png" alt="" /></div> -->
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <!-- <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-10px">الإشراف اللوجستي والخدمي</span> -->
                                <h3 class="alt-font fw-500 text-dark-gray">{!! $pageData['service-supervisors-title']?? "الإشراف اللوجستي والخدمي" !!}</h3>
                                {!! $pageData['service-supervisors-text']?? "نتولى الإشراف الكامل على جودة أماكن الإقامة في مكة والمدينة
                                مع متابعة خدمات التنظيف والصيانة وإدارة وجبات الطعام لضمان أعلى معايير الجودة，
                                نوفر خدمات نقل متميزة بحافلات مكيفة ومجهزة بأحدث المعدات لضمان راحة الحجاج أثناء التنقل
                                بين المشاعر المقدسة. كما نحرص على توفير المياه والمرطبات في جميع الأوقات
                                مع مرافقة الحجاج في جميع التنقلات والالتزام قدر المستطاع بالمواعيد المحددة لأداء المناسك."!!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row align-items-center mb-8 md-mb-15 xs-mb-20">
            <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                <!-- <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-10px">الإشراف الديني والإرشادي</span> -->
                <h3 class="alt-font text-dark-gray ls-minus-2px">{!! $pageData["religious-supervisors-title"]??"الإشراف الديني والإرشادي" !!}</h3>
                {!! $pageData["religious-supervisors-text"]??"
                <p class='w-80 xl-w-100 mb-35px xs-mb-10px'>مشرفون دينيون متخصصون لشرح مناسك الحج والعمرة وفقًاً للسنة النبوية الصحيحة، مع إرشاد الحجاج خلال أداء المناسك في المواقيت المحددة والإجابة على جميع الاستفسارات الفقهية والدينية. نقدم جلسات تحضيرية قبل بداية المناسك ومحاضرات دينية توعوية، مع مرافقة شخصية للحجاج أثناء الطواف والسعي وفي عرفات ومزدلفة ومنى. هدفنا هو ضمان أداء المناسك بالطريقة الصحيحة والمثلى لتحقيق أقصى استفادة روحانية من هذه التجربة المقدسة.
                </p>
                " !!}
            </div>
            <div class="col-lg-6 offset-lg-1 md-mb-30px position-relative">
                <img src="{{  $pageData['religious-supervisors-image']?asset("storage/" . $pageData['religious-supervisors-image']):asset("imgs/real.jpg")   }}" alt="" class="w-100">
                <!-- <div class="position-absolute top-30px xs-top-0px left-minus-80px lg-left-minus-50px xs-left-minus-0px xs-w-130px"><img src="images/demo-hotel-and-resort-amenities-07.png" alt="" /></div> -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12 tab-style-08">
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_eight1">
                        <div class="row align-items-center justify-content-center g-0">
                            <div class="col-lg-5">
                                <!-- <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-10px">الإشراف اللوجستي والخدمي</span> -->
                                <h3 class="alt-font fw-500 text-dark-gray">{!! $pageData["safety-management-title"]?? "إدارة الطوارئ والأمان" !!}</h3>
                                {!! $pageData["safety-management-text"]?? "
                                <p class='mb-30px'>
                                    نتولى الإشراف الكامل على جودة أماكن يضم فريقنا متخصصين في إدارة المخاطر والطوارئ لوضع خطط بديلة للتعامل مع أي ظروف استثنائية قد تطرأ، مع التواصل المستمر مع السلطات الأمنية السعودية. نطبق أحدث بروتوكولات السلامة المعتمدة دوليًاً مع متابعة دقيقة للحجاج في الأماكن المزدحمة وتوفير أرقام طوارئ للتواصل المستمر. نوفر تأمينًاً شاملًاً ضد جميع المخاطر مع تدريب مستمر لفريق العمل على التعامل مع الحالات الطارئة لضمان سلامة وأمان جميع الحجاج.
                                </p>
                                " !!}
                            </div>
                            <div class="col-lg-6 offset-lg-1 md-mb-30px position-relative">
                                <img src="{{  $pageData['safety-management-image']?asset("storage/" . $pageData['safety-management-image']):asset("imgs/safe.JPG")   }}" alt="" class="w-100">
                                <!-- <div class="position-absolute top-30px xs-top-0px left-minus-80px lg-left-minus-50px xs-left-minus-0px xs-w-130px"><img src="images/demo-hotel-and-resort-amenities-07.png" alt="" /></div> -->
                            </div>

                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@include('footer')
