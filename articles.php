<?php
define('DIR','');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
if(!isset($_SESSION['user']))
{
    header('Location:userlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sovereign</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="a/blog/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="a/blog/css/animate.css">
    
    <link rel="stylesheet" href="a/blog/css/owl.carousel.min.css">
    <link rel="stylesheet" href="a/blog/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="a/blog/css/magnific-popup.css">

    <link rel="stylesheet" href="a/blog/css/aos.css">

    <link rel="stylesheet" href="a/blog/css/ionicons.min.css">
    
    <link rel="stylesheet" href="a/blog/css/flaticon.css">
    <link rel="stylesheet" href="a/blog/css/icomoon.css">
    <link rel="stylesheet" href="a/blog/css/style.css">
  </head>

<header>
<?php include "header1.php";?><!-- /.site-navigation --> 
</header>     

  
  <body>
    <div class=" js-fullheight" style="background-image: url('images/bg1.PNG');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate">
          	<h2 class="subheading">Hello! Welcome to</h2>
          	<h1 class="mb-4 mb-md-0">Readit.</h1>
          	<div class="row">
          		<div class="col-md-7">
          			<div class="text">
	          			<p>Collect things you love,<br> that are authentic to you,<br> and your house becomes your story.</p>
	          			<!-- <div class="mouse">
										<a href="#" class="mouse-icon">
											<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
										</a>
									</div> -->
                  
								</div>
          		</div>
          	</div>
          </div>
        </div>
      </div>
    </div>

   	<section class="ftco-section bg-light">
   
      <div class="container">
       
        <div class="row d-flex">
            <?php
                $stmt = $admin->ret("SELECT * FROM `blog` ORDER BY `blog_id` DESC ");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <!-- <a href="#" class="block-20" style="background-image: url('images/p1.jpg');"> -->
              <img src="images/<?php echo $row['image']?>" style="height: 400px; width: 350px;" class="img-fluid" alt="Image"><br>
              </a>
              <div class="text p-4 float-right d-block">
              	
              	<h3 class="heading mb-3"><a href="#"><?php echo $row['title'];?></a></h3>
                <p><?php echo $row['message'];?></p>
                <div class="meta">
                    <div><a href="#"></span> <?php echo $row['date1'];?></a></div>
                    <div><a href="#"></span> <?php echo $row['member_id'];?></a></div>
                    <!-- <div><a href="#"></span> 19</a></div> -->
                  </div>
                <!-- <p><a href="#" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p> -->
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
      
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>
              <p>Collect things you love,<br> that are authentic to you, <br>and your house becomes your story.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Product</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Make a post</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Sulthan Battery Road, Boloor, Mangalore-575003<br>(Near Church Gate)</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+0824-245-7086</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">devadas.nayak@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <!-- <p> --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><!-- </p> -->
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="a/blog/js/jquery.min.js"></script>
  <script src="a/blog/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="a/blog/js/popper.min.js"></script>
  <script src="a/blog/js/bootstrap.min.js"></script>
  <script src="a/blog/js/jquery.easing.1.3.js"></script>
  <script src="a/blog/js/jquery.waypoints.min.js"></script>
  <script src="a/blog/js/jquery.stellar.min.js"></script>
  <script src="a/blog/js/owl.carousel.min.js"></script>
  <script src="a/blog/js/jquery.magnific-popup.min.js"></script>
  <script src="a/blog/js/aos.js"></script>
  <script src="a/blog/js/jquery.animateNumber.min.js"></script>
  <script src="a/blog/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="a/blog/js/google-map.js"></script>
  <script src="a/blog/js/main.js"></script>
    
  </body>
</html>