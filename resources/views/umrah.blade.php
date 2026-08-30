@include('header')
@php
    use App\Enums\StayDuration;
@endphp
<?php
function umrah_card($program)
        {
            // Determine the lowest price to display on the image
            $starting_price = $program['price_quad'];
            if (empty($starting_price)) $starting_price = $program['price_triple'];
            if (empty($starting_price)) $starting_price = $program['price_double'];
            if (empty($starting_price)) $starting_price = $program['price_single'];
        ?>
<div class="card border-0 border-radius-8px box-shadow-quadruple-large overflow-hidden h-100 w-100">
    <div class="position-relative">
        <img src="<?php echo "storage/" . $program['image']; ?>" class="w-100" alt="<?php echo $program['name']; ?>">
        <div class="opacity-medium bg-black"></div>

        <div class="position-absolute bottom-10px w-100 px-4 text-white fs-16 fw-600 z-index-1">
            <span class="fs-13 d-block"> تبدأ من</span>
            <div class="fs-24 fw-800 text-white"><?php echo $starting_price; ?> <span class="fs-14 fw-600 text-white">جنية</span></div>
        </div>
    </div>
    <div class="card-body p-9 d-flex flex-column flex-grow-1">
        <div class="d-flex justify-content-between align-items-start mb-15px">
            <h3 class="fs-19 fw-700 text-dark-gray mb-0 lh-sm"><?php echo $program['name']; ?></h3>
        </div>

        <ul class="fs-14 fw-500 mb-15px px-0">
            <li class="pb-5px">
                <i class="feather icon-feather-clock text-tussock-yellow me-10px"></i><?php echo $program['duration']; ?>
            </li>
            <li class="pb-5px">
                <i class="feather icon-feather-map-pin text-tussock-yellow me-10px"></i> مكة: <?php echo $program['hotel_makkah']; ?></span>
            </li>
            <li class="pb-5px">
                <i class="feather icon-feather-map-pin text-tussock-yellow me-10px"></i> المدينة: <?php echo $program['hotel_madinah']; ?>  </span>
            </li>
        </ul>

        <div class="fs-14 fw-500 px-0 pt-15px mt-auto border-top border-color-extra-medium-gray pt-20px">
            <div class="d-flex align-items-center gap-2 w-100">
                <a href="javascript:void(0);"
                   class="btn btn-yellow btn-small btn-rounded btn-box-shadow flex-grow-1 open-booking-modal"
                   data-package-id="<?php echo $program['id']; ?>"
                   data-type="umrah"
                   data-name="<?php echo htmlspecialchars($program['name']); ?>"
                   data-date="<?php echo htmlspecialchars(implode(' , ', $program['dates'])); ?>"
                   data-duration="<?php echo htmlspecialchars($program['duration']); ?>"
                   data-category="<?php echo htmlspecialchars($program['category']); ?>"
                   data-price-single="<?php echo $program['price_single'] ?? 0; ?>"
                   data-price-double="<?php echo $program['price_double'] ?? 0; ?>"
                   data-price-triple="<?php echo $program['price_triple'] ?? 0; ?>"
                   data-price-quad="<?php echo $program['price_quad'] ?? 0; ?>"
                >احجز الآن</a>
                <a href="/umrah/<?= $program['id'] ?>" class="btn btn-transparent-dark-gray border-1 border-color-dark-gray btn-small btn-rounded flex-grow-1 text-center">التفاصيل</a>
            </div>
        </div>
    </div>
</div>
<?php
        }
    ?>
<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background top-space-margin position-relative" style="background-image: url({{$pageData['hero-image']?asset('storage/' . $pageData['hero-image']):asset('imgs/umrah.jpg')}})">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">{{$pageData['hero-title']??"برامج العمرة 1447 هـ"}}</h1>
                        <p class="fs-20 text-white md-w-80 sm-w-100 mt-1">{{$pageData['hero-sub-title']??"رحلة روحانية تبدأ بالنية... وتكتمل بخدمة تليق بضيوف الرحمن."}}</p>
                    </div>
                    <!-- start breadcrumb -->
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li><a href="/" class="text-white">الرئيسية</a></li>
                            <li>{{$pageData['hero-title']??"برامج العمرة 1447 هـ"}}</li>
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
<!-- <section class="bg-very-light-gray pb-0">
            <div class="container overlap-gap-section">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-md-9 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h4 class="alt-font text-base-color ls-minus-1px mb-0">جميع البرامج تشمل قطار الحرمين السريع والافطار بمكة</h4>
                        <span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                        <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>
                    </div>
                </div>
            </div>
        </section> -->
