@include('header');

@include('umrah-data.php');

<!-- start page title -->
<section class="page-title-separate-breadcrumbs cover-background top-space-margin position-relative" style="background-image: url(imgs/umrah.jpg)">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center position-relative page-title-extra-large">
                <div class="d-flex flex-column small-screen">
                    <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-600 ls-minus-1px">برامج العمرة 1447 هـ</h1>
                        <p class="fs-20 text-white opacity-7 md-w-80 sm-w-100 mt-1">رحلة روحانية تبدأ بالنية... وتكتمل بخدمة تليق بضيوف الرحمن.</p>
                    </div>
                    <!-- start breadcrumb -->
                    <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                        <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li><a href="index.php" class="text-white">الرئيسية</a></li>
                            <li>برامج العمرة 1447 هـ</li>
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
                                <button class="duration-card" data-value="6">6 أيام / 5 ليالي</button>
                                <button class="duration-card" data-value="8">8 أيام / 7 ليالي</button>
                                <button class="duration-card" data-value="10">10 أيام / 9 ليالي</button>
                                <button class="duration-card" data-value="15">15 يوم / 14 ليلة</button>
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
                        <p class="text-base-color fw-600 fs-20 ls-minus-1px mb-0">جميع البرامج تشمل قطار الحرمين السريع والافطار بمكة</p>
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
                    <div class="umrah-section-badge">
                        <span class="fs-28 fw-800 text-white lh-1">6</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">أيام</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">6 أيام</span> / 5 ليالي</h2>
                        <p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>
                    </div>
                </div>
                <div class="umrah-section-line mt-3"></div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                <?php include_once 'umrah-card.php'; ?>
                <?php foreach ($umrah_programs as $program): if ($program['duration_days'] !== 6) continue; ?>
                    <div class="col program-item" data-duration="<?php echo $program['duration_days']; ?>" data-name="<?php echo $program['name']; ?>">
                        <?php umrah_card($program); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> <span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>
            </div>
        </div>

        <!-- ========================================================
            8-DAY SECTION
        ======================================================== -->
        <div class="umrah-section mt-70px" id="section-8" data-section-duration="8">
            <div class="umrah-section-header mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="umrah-section-badge">
                        <span class="fs-28 fw-800 text-white lh-1">8</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">أيام</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">8 أيام</span> / 7 ليالي</h2>
                        <p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>
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
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> <span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>
            </div>
        </div>

        <!-- ========================================================
             10-DAY SECTION
        ======================================================== -->
        <div class="umrah-section mt-70px" id="section-10" data-section-duration="10">
            <div class="umrah-section-header mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="umrah-section-badge">
                        <span class="fs-28 fw-800 text-white lh-1">10</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">أيام</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">10 أيام</span> / 9 ليالي</h2>
                        <p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>
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
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> <span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>
            </div>
        </div>

        <!-- ========================================================
             15-DAY SECTION
        ======================================================== -->
        <div class="umrah-section mt-70px" id="section-15" data-section-duration="15">
            <div class="umrah-section-header mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="umrah-section-badge">
                        <span class="fs-28 fw-800 text-white lh-1">15</span>
                        <span class="fs-11 fw-600 text-white opacity-8 d-block">يوم</span>
                    </div>
                    <div>
                        <h2 class="alt-font fs-28 fw-700 text-dark-gray mb-0 ls-minus-1px">برامج <span class="text-tussock-yellow">15 يوم</span> / 14 ليلة</h2>
                        <p class="fs-14 text-medium-gray mb-0 mt-1">مستوى خمس نجوم — <strong class="text-dark-gray">13 , 20 , 24 أغسطس 2026</strong></p>
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
            <div class="col-xl-10 col-md-9 text-center mt-3" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> <span class="fs-20 mt-2 text-base-color fw-500 d-block">تم احتساب سعر تذكرة داخل البرنامج 16000 جنيه</span>
                <span class="fs-20 text-base-color fw-500 d-block">تم احتساب سعر صرف الريال داخل البرنامج 14 جنية مصري</span>
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

@include('footer');