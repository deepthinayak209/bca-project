Sovereign<?php
define('DIR','');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sovereign</title>

    <meta name="description" content="BusinessPerfect - Freebie HTML/CSS template based on Bootstrap">
    <meta name="author" content="Milan Savov">
    <meta name="keywords" content="html, css, twitter bootstrap, javascript, jquery, responsive">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="a/index/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="a/index/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="a/index/css/style.css" rel="stylesheet">
    <link href="a/index/css/responsive.css" rel="stylesheet">
    <link href="a/index/css/colors.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

        <nav id="primary-navigation" class="site-navigation">

            <div class="container-fluid">

                <div class="navbar-header">
                    
                    <a href="index.php" class="site-title yellow-text"><img src="images/logo.jpg" style="height: 50px; width: 50px;" alt="Image" class="img-fluid"><h3><b> Sovereign<span class="white-text">Tile</b></span></h3></a>

                </div><!-- /.navbar-header -->

                <div class="main-menu" id="perfect-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="index.php">Home</a></li>          
                        <li><a href="indexabout.php">About us</a></li>
                        <!-- <li><a href="firstreview.php">reviews</a></li> -->
                        <li class="dropdown">
                            <a href="userlogin.php" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">login<i class="fa fa-angle-down hidden-xs" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="userlogin.php">User login</a></li>
                                <li><a href="adminlogin.php">Admin login</a></li>
                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.dropdown -->
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
                
            </div>
                      
        </nav><!-- /.site-navigation -->
        
    </header><!-- /#masthead -->

    <div class="hero background-overlay">
    
        <div class="hero-text">
            <h1>Sovereign Tile Works</h1>
            <center><h3><i>Since 1929</i></h3></center>
            <p>
            <center><h2><i>All about the creativity...</i></h2></center>
        </div> <!-- /.hero-text -->
        <div class="hero-arrow">
            <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-quote text-center">

            <div class="container">

                <p class="quote">I owe my success to having listened respectfully to the very best advice, and then going away and doing the exact opposite.</p>
                <p class="quote-owner yellow-text">Ganesh Nayak</p>
                
            </div>
            
        </section><!-- /.section-quote -->

        <section class="site-section section-works light-gray-bg text-center">

            <div class="container">

                <h2 class="section-title">Featured Works</h2>
                <p class="section-text">We receive the order of various clay articles which are currently available such as clay tiles, bricks, pottery works and other artisan products. The client can select the products and fix the delivery date. Through Sovereign application, the factory services are made available for the clients in the convenient, efficient and transparent manner. </p>

                <div class="multi-item-controls">
                    <a class="left btn carousel-control" href="#threeSlidesSlider" data-slide="next"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <a class="right btn carousel-control" href="#threeSlidesSlider" data-slide="prev"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div><!-- /.multi-item-controls -->

            </div>

			<div class="container-fluid">

				<div class="row">

                    <div class="col-md-12">

                        <div class="carousel three-slides-slider multi-item-carousel slide" id="threeSlidesSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-xs-6 col-sm-4">
                                        <img src="images/p1.jpg" style="height: 400px; width: 390px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-xs-6 col-sm-4">
                                        <img src="images/p2.jpg" style="height: 400px; width: 390px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-xs-6 col-sm-4">
                                        <img src="images/p3.jpg" style="height: 400px; width: 390px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.multi-item-carousel -->

                    </div>

                </div>

            </div>
            
        </section><!-- /.section-works -->

        <section class="site-section-small section-services">

            <div class="container">

                <div class="text-center">    

                    <h3 class="section-title">We Are The Best</h3>
                    <p class="section-text">Always deliver more than expected.</p> 

                </div>

                <div class="row">

                    <div class="col-sm-5 col-sm-offset-1 col-xs-6">

                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Clean Design</h4>
                                <p>We focus on what value we bring to our client and customers rather than distracting away from our product.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Customizable</h4>
                                <p>We try to understand our customers, so it becomes how their needs differ.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                    </div>

                    <div class="col-sm-5 col-xs-6">

                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Customer Care</h4>
                                <p>No matter what we are in, the customer always comes first. That is why our team is always available for you.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                        <div class="service">

                            <div class="service-icon">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </div><!-- /.service-icon -->
                            <div class="service-content">
                                <h4 class="service-title">Multi-Purpose</h4>
                                <p>An organization with shared purpose will have greater customer loyalty.</p>
                            </div><!-- /.service-content -->

                        </div><!-- /.service -->
                        
                    </div>
                    
                </div>

            </div>
            
        </section><!-- /.section-services -->

        <section class="site-section-small section-counters light-gray-bg text-center">

            <div class="container-fluid">
                
                <div class="row">
                
                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Production/Day</h4>
                        <p class="counter" data-to="6000" data-speed="2000">6000</p>  
                    </div><!-- /.counter-item -->
                    
                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Regular Clients</h4>
                        <p class="counter" data-to="512" data-speed="2000">512</p>
                        
                    </div><!-- /.counter-item -->

                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Happy Clients</h4>
                        <p class="counter" data-to="426" data-speed="2000">426</p>             
                    </div><!-- /.counter-item -->

                    <div class="col-sm-3 col-xs-6 counter-line">
                        <h4 class="small-title">Ideas</h4>  <!-- for artician products -->
                        <p class="counter" data-to="423" data-speed="2000">423</p>   
                    </div><!-- /.counter-item -->

                </div>

            </div>
            
        </section><!-- /.section-counters -->
