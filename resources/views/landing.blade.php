@extends('layouts.app')

@section('title', 'Finanza | Bienvenido')
@section('css')
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('body')
@section('content_landing')
    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ URL::asset('build/img/logo.png') }}" class="card-logo card-logo-dark" alt="logo dark"
                        height="40">

                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-15 active" href="#hero">Incio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#services">Funcionalidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#features">Contacto</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link fs-15" href="#plans">Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#contact">Contact</a>
                        </li> --}}
                    </ul>

                    <div class="">
                        <a href="login" class="btn btn-link fw-medium text-decoration-none text-dark">Iniciar Sesión</a>
                        <a href="register" class="btn btn-primary">Registrarse</a>
                    </div>
                </div>

            </div>
        </nav>
        <!-- start hero section -->
        <section class="section pb-0 hero-section mb-5" id="hero">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center mt-lg-5 pt-5">
                            <h1 class="display-6 fw-semibold mb-3 lh-base">
                                Sistema de Gestión de <span class="text-success fw-bold">Finanzas</span>
                            </h1>
                            <p class="lead text-muted lh-base">
                                Optimiza y simplifica la administración financiera con nuestra plataforma
                                intuitiva y segura.
                            </p>

                            <div class="d-flex gap-2 justify-content-center mt-4">
                                <a href="auth-signup-basic" class="btn btn-primary">Funcionalidades <i
                                        class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>

                        <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                            <div class="demo-img-patten-top d-none d-sm-block">
                                <img src="{{ URL::asset('build/img/landing/img-pattern.png') }}" class="d-block img-fluid"
                                    alt="...">
                            </div>
                            <div class="demo-img-patten-bottom d-none d-sm-block">
                                <img src="{{ URL::asset('build/img/landing/img-pattern.png') }}" class="d-block img-fluid"
                                    alt="...">
                            </div>
                            <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                    <div class="carousel-item active" data-bs-interval="2000">
                                        <img src="{{ URL::asset('build/img/demos/default.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ URL::asset('build/img/demos/saas.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ URL::asset('build/img/demos/material.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ URL::asset('build/img/demos/minimal.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ URL::asset('build/img/demos/creative.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ URL::asset('build/img/demos/modern.png') }}" class="d-block w-100"
                                            alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{ URL::asset('build/img/demos/interactive.png') }}"
                                            class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>

            <!-- end container -->
            <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                        <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                        </path>
                    </g>
                </svg>
            </div>
            <!-- end shape -->
        </section>
        <!-- end hero section -->

        <!-- start services -->
        <section class="section mt-5" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 ff-secondary fw-semibold lh-base">A Digital web design studio creating
                                modern & engaging online</h1>
                            <p class="text-muted">To achieve this, it would be necessary to have uniform grammar,
                                pronunciation and more common words. If several languages coalesce the grammar</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row g-3">
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-pencil-ruler-2-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Creative Design</h5>
                                <p class="text-muted my-3 ff-secondary">The creative design includes designs that are
                                    unique, effective and memorable.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-palette-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Unlimited Colors</h5>
                                <p class="text-muted my-3 ff-secondary">The collection of rules and guidelines which
                                    designers use to communicate with users through appealing.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-lightbulb-flash-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Strategy Solutions</h5>
                                <p class="text-muted my-3 ff-secondary">Business development firm that provides
                                    strategic planning, market research services and project.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-customer-service-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Awesome Support</h5>
                                <p class="text-muted my-3 ff-secondary">Awesome Support is the most versatile and
                                    feature-rich support plugin for all version.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-stack-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Truly Multipurpose</h5>
                                <p class="text-muted my-3 ff-secondary">You usually get a broad range of options to
                                    play with. This enables you to use a single theme across multiple.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-settings-2-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Easy to customize</h5>
                                <p class="text-muted my-3 ff-secondary">Personalise your own website, no matter what
                                    theme and what customization options.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-slideshow-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Responsive & Clean Design</h5>
                                <p class="text-muted my-3 ff-secondary">Responsive design is a graphic user interface
                                    (GUI) design approach used to create content.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-google-fill fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Google Font Collection</h5>
                                <p class="text-muted my-3 ff-secondary">Google Fonts is a collection of 915 fonts, all
                                    available to use for free on your website.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="d-flex p-3">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-sm icon-effect">
                                    <div class="avatar-title bg-transparent text-success rounded-circle">
                                        <i class="ri-briefcase-5-line fs-36"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-18">Top Industry Specialists</h5>
                                <p class="text-muted my-3 ff-secondary">An industrial specialist works with industrial
                                    operations to ensure that manufacturing facilities work.</p>
                                <div>
                                    <a href="#" class="fs-13 fw-medium">Learn More <i
                                            class="ri-arrow-right-s-line align-bottom"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>

        <!-- start review -->
        <section class="section bg-primary" id="reviews">
            <div class="bg-overlay bg-overlay-pattern"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <div>
                                <i class="ri-double-quotes-l text-success display-3"></i>
                            </div>
                            <h4 class="text-white mb-5"><span class="text-white">19k</span>+ Satisfied clients
                            </h4>

                            <!-- Swiper -->
                            <div class="swiper client-review-swiper rounded" dir="ltr">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" I am givng 5 stars. Theme is
                                                        great and everyone one stuff everything in theme. Future request
                                                        should not affect current
                                                        state of theme. "</p>

                                                    <div>
                                                        <h5 class="text-white">gregoriusus</h5>
                                                        <p>- Skote User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" Awesome support. Had few
                                                        issues while setting up because of my device, the support team
                                                        helped me fix them up in a day.
                                                        Everything looks clean and good. Highly recommended! "</p>

                                                    <div>
                                                        <h5 class="text-white">GeekyGreenOwl</h5>
                                                        <p>- Skote User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="text-white-50">
                                                    <p class="fs-20 ff-secondary mb-4">" Amazing template, Redux store
                                                        and components is nicely designed.
                                                        It's a great start point for an admin based project. Clean Code
                                                        and good documentation. Template is
                                                        completely in React and absolutely no usage of jQuery "</p>

                                                    <div>
                                                        <h5 class="text-white">sreeks456</h5>
                                                        <p>- Veltrix User</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide -->
                                </div>
                                <div class="swiper-button-next bg-white rounded-circle"></div>
                                <div class="swiper-button-prev bg-white rounded-circle"></div>
                                <div class="swiper-pagination position-relative mt-2"></div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end review -->

        <!-- start counter -->
        <section class="py-5 position-relative bg-light">
            <div class="container">
                <div class="row text-center gy-4">
                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="100">0</span>+</h2>
                            <div class="text-muted">Projects Completed</div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="24">0</span></h2>
                            <div class="text-muted">Win Awards</div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="20.3">0</span>k</h2>
                            <div class="text-muted">Satisfied Clients</div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-3 col-6">
                        <div>
                            <h2 class="mb-2"><span class="counter-value" data-target="50">0</span></h2>
                            <div class="text-muted">Employees</div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end counter -->

        <!-- start Work Process -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Our Work Process</h3>
                            <p class="text-muted mb-4 ff-secondary">In an ideal world this website wouldn’t exist, a
                                client would
                                acknowledge the importance of having web copy before the Proin vitae ipsum vel ex
                                finibus semper design starts.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-quill-pen-line"></i>
                                </div>
                            </div>

                            <h5>Tell us what you need</h5>
                            <p class="text-muted ff-secondary">The profession and the employer and your desire to make
                                your mark.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="process-arrow-img d-none d-lg-block">
                                <img src="{{ URL::asset('build/images/landing/process-arrow-img.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-user-follow-line"></i>
                                </div>
                            </div>

                            <h5>Get free quotes</h5>
                            <p class="text-muted ff-secondary">The most important aspect of beauty was, therefore, an
                                inherent part.</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="process-card mt-4">
                            <div class="avatar-sm icon-effect mx-auto mb-4">
                                <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                    <i class="ri-book-mark-line"></i>
                                </div>
                            </div>

                            <h5>Deliver high quality product</h5>
                            <p class="text-muted ff-secondary">We quickly learn to fear and thus automatically avoid
                                potentially.</p>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end Work Process -->



        <!-- start contact -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h3 class="mb-3 fw-semibold">Get In Touch</h3>
                            <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative ideas but
                                also
                                understand that a smart concept should be supported with faucibus sapien odio measurable
                                results.</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                                <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368</div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                                <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New Orleans, LA
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                                <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-8">
                        <div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="name" class="form-label fs-13">Name</label>
                                            <input name="name" id="name" type="text"
                                                class="form-control bg-light border-light" placeholder="Your name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="email" class="form-label fs-13">Email</label>
                                            <input name="email" id="email" type="email"
                                                class="form-control bg-light border-light" placeholder="Your email*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <label for="subject" class="form-label fs-13">Subject</label>
                                            <input type="text" class="form-control bg-light border-light"
                                                id="subject" name="subject" placeholder="Your Subject.." />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label fs-13">Message</label>
                                            <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light"
                                                placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-primary" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end contact -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Build your web App/SaaS with Velzon dashboard</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="https://1.envato.market/velzon-admin" target="_blank"
                                class="btn bg-gradient btn-danger"><i
                                    class="ri-shopping-cart-2-line align-middle me-1"></i> Buy Now</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <img src="{{ URL::asset('build/img/logo.png') }}" alt="logo light" height="40">
                            </div>
                            <div class="mt-4 fs-13">
                                <p>Premium Multipurpose Admin & Dashboard Template</p>
                                <p class="ff-secondary">You can build any type of web application like eCommerce,
                                    CRM, CMS, Project
                                    management apps, Admin Panels, etc using Velzon.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Company</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-profile">About Us</a></li>
                                        <li><a href="pages-gallery">Gallery</a></li>
                                        <li><a href="apps-projects-overview">Projects</a></li>
                                        <li><a href="pages-timeline">Timeline</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Apps Pages</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-pricing">Calendar</a></li>
                                        <li><a href="apps-mailbox">Mailbox</a></li>
                                        <li><a href="apps-chat">Chat</a></li>
                                        <li><a href="apps-crm-deals">Deals</a></li>
                                        <li><a href="apps-tasks-kanban">Kanban Board</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="pages-faqs">FAQ</a></li>
                                        <li><a href="pages-faqs">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © Velzon - Themesbrand
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon landing-back-top" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

    </div>
    <!-- end layout wrapper -->
@endsection
@endsection
@section('script')
<script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/landing.js') }}"></script>
@endsection