<!-- end section -->
<!-- start filters section -->
<section class="pt-5 pb-5 bg-very-light-gray" id="umrah-programs">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <div class="d-flex flex-column gap-4 w-100">

                    <!-- Filters and Search in one row -->
                    <div class="d-flex flex-wrap justify-content-between align-items-center w-100 gap-3">

                        <!-- Duration Filter Cards -->
                        <div class="duration-filter-wrapper">
                            <div class="d-flex flex-wrap gap-3" id="filter-duration-cards">
                                <button class="duration-card active" data-value="all">جميع المدد</button>
                                @foreach (StayDuration::cases() as $duration)
                                    <button class="duration-card" data-value="{{ $duration->integer() }}">{{ $duration->value }}</button>
                                @endforeach
                            </div>
                        </div>

                        <!-- Expandable Search Bar -->
                        <div class="expandable-search-wrapper" id="expandable-search">
                            <button type="button" class="search-toggle-btn" id="search-toggle-btn">
                                <i class="feather icon-feather-search"></i>
                            </button>
                            <div class="expandable-input-wrap">
                                <input type="text" id="search-input" class="expandable-input" placeholder="ابحث عن برنامج...">
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <p class="text-base-color fw-600 fs-20 ls-minus-1px mb-0"><{{  $pageData['note']??"جميع البرامج تشمل قطار الحرمين السريع والافطار بمكة" }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========================================================
        6-DAY SECTION
        ======================================================== -->
        <div class="umrah-section" id="section-6" data-section-duration="6">
            <div class="umrah-section-header mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="umrah-section-badge d-none d-md-flex">
                        <span class="fs-28 fw-800 text-white lh-1">6</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">أيام</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">6 أيام</span> / 5 ليالي</h2>
                        {!!$pageData['six-days-note']??'<p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>'!!}
                    </div>
                </div>
                <div class="umrah-section-line mt-3"></div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                <?php foreach ($umrah_programs as $program): if ($program['duration_days'] !== 6) continue; ?>
                    <div class="col program-item" data-duration="<?php echo $program['duration_days']; ?>" data-name="<?php echo $program['name']; ?>">
                        <?php umrah_card($program); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                {!! $pageData['footer-six-days-note']??'<span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>' !!}
            </div>
        </div>

        <!-- ========================================================
            8-DAY SECTION
        ======================================================== -->
        <div class="umrah-section mt-70px" id="section-8" data-section-duration="8">
            <div class="umrah-section-header mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="umrah-section-badge d-none d-md-flex">
                        <span class="fs-28 fw-800 text-white lh-1">8</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">أيام</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">8 أيام</span> / 7 ليالي</h2>
                        {!!$pageData['eight-days-note']??'<p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>'!!}
                    </div>
                </div>
                <div class="umrah-section-line mt-3"></div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                <?php foreach ($umrah_programs as $program): if ($program['duration_days'] !== 8) continue; ?>
                    <div class="col program-item" data-duration="<?php echo $program['duration_days']; ?>" data-name="<?php echo $program['name']; ?>">
                        <?php umrah_card($program); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                {!! $pageData['footer-eight-days-note']??
                '<span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>'
                !!}
            </div>
        </div>

        <!-- ========================================================
            10-DAY SECTION
        ======================================================== -->
        <div class="umrah-section mt-70px" id="section-10" data-section-duration="10">
            <div class="umrah-section-header mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="umrah-section-badge d-none d-md-flex">
                        <span class="fs-28 fw-800 text-white lh-1">10</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">أيام</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">10 أيام</span> / 9 ليالي</h2>
                        <p class="fs-14 text-medium-gray mb-0 mt-1">{{ $pageData['ten-days-note']??"مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong>"}}</p>

                    </div>
                </div>
                <div class="umrah-section-line mt-3"></div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                <?php foreach ($umrah_programs as $program): if ($program['duration_days'] !== 10) continue; ?>
                    <div class="col program-item" data-duration="<?php echo $program['duration_days']; ?>" data-name="<?php echo $program['name']; ?>">
                        <?php umrah_card($program); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                {!! $pageData['footer-six-days-note']??'<span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>' !!}
            </div>
        </div>

        <!-- ========================================================
             15-DAY SECTION
        ======================================================== -->
        <div class="umrah-section mt-70px" id="section-15" data-section-duration="15">
            <div class="umrah-section-header mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="umrah-section-badge d-none d-md-flex">
                        <span class="fs-28 fw-800 text-white lh-1">15</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">يوم</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">15 يوم</span> / 14 ليلة</h2>
                        {!!$pageData['eight-days-note']??'<p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>'!!}
                    </div>
                </div>
                <div class="umrah-section-line mt-3"></div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                <?php foreach ($umrah_programs as $program): if ($program['duration_days'] !== 15) continue; ?>
                    <div class="col program-item" data-duration="<?php echo $program['duration_days']; ?>" data-name="<?php echo $program['name']; ?>">
                        <?php umrah_card($program); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                {!! $pageData['footer-six-days-note']??'<span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>' !!}
            </div>
        </div>

        <!-- No results message -->
        <div id="no-results" class="text-center mt-5 d-none">
            <h3 class="fs-24 fw-600 text-dark-gray">عفواً، لا توجد برامج مطابقة لبحثك.</h3>
            <p class="fs-16 text-medium-gray">حاول تغيير خيارات البحث.</p>
        </div>

    </div>
</section>
<!-- end filters section -->

<!-- Custom CSS for Umrah Section Headers -->
<style>
    .umrah-section-badge {
        /* width: 56px; */
        /* height: 56px; */
        /* min-width: 56px; */
        padding: 10px 20px;
        background: linear-gradient(135deg, #c59b46, #a07830);
        border-radius: 12px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(197, 155, 70, 0.35);
    }

    .umrah-section-line {
        height: 3px;
        background: linear-gradient(90deg, #c59b46, rgba(197, 155, 70, 0.15));
        border-radius: 2px;
    }

    .mt-70px {
        margin-top: 70px;
    }

    /* Duration Filter Cards */
    .duration-card {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 24px;
        background: #ffffff;
        border: 1.5px solid #eaeaea;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
        color: #444;
        transition: all 0.3s ease;
        cursor: pointer;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
    }

    .duration-card:hover {
        border-color: rgba(197, 155, 70, 0.5);
        background: #fdfaf5;
    }

    .duration-card.active {
        border-color: #c59b46;
        background: var(--tussock-yellow);
        color: var(--base-color);
        box-shadow: 0 4px 15px rgba(197, 155, 70, 0.25);
    }

    /* Price table inside card */
    .umrah-price-table {
        border: 1.5px solid #f0e8d8;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 18px;
    }

    .umrah-price-table .price-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 7px 14px;
        font-size: 13px;
        font-weight: 500;
        color: #555;
        border-bottom: 1px solid #f0e8d8;
    }

    .umrah-price-table .price-row:last-child {
        border-bottom: none;
    }

    .umrah-price-table .price-row:nth-child(odd) {
        background: #fdfaf5;
    }

    .umrah-price-table .price-row .price-label {
        color: #888;
    }

    .umrah-price-table .price-row .price-val {
        font-weight: 700;
        color: #c59b46;
    }

    /* Date chips */
    .umrah-dates {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-bottom: 14px;
    }

    .umrah-dates .date-chip {
        background: #f7f2e9;
        border: 1px solid #e8d9b8;
        border-radius: 20px;
        padding: 3px 10px;
        font-size: 12px;
        font-weight: 600;
        color: #a07830;
    }
</style>

<!-- Filter Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const programItems = document.querySelectorAll('.program-item');
        const sections = document.querySelectorAll('.umrah-section');
        const noResults = document.getElementById('no-results');
        const searchInput = document.getElementById('search-input');

        let selectedDuration = 'all';
        let searchQuery = '';

        function filterPrograms() {
            let totalVisible = 0;

            sections.forEach(section => {
                const sectionDuration = section.getAttribute('data-section-duration');
                const sectionDurationMatch = (selectedDuration === 'all' || selectedDuration === sectionDuration);

                let sectionVisible = 0;
                const items = section.querySelectorAll('.program-item');

                items.forEach(item => {
                    const itemName = item.getAttribute('data-name') || '';
                    const searchMatch = (searchQuery === '' || itemName.includes(searchQuery));

                    if (sectionDurationMatch && searchMatch) {
                        item.style.display = 'block';
                        sectionVisible++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Show/hide entire section
                if (sectionDurationMatch && sectionVisible > 0) {
                    section.style.display = 'block';
                } else if (!sectionDurationMatch) {
                    section.style.display = 'none';
                } else {
                    section.style.display = 'block'; // keep visible, items hidden
                }

                totalVisible += sectionVisible;
            });

            noResults.classList.toggle('d-none', totalVisible > 0);
        }

        // Duration Cards Logic
        const durationCards = document.querySelectorAll('.duration-card');
        durationCards.forEach(card => {
            card.addEventListener('click', function() {
                // Remove active class from all
                durationCards.forEach(c => c.classList.remove('active'));
                // Add active class to clicked
                this.classList.add('active');
                // Set selected value and filter
                selectedDuration = this.getAttribute('data-value');
                filterPrograms();
            });
        });

        // Search input
        searchInput.addEventListener('input', function() {
            searchQuery = this.value.trim();
            filterPrograms();
        });

        // Expandable Search Toggle
        const searchToggleBtn = document.getElementById('search-toggle-btn');
        const expandableSearch = document.getElementById('expandable-search');
        searchToggleBtn.addEventListener('click', function(e) {
            if (!expandableSearch.classList.contains('active')) {
                expandableSearch.classList.add('active');
                setTimeout(() => {
                    searchInput.focus();
                }, 100);
            } else {
                if (searchInput.value.trim() === '') {
                    expandableSearch.classList.remove('active');
                } else {
                    // If it has text, maybe clear it on button click?
                    // Or just keep it. Let's just focus again.
                    searchInput.focus();
                }
            }
        });

        // Close on outside click
        document.addEventListener('click', function(e) {
            if (!expandableSearch.contains(e.target)) {
                if (searchInput.value.trim() === '') {
                    expandableSearch.classList.remove('active');
                }
            }
        });
    });
</script>

@include('footer')
