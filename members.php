<?php
require('db.php'); 
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
                        <h1 class="breadcrumbs-title mb-17">Members</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.html"><i class="fa fa-house"></i> Home</a></li>
                                <li>Members</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

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
                                <li><a href="https://www.facebook.com/riotu.center"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/riotu_lab/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCJypzBiFE8C793Q_PC6X8IQ/videos?view_as=subscriber"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="https://twitter.com/riotulab"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/anis-koubaa-84aa4344/"><i class="fa fa-linkedin"></i></a></li>
                                
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
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>