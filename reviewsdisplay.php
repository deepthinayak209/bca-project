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
<html lang="en"> <!-- language used is english -->

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Sovereign</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="a/products/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="a/products/images/apple-touch-icon.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="a/products/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="a/products/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="a/products/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="a/products/css/custom.css">
    <script src="a/products/js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


   
<body>
<header>
<?php include "header1.php";?><!-- /.site-navigation --> 
</header>     
         
    <div id="reviews" class="section wb parallaxie" style="background: url('images/bg5.jpg')">
        
        <div class="container">

            <div class="section-title text-center">

                <h3>Reviews</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

            <div class="row">

                <div class="col-md-12 col-sm-12">
                    
       
               <div class="testi-carousel owl-carousel owl-theme">                         
  <?php
                $stmt = $admin->ret("SELECT * FROM `reviews` ORDER BY `review_id` DESC ");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
                   

                        <div class="testimonial clearfix">
                         <figure class="testimonial_img">
                                <img src="images/logo.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="desc">
                                <!-- <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3> -->
                                <p><i class="fa fa-quote-left"></i>  <?php echo $row['review'];?></p>
                            </div>
                            <div class="testi-meta">
                                <h4>- <?php echo $row['user_id'];?></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                         <?php } ?>
                    </div><!-- end carousel -->
                    
                </div><!-- end col -->
                
            </div><!-- end row -->
 
        </div><!-- end container -->

    </div><!-- end section -->


<footer>
  <?php include "footer.php";?>
</footer>


    

    <!-- ALL JS FILES -->
    <script src="a/products/js/all.js"></script>
    <!-- Camera Slider -->
    <script src="a/products/js/jquery.mobile.customized.min.js"></script>
    <script src="a/products/js/jquery.easing.1.3.js"></script> 
    <script src="a/products/js/parallaxie.js"></script>
    <script src="a/products/js/headline.js"></script>
    <script src="a/products/js/jquery.appear.min.js"></script>
    <script src="a/products/js/skill.bars.jquery.js"></script>
    <script src="a/products/js/responsiveslides.min.js"></script>
    <!-- Contact form JavaScript -->
    <script src="a/products/js/jqBootstrapValidation.js"></script>
    <script src="a/products/js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="a/products/js/jquery.fatNav.min.js"></script>
    <script src="a/products/js/main.js"></script>
    <script src="a/products/js/custom.js"></script>

</body>
</html>