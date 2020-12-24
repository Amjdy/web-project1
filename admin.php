<?php
// Include config file
require_once "db.php";
 

 
// Processing form data when form is submitted

	$username_err = "";	
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fn = $_POST['username'];
	$ps =  $_POST['pos'];
	$ds =  $_POST['des'];
	$lc = $_POST['loc'];
	$ph =  $_POST['phone'];
	$em =  $_POST['email'];
	$fb = $_POST['face'];
	$ws = $_POST['web'];
    $lk =  $_POST['link'];
	$twi =  $_POST['tw'];

$type = $_POST['ty'];

	// checking empty fields
	if(empty($fn) ) {
			//echo "<font color='red'>Name field is empty.</font><br/>";
			$username_err= "Please enter your Full name";
			
	} else {	
		//updating the table
		$result = mysqli_query($db, "INSERT INTO members (Name, position, description, location, phone_number, email, facebook, website, linkedin, twitter, memberType)VALUES ('$fn', '$ps', '$ds', '$lc', '$ph', '$em', '$fb', '$ws', '$lk', '$twi', '$type')");
		//redirectig to the display page. In our case, it is myinof.php
		header("Location: members.php");
	}
    
    
    // Close connection
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>ADMIN | RIOTU LAB</title>
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
                                <!--<li><a href="register.php">Register</a></li>-->
                                <?php if(!isset($_SESSION["loggedin"])){
                                 echo   "<li><a href=\"login.php\">Log in</a></li>";
                                }else{
                                    echo "<li><a href=\"logout.php\">Log out</a></li>";
                                    }?>
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
                        <div class="logo-area">
                            <a href="index.php"><img src="images/riotu-logo-w.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 mobile-menu-area">
                        <div class="rs-menu-area display-flex-center">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="active"><a href="index.php">Home</a></li>
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

        <!-- Breadcrumbs Start -->
        <div class="breadcrumbs">
            <div class="breadcrumbs-wrap">
                <img src="images/breadcrumbs/bg.jpg" alt="Breadcrumbs Image">
                <div class="breadcrumbs-inner">
                    <div class="container">
                        <div class="breadcrumbs-text">
                            <h1 class="breadcrumbs-title mb-17">Admin</h1>
                            <div class="categories">
                                <ul>
                                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                    <li>Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        <!-- Breadcrumbs End -->





        <!-- Registration Section Start -->
        <div id="neuron-registration" class="neuron-registration pt-92 pb-100 md-pt-71 md-pb-80">
            <div class="container">
                <div id="form-messages"></div>
                <div class="register-width">
                    <form class="register-form" id="register-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <label id="username">Member name</label>
                        <input class="custom-placeholder" type="text" name="username" required>
                        <div class="row">
                            <div class="col-md-6">
                                <label >Position</label>
                                <input class="custom-placeholder" type="text" name="pos" >
                            </div>
                            <div class="col-md-6">
                                <label >User type</label> <br>
                                <select name="ty" class="date" required>
                                                <option value="select" selected disabled="disabled">Select</option>
                                                <option value="Senior Researchers">Senior Researchers</option>
                                                <option value="Research Assistants">Research Assistants</option>
                                                <option value="Postdoc">Postdoc</option>
                                                <option value="Visiting PhD Students">Visiting PhD Students</option> 
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label id="psw">Email</label>
                                <input class="custom-placeholder" type="text" name="email" >
                            </div>
                            <div class="col-md-6">
                                <label id="psw-repeat">Phone number</label>
                                <input class="custom-placeholder" type="text" name="phone" >
                            </div>
                            <div class="col-md-6">
                                <label id="psw">website</label>
                                <input class="custom-placeholder" type="text" name="web" >
                            </div>
                            <div class="col-md-6">
                                <label id="psw-repeat">Linkedin</label>
                                <input class="custom-placeholder" type="text" name="link" >
                            </div>
                            <div class="col-md-6">
                                <label id="psw">Facebook</label>
                                <input class="custom-placeholder" type="text" name="face" >
                            </div>
                            <div class="col-md-6">
                                <label id="psw-repeat">Twitter</label>
                                <input class="custom-placeholder" type="text" name="tw" >
                            </div>
                        </div>

                        <label id="username">Description</label>
                        <input class="custom-placeholder" type="text" name="des" >

                        <label id="username">Location</label>
                        <input class="custom-placeholder" type="text" name="loc" >

                        <div class="submit-btn">
                            <button class="readon radius" type="submit">ADD member</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Registration Section End -->

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
                            <h4 class="footer-title">Contact Us</h4>
                            <div class="contact-text">503 Old Buffalo Street Northwest #205 New York-3087 <br>
                                <a href="tel:+1(123)-456-7890">+1 (123) -456-7890</a>, <a href="tel:+1(123)-456-7890">+1 (123) -456-7890</a>
                                <a href="#">infoname@gmail.com</a>, 
                                <a href="#">www.yourname.com</a>
                            </div>
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
                        <p>© Copyrights 2019 <a href="#">AuburnForest</a></p>
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
         <!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>