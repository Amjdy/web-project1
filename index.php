<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Home | RIOTU LAB</title>
    <meta name="description" content="">

    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/riotu-w.png">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-main.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="css/rsmenu-transitions.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- switch color presets css -->
    <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="css/spacing.css">
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>

    <!-- Preloader area start here -->
    <div id="loading" class="icon-preloader">
        <div class="loader">
            <div class="animate3">
                <img src="images/preloader/riotu-logo-w.png" alt="Preloader Image animate3">
            </div>
        </div>
    </div>
    <!--End preloader here -->

    <!--Header Section Start-->
    <header id="rs-header" class="transparent-header">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-7 col-xs-12">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:RIOTU@psu.edu.sa">RIOTU@psu.edu.sa</a></li>
                                <li><i class="fa fa-phone"></i><a href="tel:+966 (11) 484 - 8851">+966 (11) 484 -
                                        8851</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li><a href="register.php">Register</a></li>
                                <?php if(!isset($_SESSION["loggedin"])){
                                 echo   "<li><a href=\"login.php\">Log in</a></li>";
                                }?>
                                <li><a href="logout.php">Log out</a></li>
                                <!--<li><a href="welcome.php">My account</a></li>-->
                                <li><a href="https://www.facebook.com/riotu.center"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/riotu_lab/"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a
                                        href="https://www.youtube.com/channel/UCJypzBiFE8C793Q_PC6X8IQ/videos?view_as=subscriber"><i
                                            class="fa fa-youtube-play"></i></a></li>
                                <li><a href="https://twitter.com/riotulab"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/anis-koubaa-84aa4344/"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- Toolbar End -->

        <!-- Header Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo-area" >
                            <a href="index.html"><img src="images/riotu-logo-w2.png" width="140" height="27" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 mobile-menu-area">
                        <div class="rs-menu-area display-flex-center">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <!-- End Home -->
                                        <!-- Research -->
                                        <li><a href="research.html">Research</a></li>
                                        <!-- End Research -->
                                        <!-- Projects -->
                                        <li><a href="projects.html">Projects</a></li>
                                        <!-- End projects -->
                                        <!-- Members -->
                                        <li><a href="members.php">Members</a></li>
                                        <!-- End Members -->
                                        <!-- About -->
                                        <li><a href="about.html">About</a></li>
                                        <!-- End About -->
                                        <!-- Collaboration -->
                                        <li><a href="collaboration.html">Collaboration</a></li>
                                        <!-- End Collaboration -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="right-bar-icon text-right">
                                <ul>

                                    <li class="icon-bar "><a class="rs-search" data-target=".search-modal"
                                            data-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Menu End -->
    </header>
    <!--Header Section End-->


    <!-- Slider Section Start Here -->
    <div class="rs-main-slider">
        <div id="main-slider" class="owl-carousel">
            <div class="item active gap-pt">
                <div class="dsc">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-8 col-sm-12 padding-0 col-padding-md">
                                <div class="slider-text">
                                    <h1 class="white-color mb-0 semi-bold" data-animation-in="slideInDown"
                                        data-animation-out="animate-out slideOutUp">Robotics and Internet of Things
                                        University-Lab</h1>
                                    <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut"
                                        class="btm-date">
                                        in prince Sultan university
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-4 hidden-md">
                                <div class="slider-image ">
                                    <div class="row rs-vertical-bottom">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 pl-0 pr-10">
                                            <div class="animate1">
                                                <img data-animation-in="bounceInRight"
                                                    data-animation-out="animate-out fadeOut"
                                                    src="images/slider/RIOTU lab panaroma II.JPG" alt="layer image">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="btn-slider pt-15">
                                        <a href="about.html" class="btn1" data-animation-in="slideInUp"
                                            data-animation-out="animate-out slideOutDown">Learn More</a>
                                        <a href="register.php" class="btn2" data-animation-in="slideInDown"
                                            data-animation-out="animate-out slideOutUp">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item gap-pt">
                <div class="dsc">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-8 col-sm-12 padding-0 col-padding-md">
                                <div class="slider-text">
                                    <h1 class="white-color mb-0 semi-bold" data-animation-in="slideInDown"
                                        data-animation-out="animate-out slideOutUp">AI & Machine Learning Products
                                        Creators</h1>
                                    <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut"
                                        class="btm-date">
                                        Innovative machine learning products and services<br> on a trusted platform.
                                    </div>
                                    <div class="btn-slider">
                                        <a href="#" class="btn1" data-animation-in="slideInUp"
                                            data-animation-out="animate-out slideOutDown">Learn More</a>
                                        <a href="#" class="btn2" data-animation-in="slideInDown"
                                            data-animation-out="animate-out slideOutUp">Join Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 hidden-sm">
                                <div class="slider-image ">
                                    <div class="row rs-vertical-bottom">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-10">
                                            <div class="animate1">
                                                <img data-animation-in="bounceInRight"
                                                    data-animation-out="animate-out fadeOut"
                                                    src="images/slider/sl1-ly1.png" alt="layer image">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-0">
                                            <img data-animation-in="bounceInRight"
                                                data-animation-out="animate-out fadeOut" src="images/slider/sl1-ly2.png"
                                                alt="layer image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section end Here -->
    <div class="neuron-about gray-bg pt-92 pb-100 md-pt-71 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-50">
                <h2 class="title bg-center margin-0">Latest News</h2>
            </div>
            <div class="row col-20">
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="style2 text-center box-shadow" style="z-index: 1;">

                        <h4><br>AI-based Pilgrim Detection and Monitoring using Deep Learning <br>Jan 10, 2020</h4>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/L-nmYBY2pvE"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                        <br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="style2 text-center box-shadow">

                        <h4><br>Workshop on Tensorflow API for Object Detection at RIOTU Lab<br> December 30, 2019</h4>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/KgT-KFJTvRE"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>

                        <br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="style2 text-center box-shadow">

                        <h4><br>Drone Building and Photogrammetry Training for STC Specialized <br>September 24 -
                            October 3, 2019</h4>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/8PQYxy17SSc"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                        <br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="style2 text-center box-shadow">

                        <h4><br>Fourth Lecture of the Deep Learning Seminar at RIOTU Lab<br> December 5, 2019</h4>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/tIFLcXKqpOE"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>

                        <br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="style2 text-center box-shadow">

                        <h4><br>Photogrammetry Project: Construction Survey Comparison Between DroneDeploy and Pix4D
                        </h4>
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/hoRK8nWFENk"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen=""></iframe>
                        <br>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-40">
                    <div class="style2 text-center box-shadow">

                        <h4><br>We participate inchaAllah as an exhibitor in the Third Saudi IoT Conference and
                            Exhibition</h4>
                        <img src="images/saudiiot2.jpg" width="100%">

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Counter Section Start Here-->
    <div id="neuron-counter-area" class="neuron-counter-area gradient-bg-section pt-70 pb-70">
        <div class="container">
            <div class="row neuron-count">
                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">6000</div>
                            <h5 class="counter-txt white-color">Complete Project</h5>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">400</div>
                            <h4 class="counter-txt white-color">NLP Experts</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6 sm-mb-30">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">3500</div>
                            <h4 class="counter-txt white-color">Satisfied Clients</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->

                <!-- COUNTER-LIST START -->
                <div class="col-lg-3 col-md-6">
                    <div class="neuron-counter-part text-center">
                        <div class="shape-img">
                            <img src="images/counter/count-shape.png" alt="">
                        </div>
                        <div class="counter-text text-center">
                            <div class="neuron-counter white-color">8000</div>
                            <h4 class="counter-txt white-color">Industries Served</h4>
                        </div>
                    </div>
                </div>
                <!-- COUNTER-LIST END -->
            </div>
        </div>
    </div>
    <!-- Counter Section End Here-->


    <!-- Project Section Start-->
    <div id="neuron-project-section" class="neuron-project-section pt-92 pb-300 md-pt-71">
        <div class="container">
            <div class="sec-title text-center mb-45">
                <h2 class="title bg-center">Lab's Projects</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="40" data-autoplay="true"
                data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false"
                data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false"
                data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false"
                data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="project-item">
                    <img src="images/project/deepbrain-architecture.png" alt="" style="width:510px; height:300px;">
                    <div class="project-content">
                        <div class="p-icon">
                            <a href="project-single.html"><i class="flaticon-next"></i></a>
                        </div>
                        <h3 class="title">
                            <a href="https://www.riotu-lab.org/deepbrain.php">Deep Brain</a>
                        </h3>
                    </div>
                </div>
                <div class="project-item">
                    <img src="images/project/Plam.png" alt="" style="width:510px; height:300px;">
                    <div class="project-content">
                        <h3 class="title">
                            <a href="project-single.html">Smart Palm</a>
                        </h3>
                    </div>
                </div>
                <div class="project-item">
                    <img src="images/project/dron.png" alt="" style="width:510px; height:300px;">
                    <div class="project-content">
                        <h3 class="title">
                            <a href="https://www.riotu-lab.org/project02.php">Drone map Planner</a>
                        </h3>
                    </div>
                </div>
                <div class="project-item">
                    <img src="images/project/deepLearning.jpg" alt="" style="width:510px; height:300px;">
                    <div class="project-content">
                        <h3 class="title">
                            <a href="https://www.riotu-lab.org/project01.php">Deep Learning</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Project Section End-->
    <br><br><br><br><br><br>
    <!-- Contact Section Start -->
    <div id="neuron-contact" class="neuron-contact contact-bg pb-100 md-pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pr-30 md-pr-15">
                    <div class="contact-info box-shadow">
                        <div class="contact-info-icon">
                            <i class="flaticon-gps"></i>
                        </div>
                        <div class="sec-title mb-35">
                            <h2 class="title bg-left">Contact With Us</h2>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-place"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Visit Us</h4>
                                <p>Prince Sultan University,
                                    <br>P.O.Box No. 66833 Rafha Street,
                                    <br>Riyadh 11586 Saudi Arabia</p>
                            </div>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Call Us</h4>
                                <a href="tel:+966 (11) 484 - 8851">+966 (11) 484 - 8851</a>
                            </div>
                        </div>
                        <div class="contact-icon">
                            <div class="icon-part">
                                <i class="flaticon-mail-1"></i>
                            </div>
                            <div class="icon-text">
                                <h4 class="icon-title">Email Us</h4>
                                <a href="mailto:riotu@psu.edu.sa">riotu@psu.edu.sa</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl-30 md-pl-15">
                    <div class="contact-form pt-100 md-pt-50">
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="mailer.php">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="text" placeholder="Name" id="name" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="email" placeholder="E-Mail" id="email" name="email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="text" placeholder="Phone Number" id="phone_number"
                                            name="phone_number" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-field">
                                        <input type="text" placeholder="Subject" id="subject" name="subject"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                <textarea placeholder="Your Message Here" rows="5" id="message" name="message"
                                    required=""></textarea>
                            </div>
                            <div class="form-button">
                                <button type="submit">Submit Now !</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="about-widget pr-20">
                            <div class="footer-logo w-50">
                                <img src="images/riotu-logo-transparent.png" alt="Footer Logo">
                            </div>
                            <div class="footer-info">
                                <p class="footer-desc">Robotics and Internet of Things University-Lab in Prince Sultan
                                    University. </p>
                            </div>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/riotu.center"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/riotu_lab/"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a
                                        href="https://www.youtube.com/channel/UCJypzBiFE8C793Q_PC6X8IQ/videos?view_as=subscriber"><i
                                            class="fa fa-youtube-play"></i></a></li>
                                <li><a href="https://twitter.com/riotulab"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/anis-koubaa-84aa4344/"><i
                                            class="fa fa-linkedin"></i></a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 single-footer-column">
                        <h4 class="footer-title">Work Hours</h4>
                        <p>8.00 AM - 3.00 PM , Sunday - Thursday</p>
                        <p>Our Support team is available 24/7 to answer your queries through email</p>
                    </div>

                    <div class="col-lg-2 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="footer-menu">
                            <h4 class="footer-title">Navigate</h4>
                            <div class="row">
                                <div class="col-lg-6 pr-0">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="research.html">Research</a></li>
                                        <li><a href="projects.html">projects</a></li>
                                        <li><a href="members.php">Members</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="Collaboration.html">Collaboration</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 single-footer-column">
                        <div class="footer-menu">
                            <h4 class="footer-title">Privacy & Tos</h4>
                            <ul>
                                <li><a href="privacy.html">Privacy</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>© Copyrights 2020 <a href="#">Mohanad Baras & Amjad Alsehy & Sultan abbood</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->



    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="js/jquery.min.js"></script>
    <!-- counter top js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- rsmenu js -->
    <script src="js/rsmenu-main.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Contact js -->
    <script src="js/contact.form.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>