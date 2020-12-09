<?php
require('db.php'); 
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
        <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
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
                    <img src="images/preloader/load.png" alt="Preloader Image animate3">
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
                                    <li><i class="fa fa-envelope-o"></i><a href="mailto:RIOTU@psu.edu.sa">RIOTU@psu.edu.sa</a></li>
                                    <li><i class="fa fa-phone"></i><a href="tel:+123456789">(+123) 456789</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-5 col-xs-12">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
                            <div class="logo-area">
                                <a href="index.html"><img src="images/riotu-logo-w.png" alt="logo"></a>
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


                                            <li><a href="features.html">Research</a></li>

                                            <!-- Pages Mega Menu Start -->
                                            <li class="rs-mega-menu mega-rs menu-item-has-children"> <a href="#">Pages</a>
                                                <ul class="mega-menu"> 
                                                    <li class="mega-menu-container">
                                                        <div class="mega-menu-innner">
                                                            <div class="single-megamenu">
                                                                <ul class="sub-menu">
                                                                    <li><a href="mobile-app.html">Mobile App</a> </li>
                                                                    <li><a href="team.html">Team Page</a> </li>
                                                                    <li><a href="privacy.html">Privacy Policy Page</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-megamenu">
                                                                <ul class="sub-menu">
                                                                    <li><a href="pricing.html">Pricing Plan</a> </li>
                                                                    <li><a href="chatbot.html">ChatBot</a> </li>
                                                                    <li><a href="login.html">Login</a> </li>
                                                                    <li><a href="register.html">Register</a> </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-megamenu">
                                                                <ul class="sub-menu">
                                                                    <li><a href="software-download.html">Download</a> </li>
                                                                    <li><a href="coming-soon.html">Coming Soon</a> </li>
                                                                    <li><a href="error.html">404 Error</a> </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> <!-- //.mega-menu -->
                                            </li>
                                            <!--Pages Mega Menu End -->

                                            <!-- Shop Menu Start -->
                                            <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children"><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-single.html">Shop Single</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <!-- Shop Menu End -->

                                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li> 
                                            <li><a href="software-demo.html">Collaboration</a></li> 
                                            <li> <a href="contact.html">Contact</a> </li>
                                        </ul>
                                   </nav>
                               </div>
                               <div class="right-bar-icon text-right">
                                    <ul>
                                        <li class="icon-bar cart-inner mini-cart-active">
                                            <a class="cart-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                            </a>
                                            <div class="woocommerce-mini-cart text-left">
                                                <ul class="cart-icon-product-list">
                                                    <li class="display-flex">
                                                        <div class="icon-cart">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="cart.html">Cordless Drill</a><br>
                                                            <span class="quantity">1 × $30.00</span>
                                                        </div>
                                                        <div class="product-image">
                                                            <a href="cart.html"><img width="40" src="images/shop/4.jpg" alt="Product Image"></a>
                                                        </div>
                                                    </li>
                                                    <li class="display-flex">
                                                        <div class="icon-cart">
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="cart.html">Spirit Level</a><br>
                                                            <span class="quantity">1 × $30.00</span>
                                                        </div>
                                                        <div class="product-image">
                                                            <a href="cart.html"><img width="40" src="images/shop/5.jpg" alt="Product Image"></a>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <div class="total-price text-center">
                                                    <span class="subtotal">Subtotal:</span>
                                                    <span class="current-price">$85.00</span>
                                                </div>

                                                <div class="cart-btn text-center">
                                                    <a class="readon" href="cart.html">View Cart</a>
                                                    <a class="readon" href="checkout.html">Check Out</a>
                                                </div>
                                            </div> 
                                        </li>
                                        <li class="icon-bar "><a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a></li>
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
                                <div class="col-lg-6 col-md-8 col-sm-12 padding-0 col-padding-md">
                                    <div class="slider-text">
                                        <h1 class="white-color mb-0 semi-bold" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">AI & Machine Learning Products Creators</h1>
                                        <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="btm-date">
                                            Innovative machine learning products and services<br> on a trusted platform.
                                        </div>
                                        <div class="btn-slider"> 
                                            <a href="#" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Learn More</a>
                                            <a href="#" class="btn2" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 hidden-sm">
                                    <div class="slider-image ">
                                        <div class="row rs-vertical-bottom">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-10">
                                                <div class="animate1">
                                                    <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut" src="images/slider/sl1-ly1.png" alt="layer image">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-0">
                                                <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut" src="images/slider/sl1-ly2.png" alt="layer image">
                                            </div>
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
                                        <h1 class="white-color mb-0 semi-bold" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">AI & Machine Learning Products Creators</h1>
                                        <div data-animation-in="slideInRight" data-animation-out="animate-out fadeOut" class="btm-date">
                                            Innovative machine learning products and services<br> on a trusted platform.
                                        </div>
                                        <div class="btn-slider"> 
                                            <a href="#" class="btn1" data-animation-in="slideInUp" data-animation-out="animate-out slideOutDown">Learn More</a>
                                            <a href="#" class="btn2" data-animation-in="slideInDown" data-animation-out="animate-out slideOutUp">Join Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 hidden-sm">
                                    <div class="slider-image ">
                                        <div class="row rs-vertical-bottom">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-10">
                                                <div class="animate1">
                                                    <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut" src="images/slider/sl1-ly1.png" alt="layer image">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0 pr-0">
                                                <img data-animation-in="bounceInRight" data-animation-out="animate-out fadeOut" src="images/slider/sl1-ly2.png" alt="layer image">
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
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/L-nmYBY2pvE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                <br>
                        </div>                                    
                    </div>
                    <div class="col-lg-6 col-md-6 mb-40">
                        <div class="style2 text-center box-shadow">
                        
                            <h4><br>Workshop on Tensorflow API for Object Detection at RIOTU Lab<br> December 30, 2019</h4>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/KgT-KFJTvRE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                
                                <br>
                        </div>                                    
                    </div>
                    <div class="col-lg-6 col-md-6 mb-40" >
                        <div class="style2 text-center box-shadow">
                        
                            <h4><br>Drone Building and Photogrammetry Training for STC Specialized <br>September 24 - October 3, 2019</h4>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/8PQYxy17SSc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                <br>
                        </div>                                    
                    </div>
                    <div class="col-lg-6 col-md-6 mb-40" >
                        <div class="style2 text-center box-shadow">
                        
                            <h4><br>Fourth Lecture of the Deep Learning Seminar at RIOTU Lab<br> December 5, 2019</h4>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/tIFLcXKqpOE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                
                                <br>
                        </div>                                    
                    </div>
                    <div class="col-lg-6 col-md-6 mb-40" >
                        <div class="style2 text-center box-shadow">
                        
                            <h4><br>Photogrammetry Project: Construction Survey Comparison Between DroneDeploy and Pix4D</h4>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/hoRK8nWFENk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                <br>
                        </div>                                    
                    </div>
                    <div class="col-lg-6 col-md-6 mb-40" >
                        <div class="style2 text-center box-shadow">
                        
                            <h4><br>We participate inchaAllah as an exhibitor in the Third Saudi IoT Conference and Exhibition</h4>
                            <img src="images/saudiiot2.jpg" width="100%">
                            
                            <br>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>

        <!-- About Video Section Start-->
        <div id="neuron-about-video" class="neuron-about-video pb-100 md-pb-70">
            <div class="container">                
                <div class="row align-items-center">
                    <div class="col-lg-6 order-last md-mb-40">
                       <div class="about-video-img">
                            <img src="images/about/about-video-part.png" alt="">
                       </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title mb-36">
                            <h2 class="title bg-left">We Create The Most Realistic Artificial Intelligence</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscipit arcu. Quisque aliquam posuere tortor, sit amet convallis nunc scelerisque in.</p>

                            <p class="margin-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore eius molesti ae facere, natus reprehenderit eaque eum, autem ipsam. Magni, error. Tem pora odit laborum iure inventore possimus laboriosam qui nam. Fugit!</p>
                        </div>

                        <div class="about-btn">
                            <a class="readon radius" href="#">Learn More</a>
                            <div class="media-icon">
                                <a class="popup-videos" href="https://www.youtube.com/watch?v=2PFVhej26BE"><i class="flaticon-play-button"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container end -->
        </div>
        <!-- About Video Section End-->

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

        <!-- Services Section Start-->
        <div class="neuron-about gray-bg pt-92 pb-100 md-pt-71 md-pb-80">
            <div class="container"> 
                <?php 
                $sel_query1= "select * from members where memberType='Senior Researchers'; ";
                $result = mysqli_query($db,$sel_query1);
                while($row= mysqli_fetch_assoc($result)){ ?>
                <div class="sec-title text-center mb-50">
                    <h2 class="title bg-center margin-0"><?php echo $row["memberType"];?></h2>
                </div>
                <div class="row col-20">
                    <div class="col-lg-4 col-md-6 mb-40">
                           <div class="single-about style2 text-center box-shadow">
                        
                            <div class="about-title">
                                <h3 class="title mb-15"><?php echo $row["Name"];?></h3>
                </div> <?php } ?>
                            <div class="about-desc">
                                <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                            </div>
                        </div>                                    
                    </div>
                    <div class="col-lg-4 col-md-6 mb-40">
                        <div class="single-about style2 text-center box-shadow">
                            <div class="about-icon">
                                <i class="flaticon-automaton"></i>
                            </div>
                            <div class="about-title">
                                <h3 class="title mb-15">Videos Surveillance</h3>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                            </div>
                        </div>                                  
                    </div>
                    <div class="col-lg-4 col-md-6 mb-40">
                        <div class="single-about style2 text-center box-shadow">
                            <div class="about-icon">
                                <i class="flaticon-artificial-intelligence-2"></i>
                            </div>
                            <div class="about-title">
                                <h3 class="title mb-15">Social Media Services</h3>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 md-mb-40">
                        <div class="single-about style2 text-center box-shadow">
                            <div class="about-icon">
                                <i class="flaticon-artificial-intelligence-3"></i>
                            </div>
                            <div class="about-title">
                                <h3 class="title mb-15">Online Customer Support</h3>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-40">
                        <div class="single-about style2 text-center box-shadow">
                            <div class="about-icon">
                                <i class="flaticon-artificial-intelligence-4"></i>
                            </div>
                            <div class="about-title">
                                <h3 class="title mb-15">Search Engine Result Refining</h3>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-about style2 text-center box-shadow">
                            <div class="about-icon">
                                <i class="flaticon-ai-1"></i>
                            </div>
                            <div class="about-title">
                                <h3 class="title mb-15">Online Fraud Detection</h3>
                            </div>
                            <div class="about-desc">
                                <p class="desc-txt">Capitalize on low hanging fruit to identify a ball park value added activity to beta test. Override the digital divide with additional</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container end -->
        </div>
        <!-- Services Section End-->

        <!-- Project Section Start-->
        <div id="neuron-project-section" class="neuron-project-section pt-92 pb-300 md-pt-71">
            <div class="container">
                <div class="sec-title text-center mb-45">
                    <h2 class="title bg-center">Lab's Projects</h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="40" data-autoplay="true" data-autoplay-timeout="8000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
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
            <!-- Newsletter Section Start -->
            <div id="neuron-newsletter" class="neuron-newsletter mt-100 md-mt-80 md-pb-80">
                <div class="container">
                    <div class="newsletter-part white-bg box-shadow top-margin pt-60 pb-60 md-pt-50 md-pb-50">
                        <form>
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <div class="newsletter-icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="newsletter-text">
                                        <div class="sec-title mb-45">
                                            <h2 class="title margin-0 bg-left">Don’t Miss Our News <br>And Updates!</h2>
                                        </div>
                                        <div class="newsletter-box">
                                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                                            <button type="submit" class="form-button"><i class="flaticon-send"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Newsletter Section End -->
        </div>
        <!-- Project Section End-->        

        <!-- Partner Section Start -->
        <div id="neuron-partner" class="neuron-partner partner-bg pt-300 pb-100 md-pt-80 md-pb-50">
            <div class="container">
                <ul class="partner-image-part">
                    <li class="partner-item mb-60">
                        <a href="#"><img src="images/partner/1.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item mb-60">
                        <a href="#"><img src="images/partner/2.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item mb-60">
                        <a href="#"><img src="images/partner/3.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item mb-60">
                        <a href="#"><img src="images/partner/4.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item mb-60">
                        <a href="#"><img src="images/partner/5.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item">
                        <a href="#"><img src="images/partner/1.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item">
                        <a href="#"><img src="images/partner/2.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item">
                        <a href="#"><img src="images/partner/3.png" alt="Partner Image"></a>
                    </li>
                    <li class="partner-item">
                        <a href="#"><img src="images/partner/4.png" alt="Partner Image"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Partner Section End -->

        <!-- How We Work Section Start-->
        <div id="neuron-work" class="neuron-work pt-90 pb-100 md-pt-71 md-pb-78">
            <div class="container"> 
                <div class="sec-title text-center mb-45">
                    <h2 class="title bg-center">How We Works</h2>
                </div>
                <div class="row col-20">
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="single-work text-center">
                            <div class="work-icon hover-pulse">
                                <i class="flaticon-code"></i>
                            </div>
                            <div class="work-title">
                                <h3 class="title">Data Generated</h3>
                            </div>
                            <div class="round-shape"></div>
                        </div>                                    
                    </div>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="single-work text-center">
                            <div class="work-icon hover-pulse">
                                <i class="flaticon-machine-learning-1"></i>
                            </div>
                            <div class="work-title">
                                <h3 class="title">Data Stored</h3>
                            </div>
                            <div class="round-shape"></div>
                        </div>                                  
                    </div>
                    <div class="col-lg-3 col-md-6 sm-mb-30">
                        <div class="single-work style2 text-center">
                            <div class="work-icon hover-pulse">
                                <i class="flaticon-machine-learning"></i>
                            </div>
                            <div class="work-title">
                                <h3 class="title">Data Processing</h3>
                            </div>                            
                            <div class="round-shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-work text-center extra-none">
                            <div class="work-icon hover-pulse">
                                <i class="flaticon-automaton"></i>
                            </div>
                            <div class="work-title">
                                <h3 class="title">Actionable Insights</h3>
                            </div>
                            <div class="round-shape"></div>
                        </div>
                    </div>
                </div>
            </div><!-- .container end -->
        </div>
        <!-- How We Work Section End-->

        <!-- Blog Section Start -->
        <div id="neuron-blog" class="neuron-blog gray-bg pt-90 pb-175 md-pt-71 md-pb-80">
            <div class="container">
                <div class="sec-title text-center mb-45">
                    <h2 class="title bg-center">Recent Blog Post</h2>
                </div>
                <div class="rs-carousel owl-carousel wow" data-loop="true" data-items="3" data-margin="40" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false"> 
                    <div class="single-blog">
                        <div class="blog-img sec-bg">
                            <a href="#"><img src="images/blog/1.jpg" alt=""></a>
                        </div>
                        <div class="blog-details box-shadow-2 white-bg">
                            <ul class="blog-meta">
                                <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Nov 28, 2019</li>
                                <li><i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                                <li><span>10</span>Comments</li>
                            </ul>
                            <div class="blog-desc">
                                <h3 class="blog-title"><a href="#">Man in Red Plaid Shirt Talking on Phone Terrace</a></h3>
                                <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and verifies if a picture</p>
                                <div class="blog-btn">
                                    <a class="readon radius capitalize" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img sec-bg">
                            <a href="#"><img src="images/blog/2.jpg" alt=""></a>
                        </div>
                        <div class="blog-details box-shadow-2 white-bg">
                            <ul class="blog-meta">
                                <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Nov 28, 2019</li>
                                <li><i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                                <li><span>10</span>Comments</li>
                            </ul>
                            <div class="blog-desc">
                                <h3 class="blog-title"><a href="#">Man in Red Plaid Shirt Talking on Phone Terrace</a></h3>
                                <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and verifies if a picture</p>
                                <div class="blog-btn">
                                    <a class="readon radius capitalize" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img sec-bg">
                            <a href="#"><img src="images/blog/3.jpg" alt=""></a>
                        </div>
                        <div class="blog-details box-shadow-2 white-bg">
                            <ul class="blog-meta">
                                <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Nov 28, 2019</li>
                                <li><i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                                <li><span>10</span>Comments</li>
                            </ul>
                            <div class="blog-desc">
                                <h3 class="blog-title"><a href="#">Man in Red Plaid Shirt Talking on Phone Terrace</a></h3>
                                <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and verifies if a picture</p>
                                <div class="blog-btn">
                                    <a class="readon radius capitalize" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog">
                        <div class="blog-img sec-bg">
                            <a href="#"><img src="images/blog/2.jpg" alt=""></a>
                        </div>
                        <div class="blog-details box-shadow-2 white-bg">
                            <ul class="blog-meta">
                                <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>Nov 28, 2019</li>
                                <li><i class="fa fa-user-o" aria-hidden="true"></i>Admin</li>
                                <li><span>10</span>Comments</li>
                            </ul>
                            <div class="blog-desc">
                                <h3 class="blog-title"><a href="#">Man in Red Plaid Shirt Talking on Phone Terrace</a></h3>
                                <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and verifies if a picture</p>
                                <div class="blog-btn">
                                    <a class="readon radius capitalize" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->
        
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
                                    <p>530 Old BUffalo Street <br>Northwest #205, New York - 3087</p>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="icon-text">
                                    <h4 class="icon-title">Call Us</h4>
                                    <a href="tel:+1(123)-456-7890">+1 (123) -456-7890</a>
                                    <a href="tel:+1(123)-456-7890">+1 (123) -456-7890</a>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="icon-part">
                                    <i class="flaticon-mail-1"></i>
                                </div>
                                <div class="icon-text">
                                    <h4 class="icon-title">Email Us</h4>
                                    <a href="mailto:infoname@gmail.com">infoname@gmail.com</a>
                                    <a href="#">www.yourname.com</a>
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
                                            <input type="text" placeholder="Phone Number" id="phone_number" name="phone_number" required="">
                                        </div>                             
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" placeholder="Subject" id="subject" name="subject" required="">
                                        </div>                              
                                    </div>
                                </div>                        
                                <div class="form-field">
                                    <textarea placeholder="Your Message Here" rows="5" id="message" name="message" required=""></textarea>
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
                        <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                            <div class="about-widget pr-20">
                                <div class="footer-logo">
                                    <img src="images/logo.png" alt="Footer Logo">
                                </div>                              
                                <div class="footer-info">
                                    <p class="footer-desc">Lorem ipsum dolor sit amet, conse turini adipiscing elit, sed do eiusmod tempor in cididunt ut labore. </p>
                                </div>                                
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column">
                            <h4 class="footer-title">Work Hours</h4>
                            <p>10.00 AM - 6.00 PM , Monday - Saturday</p>
                            <p>Our Support and Sales team is available 24 * 7 to answer your queries</p>
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                            <div class="footer-menu">
                                <h4 class="footer-title">Navigate</h4>
                                <div class="row">
                                    <div class="col-lg-6 pr-0">
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="features.html">Features</a></li>
                                            <li><a href="mobile-app.html">Mobile App</a></li>
                                            <li><a href="software-demo.html">Software Demo</a></li>
                                            <li><a href="software-download.html">Software Download</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="chatbot.html">ChatBot</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 single-footer-column">
                            <div class="footer-menu">
                                <h4 class="footer-title">Privacy & Tos</h4>
                                <ul>
                                    <li><a href="privacy.html">Privacy</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="chatbox-part">
                        <div class="chatbox box-shadow white-bg">
                            <div class="chatbox-top gradient-bg">
                                <div class="row align-items-center">
                                    <div class="col-lg-8">
                                        <div class="chat-img">
                                            <img src="images/team/chat.png" alt="">
                                            <span class="active-icon"></span>
                                        </div>
                                        <div class="chat-identity pl-10">
                                            <h4 class="chat-title white-color mb-0">ChatBot</h4>
                                            <span class="active-status white-color">Active</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="close-icon">
                                            <i class="flaticon-error"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chatbox-text text-center">
                                <p>Hello Friend, I can help you with anything related to chatbots!</p>
                                <p class="mb-0">Let me know if you're planning to create a chatbot for your business!﻿</p>
                            </div>
                            <div class="chatbox-btn">
                                <a class="readon radius" href="#">Let’s Start a Chat</a>
                            </div>
                        </div>
                        <div class="chat-icon text-center">
                            <i class="flaticon-chat"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="copyright text-center">
                        <p>© Copyrights 2020 <a href="#">Mohanad Baras & Amjad Alsehy</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="flaticon-cross-out"></i>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Searching..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End --> 
        
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