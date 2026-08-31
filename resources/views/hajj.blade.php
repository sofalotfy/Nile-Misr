@include('header')
@php
    use App\Enums\HajjPackageLevel;
    use App\Enums\HajjPackageDuration;


@endphp


<!-- start page title -->
<section
    class="page-title-separate-breadcrumbs cover-background top-space-margin position-relative" top-space-margin" data-parallax-background-ratio="0.5"
    style="background-image: url({{ !empty($pageData['hero-image'])
        ? asset('storage/' . $pageData['hero-image'])
        : asset('imgs/hijj-banner.jpg') }})"
>
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">

                <div class="d-flex flex-column small-screen">

                    <div class="">
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">
                            {!! $pageData['hero-title'] ?? 'برامج الحج 1448هـ' !!}
                        </h1>

                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">
                            {!! $pageData['hero-sub-title'] ?? 'رحلة العمر تبدأ بخطوة... ونحن نرافقكم في كل خطوة نحو بيت الله الحرام.' !!}
                        </p>
                    </div>

                    <div class=" justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul>
                            <li>
                                <a href="{{ url('/') }}" class="text-white">
                                    الرئيسية
                                </a>
                            </li>

                            <li>
                                {!! $pageData['hero-title'] ?? 'برامج الحج 1448هـ' !!}
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="bg-very-light-gray pb-0">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-9 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- <span class="fs-20 mb-15px text-base-color fw-500 d-block">Life around great food</span> -->
                <h4 class="alt-font text-base-color ls-minus-1px mb-0">{{ $pageData['description'] ?? 'جميع البرامج تشمل أيام المناسك تشمل الانتقال بقطار الحرمين السريع - القاهرة - جدة / المدينة - القاهرة - لا تشمل تذكرة الطيران' }}</h4>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start filters section -->
