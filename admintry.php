<?php
// Include config file
require_once "db.php";
 
// Define variables and initialize with empty values
$Name = $position = $usertype = $email = "";/*= $phon = $website = $linkedin = $facebook = $twitter = $description = $location*/ 
$Name_err = $position_err = $usertype_err = $email_err = "";/*= $phon_err = $website_err = $linkedin_err = $facebook_err = $twitter_err = $description_err = $location_err*/
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate Name
    if(empty(trim($_POST["Name"]))){
        $Name_err = "Please enter a Name.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE Name = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_Name);
            
            // Set parameters
            $param_Name = trim($_POST["Name"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $Name_err = "This member is already exist in the database.";
                } else{
                    $Name = trim($_POST["Name"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate position
    if(empty(trim($_POST["position"]))){
        $position_err = "Please enter a position.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE position = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_position);
            
            // Set parameters
            $param_position = trim($_POST["position"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $position_err = "This position is already exist in the database.";
                } else{
                    $position = trim($_POST["position"]);
                }
            } else{
                echo "position Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate usertype
    if(empty(trim($_POST["usertype"]))){
        $usertype_err = "Please enter a usertype.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE usertype = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_usertype);
            
            // Set parameters
            $param_usertype = trim($_POST["usertype"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $usertype_err = "This usertype is already exist in the database.";
                } else{
                    $usertype = trim($_POST["usertype"]);
                }
            } else{
                echo "usertype Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM members WHERE email = ?";
        
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already exist in the database.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "email Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    
    // Check input errors before inserting in database
    if(empty($Name_err) && empty($position_err) && empty($usertype_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO members (Name, position, usertype, email) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_Name, $param_position, $param_usertype, $param_email);
            
            // Set parameters
            $param_Name = $Name;
            $param_position = $position;
            $param_usertype = $usertype;
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo "redirect to ";
                header("location: login.php");
                echo "redirect to login.php";
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
                                <li><a href="logout.php">Log out</a></li>
                                <li><a href="welcome.php">My account</a></li>
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
                <form class="register-form" id="register-form" method="post"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <div class="<?php echo (!empty($Name_err)) ? 'has-error' : ''; ?>">
                        <label id="Name">Member name</label>
                        <input class="custom-placeholder" type="text" name="username" required
                            value="<?php echo $Name; ?>">>
                        <span><?php echo $Name_err; ?></span>
                    </div>

                    <div class="row">
                        <div class="col-md-6 <?php echo (!empty($position_err)) ? 'has-error' : ''; ?>">
                            <label>Position</label>
                            <input class="custom-placeholder" type="text" name="name" required>
                            <span><?php echo $position_err; ?></span>
                        </div>

                        <div class="col-md-6 <?php echo (!empty($usertype_err)) ? 'has-error' : ''; ?>">
                            <label>User type</label> <br>
                            <select name="birthday-day" class="date" required>
                                <option value="" selected disabled="disabled">select</option>
                                <option value="Senior Researchers">Senior Researchers</option>
                                <option value="Research Assistants">Research Assistants</option>
                                <option value="Postdoc">Postdoc</option>
                                <option value="Visiting PhD Students">Visiting PhD Students</option>
                            </select>
                            <span><?php echo $usertype_err; ?></span>
                        </div>

                        <div class="col-md-6 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label id="psw">Email</label>
                            <input class="custom-placeholder" type="text" name="name" required>
                            <span><?php echo $email_err; ?></span>
                        </div>


                        <div class="text-center">
                            <button class="readon radius" type="submit">Store</button>
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
                                <p class="footer-desc">Lorem ipsum dolor sit amet, conse turini adipiscing elit, sed do
                                    eiusmod tempor in cididunt ut labore. </p>
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
                            <a href="tel:+1(123)-456-7890">+1 (123) -456-7890</a>, <a href="tel:+1(123)-456-7890">+1
                                (123) -456-7890</a>
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