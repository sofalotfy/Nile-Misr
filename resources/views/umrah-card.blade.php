<?php
function umrah_card($program) {
    // Determine the lowest price to display on the image
    $starting_price = $program['price_quad'];
    if (empty($starting_price)) $starting_price = $program['price_triple'];
    if (empty($starting_price)) $starting_price = $program['price_double'];
    if (empty($starting_price)) $starting_price = $program['price_single'];
?>
<div class="card border-0 border-radius-8px box-shadow-quadruple-large overflow-hidden h-100 w-100">
    <div class="position-relative">
        <img src="<?php echo $program['image']; ?>" class="w-100" alt="<?php echo $program['name']; ?>">
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
                <a href="umrah-details.php" class="btn btn-transparent-dark-gray border-1 border-color-dark-gray btn-small btn-rounded flex-grow-1 text-center">التفاصيل</a>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