<section class="pt-5 pb-5 bg-very-light-gray" id="hajj-programs">
    <div class="container">
        <!-- <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-1px">اختر <span class="fw-700 text-highlight d-inline-block">برنامجك<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
            </div>
        </div> -->

        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <div class="d-flex flex-wrap align-items-end gap-4">

                    <!-- Search Bar -->
                    <div class="hajj-search-bar">
                        <span class="hajj-filter-label">البحث</span>
                        <div class="position-relative">
                            <i class="feather icon-feather-search search-icon"></i>
                            <input type="text" id="search-input" placeholder="ابحث عن برنامج...">
                        </div>
                    </div>

                    <!-- Category Filter -->
                    <div class="custom-select-wrapper" id="filter-category">
                        <span class="hajj-filter-label">مستوى البرنامج</span>
                        <div class="custom-select-trigger" id="cs-category-trigger">
                            <span id="cs-category-label">جميع المستويات</span>
                            <i class="feather icon-feather-chevron-down cs-arrow"></i>
                        </div>
                        <div class="custom-select-dropdown">
                            <ul>
                                <li><a class="selected" data-value="all">جميع المستويات</a></li>
                                @foreach (HajjPackageLevel::cases() as $level)
                                    <li>
                                        <a data-value="{{ $level->value }}">
                                            {{ $level->label() }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Duration Filter -->
                    <div class="custom-select-wrapper" id="filter-duration">
                        <span class="hajj-filter-label">مدة البرنامج</span>
                        <div class="custom-select-trigger" id="cs-duration-trigger">
                            <span id="cs-duration-label">جميع المدد</span>
                            <i class="feather icon-feather-chevron-down cs-arrow"></i>
                        </div>
                        <div class="custom-select-dropdown">
                            <ul>
                                <li><a class="selected" data-value="all">جميع المدد</a></li>
                                @foreach (HajjPackageDuration::cases() as $duration)
                                    <li>
                                        <a data-value="{{ $duration->value }}">
                                            {{ $duration->value }} يوم
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- start programs grid -->
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4" id="programs-grid">
            <?php foreach ($hajj_programs as $program): ?>
                <div class="col program-item" data-category="<?php echo $program['category']; ?>" data-duration="<?php echo $program['duration_value']; ?>" data-name="<?php echo $program['name']; ?>">
                    <div class="card border-0 border-radius-8px box-shadow-quadruple-large overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?php echo "storage/" . $program['image']; ?>" class="w-100" alt="<?php echo $program['name']; ?>">
                            <!-- <div class="position-absolute top-0 left-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 50%, rgba(0,0,0,0.8) 100%);"></div> -->
                            <div class="opacity-medium bg-black"></div>
                            <div class="position-absolute top-20px right-20px bg-tussock-yellow text-white fs-12 fw-600 border-radius-30px pt-5px pb-5px ps-15px pe-15px z-index-1">
                                <?php echo $program['category']; ?>
                            </div>

                            <div class="position-absolute bottom-10px w-100 px-4 text-white fs-16 fw-600 z-index-1">
                                <span class="fs-13 d-block"> تبدأ من</span>
                                <div class="fs-24 fw-800 text-white"><?php echo $program['price']; ?> <span class="fs-14 fw-600 text-white">جنية</span></div>
                                <!-- <i class="feather icon-feather-map-pin text-white me-5px"></i> مكة - المدينة -->
                            </div>
                        </div>
                        <div class="card-body p-9 d-flex flex-column pt-10px">
                            <h3 class="fs-20 fw-700 text-dark-gray mb-15px"><?php echo $program['name']; ?></h3>

                            <ul class=" fs-14 fw-500 mb-20px px-0">
                                <li class="pb-10px">
                                    <i class="feather icon-feather-clock text-tussock-yellow me-10px"></i>المدة: <?php echo $program['duration']; ?>
                                </li>
                                <li class="pb-10px">
                                    <i class="feather icon-feather-calendar text-tussock-yellow me-10px"></i>التاريخ: <?php echo $program['date']; ?>
                                </li>
                                <li class="pb-10px">
                                    <i class="feather icon-feather-map-pin text-tussock-yellow me-10px"></i> فندق مكة: <?php echo $program['hotel_makkah']; ?>
                                </li>
                                <li class="pb-10px">
                                    <i class="feather icon-feather-map-pin text-tussock-yellow me-10px"></i> فندق المدينة: <?php echo $program['hotel_madinah']; ?>
                                </li>
                            </ul>

                            <div class="d-flex align-items-center gap-2 w-100 border-top border-color-extra-medium-gray pt-20px mt-auto">
                                <?php
                                $h_price_single = 0;
                                $h_price_double = 0;
                                $h_price_triple = 0;
                                $h_price_quad = 0;
                                if (preg_match('/خماسي:\s*([\d,]+)/', $program['price_details'], $m) || preg_match('/رباعي.*?:\s*([\d,]+)/', $program['price_details'], $m) || preg_match('/رباعي:\s*([\d,]+)/', $program['price_details'], $m)) $h_price_quad = str_replace(',', '', $m[1]);
                                if (preg_match('/ثلاثــــــــي:\s*([\d,]+)/', $program['price_details'], $m)) $h_price_triple = str_replace(',', '', $m[1]);
                                if (preg_match('/ثنائـــــــــي:\s*([\d,]+)/', $program['price_details'], $m)) $h_price_double = str_replace(',', '', $m[1]);
                                if (preg_match('/فردي:\s*([\d,]+)/', $program['price_details'], $m)) $h_price_single = str_replace(',', '', $m[1]);
                                ?>
                                <a href="javascript:void(0);"
                                    class="btn btn-yellow btn-small btn-rounded btn-box-shadow flex-grow-1 open-booking-modal"
                                    data-package-id="<?php echo $program['id']; ?>"
                                    data-type="hajj"
                                    data-name="<?php echo htmlspecialchars($program['name']); ?>"
                                    data-date="<?php echo htmlspecialchars($program['date']); ?>"
                                    data-duration="<?php echo htmlspecialchars($program['duration']); ?>"
                                    data-category="<?php echo htmlspecialchars($program['category']); ?>"
                                    data-price-single="<?php echo $h_price_single; ?>"
                                    data-price-double="<?php echo $h_price_double; ?>"
                                    data-price-triple="<?php echo $h_price_triple; ?>"
                                    data-price-quad="<?php echo $h_price_quad; ?>">احجز الآن</a>
                                <a href="/hajj/<?= $program['id'] ?>" class="btn btn-transparent-dark-gray border-1 border-color-dark-gray btn-small btn-rounded flex-grow-1 text-center">التفاصيل</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- end programs grid -->

        <!-- No results message -->
        <div id="no-results" class="text-center mt-5 d-none">
            <h3 class="fs-24 fw-600 text-dark-gray">عفواً، لا توجد برامج مطابقة لبحثك.</h3>
            <p class="fs-16 text-medium-gray">حاول تغيير خيارات البحث.</p>
        </div>

    </div>
</section>
<!-- end filters section -->

<!-- Filter Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const programItems = document.querySelectorAll('.program-item');
        const noResults = document.getElementById('no-results');
        const searchInput = document.getElementById('search-input');

        let selectedCategory = 'all';
        let selectedDuration = 'all';
        let searchQuery = '';

        function filterPrograms() {
            let visibleCount = 0;
            programItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                const itemDuration = item.getAttribute('data-duration');
                const itemName = item.getAttribute('data-name') || '';

                const categoryMatch = (selectedCategory === 'all' || selectedCategory === itemCategory);
                const durationMatch = (selectedDuration === 'all' || selectedDuration === itemDuration);
                const searchMatch = (searchQuery === '' || itemName.includes(searchQuery));

                if (categoryMatch && durationMatch && searchMatch) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            noResults.classList.toggle('d-none', visibleCount > 0);
        }

        // Custom Select logic
        function initCustomSelect(wrapperId, labelId, onSelect) {
            const wrapper = document.getElementById(wrapperId);
            if (!wrapper) return;
            const trigger = wrapper.querySelector('.custom-select-trigger');
            const label = document.getElementById(labelId);
            const options = wrapper.querySelectorAll('.custom-select-dropdown a');

            trigger.addEventListener('click', function(e) {
                e.stopPropagation();
                // Close others
                document.querySelectorAll('.custom-select-wrapper.open').forEach(w => {
                    if (w !== wrapper) w.classList.remove('open');
                });
                wrapper.classList.toggle('open');
            });

            options.forEach(opt => {
                opt.addEventListener('click', function(e) {
                    e.preventDefault();
                    const val = this.getAttribute('data-value');
                    const text = this.textContent;
                    label.textContent = text;
                    options.forEach(o => o.classList.remove('selected'));
                    this.classList.add('selected');
                    wrapper.classList.remove('open');
                    onSelect(val);
                    filterPrograms();
                });
            });
        }

        initCustomSelect('filter-category', 'cs-category-label', function(val) {
            selectedCategory = val;
        });
        initCustomSelect('filter-duration', 'cs-duration-label', function(val) {
            selectedDuration = val;
        });

        // Close dropdowns on outside click
        document.addEventListener('click', function() {
            document.querySelectorAll('.custom-select-wrapper.open').forEach(w => w.classList.remove('open'));
        });

        // Search input
        searchInput.addEventListener('input', function() {
            searchQuery = this.value.trim();
            filterPrograms();
        });
    });
</script>

@include('footer')
