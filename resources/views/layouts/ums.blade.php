<!DOCTYPE html>

<html lang="en" class="dark-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="{{asset('/assets')}}/" data-template="front-pages">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/branding/logo-removebg-preview.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/tabler-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/css/pages/front-page.css')}}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/node-waves/node-waves.css')}}" />

    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/nouislider/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/libs/swiper/swiper.css')}}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/front-page-landing.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assets/js/front-config.js')}}"></script>
    <style>
        .chatbot {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 30px;

        }

        .chat-window {
            width: 300px;
            height: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f8f8f8;
            display: none;

            background-image: url('_27b86870-c156-4fa2-bd43-384e33063f48.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }



        .chat-header {
            background-color: #007bff;
            color: white;
            padding: 5px;
            border-radius: 5px 5px 0 0;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
        }

        .chat-body {
            height: 300px;
            overflow-y: auto;
        }

        .chat-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 5px;
            left: 0;
        }

        .chat-input {
            width: calc(100% - 60px);
        }

        .send-btn {
            width: 50px;
        }

        .chat-avater {
            width: 32px !important;
            height: 32px !important;
        }

        #chat-toggle {
            box-shadow: (21, 131, 227) 2px 2px 15px, rgb(21, 131, 227) -2px -4px 9px;
            width: 50px;
            height: 50px;
        }

        #message-box:focus {
            box-shadow: none;
        }

        .dark-style #template-customizer .template-customizer-open-btn {
            background: #ea4c89;
        }

        .dark-style .layout-navbar .navbar.landing-navbar .navbar-nav .show>.nav-link,
        .dark-style .layout-navbar .navbar.landing-navbar .navbar-nav .active>.nav-link,
        .dark-style .layout-navbar .navbar.landing-navbar .navbar-nav .nav-link.show,
        .dark-style .layout-navbar .navbar.landing-navbar .navbar-nav .nav-link.active {
            color: #ea4c89 !important;
        }

        .navbar.landing-navbar .navbar-nav .show>.nav-link,
        .navbar.landing-navbar .navbar-nav .active>.nav-link,
        .navbar.landing-navbar .navbar-nav .nav-link.show,
        .navbar.landing-navbar .navbar-nav .nav-link.active,
        .navbar.landing-navbar .navbar-nav .nav-link:hover {
            color: #ea4c89 !important;
        }

        .text-primary {
            color: #ea4c89 !important;
        }

        .switch-input:checked~.switch-toggle-slider {
            background: #ea4c89 !important;
            border-color: #ea4c89 !important;
            color: #fff;
        }

        .switch-primary.switch .switch-input:checked~.switch-toggle-slider {
            background: #7367f0;
            border-color: #ea4c89 !important;
            color: #fff;
        }

        .switch-toggle-slider {
            border: 1px solid #ea4c89 !important;
        }
    </style>
</head>

