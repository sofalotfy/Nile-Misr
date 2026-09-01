@include('header', ["siteData" => $siteData])

<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background  top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{  $pageData['hero-image']?asset("storage/" . $pageData['hero-image']):asset("imgs/about-banner-2.jpg")   }}" )>
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column">
                    <div class="" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">{!! $pageData["title"] ?? 'مــن نحن؟' !!}</h1>
                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">{!! $pageData["subtitle"] ?? '25 عامًا من الثقة والريادة في خدمة ضيوف الرحمن.' !!}</p>
                    </div>
                    <!-- start breadcrumb -->
                    <div class="justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li><a href="/" class="text-white">الرئيسية</a></li>
                            <li>{!! $pageData["title"] ?? 'مــن نحن؟' !!}</li>
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
<section class="pb-0 position-relative overflow-hidden">
    <!-- Pattern image absolute positioned to the right edge of the screen -->
    <img src="imgs/pattern/patt1.png" class="position-absolute d-none d-xl-block" style="top: 390px; right: 0; width: 40vw; max-width: 550px; z-index: 0;" alt="">


    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-lg-4" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="position-relative z-index-1">
                    <span class="mb-10px text-tussock-yellow fs-22 fw-600 d-block">{!! $pageData['beginning-tag'] ?? 'النشأة والبداية' !!}</span>
                    <h3 class="text-dark-gray ls-minus-2px mb-50px">{!! $pageData['beginning-title'] ?? 'من مستقدمي السياحة إلى رائدي الحج والعمرة' !!}</h3>

                    <div class="position-relative d-inline-block mt-3">

                        <span class="fs-100 alt-font text-tussock-yellow fw-800 d-block lh-1 ls-minus-2px">{!! $pageData['Beginnings-year'] ?? '2001' !!}</span>
                        <span class="fs-22 alt-font text-base-color fw-600 d-block mt-2">{!! $DageData['Beginnings-word'] ?? 'تأسست' !!}</span>


                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-lg-8 offset-xxl-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="last-paragraph-no-margin">
                    <p>
                        {!! $pageData["beginning-text"] ?? '
                        تأسست نيل مصر للسياحة كشركة سياحة مستقدمين عام 2001 م، كشركة مساهمة مصرية، وحصلت على ترخيص وزارة السياحة رقم ١٢٦٢ كما حصلت على عضوية منظمة النقل الجوي العالمية IATA الآياتا بالإضافة إلى عضوية المنظمة الأمريكية لرابطة وكلاء السياحة والسفر ASTA الآساتا، و من خلال تلك التراخيص أصبحت الشركة مؤهلة قانونيا وعمليا لخوض العمل السياحي كشركة كبرى في مجال السياحة عموما في مصر

                        <br><br>

                        هدفت الشركة أولا العمل على تنمية قطاع سياحة الوافدين الأجانب لمصر و تقديم برامج مميزة لهم داخل مدن ومواقع مصر السياحية .. لكن سرعان ما بدلت رؤيتها لقطاع السياحة الدينية لما يمثله هذا القطاع من قدسية تتناسب مع رؤيتها السامية .. و لما كان يعانيه هذا القطاع من ضعف تنظيم وافتقار الى مبادئ الخدمة الراقية و الراحة و الأمان

                        <br><br>

                        بداية من عام ٢٠٠ ٨ استطاعت نيل مصر أن تقدم نموذج فريد.. واعد .. بعيد كل البعد عن سابقيه في هذا المجال .. و استطاعت أن تستلهم خبراتها في مجال سياحة المستقدمين بمؤهلات فنية وبشرية في هذا المجال تتعدى الثلاثين عاما أن تنشأ تجربة منفردة مميزة في قطاع السياحة الدينية الذي كان يفتقر لأقل الأسس و المعايير .. فكانت الشركة الأولي التي تقدم برنامج عمرة متكامل الأركان معلوم الأوقات للسفر و العودة والإقامة بالتزام كامل وتعهد بخدمة لائقة بعملاء هذا القطاع

                        <br><br>

                        و كانت تلك الطفرة مؤذنة ببداية عهد جديد في قطاع السياحة الدينية و إنخفاض دور الوسيط العرفي وتأثيره على هذا القطاع .. و تحول نموذج العمل إلى شكل رسمي واضح و مؤتمن مؤذنا بتجارب فريدة و جديدة بفضل مجهودات نيل مصر للسياحة و إنعكس هذا الالإلتزام و تلك الرؤية بتفرد الشركة و تربعها على قمة تلك الخدمة بمصر .. فحازت على تكريم الدولة كأفضل شركة سياحة دينية عام ٢٠١ ٣ ومرة أخرى عام ٢٠١ ٥ في مجال الحج والعمرة في مصر من وزارة السياحة .. كما حصلت على العديد من التكريمات من جهات حكومية و قطاعات سياحية داخلية و خارجية كما سيأتي الذكر لاحقا.
                        ' !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center-bottom position-relative pb-0">
    <div class="container background-position-left background-no-repeat sm-mb-10 xs-mb-15" style="background-image:url('imgs/pattern/patt8.png');">
        <div class="row align-items-center position-relative">
            <div class="position-absolute left-0px top-0px h-100 w-60px border-end border-color-extra-medium-gray d-none d-md-inline-block" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="vertical-title-center align-items-center justify-content-end">
                    <div class="title fs-24 text-tussock-yellow fw-500 text-uppercase">{!! $pageData['our-vision-vertical-tag'] ?? 'لكل عمرة حكاية.. ولكل حاج قصة' !!}</div>

                </div>
            </div>
            <div class="col-lg-1 col-md-2 d-none d-md-inline-block">
                <div class="divider-dot d-flex align-items-center w-100 h-200px"></div>
            </div>
            <div class="col-lg-6 col-md-9" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="mb-10px text-tussock-yellow fs-22 fw-600 d-block">{!! $pageData['our-vision-tag'] ?? 'رؤيتنــا' !!}</span>
                <h3 class="alt-font text-dark-gray mb-5">{!! $pageData['our-vision-title'] ?? 'تقديم نموذج واعد ورؤية نقية لهذا القطاع الحيوي والمقدس' !!}</h3>
                <p class=" mb-35px xs-mb-10px">{!! $pageData['our-vision-text'] ?? '
                    تسعى شركة نيل مصر للسياحة عبر مسيرتها الناهضة في
                    قطاع السياحة الدينية بمصر إلى تقديم نموذج واعد ورؤية
                    نقية لهذا القطاع الحيوي والمقدس، وذلك من خلال تيسير
                    وتسهيل رحلة الحج والعمرة وجعلها في متناول كل راغب
                    في زيارة الأراضي المقدسة بكل يسر وسهولة. نؤمن بأن
                    أداء فريضة الحج والعمرة حق لكل مسلم، ونعمل بجد لتذليل
                    العقبات وتوفير الفرص للجميع دون تمييز.
                    <br><br>
                    يأتي ذلك من خلال العمل الدؤوب والمساعي الدائمة و
                    الجهود المتفانية من فريق عمل متخصص وذو خبرة عالية،
                    لتوفير جميع عناصر الرحلة بخدمة متميزة تليق بعملاء نيل مصر
                    الكرام وبأسعار تنافسية مدروسة تناسب جميع الفئات، دون
                    المساس أبدًاً بمستوى المقومات الأساسية للرحلة المتمثلة
                    في التنقلات المريحة والطيران الآمن والإقامة الكريمة
                    والتسكين المناسب، مع توفير الإشراف الديني المتخصص
                    والرعاية الصحية الكاملة.
                    '!!}
                </p>
            </div>
            <div class="col-lg-4 col-md-8 position-relative offset-lg-1 offset-md-4 ps-0 sm-ps-15px md-mt-50px" data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="{{  $pageData['our-vision-image']?asset("storage/" . $pageData['our-vision-image']):asset("imgs/vision.jpg")   }}" class="md-w-100" alt="">
                <!-- <img class="position-absolute left-minus-120px top-80px sm-top-0px sm-w-160px sm-left-0px" src="images/demo-travel-agency-home-02.png" alt="" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">  -->
            </div>
        </div>
</section>
<!-- end section -->
<!-- start section -->
<section class=" position-relative overlap-height mb-3">
    <div class="position-absolute right-0px d-none d-lg-inline-block">
        <img src="{{asset("imgs/pattern//patt11.png")}}" alt="" />
    </div>
    <!-- <img src="imgs/pattern/patt2.png" class="position-absolute bottom-minus-50px right-minus-50px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt=""/> -->

    <img src="{{  $pageData['our-mission-floating-image']?asset("storage/" . $pageData['our-mission-floating-image']):asset("imgs/pattern/patt2.png")   }}" class="position-absolute d-none d-xl-block" style="top: 358px; right: 147px; width: 35vw; max-width: 390px; z-index: 0;" alt="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5  md-mb-50px xs-mb-30px">
                <img src="{{  $pageData['our-mission-image']?asset("storage/" . $pageData['our-mission-image']):asset("imgs/mission.jpg")   }}" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="" />
            </div>
            <div class="col-lg-6 offset-lg-1 md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                <span class="mb-10px text-tussock-yellow fs-22 fw-600 d-block">{!! $pageData["our-mission-tag"] ??'رسالتنا' !!}</span>
                <h3 class="alt-font text-dark-gray mb-5">{!! $pageData["our-mission-title"] ??'في كل خطوة دعاء، وفي كل دعاء نور' !!}</h3>
                {!! $pageData["our-mission-text"]??'
                <p class=" mb-35px xs-mb-10px">
                    لتزم في شركة نيل مصر بأن نكون الشريك الأمين والموثوق
                    لكل من يرغب في أداء مناسك الحج والعمرة، من خلال
                    تقديم خدمات متكاملة تجمع بين الأصالة المصرية والمعايير
                    العالمية في الضيافة والخدمة. نحرص على أن تكون كل رحلة
                    تجربة روحانية عميقة تترك أثرًاً إيجابيًاً في قلوب ضيوفنا، مع
                    ضمان الراحة والأمان والكرامة في كل لحظة من لحظات الرحلة
                    المقدسة.

                    <br><br>
                    نسعى لأن نكون الاختيار الأول لطالبي الحج والعمرة في
                    مصر من خلال الابتكار المستمر في خدماتنا والتطوير الدائم
                    لبرامجنا، مع الحفاظ على القيم الإسلامية الأصيلة والتقاليد
                    المصرية العريقة في الضيافة. رسالتنا هي جعل حلم زيارة
                    بيت الله الحرام واقعًاً ميسرًاً لكل مسلم، وأن نرافقه في
                    رحلته الروحانية بكل حب وإخلاص حتى يعود إلى وطنه محملًاً
                    بالبركات والذكريات الجميلة التي تدوم مدى الحياة.
                </p>
                ' !!}
            </div>

        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-base-color big-section position-relative">
    <img src="imgs/pattern/patt3.png" class="position-absolute d-none d-xl-block" style="top: 0px; right: 0px; width: 35vw; max-width: 266px; z-index: 0;" alt="">
    <img src="imgs/pattern/patt5.png" class="position-absolute d-none d-xl-block" style="bottom: 0px; left: 0px; width: 35vw; max-width: 490px; z-index: 0;" alt="">
    <div class="container">
        <div class="row align-items-end justify-content-center mb-5 md-mb-40px text-center text-md-start">
            <div class="col-xl-8 col-lg-6 col-md-10 md-mb-20px text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- <span class="mb-10px text-base-color fw-600 d-block">رؤيتنا</span> -->
                <h1 class="text-tussock-yellow mb-5 fw-500">{!! $pageData["values-tag"]??'القــيــم' !!}</h1>
                {!! $pageData["values-title"]??'
                <p class="text-very-light-gray">
                    لعل القيم الدافعة لهذا العمل في نيل مصر للسياحة تختلف عن أي عمل آخر في مجال آخر..
                    بذلك الفهم وتلك الرؤية نستعرض القيم الأساسية لنا خلال مسيرتنا ..
                </p>
                ' !!}
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="imgs/icons/asset-1.png" alt="الأمانة والمصداقية" class="w-60px">
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">{!! $pageData["integrity-and-credibility-title"]??'الأمانة والمصداقية' !!}</span>
                        {!! $pageData["integrity-and-credibility-text"]??'
                        <p class="w-90 w-90">
                            نؤمن في شركة نيل مصر أن الأمانة هي أساس كل علاقة ناجحة، لذلك نلتزم بالشفافية الكاملة في
                            جميع تعاملاتنا مع عملائنا الكرام. نحرص على تقديم معلومات دقيقة وصادقة عن جميع خدماتنا وبرامجنا
                            السياحية، ونضمن الوفاء بكل عهد نقطعه على أنفسنا.
                        </p>
                        ' !!}
                    </div>

                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start  last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="imgs/icons/asset-2.png" alt="احترام القدسية والروحانية" class="w-60px">
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">{!! $pageData["respecting-sanctity-title"]??'احترام القدسية والروحانية' !!}</span>
                        {!! $pageData["respecting-sanctity-text"]??'
                        <p class="w-90">ندرك تمامًاً أن رحلاتنا تحمل طابعًاً روحانيًاً مقدسًاً، لذلك نحرص على توفير بيئة محترمة ومناسبة تساعد
                            الحجاج والزوار على التقرب إلى الله والاستمتاع بتجربة روحانية عميقة ونوفر المشرفين المتخصصين
                            الذين يجمعون بين المعرفة الدينية والخبرة السياحية.
                        </p>
                        '!!}
                    </div>

                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start  last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="imgs/icons/asset-6.png" alt="الراحة والأمان" class="w-60px">
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">{!! $pageData["comfort-and-safety-title"]??'الراحة والأمان' !!}</span>
                        {!! $pageData["comfort-and-safety-text"]??'
                        <p class="w-90">
                            نطبق أعلى معايير الأمان الراحة في جميع رحلاتنا، ونتعامل مع شركاء موثوقين في النقل والإقامة
                            لضمان تجربة آمنة ومريحة لجميع ضيوفنا. نوفر تأمينًاً شاملًاً على جميع خدماتنا ونتبع أحدث البروتوكولات
                            الدولية للسلامة والأمان في كل مرحلة من مراحل الرحلة. لأن سلامة وراحة ضيوفنا هي مسؤوليتنا
                            الأولى، فإننا لا نتهاون في أي إجراء يضمن لهم رحلة آمنة وممتعة.
                        </p>'!!}
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start  last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="imgs/icons/asset-4.png" alt="الخبرة والمهنية" class="w-60px">
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">{!! $pageData["experience-and-professionalism-title"]??'الخبرة والمهنية' !!}</span>
                        {!! $pageData["experience-and-professionalism-text"]??'
                        <p class="w-90">يضم فريقنا نخبة من المتخصصين ذوي الخبرة العالية في مجال السياحة الدينية، والذين يتمتعون بمعرفة
                            عميقة بالمقدسات والتقاليد المحلية في جميع الوجهات الدينية. نحرص على التطوير المستمر لخدماتنا
                            وبرامجنا لنواكب أحدث المعايير العالمية ونلبي تطلعات عملائنا المتزايدة. خبرتنا الممتدة لسنوات طويلة
                            تضمن لك رحلة آمنة ومنظمة بأعلى درجات الكفاءة والاحترافية.
                        </p>
                        '!!}
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start  last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="imgs/icons/asset-3.png" alt="التميز في الخدمة" class="w-60px">
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">{!! $pageData["service-excellence-title"]??'التميز في الخدمة' !!}</span>
                        {!! $pageData["service-excellence-text"]??'
                        <p class="w-90">نسعى دائمًاً لتقديم أعلى مستويات الخدمة والراحة لضيوفنا، حيث نهتم بأدق التفاصيل في كل رحلة
                            لضمان تجربة استثنائية ومريحة. فريقنا المدرب والمتخصص متاح على مدار 24 ساعة لخدمة عملائنا وتلبية
                            احتياجاتهم في أي وقت. نؤمن أن التميز ليس مجرد هدف نسعى إليه، بل هو أسلوب حياة نعيشه في
                            كل تفصيل من تفاصيل عملنا.
                        </p>
                        '!!}
                    </div>

                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all">
                <div class="feature-box feature-box-left-icon text-start  last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="imgs/icons/asset-7.png" alt="الابتكار والتطوير" class="w-60px">
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">{!! $pageData["innovation-and-evelopment-title"]??'الابتكار والتطوير' !!}</span>
                        {!! $pageData["innovation-and-evelopment-text"]??'
                        <p class="w-90">
                            نستخدم أحدث التقنيات والوسائل الحديثة في تقديم خدماتنا، من حجوزات إلكترونية متطورة إلى
                            تطبيقات ذكية تسهل على ضيوفنا متابعة رحلتهم. نطور باستمرار برامجنا ونبتكر حلولًاً جديدة لتحسين
                            تجربة السفر الدينية وجعلها أكثر يسرًاً وراحة. نؤمن أن الابتكار في الخدمة يجب أن يسير جنبًاً إلى جنب مع
                            احترام التقاليد الدينية لنقدم تجربة عصرية بروح إسلامية أصيلة.
                        </p>
                        '!!}
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box feature-box-left-icon text-start  last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="imgs/icons/asset-5.png" alt="الأصالة المصرية" class="w-60px">
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">{!! $pageData["egyptian-authenticity-title"]??'الأصالة المصرية' !!}</span>
                        {!! $pageData["egyptian-authenticity-text"]??'
                        <p class="w-90">
                            نعتز بهويتنا المصرية العريقة ونحرص على تقديم أصالة الضيافة المصرية الدافئة في كل خدماتنا، حيث
                            نجمع بين الأصالة والحداثة في تقديم تجربة فريدة متطلعة على ثقافتنا الإسلامية الأصيلة من خلال
                            برامج متنوعة ومدروسة.
                        </p>
                        '!!}
                    </div>

                </div>
            </div>
            <!-- end features box item -->

        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-6 sm-pb-9">
            <div class="col-lg-6 col-md-9 position-relative md-mb-15 text-center text-lg-start d-flex align-items-center justify-content-center"
                data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 15, "easing": "easeOutQuad" }'>
                <img src="{{  $pageData['nile-journey-image']?asset("storage/" . $pageData['nile-journey-image']):asset("imgs/journy.jpg")   }}" alt="">
                <img src="{{  $pageData['nile-journey-floating-image']?asset("storage/" . $pageData['nile-journey-floating-image']):asset("imgs/pattern/patt12.png")   }} " class="position-absolute top-50 left-minus-100px lg-left-minus-40px sm-left-minus-30px lg-w-50 sm-w-55" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-220px)" alt="">
                <!-- <img src="images/demo-corporate-02.png" class="position-absolute top-0px xl-top-minus-10px w-170px right-20px md-right-40px xs-w-40" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt=""> -->
            </div>
            <div class="col-lg-5 md-mb-50px" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 800, "delay": 200, "easing": "easeOutCirc" }'>
                <span class="mb-10px text-tussock-yellow fs-22 fw-600 d-block">{!! $pageData["nile-journey-tag"]??'نحمل قلوبكم لبيت الله' !!}</span>
                <h2 class="alt-font text-dark-gray ls-minus-2px">{!! $pageData["nile-journey-title"]??'رحلة نيل مصر عبر ربع قرن من الإنجاز' !!}</h2>
                {!! $pageData["nile-journey-text"]??'
                <p class="mb-35px xs-mb-10px">
                    مسيرة الشركة الكبيرة منذ عام ٢٠٠١ بداية من سياحة المستقدمين الأجانب إلى معالم ومدن مصر السياحية و البدأ في
                    السياحة الدينية للمملكة العربية السعودية لخدمة حجاج و معتمري بيت الله الحرام عام ٢٠٠ ٨ و تقديم أعلى خدمة و أرقى
                    خدمة للعملاء و حتى تكريم الشركة كأفضل شركة حج و عمرة بجمهورية مصر العربية من وزارة السياحة المصرية وتقديم نيل
                    مصر الدعم الكامل والخدمة المتفانية لأكثر من 25 0 ألف حاج ومعتمر .. محطات كثيرة يمكننا الوقوف فيها لعرض النجاحات
                    والتميز الخالص نتيجة العمل المتفاني في خلال ٢٥ عام نستعرض منها القمم القليلة و المحطات المميزة.
                </p>
                ' !!}
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center text-lg-start" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
            <div class="col-xxl-5 col-lg-6 col-md-10 md-mb-50px xs-mb-30px">
                <h3 class="fw-500 text-base-color ls-minus-2px mb-0">{{ $pageData["achievements-quote"]?? 'أعلام خافقة.. وأعمال منفردة لنيل مصر للسياحة' }}</h3>
            </div>
            <div class="col-xxl-2 offset-xxl-1 col-md-3 col-sm-4 text-center xs-mb-30px text-dark-gray fw-600 fs-100 ls-minus-2px text-highlight mb-2">
                {!! $pageData["achievements-years-count"]?? '25' !!}<br><span class="fs-24 text-tussock-yellow">ســنــة</span>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 last-paragraph-no-margin text-center text-sm-start">
                <span class="text-tussock-yellow fs-20 fw-600 d-inline-block mb-5px">{!! $pageData["achievements-title"]?? 'رحلة ربع قرن من الإنجازات' !!}</span>
                {!! $pageData["achievements-text"]?? '
                <p class="">خلال مسيرة نيل مصر عبر العقود .. كان هناك وقفات تستحق
                    التقدير .. خطوات كان بها السبق لنيل مصر في هذا المجال
                    لكونها الشركة الرائدة في قطاع الحج والعمرة نستعرض منهم
                    ما يلي
                </p>
                ' !!}
            </div>
        </div>
        <div class="row sm-mb-30px mt-5">
            <div class="col-12" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                @foreach($pageData['achievements'] as $achievment)
                <div class="row align-items-center pt-40px g-0 pb-40px border-top border-color-transparent-base-color position-relative">
                    <div class="col-md-1 text-start text-md-center sm-mb-20px">
                        <span class="fs-18 alt-font text-dark-gray">{{$loop->iteration}}</span>
                    </div>
                    <div class="col-md-3 d-flex align-items-center sm-mb-20px">
                        <span class="text-tussock-yellow fw-500 fs-30 alt-font">{{ $achievment['title'] }}</span>
                    </div>
                    <div class="col-md-7 offset-md-1 last-paragraph-no-margin">
                        {!! $achievment['text'] !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<section class="pt-6 pb-6 bg-white position-relative overflow-hidden">
    <img src="imgs/pattern/patt6.png" class="position-absolute d-none d-xl-block patt6-spin" style="top: 50%; left: 0; width: 588px; z-index: 0;" alt="">
    <div class="container">
        <!-- Header -->
        <div class="row justify-content-center mb-6 text-center">
            <div class="col-lg-7" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "easing": "easeOutQuad" }'>
                <span class="text-tussock-yellow fs-20 fw-600 d-inline-block ">{!! $pageData["tmeline-tag"] ?? 'ربع قرن من الإنجاز' !!}</span>
                <h2 class="alt-font text-dark-gray fw-500 ls-minus-2px mb-0">{!! $pageData["tmeline-title"] ?? 'الجدول الزمني للمسيرة المتفانية لنيل مصر للسياحة' !!}</h2>
            </div>
        </div>

        <!-- Timeline items -->
        <div class="row" data-anime='{ "el": "childs", "translateY": [25, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>


           @php
                $timeline = $pageData['tmeline'];
                $halves = array_chunk($timeline, ceil(count($timeline) / 2));
            @endphp

            <!-- First Half -->
            <div class="col-lg-6 md-mb-40px">

                @foreach($halves[0] ?? [] as $activity)
                    <div class="vtl-item {{ $loop->last ? 'vtl-last' : '' }}">
                        <div class="vtl-content">
                            <ul class="vtl-list">
                                @foreach($activity['events'] as $event)
                                    <li>{{ $event['event'] }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="vtl-line-col">
                            <div class="vtl-dot"></div>

                            @if(!$loop->last)
                                <div class="vtl-bar"></div>
                            @endif
                        </div>

                        <div class="vtl-year-col">
                            <span class="vtl-year">{{ $activity['year'] }}</span>
                        </div>
                    </div>
                @endforeach

            </div>


            <!-- Second Half -->
            <div class="col-lg-6">

                @foreach($halves[1] ?? [] as $activity)
                    <div class="vtl-item {{ $loop->last ? 'vtl-last' : '' }}">
                        <div class="vtl-content">
                            <ul class="vtl-list">
                                @foreach($activity['events'] as $event)
                                    <li>{{ $event['event'] }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="vtl-line-col">
                            <div class="vtl-dot"></div>

                            @if(!$loop->last)
                                <div class="vtl-bar"></div>
                            @endif
                        </div>

                        <div class="vtl-year-col">
                            <span class="vtl-year">{{ $activity['year'] }}</span>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</section>
<!-- end vertical timeline white section -->

<!-- start section -->
<section class="position-relative" data-parallax-background-ratio="0.5" style="background-image: url({{  $pageData['team-image']?asset("storage/" . $pageData['team-image']):asset("imgs/team.jpg") }});">
    <div class="opacity-medium bg-black"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center min-h-500px">
            <div class="col-12 col-xl-8 col-lg-10 position-relative text-center parallax-scrolling-style-1">
                <h1 class="text-white mx-auto alt-font fw-500 mb-40px ls-minus-2px">{!! $pageData["team-tag"] ?? 'فريق عمل نيل مصر' !!}</h1>
                <span class="fw-500 text-yellow mb-5px d-inline-block ls-1px">{!! $pageData["team-title"] ?? 'فريق العمل المؤهل والمدرب هو حجر الأساس لأي' !!}</span>
                <div class="text-white">
                {!! $pageData["team-text"] ?? '
                في نيل مصر للسياحة، يقف فريقنا المكوّّن من نحو
                    ٨٥ موظفًًا من المشرفين والمديرين ومجلس الإدارة
                    وكافة فرق العمل كتفًًا بكتف، بخبرة وكفاءة عالية،
                    لتقديم الخدمة اللائقة والدعم الكامل لكل قلب
                    قََصد بيت الله معتمرًًا كان أو حاجًًا، بكل همة وإخلاص
                    وتفانٍٍ، لتوفير الروحانيات التي تليق بهذه الرحلة
                    المقدسة، مدريكين، بل عارفين بمدى تميز تلك الرحلة
                    عن أي رحلة ومدى اختلاف تلك الوظيفة و الخدمة عن
                    أي وظيفة أخرى أو خدمة أخرى، نستعرض هنا الهيكل
                    الوظيفي والإداري المؤهل والمدرب بخبرة أكثر من
                    ٢٤ عام.
                    ' !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- end section -->
<!-- start section -->
<section class="half-section">
    <div class="container">
        <div class="row position-relative z-index-1 m-0">
            <div class="col-12 position-relative overflow-hidden border-radius-6px h-700px lg-h-550px md-h-400px d-flex align-items-center justify-content-center">
                <video muted class="video-bg html-video border-radius-6px video-play-icon" poster="{{$pageData['video_poster']?asset("storage/" . $pageData['video_poster']):asset("imgs/banner-1.jpg")}}">
                    <source type="video/mp4" src="video/video2.mp4" />
                    <source type="video/webm" src="video/video2.webm" />
                </video>
                <a href="{{$pageData['video']}}" class="html-video-play video-icon-box video-icon-extra-large position-relative">
                    <span>
                        <span class="video-icon bg-white">
                            <i class="play-icon feather icon-feather-play text-dark-gray ms-0" aria-hidden="true"></i>
                            <i class="pause-icon feather icon-feather-pause text-dark-gray ms-0" aria-hidden="true"></i>
                            <span class="video-icon-sonar">
                                <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
            <!-- <div class="col-12 text-center position-absolute left-0px bottom-minus-100px md-bottom-minus-80px z-index-9">
                        <img src="images/demo-hotel-and-resort-about-us-09.png" alt="" data-bottom-top="transform: translate3d(100px, 0px, 0px);" data-top-bottom="transform: translate3d(-100px, 0px, 0px);" />
                    </div> -->
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
@include('footer', ["siteData" => $siteData])
