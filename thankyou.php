<?php
define('DIR','');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
if(!isset($_SESSION['user']))
{
    header('Location:userlogin.php');
}
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Sovereign</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="a/reviews/fonts/icomoon/style.css">

    <link rel="stylesheet" href="a/reviews/css/bootstrap.min.css">
    <link rel="stylesheet" href="a/reviews/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="a/reviews/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="a/reviews/css/owl.carousel.min.css">
    <link rel="stylesheet" href="a/reviews/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="a/reviews/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="a/reviews/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="a/reviews/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header>
      <?php include "header1.php";?>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Thank you for booking our products...</h1>
              <h5>If you have any questions feel free to contact us...</h5>
              <div class="form-group row">
    <div class="col-md-6 mr-auto">
    <a href="home.php">
    <div class="btn btn-block btn-primary text-white py-3 px-5">
      Home page
      </div>
      </a>
    </div>
    <div class="col-md-6 mr-auto">
    <a href="cproducts.php">
    <div class="btn btn-block btn-primary text-white py-3 px-5">
      View products
      </div>
      </a>
    </div>
</div>
            </div>
          </div>

        </div>

      </div>

    </div>

    


    

    <footer>
     <?php include "footer.php";?>
    </footer>

    </div>

    <script src="a/reviews/js/jquery-3.3.1.min.js"></script>
    <script src="a/reviews/js/popper.min.js"></script>
    <script src="a/reviews/js/bootstrap.min.js"></script>
    <script src="a/reviews/js/owl.carousel.min.js"></script>
    <script src="a/reviews/js/jquery.sticky.js"></script>
    <script src="a/reviews/js/jquery.waypoints.min.js"></script>
    <script src="a/reviews/js/jquery.animateNumber.min.js"></script>
    <script src="a/reviews/js/jquery.fancybox.min.js"></script>
    <script src="a/reviews/js/jquery.easing.1.3.js"></script>
    <script src="a/reviews/js/bootstrap-datepicker.min.js"></script>
    <script src="a/reviews/js/aos.js"></script>

    <script src="a/reviews/js/main.js"></script>

  </body>

</html>

