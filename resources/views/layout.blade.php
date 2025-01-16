<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mytems es una solución innovadora en la nube que ofrece herramientas de software personalizadas para potenciar tu negocio.">
    <meta name="keywords" content="Mytems, software en la nube, soluciones personalizadas, tecnología, startups, productividad, herramientas empresariales, gestión, innovación, desarrollo web">
    <meta name="author" content="Mytems">
    <!-- Site Title -->
    <title>PADUA MUN</title>
    <!-- Site Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Material Icon -->
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <!-- Carousel Slider -->
    <link rel='stylesheet' href='{{ asset('css/magnific-popup.min.css') }}'>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="{{ asset('css/css?family=Source+Sans+Pro:400,600,700&display=swap') }}" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Custom  CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/theme01.css') }}" id="option-color">
    @yield('styles')
</head>

<body>
    <!--Start Navbar-->
    <nav class="navbar navbar-expand-lg navbar-inner fixed-top custom-nav sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand brand-logo mr-4" href="{{ route('init') }}">
                <img src="images/slider-img/02-padua-mun.png" class="img-fluid logo-light" alt="">
                <img src="images/slider-img/02-padua-mun.png" class="img-fluid logo-dark" alt="">
            </a>
            <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('init') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item {{ request()->is('aboutus') ? 'active' : '' }}">
                        <a href="{{ route('about_us') }}" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item {{ request()->is('committees') ? 'active' : '' }}">
                        <a href="{{ route('committees') }}" class="nav-link">Comittees</a>
                    </li>
                   
                    <li class="nav-item {{ request()->is('gallery') ? 'active' : '' }}">
                        <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                    </li>
                </ul>
            </div>
            <div class="contact_btn">
                <a href="{{ route('contact') }}" class="btn btn-sm">CONTACT US</a>
                <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    @yield('content')
    
    
    <!-- Start Features -->
    {{-- <section class="section features-section overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="app-feature-box">
                        <div class="feature-inner wow fadeInUp" data-wow-duration="1500ms">
                            <div class="app-feature-main">
                                <div class="app-feature-inner">
                                    <div class="icon-block">
                                        <i class="icon mdi mdi-rocket"></i>
                                    </div>
                                    <h4 class="font-weight-bold">Unique <br> UI/UX Design</h4>
                                </div>
                            </div>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing us.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="app-feature-box">
                        <div class="feature-inner wow fadeInUp" data-wow-duration="1500ms">
                            <div class="app-feature-main">
                                <div class="app-feature-inner">
                                    <div class="icon-block">
                                        <span class="icon mdi mdi-collage"></span>
                                    </div>
                                    <h4 class="font-weight-bold">Theme <br> Development</h4>
                                </div>
                            </div>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing us.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="app-feature-box">
                        <div class="feature-inner wow fadeInUp" data-wow-duration="1500ms">
                            <div class="app-feature-main">
                                <div class="app-feature-inner">
                                    <div class="icon-block">
                                        <span class="icon mdi mdi-bullhorn"></span>
                                    </div>
                                    <h4 class="font-weight-bold">Digital <br> Marketing</h4>
                                </div>
                            </div>
                            <div class="text">Lorem Ipsum is simply dummy text of the printing us.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="featured-info col-lg-8 col-md-12 col-sm-12">
                    <div class="featured-inner">
                        <div class="section-title mb-4">
                            <h2 class="font-weight-bold">User friendly interfaces</h2>
                            <p class="section_subtitle">Lorem Ipsum is simply dummy text of the printing us. disciplined rid so rational muff the project.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="featured-list-block wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.5s">
                                    <div class="featured-list-inner">
                                        <div class="icon-block">
                                            <span class="icon mdi mdi-brush"></span>
                                        </div>
                                        <h4 class="font-weight-bold">Elegant interface</h4>
                                        <div class="text">Lorem Ipsum is simply dummy text of the printing us.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="featured-list-block wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.5s">
                                    <div class="featured-list-inner">
                                        <div class="icon-block light-blue">
                                            <span class="icon mdi mdi-lock"></span>
                                        </div>
                                        <h4 class="font-weight-bold">Easy Access</h4>
                                        <div class="text">Lorem Ipsum is simply dummy text of the printing us.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="featured-list-block wow fadeInUp" data-wow-delay="0.9s" data-wow-duration="1.5s">
                                    <div class="featured-list-inner">
                                        <div class="icon-block blue">
                                            <span class="icon mdi mdi-update"></span>
                                        </div>
                                        <h4 class="font-weight-bold">Update Regularly</h4>
                                        <div class="text">Lorem Ipsum is simply dummy text of the printing us.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="featured-list-block wow fadeInUp" data-wow-delay="1.2s" data-wow-duration="1.5s">
                                    <div class="featured-list-inner">
                                        <div class="icon-block sky-blue">
                                            <span class="icon mdi mdi-account-network"></span>
                                        </div>
                                        <h4 class="font-weight-bold">Easy Sharing</h4>
                                        <div class="text">Lorem Ipsum is simply dummy text of the printing us.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-12 col-sm-12">
                    <div class="image-block wow zoomIn" data-wow-delay="0.3s" data-wow-duration="1.5s">
                        <div class="inner-column">
                            <div class="circles-img"></div>
                            <div class="image text-center">
                                <img src="images/features/mobile-13.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Features -->
    <!-- Start About-Us -->
    {{-- <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 p-0 pr-lg-5">
                    <div class="img-box wow fadeInLeft" data-wow-duration="1000ms">
                        <img src="images/about-banner.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-5 ml-auto col-md-12">
                    <div class="wow fadeInUp" data-wow-duration="1000ms">
                        <div class="section-title mb-4">
                            <h2 class="font-weight-bold">We're Building Modern And High Software</h2>
                            <p class="section_subtitle mx-auto">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        </div>
                        <ul class="list-unstyled list-icon">
                            <li class="mb-4"><i class="la la-check"></i> Deos et accusamus et iusto odio</li>
                            <li class="mb-4"><i class="la la-check"></i> Distinctively brand adaptive innovation</li>
                            <li><i class="la la-check"></i> Molestias a orci facilisis rutrum</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End About-Us -->
    <!-- Start How-it-Work -->
    {{-- <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold">How It Work?</h2>
                        <p class="section_subtitle mx-auto">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="how-works-block mt-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="how-works-box wow fadeInUp" data-wow-duration="1000ms">
                            <img src="images/works/1.png" class="img-fluid mx-auto d-block" alt="">
                            <div class="text-center">
                                <h4 class="mt-4 font-weight-bold">Choose a plan</h4>
                                <p class="mb-0 mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="how-works-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
                            <img src="images/works/2.png" class="img-fluid mx-auto d-block" alt="">
                            <div class="text-center">
                                <h4 class="mt-4 font-weight-bold">Payment method</h4>
                                <p class="mb-0 mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="how-works-box m-box-0 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.6s">
                            <img src="images/works/3.png" class="img-fluid mx-auto d-block" alt="">
                            <div class="text-center">
                                <h4 class="mt-4 font-weight-bold">Let's work</h4>
                                <p class="mb-0 mt-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End How-it-Work -->
   
    <!-- Start Testimonial -->
    {{-- <section class="section bg-gradient">
        <div id="particles-js1">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="text-white font-weight-bold">What People Say</h2>
                        <p class="text-white section_subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme testimonial-slider wow fadeIn" data-wow-duration="1000ms">
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="use-info">
                                    <h6 class="heading text-white font-weight-bold">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-white font-weight-bold">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-white font-weight-bold">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-white font-weight-bold">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-whit font-weight-bolde">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Testimonial -->
    <!-- Start Price -->
    {{-- <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold">Choose Your Pricing Plan</h2>
                        <p class="section_subtitle mx-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="package-box wow fadeIn" data-wow-delay="0s" data-wow-duration="1500ms">
                        <div class="package-box-inner">
                            <div class="package-hover-lines"></div>
                            <div class="package-title">Starter</div>
                            <h2 class="font-weight-bold">$15.00</h2>
                            <ul class="package-list">
                                <li>Single License</li>
                                <li>0 Team Members</li>
                                <li>99 mb of Storage</li>
                                <li>1.00 Project</li>
                            </ul>
                            <a href="#" class="theme-btn">get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="package-box wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="package-box-inner">
                            <div class="package-hover-lines"></div>
                            <div class="package-title">Proffesional</div>
                            <h2 class="font-weight-bold">$15.00</h2>
                            <ul class="package-list">
                                <li>Single License</li>
                                <li>0 Team Members</li>
                                <li>99 mb of Storage</li>
                                <li>1.00 Project</li>
                            </ul>
                            <a href="#" class="theme-btn">get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="package-box wow fadeIn m-box-0" data-wow-delay="0.6s" data-wow-duration="1500ms">
                        <div class="package-box-inner">
                            <div class="package-hover-lines"></div>
                            <div class="package-title">Business</div>
                            <h2 class="font-weight-bold">$15.00</h2>
                            <ul class="package-list">
                                <li>Single License</li>
                                <li>0 Team Members</li>
                                <li>99 mb of Storage</li>
                                <li>1.00 Project</li>
                            </ul>
                            <a href="#" class="theme-btn">get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Price -->
    <!-- Start Parallax -->
    {{-- <section class="parallax parallax-box section">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-4 z-index-9">
                            <h2 class="text-white font-weight-bold">Get Quote</h2>
                            <p class="section_subtitle mx-auto text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12 mx-auto">
                        <div class="mt-4 contact_form wow fadeIn" data-wow-duration="1500ms">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" class="btn btn-gradient text-white w-100 text-uppercase" value="Sign Up for free">
                                        <p class="mt-4 mb-0">30 Days Trial. Free Account Creating.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Parallax -->
    <!-- Start FAQ's -->
    {{-- <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="font-weight-bold">Frequently Asked</h2>
                        <p class="section_subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div id="accordion" class="faq-accordion-panel wow fadeInUp" data-wow-duration="1500ms">
                        <div class="question-card shadow-sm active">
                            <div class="card-header p-0" id="headingOne">
                                <h4 class="mb-0 font-weight-bold">
                                    <button class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span>1. Lorem Ipsum Dolor Sit?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="question-card shadow-sm">
                            <div class="card-header p-0" id="headingTwo">
                                <h4 class="mb-0 font-weight-bold">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>2. Amet Consectetur Adipisicing?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="question-card shadow-sm">
                            <div class="card-header p-0" id="headingThree">
                                <h4 class="mb-0 font-weight-bold">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>3. Elit Sed Do Eiusmo?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="question-card shadow-sm">
                            <div class="card-header p-0" id="headingFour">
                                <h4 class="mb-0 font-weight-bold">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span>4. Ea Commodo Consequat?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeIn" data-wow-duration="1500ms">
                        <img src="images/faqs.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End FAQ's -->
    <!-- Start Footer -->
    <footer class="footer overflow-hidden pb-4">
        <div class="container footer-top mb-4">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title mb-4">
                        <h2 class="text-white">Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <ul class="footer_menu_list list-unstyled mb-0 mt-4 contact-menu-list" style="text-align: center; padding: 0;">
                        <li style="margin-bottom: 10px;">
                            <i class="md-icon mdi mdi-map-marker"></i>
                            <a href="https://www.google.com/maps" target="_blank">
                                1204 Jimenez Pimentel St. Tarapoto 22200, PE
                            </a>
                        </li>
                        <li>
                            {{-- phone-in-talk --}}
                            <i class="md-icon mdi mdi-whatsapp"></i>
                            <a href="tel:+51950706191">+51 950 706 191</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="container footer-bottom">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="fot_social list-inline mt-4">
                        <li class="list-inline-item"><a href="#" class="social-icon"><i class="mdi mdi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->
    <!-- Back To Top -->
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"></i></a>
    <!-- Javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/particles.js') }}"></script>
    <script src='{{ asset('js/jquery.magnific-popup.min.js') }}'></script>
	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>	
    <!-- Main Js   -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar"); // Selector del navbar

    // Agrega o elimina la clase "scrolled" al navbar al hacer scroll
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // No toques la clase "active" que ya maneja el servidor
});


    </script>
    @yield('scripts')
</body>

</html>