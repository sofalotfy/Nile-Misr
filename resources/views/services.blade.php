@include('header') ?>
<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background  top-space-margin position-relative" style="background-image: url({{  $pageData['hero-image']?asset("storage/" . $pageData['hero-image']):asset("imgs/service-banner-2.jpg")   }})">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">{!! $pageData["hero-title"] ?? 'خدماتنا' !!}</h1>
                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">{{ $pageData["hero-text"] ?? 'برامج متكاملة للحج والعمرة بخدمة راقية واهتمام روحي كامل' }}</p>
                    </div>
                    <!-- start breadcrumb -->
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li><a href="/" class="text-white">الرئيسية</a></li>
                            <li>{!! $pageData["hero-title"] ?? 'خدماتنا' !!}</li>
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
<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 position-relative">
                <div class="row align-items-center position-relative md-mb-15" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-md-5 sm-mb-30px d-none d-lg-block" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img class="w-100" src="{{  $pageData["hajj-service-right-image"]?asset("storage/" . $pageData["hajj-service-right-image"]):asset("imgs/haj-3.jpg")   }}" alt="" />
                    </div>
                    <div class="col-lg-7 col-md-7 sm-mb-30px text-end d-none d-lg-block" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                        <img src="{{  $pageData["hajj-service-left-image"]?asset("storage/" . $pageData["hajj-service-left-image"]):asset("imgs/haj-2.jpg")   }}" alt="" class="box-shadow-quadruple-large md-w-100" />
                    </div>
                    <div class="w-50 sm-w-100 overflow-hidden position-absolute sm-position-relative left-140px bottom-minus-200px sm-bottom-0px sm-left-0px p-0 sm-ps-15px sm-pe-15px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                        <img src="{{  $pageData["hajj-service-center-image"]?asset("storage/" . $pageData["hajj-service-center-image"]):asset("imgs/haj-1.jpg")   }}" alt="" class="box-shadow-quadruple-large w-100" />
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-xl-1 md-mt-20 sm-mt-0" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="mb-10px text-tussock-yellow fs-22 fw-600 d-block">{!! $pageData["hajj-service-tag"] ?? 'خدمة الحج' !!}</span>
                <h3 class="alt-font text-dark-gray mb-5">{!! $pageData["hajj-service-title"] ?? 'الحج مع نيل مصر للسياحة' !!}</h3>
                {!! $pageData["hajj-service-text"] ?? '
                <p class=" mb-35px xs-mb-10px">
                    في نيل مصر، ندرك أن رحلة الحج ليست مجرد سفر،
                    بل هي رحلة العمر التي يتمنى المسلم أن يؤديها مرةًً
                    بإخلاص وخشوع. لذلك، نحرص على أن نكون رفقاء دربكم
                    من اللحظة الأولى وحتى العودة، فنقدم كل ما يلزم
                    لراحة الحاج وطمأنينته؛ من استخراج التأشيرات والتصاريح
                    الرسمية، وحجز رحلات الطيران على أفضل الخطوط الجوية
                    من وإلى المدينة وتوفير إقامة مريحة في فنادق قريبة من
                    الحرمين، مع وجبات تناسب ذوق الحجاج المصريين. كل ذلك
                    يتم بتخطيط دقيق يضمن لكم التركيز الكامل على أداء
                    المناسك دون انشغال بالتفاصيل.
                </p>
                ' !!}
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 pb-4 mt-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 last-paragraph-no-margin">
                <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-5px">{!! $pageData['with-you-title']??'من أول خطوة إلى آخر دعاء... نحن بجانبكم في كل لحظة' !!}</span>
                {!! $pageData['with-you-text']??'
                <p class="ls-05px">
                    يصحبكم فريق متكامل من المشرفين الدينيين لإرشادكم
                    خطوة بخطوة في أداء المناسك على هدي النبي صلى الله عليه وسلم،
                    إلى جانب طاقم إداري جاهز لخدمتكم في أي وقت. نوفر
                    وسائل نقل مكيّّفة وآمنة للتنقل بين المشاعر المقدسة،
                    ونهتم بالتفاصيل الصغيرة التي تصنع فرقًًا كبيرًًا؛ من
                    الحقائب المجهزة، والمظلات الواقية، وخدمة الاتصال
                    المجاني مع الأهل في حالات الطوارئ، وحتى توزيع مياه
                    زمزم المباركة. هدفنا أن تكونوا في معية الله وراحة بال،
                    لتبقى هذه الرحلة محفورة في قلوبكم بذكرها الطيب
                    ونسيمها الإيماني.
                </p>
                ' !!}
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="p-0">
    <div class="container">
        <div class="row align-items-center mb-8 md-mb-15 xs-mb-20">
            <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-10px">{!! $pageData["umrah-service-tag"]?? "خدمة العمرة" !!}</span>
                <h3 class="alt-font text-dark-gray ls-minus-2px">{!! $pageData["umrah-service-title"]?? "العمرة مع نيل مصر للسياحة" !!}</h3>
                <p class="w-80 xl-w-100 mb-35px xs-mb-10px">{{ $pageData["umrah-service-text"]?? 
                "
                    رحلة العمرة مع نيل مصر هي فسحة روح ولقاء مع
                    أطهر البقاع. نوفر برامج متنوعة تناسب جميع الميزانيات
                    والمواعيد، تبدأ من استخراج التأشيرات بسرعة وسهولة،
                    وحجز رحلات الطيران المباشرة من والي المدينة، إلى توفير
                    الإقامة المريحة من الفنادق الاقتصادية حتى ساحة الحرم،
                    على مسافات قريبة أو مناسبة من الحرم. نخطط بعناية
                    لكل خطوة، حتى يكون تركيزكم على الخشوع في الطواف
                    والسعي، لا على التفاصيل اللوجستية.
                "
                 }}</p>
            </div>
            <div class="col-lg-7 position-relative">
                <div class="overflow-hidden position-relative xs-w-80 float-end" data-anime='{ "effect": "slide", "color": "#A0875B", "direction":"rl", "easing": "easeOutQuad", "duration": 600, "delay":400}'>
                    <img class="w-100" src=" {{  $pageData['umrah-service-left-image']?asset("storage/" . $pageData['umrah-service-left-image']):asset("imgs/umrah-1.jpg")   }}" alt="">
                </div>
                <div class="position-absolute left-minus-70px md-left-15px bottom-minus-50px w-55 overflow-hidden" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "duration": 600, "delay":500}'>
                    <img class="w-100" src=" {{  $pageData['umrah-service-right-image']?asset("storage/" . $pageData['umrah-service-right-image']):asset("imgs/umrah-2.jpg")   }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9 last-paragraph-no-margin">
                <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-5px">{!! $pageData['care-about-you-title'] ?? 'نرافقكم بخبرة واهتمام... لتعيشوا رحلة إيمانية لا تُنسى' !!}</span>
                {!! $pageData['care-about-you-text'] ?? '
                <p class="ls-05px">
                    نرافقكم في رحلتكم بمشرفين دينيين متخصصين، ونوفر
                    إمكانية زيارة المدينة المنورة والصلاة في المسجد النبوي،
                    وزيارة المواقع التاريخية التي تزيد الرحلة نورًًا ومعرفة.
                    تشمل خدماتنا النقل المريح، والوجبات المتوازنة، والحقائب
                    المجهزة بمستلزمات العمرة، وخدمة الاتصالات والإنترنت.
                    ومع كل خدمة نقدمها، نسعى لأن تعيشوا السكينة التي
                    يهبها الله لزائري بيته الحرام، وتعودوا بقلوب نقية وذكريات
                    لا تُُنسى.
                </p>
                ' !!}

            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-very-light-gray position-relative overflow-hidden">
    <div class="position-absolute right-0px top-0px d-none d-lg-inline-block">
        <img src="imgs/pattern/patt14.png" alt="" />
    </div>
    <div class="container">
        <div class="row" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12 tab-style-08">
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_eight1">
                        <div class="row align-items-center justify-content-center g-0">
                            <div class="col-lg-6 md-mb-30px position-relative">
                                <img src="{{  $pageData['residents-abroad-image']?asset("storage/" . $pageData['residents-abroad-image']):asset("imgs/egy.jpg")   }}" alt="" class="w-100">
                                <!-- <div class="position-absolute top-30px xs-top-0px left-minus-80px lg-left-minus-50px xs-left-minus-0px xs-w-130px"><img src="images/demo-hotel-and-resort-amenities-07.png" alt="" /></div> -->
                            </div>
                            <div class="col-lg-5 offset-lg-1">
                                <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-10px">{!! $pageData['residents-abroad-tag'] ?? "نقرّب إليكم رحلة الحج أينما كنتم في دول الخليج."!!}</span>
                                <h3 class="alt-font fw-500 text-dark-gray">{!! $pageData['residents-abroad-title'] ?? "خدمات الحج للمصريين المقيمين بدول الخليج"!!}</h3>
                                {!! $pageData['residents-abroad-text'] ?? "}
                                <p class='mb-30px'>من خلال مكتبنا في دبي بدولة الإمارات، نوفر للمغتربين في
                                    دول الخليج العربي إمكانية حجز رحلات الحج بسهولة ويسر،
                                    دون الحاجة للسفر إلى مصر لاستكمال الإجراءات. نحرص على
                                    تيسير كل الخطوات من حيث الإجراءات الحكومية وحجز الرحلات
                                    والإقامة، ليكون تركيزكم منصبًًا على الاستعداد الروحي لأداء
                                    المناسك في أجواء من الطمأنينة والخشوع.
                                </p>"!!}
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