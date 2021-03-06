﻿<?php
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <title>REGISTER | RIOTU LAB</title>
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
                                <li><a href="login.php">Log in</a></li>
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
                        <h1 class="breadcrumbs-title mb-17">Registration</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li>Registration</li>
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
                <form class="register-form" id="register-form" method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    
                    <div class="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label id="username">Username</label>
                        <input class="custom-placeholder" type="text" name="username" required
                            value="<?php echo $username; ?>">
                        <span><?php echo $username_err; ?></span>
                    </div>
                    <!--<label>Email Address</label>
                        <input class="custom-placeholder" type="email" name="email" required>-->

                    <div class="row">
                        <div class="col-md-6 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <label id="psw">Password</label>
                            <input class="custom-placeholder" type="password" name="password" required
                                value="<?php echo $password; ?>">
                            <span><?php echo $password_err; ?></span>
                        </div>
                        
                        <div class="col-md-6 <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                            <label id="psw-repeat">Confirm Password</label>
                            <input class="custom-placeholder" type="password" name="confirm_password" required
                                value="<?php echo $confirm_password; ?>">
                            <span><?php echo $confirm_password_err; ?></span>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="readon radius" type="submit">Create Account</button>
                    </div>
                </form>
                <div class="bottom-content text-center">
                    <div class="line-set">or</div>
                    <a class="readon radius mt-10" href="login.php">Log in</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Section End -->

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