<section class="site-section-small section-team">

            <div class="container">

                <div class="text-center">
                    <h3 class="section-title">Super Team</h3>
                    <p class="section-text">Alone, we can do so little;<br>together we can do so much"</p>
                </div>
                                    
                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel carousel-sync one-slide-slider slide" id="oneSlideSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-12">
                                        <div class="team-member">                                         
                                         <div class="team-member-img">
                                                <img class="img-carousel" src="images/a4.png" style="height: 320px; width: 270px;" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Ganesh Nayak</h4>
                                                <h5 class="team-member-position">CEO</h5>
                                                <p class="team-member-text">Unsucessful people make decisions based on their current situations.<br>Successful people make decisions based on where they want to be.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="https://twitter.com/login/"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="https://m.facebook.com/login/?locale2=en_GB"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://aboutme.google.com/u/0/?referer%3Dgplus&followup=https://aboutme.google.com/u/0/?referer%3Dgplus"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="images/a3.png" style="height: 320px; width: 270px;" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Dayananda Nayak</h4>
                                                <h5 class="team-member-position">Clerk</h5>
                                                <p class="team-member-text">Success is not final;<br>Failure is not fatal;<br>It is the courage to continue that counts.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="https://twitter.com/login/"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="https://m.facebook.com/login/?locale2=en_GB"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://aboutme.google.com/u/0/?referer%3Dgplus&followup=https://aboutme.google.com/u/0/?referer%3Dgplus"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="images/a1.jpg" style="height: 320px; width: 270px;" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Surendra Nayak</h4>
                                                <h5 class="team-member-position">Accountant</h5>
                                                <p class="team-member-text">Success is not the key to happiness.<be>Happiness is the key to success.<br>If you love what you are doing, you will be successful.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="https://twitter.com/login/"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="https://m.facebook.com/login/?locale2=en_GB"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://aboutme.google.com/u/0/?referer%3Dgplus&followup=https://aboutme.google.com/u/0/?referer%3Dgplus"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="images/a3.png" style="height: 320px; width: 270px;" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Mohan Nayak</h4>
                                                <h5 class="team-member-position">Manager</h5>
                                                <p class="team-member-text">Success is the sum of small efforts,<br> repeated day in and day out.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="https://twitter.com/login/"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="https://m.facebook.com/login/?locale2=en_GB"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://aboutme.google.com/u/0/?referer%3Dgplus&followup=https://aboutme.google.com/u/0/?referer%3Dgplus"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-12">
                                        <div class="team-member">
                                            <div class="team-member-img">
                                                <img class="img-carousel" src="images/a1.jpg" style="height: 320px; width: 270px;" alt="">
                                            </div><!-- /.team-member-img -->
                                            <div class="team-member-info">
                                                <h4 class="team-member-name">Rohit</h4>
                                                <h5 class="team-member-position">Superviser</h5>
                                                <p class="team-member-text">Try not to become a man of success.<br>Rather become a man of value.</p>
                                                <div class="social-links">
                                                    <a class="twitter-bg" href="https://twitter.com/login/"><i class="fa fa-twitter"></i></a>
                                                    <a class="facebook-bg" href="https://m.facebook.com/login/?locale2=en_GB"><i class="fa fa-facebook"></i></a>
                                                    <a class="google-plus-bg" href="https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://aboutme.google.com/u/0/?referer%3Dgplus&followup=https://aboutme.google.com/u/0/?referer%3Dgplus"><i class="fa fa-google-plus"></i></a>
                                                    <a class="linkedin-bg" href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a>
                                                    <a class="instagram-bg" href="https://www.instagram.com/accounts/login/?hl=en"><i class="fa fa-instagram"></i></a>
                                                </div><!-- /.social-links -->
                                            </div><!-- /.team-member-info -->
                                        </div><!-- /.team-member -->
                                    </div>
                                </div><!-- /.item -->
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.carousel -->
                    </div>

                    <div class="col-md-8 col-md-offset-2 hidden-xs">
                        <div class="carousel carousel-sync four-slides-slider multi-item-carousel slide" data-interval="false" id="fourSlidesSlider">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="images/a3.png" style="height: 240px; width: 158px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="images/a1.jpg" style="height: 240px; width: 158px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="images/a3.png" style="height: 240px; width: 158px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="images/a1.jpg" style="height: 240px; width: 158px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="col-sm-4 col-md-3">
                                      <img src="images/a4.png" style="height: 240px; width: 158px;" alt="" class="img-carousel">
                                    </div>
                                </div><!-- /.item -->
                            </div><!-- /.carousel-inner -->
                        </div><!-- /.multi-item-carousel -->
                    </div>

                    <div class="col-md-12">

                        <div class="multi-item-controls text-center">
                            <a href="#fourSlidesSlider" class="left btn btn-gray-border carousel-control" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a href="#fourSlidesSlider" class="right btn btn-gray-border carousel-control" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div><!-- /.multi-item-controls -->

                    </div>

                </div>

            </div>
            
        </section><!-- /.section-team -->


        <section class="site-section-small section-clients light-gray-bg">

            <div class="container">

                <h3 class="section-title text-center mb-120">What our clients say?</h3>

                <div class="row">

                    <div class="testimonials">

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-1">
                                    <p class="testimonial-text">It was a pleasure working with this company</p> 
                                    <div class="testimonial-owner">
                                        <p>Abubakar</p>
                                        <p class="yellow-text italic-text">Marketing Manager</p>
                                    </div><!-- /.testimonial-owner -->
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-2">
                                    <p class="testimonial-text">There are wide variety of products</p> 
                                    <div class="testimonial-owner">
                                        <p>jenny</p>
                                        <p class="yellow-text italic-text">Client</p>
                                    </div><!-- /.testimonial-owner -->                                   
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-1">
                                    <p class="testimonial-text">They believe in customer satisfaction</p> 
                                    <div class="testimonial-owner">
                                        <p>Linda</p>
                                        <p class="yellow-text italic-text">Client</p>
                                    </div><!-- /.testimonial-owner -->
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-2">
                                    <p class="testimonial-text">They are personable, responsive and result-oriented!</p> 
                                    <div class="testimonial-owner">
                                        <p>John Dawson</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-1">
                                    <p class="testimonial-text">They provide great support for customers need.</p> 
                                    <div class="testimonial-owner">
                                        <p>Jane Smith</p>
                                        <p class="yellow-text italic-text">Client</p>
                                    </div><!-- /.testimonial-owner -->                                  
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                        <div class="col-md-6"> 

                            <div class="testimonial">
                                <div class="testimonial-content testimonial-2">
                                    <p class="testimonial-text">Always available to answer any questions. Very knowledgeable about the services they provide.</p> 
                                    <div class="testimonial-owner">
                                        <p>Matt Ryan</p>
                                        <p class="yellow-text italic-text">Owner of Company</p>
                                    </div><!-- /.testimonial-owner -->                        
                                </div><!-- /.testimonial-content -->
                            </div><!-- /.testimonial -->

                        </div>

                    </div><!-- /.testimonials -->

                </div>

            </div>
            
        </section><!-- /.section-clients -->

        <section class="site-section-small section-work-with-us yellow-bg text-center">

            <div class="container">

                <p class="section-title-small white-text mb-50">Coming together is a beginning, keeping together is progress, working together is success.</p>
                <!-- <a class="btn" href="#">Start Now</a> -->

            </div>
            
        </section><!-- /.section-work-with-us -->

        <section class="social-networks">

            <div class="container-fluid">

                <div class="row">

                    <a class="white-text black-bg twitter-bg" href="https://twitter.com/login/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg facebook-bg" href="https://m.facebook.com/login/?locale2=en_GB"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="white-text black-bg google-plus-bg" href="https://accounts.google.com/ServiceLogin?passive=1209600&continue=https://aboutme.google.com/u/0/?referer%3Dgplus&followup=https://aboutme.google.com/u/0/?referer%3Dgplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg message-bg" href="mailto:"><i class="fa fa-envelope" aria-hidden="true"></i></a>
 
                </div>
                
            </div>
            
        </section><!-- /.social-networks -->

    </main><!-- /.site-main -->

    <footer id="colophon" class="site-footer">

        <div class="container">

            <div class="email">
                <a href="mailto:devadas.nayak@gmail.com">devadas.nayak@gmail.com</a>
            </div><!-- /.email -->

            <div class="row">

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <a href="index.php" class="site-title yellow-text">Sovereign<span>Tile</span></a>
                        <p class="mb-0">The work isn't done when you're happy;The work is done when your client is smiling.</p>
                    </div>
                    
                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Get in touch</h4>
                        <ul class="list-unstyled">
                            <li>Phone: <a href="tel:+0824-245-7086">+0824-245-7086</a></li>
                            <li>Email: <a href="mailto:devadas.nayak@gmail.com">devadas.nayak@gmail.com</a></li>
                            <li>Fax: <a href="tel:+0824-245-7269">+0824-245-7269</a></li>
                        </ul>   
                    </div>
                    
                </div>
              
                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="indexabout.php">About Us</a></li>
                            <li><a href="firstreview.php">Reviews</a></li>
                            <li><a href="userlogin.php">User</a></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="col-md-3 col-xs-6">

                    <div class="mb-xs-20">
                        <h4 class="small-title">Location</h4>
                        <ul class="list-unstyled">
                            <li>Sulthan Battery Road</li>
                            <li>Boloor, Mangalore-575003</li>
                            <li>(Near Church Gate)</li>
                        </ul>
                    </div>

                </div>

            </div>
            
        </div>

        <!-- <div class="copyright">
            <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan Savov</a></p>
        </div> --><!-- /.copyright -->
        
    </footer><!-- /.site-footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="a/index/js/bootstrap.min.js"></script>
    <script src="a/index/js/jquery.slicknav.min.js"></script>
    <script src="a/index/js/slick.min.js"></script>
    <script src="a/index/js/touchswipe.min.js"></script>
    <script src="a/index/js/skrollr.min.js"></script>
    <script src="a/index/js/jquery.countTo.min.js"></script>
    <script src="a/index/js/script.js"></script>

</body>
</html>