@extends('layouts.ums')
@section('title','UMS - School, collage, university system')
@section('content')
<div data-bs-spy="scroll" class="scrollspy-example">
    <!-- Hero: Start -->
    <section id="hero-animation">
        <div id="landingHero" class="section-py landing-hero position-relative">
            <div class="container">
                <div class="hero-text-box text-center">
                    <h1 class="text-primary hero-title display-6 fw-bold">One dashboard to manage all your addministrative service</h1>
                    <h2 class="hero-sub-title h6 mb-4 pb-1">
                        UMS empowers educational institutions to operate efficiently, enhance transparency, and provide better services to their stakeholders.
                    </h2>
                    <div class="landing-hero-btn d-inline-block position-relative">
                        <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">Join community
                            <img src="{{asset('assets/img/front-pages/icons/Join-community-arrow.png')}}" alt="Join community arrow" class="scaleX-n1-rtl" /></span>
                        <a href="#landingPricing" class="btn btn-dribbble btn-lg">Get early access</a>
                    </div>
                </div>
                <div id="heroDashboardAnimation" class="hero-animation-img">
                    <a href="#">
                        <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                            <img src="../../assets/img/front-pages/landing-page/hero-dashboard-light.png" alt="hero dashboard" class="animation-img" data-app-light-img="front-pages/landing-page/hero-dashboard-light.png" data-app-dark-img="front-pages/landing-page/hero-dashboard-dark.png" />
                            <img src="../../assets/img/front-pages/landing-page/hero-elements-light.png" alt="hero elements" class="position-absolute hero-elements-img animation-img top-0 start-0" data-app-light-img="front-pages/landing-page/hero-elements-light.png" data-app-dark-img="front-pages/landing-page/hero-elements-dark.png" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="landing-hero-blank"></div>
    </section>
    <!-- Hero: End -->

    <!-- Useful features: Start -->
    <section id="landingFeatures" class="section-py landing-features">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-dribbble">Useful Features</span>
            </div>
            <h3 class="text-center mb-1">
                <!-- <span class="section-title">Everything you need</span> to start your next project -->
                Empowering Academic Excellence: Your Gateway <br> to Seamless University Management
            </h3>
            <p class="text-center mb-3 mb-md-5 pb-3">
                Not just a set of tools, the package includes all your administrative services.
            </p>
            <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" alt="laptop charging" />
                    </div>
                    <h5 class="mb-3">Centralized Admission</h5>
                    <p class="features-icon-description">
                        Simplifies student enrollment by providing a unified platform for application submission, document verification, and admission decision tracking.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/rocket.png')}}" alt="transition up" />
                    </div>
                    <h5 class="mb-3">Centralized Examination</h5>
                    <p class="features-icon-description">
                        Manages exam scheduling, question paper generation, result processing, and grade distribution. Faculty members can input grades, and students can access their results securely.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/paper.png')}}" alt="edit" />
                    </div>
                    <h5 class="mb-3">Attendance Tracking</h5>
                    <p class="features-icon-description">
                        Monitors student attendance, generates reports, and alerts administrators about irregularities.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/check.png')}}" alt="3d select solid" />
                    </div>
                    <h5 class="mb-3">Course Management</h5>
                    <p class="features-icon-description">
                        Facilitates course creation, assignment submission, and syllabus distribution. Professors can upload course materials, assignments, and lecture notes.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/user.png')}}" alt="lifebelt" />
                    </div>
                    <h5 class="mb-3">Excellent Support</h5>
                    <p class="features-icon-description">An easy-to-follow doc with lots of references and code examples.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
                    </div>
                    <h5 class="mb-3">Student Information System</h5>
                    <p class="features-icon-description">Stores and manages student profiles, academic records, and personal details. It ensures data accuracy and privacy.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
                    </div>
                    <h5 class="mb-3">Faculty Management</h5>
                    <p class="features-icon-description">Allows faculty members to update their profiles, view teaching schedules, and communicate with students.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
                    </div>
                    <h5 class="mb-3">Financial Management</h5>
                    <p class="features-icon-description">Handles fee collection, expense tracking, and budget allocation. Generates financial reports for analysis.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
                    </div>
                    <h5 class="mb-3">Library Integration</h5>
                    <p class="features-icon-description">Tracks book inventory, borrowing, and returns. Students can search for available resources and reserve books online.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
                    </div>
                    <h5 class="mb-3">Communication Portal</h5>
                    <p class="features-icon-description">Enables seamless communication between students, faculty, and administrators. Announcements, notifications, and event updates are centralized.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
                    </div>
                    <h5 class="mb-3">Personal Profiles</h5>
                    <p class="features-icon-description"> Each user (student, faculty, or staff) has a personalized dashboard displaying relevant information, schedules, and tasks.</p>
                </div>
                <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                    <div class="text-center mb-3">
                        <img src="{{asset('assets/img/front-pages/icons/keyboard.png')}}" alt="google docs" />
                    </div>
                    <h5 class="mb-3">Importance</h5>
                    <p class="features-icon-description"> UMS empowers educational institutions to operate efficiently, enhance transparency, and provide better services to their stakeholders. Whether it’s managing admissions, academic records, or financial transactions, UMS is the go-to solution for modern universities.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Useful features: End -->

    <!-- Real customers reviews: Start -->
    <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
        <!-- What people say slider: Start -->
        <div class="container">
            <div class="row align-items-center gx-0 gy-4 g-lg-5">
                <div class="col-md-6 col-lg-5 col-xl-3">
                    <div class="mb-3 pb-1">
                        <span class="badge bg-label-dribbble">Real Customers Reviews</span>
                    </div>
                    <h3 class="mb-1"><span class="section-title">What people say</span></h3>
                    <p class="mb-3 mb-md-5">
                        See what our customers have to<br class="d-none d-xl-block" />
                        say about their experience.
                    </p>
                    <div class="landing-reviews-btns">
                        <button id="reviews-previous-btn" class="btn btn-label-dribbble reviews-btn me-3 scaleX-n1-rtl" type="button">
                            <i class="ti ti-chevron-left ti-sm"></i>
                        </button>
                        <button id="reviews-next-btn" class="btn btn-label-dribbble reviews-btn scaleX-n1-rtl" type="button">
                            <i class="ti ti-chevron-right ti-sm"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 col-xl-9">
                    <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                        <div class="swiper" id="swiper-reviews">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <div class="mb-3">
                                                <img src="{{asset('assets/img/front-pages/branding/logo-1.png')}}" alt="client logo" class="client-logo img-fluid" />
                                            </div>
                                            <p>
                                                “UMS Pro: Without a doubt, the most indispensable solution for our university’s digital transformation. Its seamless interface, intuitive features, and robust functionality have revolutionized our administrative processes. From student enrollment to faculty management, UMS Pro has been a game-changer. I eagerly look forward to utilizing it in all our future endeavors.”
                                            </p>
                                            <div class="text-warning mb-3">
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Cecilia Payne</h6>
                                                    <p class="small text-muted mb-0">CEO of Airbnb</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <div class="mb-3">
                                                <img src="{{asset('assets/img/front-pages/branding/logo-2.png')}}" alt="client logo" class="client-logo img-fluid" />
                                            </div>
                                            <p>
                                                “UMS Flex: Unquestionably the most adaptable and dynamic solution for our university’s digital infrastructure. Whether it’s student records, faculty communication, or administrative dashboards, UMS Flex is my go-to choice. Its versatility empowers us to build efficient systems for any academic project.”
                                            </p>
                                            <div class="text-warning mb-3">
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Eugenia Moore</h6>
                                                    <p class="small text-muted mb-0">Founder of Hubspot</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <div class="mb-3">
                                                <img src="{{asset('assets/img/front-pages/branding/logo-3.png')}}" alt="client logo" class="client-logo img-fluid" />
                                            </div>
                                            <p>
                                                “UMS Clarity: A meticulously crafted solution that combines elegance with functionality. Its clean design and well-organized documentation make it a breeze for administrators, faculty, and students alike. Whether you’re navigating through student profiles or configuring system settings, UMS Clarity ensures a seamless experience. Plus, finding relevant screenshots is as effortless as a click.”
                                            </p>
                                            <div class="text-warning mb-3">
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Curtis Fletcher</h6>
                                                    <p class="small text-muted mb-0">Design Lead at Dribbble</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <div class="mb-3">
                                                <img src="{{asset('assets/img/front-pages/branding/logo-4.png')}}" alt="client logo" class="client-logo img-fluid" />
                                            </div>
                                            <p>
                                                “UMS DevCraft: A developer’s dream come true! With meticulous attention to detail, UMS DevCraft caters to every coding need. Its robust architecture and well-documented APIs empower developers to craft custom interfaces effortlessly. Whether it’s designing student portals, faculty dashboards, or administrative tools, UMS DevCraft ensures a seamless development journey.”
                                            </p>
                                            <div class="text-warning mb-3">
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star ti-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('assets/img/avatars/4.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Sara Smith</h6>
                                                    <p class="small text-muted mb-0">Founder of Continental</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <div class="mb-3">
                                                <img src="{{asset('assets/img/front-pages/branding/logo-5.png')}}" alt="client logo" class="client-logo img-fluid" />
                                            </div>
                                            <p>
                                                “UMS Flex: Unquestionably the most adaptable and dynamic solution for our university’s digital infrastructure. Whether it’s student records, faculty communication, or administrative dashboards, UMS Flex is my go-to choice. Its versatility empowers us to build efficient systems for any academic project.”
                                            </p>
                                            <div class="text-warning mb-3">
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Eugenia Moore</h6>
                                                    <p class="small text-muted mb-0">Founder of Hubspot</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <div class="mb-3">
                                                <img src="{{asset('assets/img/front-pages/branding/logo-6.png')}}" alt="client logo" class="client-logo img-fluid" />
                                            </div>
                                            <p>
                                                “UMS Ipsum: UMS Ipsum provides seamless integration, robust features, and unparalleled flexibility for academic institutions. Whether it’s student enrollment, faculty management, or administrative workflows, UMS Ipsum ensures a streamlined experience.”
                                            </p>
                                            <div class="text-warning mb-3">
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star-filled ti-sm"></i>
                                                <i class="ti ti-star ti-sm"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2 avatar-sm">
                                                    <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Sara Smith</h6>
                                                    <p class="small text-muted mb-0">Founder of Continental</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What people say slider: End -->
        <hr class="m-0" />
        <!-- Logo slider: Start -->
        <div class="container">
            <div class="swiper-logo-carousel py-4 my-lg-2">
                <div class="swiper" id="swiper-clients-logos">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('assets/img/front-pages/branding/logo_1-light.png')}}" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_1-light.png" data-app-dark-img="front-pages/branding/logo_1-dark.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/img/front-pages/branding/logo_2-light.png')}}" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_2-light.png" data-app-dark-img="front-pages/branding/logo_2-dark.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/img/front-pages/branding/logo_3-light.png')}}" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_3-light.png" data-app-dark-img="front-pages/branding/logo_3-dark.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/img/front-pages/branding/logo_4-light.png')}}" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_4-light.png" data-app-dark-img="front-pages/branding/logo_4-dark.png" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/img/front-pages/branding/logo_5-light.png')}}" alt="client logo" class="client-logo" data-app-light-img="front-pages/branding/logo_5-light.png" data-app-dark-img="front-pages/branding/logo_5-dark.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logo slider: End -->
    </section>
    <!-- Real customers reviews: End -->

    <!-- Our great team: Start -->
    <section id="landingTeam" class="section-py landing-team">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-dribbble">Our Great Team</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">Supported</span> by Real People</h3>
            <p class="text-center mb-md-5 pb-3">Who is behind these greatest-software?</p>
            <div class="row gy-5 mt-2">
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-dribbble position-relative team-image-box">
                            <img src="{{asset('assets/img/front-pages/landing-page/team-member-1.png')}}" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-primary text-center">
                            <h5 class="card-title mb-0">Sophie Gilbert</h5>
                            <p class="text-muted mb-0">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-info position-relative team-image-box">
                            <img src="{{asset('assets/img/front-pages/landing-page/team-member-2.png')}}" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-info text-center">
                            <h5 class="card-title mb-0">Paul Miles</h5>
                            <p class="text-muted mb-0">UI Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-danger position-relative team-image-box">
                            <img src="{{asset('assets/img/front-pages/landing-page/team-member-3.png')}}" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-danger text-center">
                            <h5 class="card-title mb-0">Nannie Ford</h5>
                            <p class="text-muted mb-0">Development Lead</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card mt-3 mt-lg-0 shadow-none">
                        <div class="bg-label-success position-relative team-image-box">
                            <img src="{{asset('assets/img/front-pages/landing-page/team-member-4.png')}}" class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl" alt="human image" />
                        </div>
                        <div class="card-body border border-top-0 border-label-success text-center">
                            <h5 class="card-title mb-0">Chris Watkins</h5>
                            <p class="text-muted mb-0">Marketing Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our great team: End -->

    <!-- Pricing plans: Start -->
    <section id="landingPricing" class="section-py bg-body landing-pricing">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-dribbble">Pricing Plans</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">Tailored pricing plans</span> designed for you</h3>
            <p class="text-center mb-4 pb-3">
                All plans include 40+ advanced tools and features. <br>Propel your university forward with UMS Accelerate! <br> Our feature-rich system is tailored to meet your institution’s unique needs.<br />Choose the best plan to fit
                your needs.
            </p>
            <div class="text-center mb-5">
                <div class="position-relative d-inline-block pt-3 pt-md-0">
                    <label class="switch switch-primary me-0">
                        <span class="switch-label">Pay Monthly</span>
                        <input type="checkbox" class="switch-input price-duration-toggler" checked />
                        <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">Pay Annual</span>
                    </label>
                    <div class="pricing-plans-item position-absolute d-flex">
                        <img src="{{asset('assets/img/front-pages/icons/pricing-plans-arrow.png')}}" alt="pricing plans arrow" class="scaleX-n1-rtl" />
                        <span class="fw-semibold mt-2 ms-1"> Save 25%</span>
                    </div>
                </div>
            </div>
            <div class="row gy-4 pt-lg-3">
                <!-- Basic Plan: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/paper-airplane.png')}}" alt="paper airplane icon" class="mb-4 pb-2" />
                                <h4 class="mb-1">Basic</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$19</span>
                                    <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$14</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                </div>
                                <div class="position-relative pt-2">
                                    <div class="price-yearly text-muted price-yearly-toggle d-none">$ 168 / year</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Enrollment Management
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Student Information System
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Live chat
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Parent notifications
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2">
                                            <i class="ti ti-check ti-xs"></i></span>
                                        <span>Course Management</span>
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Curriculum Management
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Basic Support
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="payment-page.html" class="btn btn-label-dribbble">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Plan: End -->

                <!-- Favourite Plan: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card border border-primary shadow-lg" style="border-color: #ea4c89 !important;">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/plane.png')}}" alt="plane icon" class="mb-4 pb-2" />
                                <h4 class="mb-1">Standard</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$29</span>
                                    <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$22</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                </div>
                                <div class="position-relative pt-2">
                                    <div class="price-yearly text-muted price-yearly-toggle d-none">$ 264 / year</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-dribbble p-0 me-2">
                                            <i class="ti ti-check ti-xs"></i></span>
                                        Everything in basic
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Fee Management
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Attendance Management
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Faculty Payroll
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Faculty Scheduling
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Communication Tools
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Real-Time Analytics
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="payment-page.html" class="btn btn-dribbble">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Favourite Plan: End -->

                <!-- Standard Plan: Start -->
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <img src="{{asset('assets/img/front-pages/icons/shuttle-rocket.png')}}" alt="shuttle rocket icon" class="mb-4 pb-2" />
                                <h4 class="mb-1">Enterprise</h4>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="price-monthly h1 text-primary fw-bold mb-0">$49</span>
                                    <span class="price-yearly h1 text-primary fw-bold mb-0 d-none">$37</span>
                                    <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                </div>
                                <div class="position-relative pt-2">
                                    <div class="price-yearly text-muted price-yearly-toggle d-none">$ 444 / year</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Everything in premium
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Personal Profiles
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Library management
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Employee management
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Custom permissions
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Centralized Examination
                                    </h5>
                                </li>
                                <li>
                                    <h5>
                                        <span class="badge badge-center rounded-pill bg-label-dribbble p-0 me-2"><i class="ti ti-check ti-xs"></i></span>
                                        Centralized Admission
                                    </h5>
                                </li>
                            </ul>
                            <div class="d-grid mt-4 pt-3">
                                <a href="payment-page.html" class="btn btn-label-dribbble">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Standard Plan: End -->
            </div>
        </div>
    </section>
    <!-- Pricing plans: End -->

    <!-- Fun facts: Start -->
    <section id="landingFunFacts" class="section-py landing-fun-facts">
        <div class="container">
            <div class="row gy-3">
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-primary shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('assets/img/front-pages/icons/laptop.png')}}" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">7.1k+</h5>
                            <p class="fw-medium mb-0">
                                Support Tickets<br />
                                Resolved
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-success shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('assets/img/front-pages/icons/user-success.png')}}" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">50k+</h5>
                            <p class="fw-medium mb-0">
                                Join creatives<br />
                                community
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-info shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('assets/img/front-pages/icons/diamond-info.png')}}" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">4.8/5</h5>
                            <p class="fw-medium mb-0">
                                Highly Rated<br />
                                Products
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border border-label-warning shadow-none">
                        <div class="card-body text-center">
                            <img src="{{asset('assets/img/front-pages/icons/check-warning.png')}}" alt="laptop" class="mb-2" />
                            <h5 class="h2 mb-1">100%</h5>
                            <p class="fw-medium mb-0">
                                Money Back<br />
                                Guarantee
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun facts: End -->

    <!-- FAQ: Start -->
    <section id="landingFAQ" class="section-py bg-body landing-faq">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-dribbble">FAQ</span>
            </div>
            <h3 class="text-center mb-1">Frequently asked <span class="section-title">questions</span></h3>
            <p class="text-center mb-5 pb-3">Browse through these FAQs to find answers to commonly asked questions.</p>
            <div class="row gy-5">
                <div class="col-lg-5">
                    <div class="text-center">
                        <img src="{{asset('assets/img/front-pages/landing-page/faq-boy-with-logos.png')}}" alt="faq boy with logos" class="faq-image" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                    Do you charge for each upgrade?
                                </button>
                            </h2>

                            <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, our pricing model is designed to provide value without additional charges for upgrades. Once you subscribe to a specific plan (Basic, Standard, or Enterprise), you’ll receive all future updates and enhancements as part of your subscription. We believe in continuous improvement and want to ensure that your UMS remains up-to-date and efficient.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    What is a university management system?
                                </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A university management system (UMS) is a comprehensive software solution specifically
                                    tailored for educational institutions. It helps universities manage various administrative tasks,
                                    including student enrollment, course management, fee collection,
                                    human resources, and more. UMS streamlines processes, enhances communication,
                                    and ensures efficient operations within the university ecosystem
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                    Why is cloud-based UMS preferred over on-premises solutions?
                                </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Cloud-based UMS offers several advantages: <br>
                                    <b>Accessibility: </b>You can access the system from anywhere with an internet connection. <br>
                                    <b>Cost-effectiveness: </b> Cloud solutions eliminate the need for expensive on-premises infrastructure. <br>
                                    <b>Scalability: </b> Cloud services can easily scale up or down based on your institution’s needs. <br>
                                    <b>Security: </b>Cloud providers often have robust security measures in place to protect your data.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                    What features should I look for in a UMS?
                                </button>
                            </h2>
                            <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Essential features include: <br>
                                    <b>Add-on Modules: </b> Customizable modules for enrollment, student information, course management, fee handling, and attendance management. <br>
                                    <b>Workflow Optimization: </b> Automation, AI, and hands-on education management tools. <br>
                                    <b>Real-Time Access: </b> Metrics for maintenance, attendance, and scheduling. <br>
                                    <b>User-Friendly Interface: </b> Easy-to-use systems for administrators, students, parents, and staff.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                    How can UMS benefit my university?
                                </button>
                            </h2>
                            <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    UMS streamlines processes, reduces manual effort, enhances transparency, and improves overall efficiency. It empowers administrators, faculty, and students by providing a centralized platform for managing academic operations.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ: End -->

    <!-- CTA: Start -->
    <section id="landingCTA" class="section-py landing-cta p-lg-0 pb-0">
        <div class="container">
            <div class="row align-items-center gy-5 gy-lg-0">
                <div class="col-lg-6 text-center text-lg-start">
                    <h6 class="h2 text-primary fw-bold mb-1">Ready to Get Started?</h6>
                    <p class="fw-medium mb-4">“<b>Get Started with UMS:</b> Begin your journey toward streamlined operations and enhanced efficiency. Sign up now for a <span class="badge bg-label-success">14-day free trial</span> and experience the power of UMS firsthand. Manage student records, optimize workflows, and elevate your institution’s digital experience. Let’s transform education together!”</p>
                    <a href="payment-page.html" class="btn btn-lg btn-dribbble">Get Started</a>
                </div>
                <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
                    <img src="{{asset('assets/img/front-pages/landing-page/cta-dashboard.png')}}" alt="cta dashboard" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- CTA: End -->

    <!-- Contact Us: Start -->
    <section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-dribbble">Contact US</span>
            </div>
            <h3 class="text-center mb-1"><span class="section-title">Let's work</span> together</h3>
            <p class="text-center mb-4 mb-lg-5 pb-md-3">Any question or remark? just write us a message</p>
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="contact-img-box position-relative border p-2 h-100">
                        <img src="{{asset('assets/img/front-pages/landing-page/contact-customer-service.png')}}" alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />
                        <div class="pt-3 px-4 pb-1">
                            <div class="row gy-3 gx-md-4">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-dribbble rounded p-2 me-2"><i class="ti ti-mail ti-sm"></i></div>
                                        <div>
                                            <p class="mb-0">Email</p>
                                            <h5 class="mb-0">
                                                <a href="mailto:example@gmail.com" class="text-heading">example@gmail.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <div class="d-flex align-items-center">
                                        <div class="badge bg-label-success rounded p-2 me-2">
                                            <i class="ti ti-phone-call ti-sm"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Phone</p>
                                            <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-1">Send a message</h4>
                            <p class="mb-4">
                                If you would like to discuss anything related to payment, account, licensing,<br class="d-none d-lg-block" />
                                partnerships, or have pre-sales questions, you’re at the right place.
                            </p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact-form-fullname">Full Name</label>
                                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="contact-form-email">Email</label>
                                        <input type="text" id="contact-form-email" class="form-control" placeholder="johndoe@gmail.com" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="contact-form-message">Message</label>
                                        <textarea id="contact-form-message" class="form-control" rows="8" placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-dribbble">Send inquiry</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us: End -->
</div>
@stop