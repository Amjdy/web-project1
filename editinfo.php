<?php
// including the database connection file
include_once("db.php");

    $username_err = "";	
if(isset($_POST['submit']))
{	
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
    $id1 = $_POST['id'];

 	// checking empty fields
	if(empty($fn) ) {
			//echo "<font color='red'>Name field is empty.</font><br/>";
			$username_err= "Please enter your Full name";
			
	} else {	
		//updating the table
		$result1 = mysqli_query($db, "UPDATE members SET Name='".$fn."', position='".$ps."', description='".$ds."', location='".$lc."', phone_number='".$ph."', email='".$em."', facebook='".$fb."', website='".$ws."', linkedin='".$lk."', twitter='".$twi."' WHERE id='".$id1."'");

        echo "Id:   pppp" .$id1."      ";
        
        //redirectig to the display page. In our case, it is myinof.php
        
           header("Location: members.php");
        
		
	}
}


//getting id from url
 $id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM members WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$fn = $res['Name'];
	$ps =  $res['Position'];
	$ds =  $res['description'];
	$lc = $res['location'];
	$ph =  $res['phone_number'];
	$em =  $res['email'];
	$fb = $res['facebook'];
	$ws = $res['website'];
	$lk =  $res['linkedin'];
    $twi =  $res['twitter'];
}
?>


<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>RESEARCH | RIOTU LAB</title>
        <meta name="description" content="">
        <meta name="author" content="The Develovers">
        <meta name="description" content="Responsive Website Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <li><i class="fa fa-phone"></i><a href="tel:+966 (11) 484 - 8851">+966 (11) 484 - 8851</a></li>
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
                                <li><a href="https://www.facebook.com/riotu.center"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/riotu_lab/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCJypzBiFE8C793Q_PC6X8IQ/videos?view_as=subscriber"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="https://twitter.com/riotulab"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/anis-koubaa-84aa4344/"><i class="fa fa-linkedin"></i></a></li>
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
                            <h1 class="breadcrumbs-title mb-17">Edit member</h1>
                            <div class="categories">
                                <ul>
                                    <li><a href="index.php"><i class="fa fa-house"></i> Home</a></li>
                                    <li>Edit</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>

<body>
	
	






    <!-- Login Section Start -->
    <div id="neuron-login" class="neuron-login pt-92 pb-100 md-pt-71 md-pb-80">
        <div class="container">
            <div id="form-messages"></div>
            <div class="login-width">
                <form class="login-form" id="login-form" method="post"
                    action="editinfo.php">

                    <div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label id="username">Full Name*</label>
                        <input type="text" name="username" class="custom-placeholder" required
                            value="<?php echo $fn; ?>">
							<span class="help-block"><?php echo $username_err;?></span>
                    </div>

                    <div>
                        <label id="Pos">Possition*</label>
						<input type="text" name="pos" class="custom-placeholder"
                            value="<?php echo $ps; ?>">
                           <input type="hidden" name="id" class="custom-placeholder"
                            value="<?php echo $id; ?>"> 
					</div>
                    <div>
                        <label id="des">Description*</label>
                        <textarea type="text" id="comment" rows="5" name="des" class="form-control ">
							<?php echo $ds; ?></textarea>
						

                    </div>
<br>
                    <div>
                        <label id="loc">Location*</label>
						<textarea type="text" id="comment" rows="5" name="loc" class="form-control ">
                            <?php echo $lc; ?></textarea>
                            
					</div>
					<br>
                    <div>
                        <label id="phone">Phone number*</label>
                        <input type="text" name="phone" class="custom-placeholder" 
                            value="<?php echo $ph; ?>">
                    </div>

                    <div >
                        <label id="email">Email*</label>
						<input type="text" name="email" class="custom-placeholder" 
						   value="<?php echo $em; ?>">
					</div>

                    <div>
                        <label id="face">Facebook*</label>
                        <input type="text" name="face" class="custom-placeholder" 
                            value="<?php echo $fb; ?>">
                    </div>

                    <div>
                        <label id="web">Website*</label>
						<input type="text" name="web" class="custom-placeholder" 
                            value="<?php echo $ws; ?>">
                    </div>

                    <div>
                        <label id="link">Linkedin*</label>
                        <input type="text" name="link" class="custom-placeholder" 
                            value="<?php echo $lk; ?>">
                    </div>

                    <div >
                        <label id="tw">Twitter*</label>
						<input type="text" name="tw" class="custom-placeholder" 
                            value="<?php echo $twi; ?>">
					</div>	
									
                    <div class="login-btn mt-10 mb-21">
                        <button class="readon" name ="submit" type="submit">Submit changes</button>
                    </div>
                </form>

            
            </div>
        </div>
    </div>
    <!-- Login Section End -->














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
                                        <li><a href="index.php">Home</a></li>
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


