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
        <header>

            <!-- start navigation -->
            <nav
                class="navbar navbar-expand-lg header-light bg-white top-logo disable-fixed header-demo"
            >

                <div class="container-fluid flex-wrap">

                    <div class="col-12 col-sm-12 col-lg-8 p-0 mx-lg-auto d-flex align-items-center justify-content-between">

                        <!-- Left: Hotline + Toggler -->
                        <div class="col col-lg-2">

                            <!-- Hotline (desktop only, hides at 1150px) -->
                            <div class="header-icon header-desktop-only">

                                <div>
                                    <div class="header-icon">
                                        <div class="me-25px">
                                            <div class="fs-15 xl-fs-13 widget-text fw-500">
                                                <span class="w-35px h-35px bg-yellow d-inline-flex align-items-center justify-content-center me-10px border-radius-100px">
                                                    <i class="feather icon-feather-phone"></i>
                                                </span>
                                                <a
                                                    href="tel:+{{$siteData['hotline']}}"
                                                    class="widget-text text-white-hover fw-600 fs-18"
                                                >
                                                    {{$siteData['hotline']}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Navbar Toggler (mobile) -->
                            <button
                                class="navbar-toggler float-start"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarNav"
                                aria-controls="navbarNav"
                                aria-label="Toggle navigation"
                            >
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                            </button>

                        </div>

                        <!-- Center: Logo -->
                        <div class="col-auto text-center">
                            <a class="navbar-brand section-link" href="{{ route('home') }}">
                                <img src="{{ asset('storage/' . $siteData['header-logo']) }}" data-at2x="{{ asset('storage/' . $siteData['header-logo']) }}" alt="Nile Misr" class="default-logo">
                                <img src="{{ asset('storage/' . $siteData['header-logo']) }}" data-at2x="{{ asset('storage/' . $siteData['header-logo']) }}" alt="Nile Misr" class="alt-logo">
                                <img src="{{ asset('storage/' . $siteData['header-logo']) }}" data-at2x="{{ asset('storage/' . $siteData['header-logo']) }}" alt="Nile Misr" class="mobile-logo">
                            </a>
                        </div>

                        <!-- Right: Book Button (desktop only, hides at 1150px) -->
                        <div class="header-icon header-desktop-only">
                            <div class="">
                                <div class="header-icon">
                                    <div class="header-button">
                                        <a
                                            href="javascript:void(0);"
                                            class="btn btn-small btn-yellow btn-rounded"
                                            data-bs-toggle="modal"
                                            data-bs-target="#quickBookingModal"
                                        >
                                            احـجــــــز الآن
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation Menu Row -->
                    <div class="col-12 d-flex align-items-center justify-content-between position-static border-top border-color-extra-medium-gray md-border-none">
                        <div class="col-auto m-auto">

                            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

                                <ul class="navbar-nav">

                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link">الرئيسية</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link">من نحن؟</a>
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
                                        <a href="{{ route('whyus') }}" class="nav-link">لماذا نيل مصر؟</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('reviews') }}" class="nav-link">أراء العملاء</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('media') }}" class="nav-link">المركز الإعلامي</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link">تواصل معنا</a>
                                    </li>

                                </ul>

                                <!-- Mobile: hotline + book button inside menu (shows at 1150px and below) -->
                                <div class="header-mobile-only d-flex align-items-center justify-content-start pe-2 gap-3 py-3 border-top border-color-extra-medium-gray mt-2">
                                    <div class="fs-15 widget-text fw-500">
                                        <span class="w-35px h-35px bg-yellow d-inline-flex align-items-center justify-content-center me-10px border-radius-100px">
                                            <i class="feather icon-feather-phone"></i>
                                        </span>
                                        <a href="tel:+{{$siteData['hotline']}}" class="widget-text fw-600 fs-18">{{$siteData['hotline']}}</a>
                                    </div>
                                    <a
                                        href="javascript:void(0);"
                                        class="btn btn-small btn-yellow btn-rounded"
                                        data-bs-toggle="modal"
                                        data-bs-target="#quickBookingModal"
                                    >
                                        احـجــــــز الآن
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </nav>
            <!-- end navigation -->

        </header>
        <!-- end header -->