<?php
session_start();

if (isset($_SESSION['registration_status'])) {
    $status = $_SESSION['registration_status'];
    $messege = $_SESSION['messege'];
   
    echo '<script>alert("'.$messege.'");</script>';

    unset($_SESSION['registration_status']);
    unset($_SESSION['messege']);
    unset($_SESSION['razorpay_order_id']);
    unset($_SESSION['razor_payment_id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta Options -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!-- Title -->

    <title>TSRO-MARATHON</title>



    <!-- Bootstrap -->

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- Favicon -->

    <link rel="icon" type="image/x-icon" href="assets/images/tsro logo.png">

    <!-- Owl Carousal -->

    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

    <!-- Animate on scroll -->

    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">


    <!-- Fancy Box -->

    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    <!-- Nice Select -->

    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">

    <!-- Stylesheet -->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <link rel="stylesheet" type="text/css" href="assets/css/style-dark.css">

    <!-- Colors -->

    <link rel="stylesheet" type="text/css" href="assets/css/color.css">


    <!-- Responsive -->

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- Font Awesome 5 -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

</head>

<body class="">
    <!-- Loader Start -->
    <div class="preloader">
        <figure>
            <img src="assets/images/tsro logo.png" alt="Image">
        </figure>
    </div>
    <!-- Loader End -->

    <!-- Header Style One Start -->
    <header class="header-style-one">
        <div class="container">
            <div class="row">
                <div class="desktop-nav" id="stickyHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex-all justify-content-between">
                                    <div class="header-logo">
                                        <a href="index-2.html">
                                            <figure>
                                                <img src="assets/images/Tamil Nadu Student Research Orgnization.svg" alt="logoo" class="logo-size">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="nav-bar">
                                        <ul>
                                            <li>
                                                <a href="#">Home</a>

                                            </li>
                                            <li>
                                                <a href="#">About</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact</a>
                                            </li>
                                        </ul>
                                        <div class="extras">
                                            <a href="javascript:void(0)" id="mobile-menu" class="menu-start">
                                                <svg id="ham-menu" viewBox="0 0 100 100"> <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" /> <path class="line line2" d="M 20,50 H 80" /> <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" /> </svg>
                                            </a>
                                            <a href="javascript:void(0)" id="desktop-menu" class="menu-start">
                                                <svg id="ham-menue" viewBox="0 0 100 100"> <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" /> <path class="line line2" d="M 20,50 H 80" /> <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" /> </svg>
                                            </a>
                                            <a href="tel:+9196980 93091" class="theme-btn">96980 93091
                        <i>
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="62" viewBox="0 0 40 62">
                          <defs>
                            <clipPath id="saddasdasdasdasda">
                              <rect width="40" height="62"/>
                            </clipPath>
                          </defs>
                          <g id="Mobisdfle" clip-path="url(#saddasdasdasdasda)">
                            <path id="Path_125" data-name="Path 1" d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z" transform="translate(1 1)"/>
                            <path id="Path_4342" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z" transform="translate(14 48)"/>
                          </g>
                        </svg>
                        </i>
                      </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-nav" id="mobile-nav">
                    <div class="res-log">
                        <a href="index-2.html">
                            <img src="assets/images/Builty-Logo.svg" alt="Responsive Logo">
                        </a>
                    </div>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                    <a href="JavaScript:void(0)" id="res-cross"></a>
                </div>
                <div class="mobile-nav desktop-menu">
                    <h3 class="red-space">Discover inspiring Testimonials from satisfied members.</h3>
                    <p class="des">Empowering minds, inspiring innovation - Tamil Nadu Student Research Organization(TSRO) catalyzes transfermative research and education.</p>
                    <figure>
                        <img src="assets/images/pexels-run-ffwpu-6229271.jpg" alt="Desktop Menu Image">
                    </figure>
                    <h3>Get in touch</h3>
                    <a href="tel:+919698093091" style="color: black;" class="num">96980 93091</a>
                    <p class="adrs">Venue for 1 to 6 age: KSR College Campus</p>
                    <p class="adrs">Venue for above 6 age: Tiruchengode Govt Girls School</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Style One End -->

    <!-- Featured Slider One Start -->
    <section class="featured-slider-one" style="background: grey;">
        <div class="containe">
            <div class="ro f-slider-one owl-carousel">
                <div class="f-slider-layer">
                    <img src="assets/images/pexels-run-ffwpu-2654902.jpg" alt="Slider 1">
                    <div class="f-slider-one-data">
                        <h3 class="text-white">JOIN US MAY 5 - 6</h3>
                        <h1>TSRO Hosur Marathon</h1>
                        <p><span class="h4">Location:</span> Hosur</p>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="theme-btn">Get Register <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="f-slider-layer">
                    <img src="assets/images/pexels-dazzle-jam-1005030.jpg" alt="Project Img">
                    <div class="f-slider-one-data">
                        <h3 class="text-white">JOIN US MAY 5 - 6</h3>
                        <h1>TSRO Hosur Marathon</h1>
                        <p><span class="h4">Location:</span> Hosur</p>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal1" class="theme-btn">Estimate Price <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Slider One End -->

    <section class="gap our-goal">
        <div class="heading">
            <figure>
                <img src="assets/images/heading-icon.png" alt="heading-icon-1">
            </figure>
            <span>REASONS TO ATTEND</span>
            <h2>WHY YOU SHOULD ATTEND</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="data">
                        <h4>Our Goal is to Be Better</h4>
                        <p>Step into the world of fitness, camaraderie, and community spirit as the TSRO Hosur Marathon takes center stage, inviting participants to lace up their running shoes for a memorable and invigorating experience. This upcoming event
                            promises more than just a race; it's a celebration of unity, wellness, and the sheer joy of running through the scenic landscapes of Hosur.</p>
                    </div>
                    <div class="data p2">
                        <h4>What You Get</h4>
                        <ul>
                            <li>New People</li>
                            <li>Great Speakers</li>
                            <li>Have Fun</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="data">
                        <figure class="goal-img">
                            <img src="assets/images/b-1.jpeg" alt="Our Goal">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Style One Start -->
    <section class="gap service-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="service-data">
                        <div class="svg-icon d-flex-all">
                            <img class="light-icon" src="assets/images/icons8-tickets-100.png" alt="Icon">
                            <img class="dark-icon" src="assets/images/1-icon.png" alt="Icon">
                        </div>
                        <h3><a href="service-detail.html">Tickets Information</a></h3>
                        <p>Updating... </p>
                        <a class="icon" href="service-detail.html">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="service-data">
                        <div class="svg-icon d-flex-all">
                            <img class="light-icon" src="assets/images/icons8-calendar-96.png" alt="Icon">
                            <img class="dark-icon" src="assets/images/2-icon.png" alt="Icon">
                        </div>
                        <h3><a href="service-detail.html">Opening Time</a></h3>
                        <p>Updating...</p>
                        <a class="icon" href="service-detail.html">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="service-data">
                        <div class="svg-icon d-flex-all">
                            <img class="light-icon" src="assets/images/icons8-location-100.png" alt="Icon">
                            <img class="dark-icon" src="assets/images/3-icon.png" alt="Icon">
                        </div>
                        <h3><a href="service-detail.html">Hosur</a></h3>
                        <p>Updating... </p>
                        <a class="icon" href="service-detail.html">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Style Two End -->

    <!-- About Style One Start -->
    <section class="gap no-top about-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-data-left">
                        <figure>
                            <img src="assets/images/browcher.jpeg" alt="About One">
                        </figure>
                        <figure class="about-image">
                            <img src="assets/images/b-1.jpeg" alt="About Two">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-data-right">
                        <span>Overview Event</span>
                        <h2>TSRO Hosur Marathon</h2>
                        <div class="about-info">
                            <p>
                                Step into the world of fitness, camaraderie, and community spirit as the TSRO Hosur Marathon takes center stage, inviting participants to lace up their running shoes for a memorable and invigorating experience. This upcoming event promises more than just
                                a race; it's a celebration of unity, wellness, and the sheer joy of running through the scenic landscapes of Hosur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Style One End -->

    <!-- Counter Style One Start -->
    <section class="gap no-top counter-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-data">
                        <div class="count">
                            <span class="counter">2</span>+<i>Years</i>
                        </div>
                        <h4>Successfully Conducted</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-data upper-space">
                        <div class="count">
                            <span class="counter">300</span>+<i>People</i>
                        </div>
                        <h4>Registered</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-data">
                        <div class="count">
                            <span class="counter">2</span>+<i>Locations</i>
                        </div>
                        <h4>For Participents</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Style One End -->

    <section class="gap no-top certificates">
        <div class="heading">
            <figure>
                <img src="assets/images/heading-icon.png" alt="heading-icon-22">
            </figure>
            <span>What We Provide</span>
            <h2>Price Allocated</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="data">
                        <figure class="c-img">
                            <img src="assets/images/browcher.jpeg" alt="ceritificates img">
                        </figure>
                        <div class="extras">
                            <h3>TSRO</h3>
                            <p>Hosur Marathon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="data data2">
                        <span>TSRO Tiruchengode Marathon</span>
                        <h2>Get TSRO Ceritificates For All Participents</h2>
                    </div>
                    <div class="c-slider owl-carousel">
                        <div class="c-main">
                            <div class="c-first">
                                <figure>
                                    <img src="assets/images/pexels-arturo-añez-12774061.jpg" alt="12774061.jpg">
                                </figure>
                            </div>
                            <div class="c-second">
                                <span>1-14 age</span>
                                <h3>2.5k for age 1-6 age and 5k for 7-14</h3>
                                <p>Updating...</p>
                            </div>
                        </div>
                        <div class="c-main">
                            <div class="c-first">
                                <figure>
                                    <img src="assets/images/pexels-run-ffwpu-3039888.jpg" alt="3039888.jpg">
                                </figure>
                            </div>
                            <div class="c-second">
                                <span>14 above</span>
                                <h3>10k</h3>
                                <p>Updating...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Style One Start -->

    <!-- Project Style One End -->

    <!-- Team Style One Start -->
    <!-- <section class="gap team-style-one">
        <div class="heading-style-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="data">
                            <span>Our Skilled Team</span>
                            <h2>Meet Our Engineers</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="team-slider-nav">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-slider owl-carousel">
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-3.png" alt="team-3">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Harald Gindl, MBA</h3>
                                <p>Head Railway Construction</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-1.png" alt="team-1">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Edward Jeffrey</h3>
                                <p>Finance Department</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-2.png" alt="team-2">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Nicholas Larry</h3>
                                <p>Railway Manager</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-3.png" alt="team-3">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Stephen</h3>
                                <p>Creative Worker</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-1.png" alt="team-1">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Eric Scot</h3>
                                <p>Cheif Railway Construction</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-2.png" alt="team-2">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Alexander</h3>
                                <p>Head Railway Construction</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-3.png" alt="team-3">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Jose Tyler</h3>
                                <p>HR Department</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-data">
                            <div class="team-image">
                                <figure>
                                    <img src="assets/images/team-2.png" alt="team-2">
                                </figure>
                            </div>
                            <div class="team-info">
                                <h3>Henry Vincent</h3>
                                <p>Construction Manager</p>
                                <div class="team-social-media">
                                    <a class="fb icon" href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a class="tw icon" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Team Style One End -->

    <!-- Core Features Start -->
    <section class="core-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="space">
                        <div class="heading-style-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="data">
                                            <span>Schedule For Event</span>
                                            <h2>Event Schedule</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span class="num">8-9am</span> Marketing 
                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Nunc commodo tellus diam, sed molestie quam Etiam finibus Ilime iaculis placerat neque id frin erat egestas ante sollicitudin, quiseo tristique.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="num">8-9am</span> Start Up Here
                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Nunc commodo tellus diam, sed molestie quam Etiam finibus Ilime iaculis placerat neque id frin erat egestas ante sollicitudin, quiseo tristique.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="num">8-9am</span> Lunch Party Food
                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Nunc commodo tellus diam, sed molestie quam Etiam finibus Ilime iaculis placerat neque id frin erat egestas ante sollicitudin, quiseo tristique.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <span class="num">8-9am</span> Master Classes
                  </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Nunc commodo tellus diam, sed molestie quam Etiam finibus Ilime iaculis placerat neque id frin erat egestas ante sollicitudin, quiseo tristique.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shape">
                        <div class="video">
                            <figure>
                                <img src="assets/images/pexels-snapwire-618612.jpg" alt="Core Feature Img">
                            </figure>
                            <a class="video-play-btn" data-fancybox="" href="https://youtu.be/21IBIF9BMaQ">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="56" viewBox="0 0 35 56"> <defs> <clipPath id="clip-video_arrow"> <rect width="35" height="56"/> </clipPath> </defs> <g id="video_arrow" data-name="video arrow" clip-path="url(#clip-video_arrow)"> <path id="Shape_1" data-name="Shape 1" d="M1362,5000.8,1327,4972V5027Z" transform="translate(-1326.998 -4971.996)" fill="rgba(0,0,0,0)"/> <path id="Shape_1_-_Outline" data-name="Shape 1 - Outline" d="M1333,5015.017l19.29-14.437L1333,4984.7v30.313M1327,5027V4972l35,28.807Z" transform="translate(-1326.998 -4971.996)"/> </g> </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Features End -->


    <!-- Client Style One Start -->
    <!-- <div class="gap client-style-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-slider owl-carousel">
                        <img class="w-auto m-auto" src="assets/images/05.jpg" alt="05">
                        <img class="w-auto m-auto" src="assets/images/06.jpg" alt="06">
                        <img class="w-auto m-auto" src="assets/images/07.jpg" alt="07">
                        <img class="w-auto m-auto" src="assets/images/08.jpg" alt="08">
                        <img class="w-auto m-auto" src="assets/images/11.jpg" alt="11">
                        <img class="w-auto m-auto" src="assets/images/12.jpg" alt="12">
                        <img class="w-auto m-auto" src="assets/images/14.jpg" alt="14">
                        <img class="w-auto m-auto" src="assets/images/15.jpg" alt="15">
                        <img class="w-auto m-auto" src="assets/images/17.jpg" alt="17">
                        <img class="w-auto m-auto" src="assets/images/22.jpg" alt="22">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Client Style One End -->

    <!-- Renovation Start -->
    <section class="gap renovation">
        <div class="parallax" style="background-image: url(assets/images/pexels-run-ffwpu-2402777.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="reno-data">
                        <h3>Your Renovation</h3>
                        <h2>Starts Here</h2>
                        <p>Tamil Nadu Students Research Organization was inaugurated on 22nd June 2017 by the former Governor of Tamil Nadu Hon'ble Mr. Banwarilal Purohit. The former President of India formulated action plans for the period from 2013 to
                            2015 with an action plan to realize the dreams of government school students in the field of science and sports, to raise the educational standards of Transgenders/Mir Nambis and to create a world without street children. It
                            is an organization that was started after receiving the advice of Sir Abdul Kalam. The founder and chairman of this organization. Ravikumar is working.</p>
                        <div class="bbtn">
                            <figure>
                                <img class="w-auto circle-layer" src="assets/images/circle-text.png" alt="Circle Text">
                            </figure>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fa-solid fa-arrow-up-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Renovation End -->

    <!-- Client Review Style One Start -->
    <!-- <section class="gap client-review-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="head-review">
                        <span>Testimonials</span>
                        <h3>Client’s Reviews</h3>
                    </div>
                    <div class="client-review-slider owl-carousel">
                        <div class="slider-data">
                            <p>To my mind, the greatest reward for any renovation project is being able to experience the transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a reality and lead to an elevated
                                mood and heightened productivity.</p>
                            <div class="bio d-flex-all justify-content-start w-100">
                                <div class="icon d-flex-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" viewBox="0 0 26 26"> <defs> <clipPath id="clip-Inverted"> <rect width="26" height="26"/> </clipPath> </defs> <g id="Inverted_" data-name="Inverted commas flaky" clip-path="url(#clip-Inverted)"> <path id="Path_3444" data-name="Path 3" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(14 0.964)"/> <path id="Path_weee4" data-name="Path 4" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(0.969 0.964)"/> </g> </svg>
                                </div>
                                <div class="details w-100">
                                    <h3>Marko Marlee</h3>
                                    <p>Chairman, Building Corp</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-data">
                            <p>To my mind, the greatest reward for any renovation project is being able to experience the transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a reality and lead to an elevated
                                mood and heightened productivity.</p>
                            <div class="bio d-flex-all justify-content-start w-100">
                                <div class="icon d-flex-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" viewBox="0 0 26 26"> <defs> <clipPath id="clip-Inverted_comma"> <rect width="26" height="26"/> </clipPath> </defs> <g id="Inver" data-name="Inverted commas flaky" clip-path="url(#clip-Inverted_comma)"> <path id="Path_332" data-name="Path 3" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(14 0.964)"/> <path id="Path_3344" data-name="Path 4" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(0.969 0.964)"/> </g> </svg>
                                </div>
                                <div class="details w-100">
                                    <h3>Christopher</h3>
                                    <p>Social Worker</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-data">
                            <p>To my mind, the greatest reward for any renovation project is being able to experience the transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a reality and lead to an elevated
                                mood and heightened productivity.</p>
                            <div class="bio d-flex-all justify-content-start w-100">
                                <div class="icon d-flex-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" viewBox="0 0 26 26"> <defs> <clipPath id="clip-Inve"> <rect width="26" height="26"/> </clipPath> </defs> <g id="Inverted_co" data-name="Inverted commas flaky" clip-path="url(#clip-Inve)"> <path id="Path_35555" data-name="Path 3" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(14 0.964)"/> <path id="Path_4545454" data-name="Path 4" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(0.969 0.964)"/> </g> </svg>
                                </div>
                                <div class="details w-100">
                                    <h3>Donald Paul</h3>
                                    <p>Constructor</p>
                                </div>
                            </div>
                        </div>
                        <div class="slider-data">
                            <p>To my mind, the greatest reward for any renovation project is being able to experience the transformation from beginning to end. I enjoy getting to see how a renovation can go from an idea to a reality and lead to an elevated
                                mood and heightened productivity.</p>
                            <div class="bio d-flex-all justify-content-start w-100">
                                <div class="icon d-flex-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="26" height="26" viewBox="0 0 26 26"> <defs> <clipPath id="clip-Inverted_coadsadad"> <rect width="26" height="26"/> </clipPath> </defs> <g id="Inverte" data-name="Inverted commas flaky" clip-path="url(#clip-Inverted_coadsadad)"> <path id="Path_3fewrrw" data-name="Path 3" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(14 0.964)"/> <path id="Path_werwer4" data-name="Path 4" d="M.032,24.036V14.478l-.032,0V8.991C.4.4,9.086,0,9.086,0V5.961c-3.535,0-3.555,3.03-3.555,3.03v4.045h5.5v11ZM0,8.991Z" transform="translate(0.969 0.964)"/> </g> </svg>
                                </div>
                                <div class="details w-100">
                                    <h3>Kevin Samuel</h3>
                                    <p>Creative Head</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure>
                        <img src="assets/images/clients-images.png" alt="Client Images">
                    </figure>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Client Review Style One End -->
    <section class="gap no-top pricing-plans mt-2">
        <div class="heading">
            <figure>
                <img src="assets/images/heading-icon.png" alt="heading-icon-2">
            </figure>
            <span>Select a plan that suits</span>
            <h2>Flexible Pricing Plans</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="main-price">
                        <div class="price-box">
                            <h3>Student Pack</h3>
                            <div class="price">
                                <h2>$20</h2>
                                <div>
                                    <p>Per user / Month</p>
                                    <p>Billed Annually</p>
                                </div>
                            </div>
                            <p>Manage your own project documents and collaborate.</p>
                            <a href="javascript:void(0)" class="theme-btn">Select Now <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i> All Plan.it features</li>
                                <li><i class="fa-solid fa-circle-check"></i> Intelligent bid manager</li>
                                <li><i class="fa-solid fa-circle-check"></i> Contractor network</li>
                            </ul>
                        </div>
                        <div class="price-img">
                            <figure>
                                <img src="assets/images/project-img-1.jpg" alt="Price Img-1">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="main-price">
                        <div class="price-box">
                            <h3>Business Pack</h3>
                            <div class="price">
                                <h2>$60</h2>
                                <div>
                                    <p>Per user / Month</p>
                                    <p>Billed Annually</p>
                                </div>
                            </div>
                            <p>Manage your own project documents and collaborate.</p>
                            <a href="javascript:void(0)" class="theme-btn">Select Now <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i> All Plan.it features</li>
                                <li><i class="fa-solid fa-circle-check"></i> Intelligent bid manager</li>
                                <li><i class="fa-solid fa-circle-check"></i> Contractor network</li>
                            </ul>
                        </div>
                        <div class="price-img">
                            <figure>
                                <img src="assets/images/project-img-2.jpg" alt="Price Img-1">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="main-price">
                        <div class="price-box">
                            <h3>Platinum Pack</h3>
                            <div class="price">
                                <h2>$94</h2>
                                <div>
                                    <p>Per user / Month</p>
                                    <p>Billed Annually</p>
                                </div>
                            </div>
                            <p>Manage your own project documents and collaborate.</p>
                            <a href="javascript:void(0)" class="theme-btn">Select Now <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <div class="features">
                            <ul>
                                <li><i class="fa-solid fa-circle-check"></i> All Plan.it features</li>
                                <li><i class="fa-solid fa-circle-check"></i> Intelligent bid manager</li>
                                <li><i class="fa-solid fa-circle-check"></i> Contractor network</li>
                            </ul>
                        </div>
                        <div class="price-img">
                            <figure>
                                <img src="assets/images/o-p-o-3.jpg" alt="Price Img-1">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Style One Start -->
    <section class="gap no-top blog-style-one">
        <div class="heading">
            <figure>
                <img src="assets/images/heading-icon.png" alt="heading-icon">
            </figure>
            <span>Let us Help Guide</span>
            <h2>Recent Articles</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post">
                        <div class="blog-image">
                            <figure>
                                <img src="assets/images/pexels-run-ffwpu-2462041.jpg" alt="blog-img-1">
                            </figure>
                            <a href="#">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                        <div class="blog-data">
                            <span class="blog-date">November 19, 2023</span>
                            <h2>
                                <a href="#">1-6 Age Kids Marathon</a>
                            </h2>
                            <div class="blog-author d-flex-all justify-content-start">
                                <div class="details">
                                    <p>Updating...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post">
                        <div class="blog-image">
                            <figure>
                                <img src="assets/images/pexels-run-ffwpu-2530137.jpg" alt="blog-img-2">
                            </figure>
                            <a href="#">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                        <div class="blog-data">
                            <span class="blog-date">November 19, 2023</span>
                            <h2>
                                <a href="#">7-14 Age kids Marathon</a>
                            </h2>
                            <div class="blog-author d-flex-all justify-content-start">
                                <div class="details">
                                    <p>Updating...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post">
                        <div class="blog-image">
                            <figure>
                                <img src="assets/images/pexels-run-ffwpu-2002209.jpg" alt="blog-img-3">
                            </figure>
                            <a href="#">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </div>
                        <div class="blog-data">
                            <span class="blog-date">November 19, 2023</span>
                            <h2>
                                <a href="#">14 Above Age Audlt Marathon</a>
                            </h2>
                            <div class="blog-author d-flex-all justify-content-start">
                                <div class="details">
                                    <p>Updating...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-btn">
                <a href="our-blog-1.html" class="theme-btn">View All Posts <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Blog Style One End -->

    <!-- Footer Style One Start -->
    <footer class="footer-style-one">
        <div class="footer-p-1">
            <div class="container">
                <div class="row">
                    <div class="footer-first">
                        <div class="footer-logo">
                            <a href="index-2.html">
                                <img src="assets/images/tsro logo.png" alt="Footer Logo" style="width: 5rem;">
                            </a>
                        </div>
                        <div class="contact-info d-flex-all">
                            <div class="images d-flex-all justify-content-start">
                                <figure>
                                    <img src="assets/images/blog-author-img.jpg" alt="Contact Images">
                                </figure>
                                <figure>
                                    <img src="assets/images/blog-author-img-2.jpg" alt="Contact Images">
                                </figure>
                            </div>
                            <p>Contact representative <span>96980 93091</span> free call !</p>
                        </div>
                        <a href="#" class="theme-btn">Get a Consultation <i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-p-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-col">
                            <h3>Information</h3>
                            <p>Step into the world of fitness, camaraderie, and community spirit as the TSRO Hosur Marathon takes center stage, inviting participants to lace up their running shoes for a memorable and invigorating experience. This upcoming
                                event promises more than just a race; it's a celebration of unity, wellness, and the sheer joy of running through the scenic landscapes of Hosur.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-col">
                            <h3>Contact</h3>
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79" height="94" viewBox="0 0 79 94"> <defs> <clipPath id="clip-location_B"> <rect width="79" height="94"/> </clipPath> </defs> <g id="location_B" data-name="location B" clip-path="url(#clip-location_B)"> <path id="Path_121" data-name="Path 1" d="M962.855,575.375a3,3,0,0,1-2.1-.861l-26.263-25.826c-11.03-11.993-13.791-27.653-7.492-42a38.334,38.334,0,0,1,34.959-23.117l1.346.009c15.262,0,27.868,8.452,33.722,22.609,6.152,14.878,3.046,31.554-7.912,42.485-.528.555-24.064,25.75-24.064,25.75a3,3,0,0,1-2.129.951Zm-.9-85.8A31.924,31.924,0,0,0,932.49,509.1c-5.313,12.1-2.954,25.342,6.31,35.419l23.963,23.559c15.027-16.085,20.179-21.585,22.274-23.488l-.164-.165c9.233-9.209,11.825-23.318,6.605-35.944a29.677,29.677,0,0,0-28.177-18.9Z" transform="translate(-922.725 -482.15)"/> <path id="Path_23" data-name="Path 2" d="M15,6a9,9,0,1,0,9,9,9.01,9.01,0,0,0-9-9m0-6A15,15,0,1,1,0,15,15,15,0,0,1,15,0Z" transform="translate(25 26)"/> </g> </svg>
                                    <p>Venue for 1 to 6 age: KSR College Campus Venue for above 6 age: Tiruchengode Govt Girls School</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="62" viewBox="0 0 40 62"> <defs> <clipPath id="dasdasdasd"> <rect width="40" height="62"/> </clipPath> </defs> <g id="Mobsdfsdfsdfsdfile" clip-path="url(#dasdasdasd)"> <path id="Path_331" data-name="Path 1" d="M10,6a4,4,0,0,0-4,4V50a4,4,0,0,0,4,4H28a4,4,0,0,0,4-4V10a4,4,0,0,0-4-4H10m0-6H28A10,10,0,0,1,38,10V50A10,10,0,0,1,28,60H10A10,10,0,0,1,0,50V10A10,10,0,0,1,10,0Z" transform="translate(1 1)"/> <path id="Path_2" data-name="Path 2" d="M2.5,0h7a2.5,2.5,0,0,1,0,5h-7a2.5,2.5,0,0,1,0-5Z" transform="translate(14 48)"/> </g> </svg>
                                    <p>96980 93091</p>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="102" height="93" viewBox="0 0 102 93"> <defs> <clipPath id="clip-Email_B"> <rect width="102" height="93"/> </clipPath> </defs> <g id="Email_B" data-name="Email B" clip-path="url(#clip-Email_B)"> <path id="Path_1444" data-name="Path 1" d="M969.85,550.4,927.766,528.2l2.8-5.307,39.229,20.7,37.712-20.677,2.885,5.261Z" transform="translate(-918 -492)"/> <path id="Path_24" data-name="Path 2" d="M969.562,494.385l48.391,25.361,0,1.818c-.023,17.272-.043,42.814-.012,47.124l.012.024v.709c0,5.426-1.516,9.425-4.508,11.885a10.4,10.4,0,0,1-6.575,2.344l-75.5-.016c-3.557.071-5.965-.931-7.717-2.752-2.4-2.5-3.517-6.391-3.317-11.577l.065-1.194c.116-5.315.029-29.954-.067-46.535l-.011-1.842Zm42.386,28.988-42.411-22.227-43.2,22.238c.189,32.939.239,42.8-.143,46.148l.13.005c-.168,4.351.8,6.309,1.645,7.185a3.342,3.342,0,0,0,2.458.984l76.043-.071a4.65,4.65,0,0,0,3.16-.963c1.517-1.248,2.319-3.754,2.319-7.25h.09C1011.893,566.689,1011.9,557.566,1011.947,523.373Z" transform="translate(-918 -492)"/> </g> </svg>
                                    <p>username@domain.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-col">
                            <h3>Newsletter</h3>
                            <p>Signup for our weekly newsletter to get the latest news.</p>
                            <form>
                                <input type="email" name="email" placeholder="Enter your email.">
                                <button>
                  <i class="fa-solid fa-arrow-up-long"></i>
                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-p-3 rights">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <p>Tamilnadu Student Research Organization <i class="fa-solid fa-heart"></i> © 2023 <a href="https://tsro.in/"> tsro.in</a> All rights reserved</p>
                        <div class="social-medias">
                            <a href="javascript:void(0)">Facebook</a>
                            <a href="javascript:void(0)">Twitter</a>
                            <a href="javascript:void(0)">WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Style One End -->







    <button id="scrollTop" class="scrollTopStick">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

    <div class="modal fade popups est-popup" id="exampleModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="estimated-price popup">
                        <div class="est-form">
                            <h3>Estimatied Price</h3>
                            <p>To get the cost estimation of your house please select from the following:</p>
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="inputState-1">House Area</label>
                                        <select id="inputState-1" class="form-control">
                      <option selected>Choose Area</option>
                      <option>...</option>
                    </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 space">
                                        <label for="inputState-2">Room</label>
                                        <select id="inputState-2" class="form-control">
                      <option selected>Select Room</option>
                      <option>...</option>
                    </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState-3">Bathroom</label>
                                        <div class="gg">
                                            <select id="inputState-3" class="form-control">
                        <option selected>Select Bathroom</option>
                        <option>...</option>
                      </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row checkk g-0">
                                    <p>Building Materials</p>
                                    <div class="form-group col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input checked type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">A+ Grey Structure</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Premium Finishing</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="est-main">
                                    <p>A+ House Construction Tentative Amount</p>
                                    <div class="est-price">
                                        <p>Estimated Price:</p>
                                        <span class="price">$ 80000</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade popups conslt-popup" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-one popup">
                        <div class="c-form-2">
                            <h3>Start Consulting</h3>
                            <div class="parallax" style="background-image: url(assets/images/pattren.png);"></div>
                            <form action="register.php" id="register" method="POST" class="">
                                <h5 class="text-white pb-2">Contact Information</h5>
                                <div class="row g-0">
                                    <label class="text-white">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                                </div>
                                <!-- <div class="row g-0">
                                    <label class="text-white">Middle Name</label>
                                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">
                                </div> -->
                                <div class="row g-0">
                                    <label class="text-white">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">Phone No. <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone No" required>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">Whatsapp No. <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="whatsappNo" name="whatsappNo" placeholder="Whatsapp No" required>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">Gender <span class="text-danger">*</span></label>
                                    <select id="gender" name="gender" class="form-select" required>
                                    <option value="" selected>-select-</option>
                                    <option value="male"></var>Male</option>
                                    <option value="female">Female</option>
                                    <option value="non-binary">Non-binary</option>
                                    </select>
                                </div>
                                <!-- <div class="row g-0">
                                    <textarea id="question" name="question" placeholder="Question / Message?"></textarea>
                                </div> -->
                                <div class="row g-0">
                                    <label class="text-white">Nationality <span class="text-danger">*</span></label>
                                    <select id="nationality" name="nationality" class="form-select" required>
                                    <option selected></option>
                                    <option value="Indian national">Indian national</option>
                                    <option value="Foeign national">Foreign national</option>
                                    </select>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">State <span class="text-danger">*</span></label>
                                    <select id="state" name="state" class="form-select" required>
                                        <div class="overflow-auto"></div>
                                    </select>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City" required>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">Street Address <span class="text-danger">*</span></label>
                                    <textarea placeholder="Enter Your Address" name="address" id="address" required></textarea>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">Pincode <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Your Pincode" required>
                                </div>
                                <h5 class="text-white pb-2">Category & Other information</h5>
                                <div class="row g-0">
                                    <label class="text-white">Select Catogory <span class="text-danger">*</span></label>
                                    <select id="category" name="category" class="form-select" required>
                                    <option value="" selected></option>
                                    <option value="5">5 km</option>
                                    <option value="10">10 km</option>
                                    </select>
                                </div>
                                <div class="row g-0">
                                    <label class="text-white">Date of Birth <span class="text-danger">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="date" class="form-control" name="dob" id="dob" required>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="theme-btn" name="submit">Submit Now <i class="fa-solid fa-angles-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->

    <script src="assets/js/jquery.min.js"></script>


    <!-- Waypoint -->

    <script src="assets/js/jquery.waypoints.min.js"></script>


    <!-- Counter -->

    <script src="assets/js/jquery.counterup.min.js"></script>

    <!-- Bootstrap Js -->

    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Fancybox Js -->

    <script src="assets/js/jquery.fancybox.min.js"></script>

    <!-- Nice Select Js -->

    <script src="assets/js/jquery.nice-select.js"></script>

    <!-- Animate on scroll Js -->

    <script src="assets/js/aos.js"></script>

    <!-- Owl Carousal Js -->

    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Custom Js -->

    <script src="assets/js/custom.js"></script>
</body>
</html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    // $(document).ready(function(){
    //     $('#register').submit(function(e){
    //         e.preventDefault();
    //         var form = $('#register')[0];
    //         // var formData = new FormData(form);
    //         var formData = new FormData($('#register')[0]);

    //         $.ajax({
    //             url:'register.php',
    //             method:"POST",
    //             data:formData,
    //             processData:false,
    //             contentType:false,
    //             success:function(data){

    //             }
    //         });
    //     });
    // });
</script>