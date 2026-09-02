<!doctype html>
<html class="no-js" dir="rtl" lang="en">
    <head>
        <title>Nile Misr</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Nile Masr">

        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('imgs/icon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('imgs/icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('imgs/icon.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('imgs/icon.png') }}">

        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- style sheets and font icons -->
        <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('rtl-css/style-rtl.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ asset('demos/hotel-and-resort/hotel-and-resort.css') }}"/>

        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>


        <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

        <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    </head>

    <body data-mobile-nav-style="classic">

        <style>
            body {
                opacity: 0;
                transition: opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1);
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                requestAnimationFrame(function () {
                    requestAnimationFrame(function () {
                        document.body.style.opacity = '1';
                    });
                });
            });
        </script>
        <!-- start header -->
        <header class="header-with-topbar">
            <div class="header-top-bar top-bar-dark bg-base-color">
                <div class="container">
                    <div class="row h-45px align-items-center m-0">
                        <div class="col-12 fw-500 justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="text-end d-none d-md-flex fs-15">
                                    <div  class="elements-social mt-auto text-center text-md-start ps-lg-0" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                        <ul class="small-icon light">
                                            @if(!empty($siteData['tiktok']))
                                                <li class="m-0">
                                                    <a class=""href= "{{ $siteData['tiktok'] }}" target="_blank" rel="noopener noreferrer">
                                                        <i class="fa-brands fa-tiktok"></i>
                                                        <span></span>
                                                    </a>
                                                </li>
                                            @endif

                                            @if(!empty($siteData['twitter']))
                                                <li class="m-0">
                                                    <a
                                                        class=""
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
                                                        class=""
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
                                                        class=""
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
                                <span class="ms-25px fs-15">
                                    <i class="feather icon-feather-phone-call text-white me-10px"></i><a href="tel:{{ $siteData['hotline'] }}" class="text-white">{{ $siteData['hotline'] }}</a>
                                </span>
                            </div>

                            <div>
                                <span class="d-md-inline-block d-none fs-15 text-white mx-3"><a href="{{ route('media') }}" class="nav-link">المركز الإعلامي</a></span>
                                <span class="d-md-inline-block d-none fs-15 text-white"><a href="{{ route('reviews') }}" class="nav-link">أراء العملاء</a></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white header-reverse" data-header-hover="light">
                <div class="container">
                    <div class="col-auto">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('storage/' . $siteData['header-logo']) }}" data-at2x="{{ asset('storage/' . $siteData['header-logo']) }}" alt="" class="default-logo">
                            <img src="{{ asset('storage/' . $siteData['header-logo']) }}" data-at2x="{{ asset('storage/' . $siteData['header-logo']) }}" alt="" class="alt-logo">
                            <img src="{{ asset('storage/' . $siteData['header-logo']) }}" data-at2x="{{ asset('storage/' . $siteData['header-logo']) }}" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order left-nav">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">

                                    <!-- <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link">الرئيسية</a>
                                    </li> -->

                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link">من نحن</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('services') }}" class="nav-link">خدماتنا</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('moderators') }}" class="nav-link">المشرفين</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('hajj.index') }}" class="nav-link">برامج الحج</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('umrah.index') }}" class="nav-link">برامج العمرة</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('whyus') }}" class="nav-link">لماذا نيل مصر</a>
                                    </li>

                                    <li class="nav-item d-block d-md-none">
                                        <a href="{{ route('reviews') }}" class="nav-link">أراء العملاء</a>
                                    </li>

                                    <li class="nav-item d-block d-md-none">
                                        <a href="{{ route('media') }}" class="nav-link">المركز الإعلامي</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link">تواصل معنا</a>
                                    </li>
                                    <li class="nav-item d-block d-md-none">
                                        <span class="d-flex align-items-center">
                                            <i class="fs-20 nav-link feather icon-feather-phone-call text-yellow me-10px"></i>
                                            <a href="tel:{{ $siteData['hotline'] }}" class="text-dark-gray nav-link">{{ $siteData['hotline'] }}</a>
                                        </span>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
