<!doctype html>
<html class="no-js" dir="rtl" lang="en">
    <head>
        <title> Nile Misr </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Nile Masr">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="imgs/icon.png">
        <link rel="apple-touch-icon" href="imgs/icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="imgs/icon.png">
        <link rel="apple-touch-icon" sizes="114x114" href="imgs/icon.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="css/vendors.min.css"/>
        <link rel="stylesheet" href="css/icon.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="rtl-css/style-rtl.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>
        <link rel="stylesheet" href="demos/hotel-and-resort/hotel-and-resort.css" />
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    </head>
    <body data-mobile-nav-style="classic">
        <!-- ═══════════════════════════════════════════════════════════════════
             CINEMATIC FADE-IN — continues the intro outro seamlessly.
             1. Inline <style> fires before first paint → page invisible
             2. Script transitions opacity to 1 after DOM is ready
             No GSAP dependency needed here.
        ═══════════════════════════════════════════════════════════════════ -->
        <style>
            body { opacity: 0; transition: opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1); }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Short rAF delay ensures transition runs after first paint
                requestAnimationFrame(function () {
                    requestAnimationFrame(function () {
                        document.body.style.opacity = '1';
                    });
                });
            });
        </script>
        <!-- start header -->
        <header> 
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white header-reverse glass-effect" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand section-link" href="#home">
                            <img src="imgs/logo.png" data-at2x="imgs/logo.png" alt="" class="default-logo">
                            <img src="imgs/logo.png" data-at2x="imgs/logo.png" alt="" class="alt-logo">
                            <img src="imgs/logo.png" data-at2x="imgs/logo.png" alt="" class="mobile-logo"> 
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav"> 
                            <ul class="navbar-nav"> 
                                <li class="nav-item"><a href="index.php" class="nav-link">الرئيسية</a></li>
                                <li class="nav-item"><a href="about.php" class="nav-link">من نحن؟</a></li>
                                <li class="nav-item"><a href="services.php" class="nav-link">خدماتنا</a></li>
                                <li class="nav-item"><a href="moderators.php" class="nav-link">المشرفين</a></li>
                                <li class="nav-item"><a href="hajj.php" class="nav-link">برامج الحج</a></li>
                                <li class="nav-item"><a href="umrah.php" class="nav-link">برامج العمرة</a></li>
                                <li class="nav-item"><a href="why-nile-misr.php" class="nav-link">لماذا نيل مصر؟</a></li>
                                <li class="nav-item"><a href="user-review.php" class="nav-link">أراء العملاء</a></li>
                                <li class="nav-item"><a href="media.php" class="nav-link">المركز الإعلامي</a></li>
                                <li class="nav-item"><a href="contact.php" class="nav-link">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-xxl-2 col-lg-2 text-end d-none d-sm-flex">
                        <div class="header-icon">
                            <div class="d-none d-xxl-inline-block me-25px xxl-me-10px"><div class="fs-15 xl-fs-13 widget-text fw-500"><span class="w-35px h-35px bg-yellow d-inline-block lh-36 me-10px border-radius-100px"><i class="feather icon-feather-phone me-10px"></i></span><a href="tel:+19740" class="widget-text text-white-hover fw-600 fs-18">19740</a></div></div>
                            <div class="header-button"><a href="javascript:void(0);" class="btn btn-small btn-yellow btn-rounded" data-bs-toggle="modal" data-bs-target="#quickBookingModal">احـجــــــز الآن</a></div>
                        </div>  
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->