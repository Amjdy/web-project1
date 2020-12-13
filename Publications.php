<?php
#require('db.php'); 
?>
<?php
// first thing is before start of page add this line
session_start();
$valid = $_SESSION["validUser"]; 
//including the database connection file
include_once("dp.php");

   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session."; // this is concatenation 
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM myinfo ORDER BY id DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Shop | Neuron - Machine Learning & AI Startups HTML5 Template</title>
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
    <!-- hover css -->
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="css/off-canvas.css">
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
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:RIOTU@psu.edu.sa">RIOTU@psu.edu.sa</a></li>
                                <li><i class="fa fa-phone"></i><a href="tel:+966 (11) 484-8851">+966 (11) 484-8851</a>
                                </li>
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
                                        <!-- Research -->
                                        <li><a href="research.html">Research</a></li>
                                        <!-- End Research -->
                                        <!-- Projects -->
                                        <li><a href="projects.html">Projects</a></li>
                                        <!-- End projects -->
                                        <!-- Members -->
                                        <li><a href="members.php">Members</a></li>
                                        <!-- End Members -->
                                        <!-- Pages Mega Menu Start -->
                                        <li class="menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                            </ul>
                                        </li>
                                        <!--Pages Mega Menu End -->
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

    <!-- Breadcrumbs Start -->
    <div class="breadcrumbs">
        <div class="breadcrumbs-wrap">
            <img src="images/breadcrumbs/bg.jpg" alt="Breadcrumbs Image">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Publications</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.html"><i class="fa fa-house"></i> Home</a></li>
                                <li>Publications</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Publications Section Start -->
    <div id="neuron-blog" class="neuron-blog gray-bg pt-90 pb-175 md-pt-71 md-pb-80">
        <div class="container">
            <div class="sec-title text-center mb-45">
                <h2 class="title bg-center">Books</h2>
            </div>
            <div class="rs-carousel owl-carousel wow" data-loop="true" data-items="3" data-margin="40"
                data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false"
                data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false"
                data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
                data-md-device-dots="false">
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
                            <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and
                                verifies if a picture</p>
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
                            <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and
                                verifies if a picture</p>
                            <div class="blog-btn">
                                <a cl#ass="readon radius capitalize" href="single-blog.html">Read More</a>
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
                            <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and
                                verifies if a picture</p>
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
                            <p class="blog-txt">The Tutorial covers examples of identification And Rew Garfield and
                                verifies if a picture</p>
                            <div class="blog-btn">
                                <a class="readon radius capitalize" href="single-blog.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Publications Section End -->

    <!-- Services Section Start-->
    <div class="neuron-about gray-bg pt-92 pb-100 md-pt-71 md-pb-80">
        <div class="container">

            <div class="sec-title text-center mb-50">
                <h2 class="title bg-center margin-0">Senior Researchers</h2>
            </div>

            <div class="row col-20">
                <?php 
                $sel_query1= "select * from members where memberType='Senior Researchers'; ";
                $result = mysqli_query($db,$sel_query1);
                while($row= mysqli_fetch_assoc($result)){ ?>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="single-about style2 text-center box-shadow">

                        <div class="about-title">
                            <h3 class="title mb-15"><?php echo $row["Name"];?> <br> "<?php echo $row["Position"];?>"
                            </h3>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt"><?php echo $row["description"];?></p>
                            <p>-----------------</p>
                            <p class="sm">
                                <i class="icon icon_pin_alt ico-styled text-primary "></i>
                                <?php echo $row["location"];?>
                            </p>
                            <p class="sm">
                                <i class="icon icon_phone ico-styled text-primary "></i>
                                <?php echo $row["phone_number"];?>
                            </p>
                            <p>
                                <i class="icon icon_mail_alt ico-styled text-primary"></i> <a
                                    href="<?php echo $row["email"];?>"><?php echo $row["email"];?></a>
                            </p>
                            <a href="<?php echo $row["facebook"];?>" class="facebook-bg-hover"><i
                                    class="fa fa-facebook"></i> </a>
                            <a href="<?php echo $row["website"];?>" class="dribbble-bg-hover"><i
                                    class="fa fa-dribbble"></i> </a>
                            <a href="<?php echo $row["linkedin"];?>" class="linkedin-bg-hover"><i
                                    class="fa fa-linkedin"></i> </a>
                            <a href="<?php echo $row["twitter"];?>" class="twitter-bg-hover"><i
                                    class="fa fa-twitter"></i> </a>
                        </div>
                    </div>
                </div> <?php } ?>
            </div>

            <div class="sec-title text-center mb-50">
                <h2 class="title bg-center margin-0">Research Assistants</h2>
            </div>
            <div class="row col-20">
                <?php 
                $sel_query1= "select * from members where memberType='Research Assistants'; ";
                $result = mysqli_query($db,$sel_query1);
                while($row= mysqli_fetch_assoc($result)){ ?>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="single-about style2 text-center box-shadow">

                        <div class="about-title">
                            <h3 class="title mb-15"><?php echo $row["Name"];?> <br> "<?php echo $row["Position"];?>"
                            </h3>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt"><?php echo $row["description"];?></p>
                            <p>-----------------</p>
                            <p class="sm">
                                <i class="icon icon_pin_alt ico-styled text-primary "></i>
                                <?php echo $row["location"];?>
                            </p>
                            <p class="sm">
                                <i class="icon icon_phone ico-styled text-primary "></i>
                                <?php echo $row["phone_number"];?>
                            </p>
                            <p>
                                <i class="icon icon_mail_alt ico-styled text-primary"></i> <a
                                    href="<?php echo $row["email"];?>"><?php echo $row["email"];?></a>
                            </p>
                            <a href="<?php echo $row["facebook"];?>" class="facebook-bg-hover"><i
                                    class="fa fa-facebook"></i> </a>
                            <a href="<?php echo $row["website"];?>" class="dribbble-bg-hover"><i
                                    class="fa fa-dribbble"></i> </a>
                            <a href="<?php echo $row["linkedin"];?>" class="linkedin-bg-hover"><i
                                    class="fa fa-linkedin"></i> </a>
                            <a href="<?php echo $row["twitter"];?>" class="twitter-bg-hover"><i
                                    class="fa fa-twitter"></i> </a>
                        </div>
                    </div>
                </div> <?php } ?>
            </div>

            <div class="sec-title text-center mb-50">
                <h2 class="title bg-center margin-0">Postdoc</h2>
            </div>
            <div class="row col-20">
                <?php 
                $sel_query1= "select * from members where memberType='Postdoc'; ";
                $result = mysqli_query($db,$sel_query1);
                while($row= mysqli_fetch_assoc($result)){ ?>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="single-about style2 text-center box-shadow">

                        <div class="about-title">
                            <h3 class="title mb-15"><?php echo $row["Name"];?> <br> "<?php echo $row["Position"];?>"
                            </h3>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt"><?php echo $row["description"];?></p>
                            <p>-----------------</p>
                            <p class="sm">
                                <i class="icon icon_pin_alt ico-styled text-primary "></i>
                                <?php echo $row["location"];?>
                            </p>
                            <p class="sm">
                                <i class="icon icon_phone ico-styled text-primary "></i>
                                <?php echo $row["phone_number"];?>
                            </p>
                            <p>
                                <i class="icon icon_mail_alt ico-styled text-primary"></i> <a
                                    href="<?php echo $row["email"];?>"><?php echo $row["email"];?></a>
                            </p>
                            <a href="<?php echo $row["facebook"];?>" class="facebook-bg-hover"><i
                                    class="fa fa-facebook"></i> </a>
                            <a href="<?php echo $row["website"];?>" class="dribbble-bg-hover"><i
                                    class="fa fa-dribbble"></i> </a>
                            <a href="<?php echo $row["linkedin"];?>" class="linkedin-bg-hover"><i
                                    class="fa fa-linkedin"></i> </a>
                            <a href="<?php echo $row["twitter"];?>" class="twitter-bg-hover"><i
                                    class="fa fa-twitter"></i> </a>
                        </div>
                    </div>
                </div> <?php } ?>
            </div>
            <div class="sec-title text-center mb-50">
                <h2 class="title bg-center margin-0">Visiting PhD Students</h2>
            </div>
            <div class="row col-20">
                <?php 
                $sel_query1= "select * from members where memberType='Visiting PhD Students'; ";
                $result = mysqli_query($db,$sel_query1);
                while($row= mysqli_fetch_assoc($result)){ ?>
                <div class="col-lg-4 col-md-6 mb-40">
                    <div class="single-about style2 text-center box-shadow">

                        <div class="about-title">
                            <h3 class="title mb-15"><?php echo $row["Name"];?> <br> "<?php echo $row["Position"];?>"
                            </h3>
                        </div>
                        <div class="about-desc">
                            <p class="desc-txt"><?php echo $row["description"];?></p>
                            <p>-----------------</p>
                            <p class="sm">
                                <i class="icon icon_pin_alt ico-styled text-primary "></i>
                                <?php echo $row["location"];?>
                            </p>
                            <p class="sm">
                                <i class="icon icon_phone ico-styled text-primary "></i>
                                <?php echo $row["phone_number"];?>
                            </p>
                            <p>
                                <i class="icon icon_mail_alt ico-styled text-primary"></i> <a
                                    href="<?php echo $row["email"];?>"><?php echo $row["email"];?></a>
                            </p>
                            <a href="<?php echo $row["facebook"];?>" class="facebook-bg-hover"><i
                                    class="fa fa-facebook"></i> </a>
                            <a href="<?php echo $row["website"];?>" class="dribbble-bg-hover"><i
                                    class="fa fa-dribbble"></i> </a>
                            <a href="<?php echo $row["linkedin"];?>" class="linkedin-bg-hover"><i
                                    class="fa fa-linkedin"></i> </a>
                            <a href="<?php echo $row["twitter"];?>" class="twitter-bg-hover"><i
                                    class="fa fa-twitter"></i> </a>
                        </div>
                    </div>
                </div> <?php } ?>
            </div>

        </div><!-- .container end -->
    </div>
    <!-- Services Section End-->

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="about-widget pr-20">
                            <div class="footer-logo">
                                <img src="images/riotu-logo-w.png" alt="Footer Logo">
                            </div>
                            <div class="footer-info">
                                <p class="footer-desc">Robotics and Internet of Things University-Lab in Prince Sultan
                                    University. </p>
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
                        <p>8.00 AM - 3.00 PM , Sunday - Thursday</p>
                        <p>Our Support team is available 24/7 to answer your queries through email</p>
                    </div>

                    <div class="col-lg-3 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="footer-menu">
                            <h4 class="footer-title">Navigate</h4>
                            <div class="row">
                                <div class="col-lg-6 pr-0">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="features.html">Research</a></li>
                                        <li><a href="blog.html">Projects</a></li>
                                        <li><a href="shop.php">People</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="software-demo.html">Collaboration</a></li>
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
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>