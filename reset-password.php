<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
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
    <title>RESET-PASSWORD | RIOTU LAB</title>
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

    <style>
        .help-block {
            display: block;
            margin-bottom: 10px;
            color: #e80703;
        }
    </style>
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
                                <li><a href="logout.php">Log out</a></li>
                                <li><a href="welcome.php">My account</a></li>
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
                        <h1 class="breadcrumbs-title mb-17">Password Reset</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li>reset-password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Login Section Start -->
    <div id="neuron-login" class="neuron-login pt-92 pb-100 md-pt-71 md-pb-80">
        <div class="container">
            <div id="form-messages"></div>
            <div class="login-width">
                <form class="login-form" id="login-form" method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <div class=" <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                        <label id="new_password">New Password*</label>
                        <input type="password" name="new_password" class="custom-placeholder" required
                            value="<?php echo $new_password; ?>">
                        <span class="help-block"><?php echo $new_password_err; ?></span>
                    </div>

                    <div class="<?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <label id="confirm_password">Confirm Password*</label>
                        <input type="password" name="confirm_password" class="custom-placeholder" required>
                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>

                    <div class="login-btn mt-10 mb-21">
                        <button class="readon" type="submit">RESET</button>
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