<body>
    <script src="{{asset('assets/vendor/js/dropdown-hover.js')}}"></script>
    <script src="{{asset('assets/vendor/js/mega-dropdown.js')}}"></script>

    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
        <div class="container">
            <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
                <!-- Menu logo wrapper: Start -->
                <div class="navbar-brand app-brand demo d-flex py-0 py-lg-2 me-4">
                    <!-- Mobile menu toggle: Start-->
                    <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-menu-2 ti-sm align-middle"></i>
                    </button>
                    <!-- Mobile menu toggle: End-->
                    <a href="landing-page.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{asset('assets/img/branding/logo-removebg-preview.png')}}" class="img-fluid" alt="UMS">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">UMS</span>
                    </a>
                </div>
                <!-- Menu logo wrapper: End -->
                <!-- Menu wrapper: Start -->
                <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                    <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-x ti-sm"></i>
                    </button>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page" href="{{route('ums.front')}}#landingHero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{route('ums.front')}}#landingFeatures">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{route('ums.front')}}#landingTeam">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{route('ums.front')}}#landingFAQ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{route('ums.front')}}#landingContact">Contact us</a>
                        </li>
                        <!-- <li class="nav-item mega-dropdown d-none">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium" aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                                <span data-i18n="Pages">Pages</span>
                            </a>
                            <div class="dropdown-menu p-4">
                                <div class="row gy-4">
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-dribbble"><i class="ti ti-layout-grid"></i></span>
                                            </div>
                                            <span class="ps-1">Other</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="pricing-page.html">
                                                    <i class="ti ti-circle me-1"></i>
                                                    <span data-i18n="Pricing">Pricing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="payment-page.html">
                                                    <i class="ti ti-circle me-1"></i>
                                                    <span data-i18n="Payment">Payment</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="checkout-page.html">
                                                    <i class="ti ti-circle me-1"></i>
                                                    <span data-i18n="Checkout">Checkout</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="help-center-landing.html">
                                                    <i class="ti ti-circle me-1"></i>
                                                    <span data-i18n="Help Center">Help Center</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-dribbble"><i class="ti ti-lock-open"></i></span>
                                            </div>
                                            <span class="ps-1">Auth Demo</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="#l" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Login (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="#" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Login (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-basic.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Register (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-cover.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Register (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-multisteps.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Register (Multi-steps)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-forgot-password-basic.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Forgot Password (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-forgot-password-cover.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Forgot Password (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-reset-password-basic.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Reset Password (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-reset-password-cover.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Reset Password (Cover)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-2 mb-lg-3">
                                            <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                <span class="avatar-initial rounded bg-label-dribbble"><i class="ti ti-file-analytics"></i></span>
                                            </div>
                                            <span class="ps-1">Other</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-error.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Error
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-under-maintenance.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Under Maintenance
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-comingsoon.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Coming Soon
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-not-authorized.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Not Authorized
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-verify-email-basic.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Verify Email (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-verify-email-cover.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Verify Email (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-two-steps-basic.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Two Steps (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-two-steps-cover.html" target="_blank">
                                                    <i class="ti ti-circle me-1"></i>
                                                    Two Steps (Cover)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="bg-body nav-img-col p-2">
                                            <img src="{{asset('assets/img/front-pages/misc/nav-item-col-img.png')}}" alt="nav item col image" class="w-100" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item {{request()->is('ums/free-tiral')?'active':''}}">
                            <a class="nav-link fw-medium" href="{{route('ums.trial.index')}}">Free Trial</a>
                        </li>
                    </ul>
                </div>
                <div class="landing-menu-overlay d-lg-none"></div>
                <!-- Menu wrapper: End -->
                <!-- Toolbar: Start -->
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="ti ti-sm"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Style Switcher-->

                    <!-- navbar button: Start -->
                    <li>
                        <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-outline-dribbble" target="_blank"><span class="tf-icons ti ti-login scaleX-n1-rtl me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </div>
    </nav>
    <!-- Navbar: End -->

    @yield('content')

    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
        <div class="footer-top">
            <div class="container">
                <div class="row gx-0 gy-4 g-md-5">
                    <div class="col-lg-5">
                        <a href="landing-page.html" class="app-brand-link mb-4">
                            <span class="app-brand-logo" style="width: 69px;">
                                <img src="{{asset('assets/img/branding/logo-removebg-preview.png')}}" class="img-fluid rounded-circle" alt="UMS">
                            </span>
                            <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">UMS</span>
                        </a>
                        <p class="footer-text footer-logo-description mb-4">
                            A meticulously crafted solution that combines elegance with functionality. Its clean design and well-organized documentation make it a breeze for administrators, faculty, and students alike.
                        </p>
                        <form class="footer-form">
                            <label for="footer-email" class="small">Subscribe to newsletter</label>
                            <div class="d-flex mt-1">
                                <input type="email" class="form-control rounded-0 rounded-start-bottom rounded-start-top" id="footer-email" placeholder="Your email" />
                                <button type="submit" class="btn btn-dribbble shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-4">Demos</h6>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="../vertical-menu-template/" target="_blank" class="footer-link">Website</a>
                            </li>
                            <li class="mb-3">
                                <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Personal profile</a>
                            </li>
                            <li class="mb-3">
                                <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Student management</a>
                            </li>
                            <li class="mb-3">
                                <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">Employee management</a>
                            </li>
                            <li class="mb-3">
                                <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Library management</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-4">Pages</h6>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <a href="pricing-page.html" class="footer-link">Pricing</a>
                            </li>
                            <li class="mb-3">
                                <a href="payment-page.html" class="footer-link">Payment<span class="badge rounded bg-dribbble ms-2">New</span></a>
                            </li>
                            <li class="mb-3">
                                <a href="checkout-page.html" class="footer-link">Checkout</a>
                            </li>
                            <li class="mb-3">
                                <a href="help-center-landing.html" class="footer-link">Help Center</a>
                            </li>
                            <li class="mb-3">
                                <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link">Login/Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="footer-title mb-4">Download our app</h6>
                        <a href="javascript:void(0);" class="d-block footer-link mb-3 pb-2">
                            <img src="{{asset('assets/img/front-pages/landing-page/apple-icon.png')}}" alt="apple icon" /></a>
                        <a href="javascript:void(0);" class="d-block footer-link">
                            <img src="{{asset('assets/img/front-pages/landing-page/google-play-icon.png')}}" alt="google play icon" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                    <a href="https://pixinvent.com" target="_blank" class="fw-medium text-white footer-link">Pixinvent,</a>
                    <span class="footer-text"> Made with ❤️ for a better web.</span>
                </div>
                <div>
                    <a href="https://github.com/pixinvent" class="footer-link me-3" target="_blank">
                        <img src="../../assets/img/front-pages/icons/github-light.png" alt="github icon" data-app-light-img="front-pages/icons/github-light.png" data-app-dark-img="front-pages/icons/github-dark.png" />
                    </a>
                    <a href="https://www.facebook.com/pixinvents/" class="footer-link me-3" target="_blank">
                        <img src="../../assets/img/front-pages/icons/facebook-light.png" alt="facebook icon" data-app-light-img="front-pages/icons/facebook-light.png" data-app-dark-img="front-pages/icons/facebook-dark.png" />
                    </a>
                    <a href="https://twitter.com/pixinvents" class="footer-link me-3" target="_blank">
                        <img src="../../assets/img/front-pages/icons/twitter-light.png" alt="twitter icon" data-app-light-img="front-pages/icons/twitter-light.png" data-app-dark-img="front-pages/icons/twitter-dark.png" />
                    </a>
                    <a href="https://www.instagram.com/pixinvents/" class="footer-link" target="_blank">
                        <img src="../../assets/img/front-pages/icons/instagram-light.png" alt="google icon" data-app-light-img="front-pages/icons/instagram-light.png" data-app-dark-img="front-pages/icons/instagram-dark.png" />
                    </a>
                </div>
            </div>
        </div>
        <!-- chat app -->

        <div class="chatbot">
            <button type="button" class="btn-label-info rounded-circle" id="chat-toggle">
                <i class="ti ti-brand-wechat" style="font-size: 38px;"></i>
            </button>
            <div class="chat-window">
                <div class="chat-header d-flex justify-content-between">
                    <div class="d-flex">
                        <img src="{{asset('assets/img/avatars/_27b86870-c156-4fa2-bd43-384e33063f48.jpg')}}" class="chat-avater img img-fluid rounded rounded-circle me-3">
                        Live Support
                    </div>
                    <button class="btn btn-sm text-white d-flex" id="chat-hide">
                        <i class="ti ti-minus"></i>
                    </button>
                </div>
                <div class="chat-body pt-5 bg-opacity-75 bg-body-tertiary h-100 rounded-3">
                    <!-- Chat messages go here -->
                    <div class="chat-message w-75 ms-2 bg-opacity-75 bg-dribbble rounded-3 p-2 text-bg-dark text-start font-monospace">
                        Hi their, I am Moni. How can I help you?</div>
                    <div class="chat-message w-75 ms-2 bg-opacity-75 rounded-3 p-2 text-bg-dark font-monospace mt-3 text-end float-end me-2" style="background-color: #6610f2ab !important;">
                        Hi their, I am Moni. How can I help you?</div>
                </div>
                <div class="chat-footer px-2 rounded shadow-lg">
                    <div class="d-flex justify-content-between align-items-center px-1 rounded">
                        <textarea name="message" class="form-control bg-transparent border-0" id="message-box" placeholder="Type a message..." rows="1"></textarea>
                        <div>
                            <button style="width: 39px; height: 39px;" type="button" class="btn send-btn waves-effect waves-light btn-twitter rounded-circle">
                                <!-- <i class="ti ti-send-2"></i> -->
                                <i class="ti ti-send"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer: End -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/front-main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/js/front-page-landing.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#chat-toggle').click(function() {
                $('.chat-window').slideToggle();
                $(this).slideToggle();
            });
            $('#chat-hide').click(function() {
                $('.chat-window').slideToggle();
                $("#chat-toggle").slideToggle();
            });
        });
    </script>
</body>

</html>