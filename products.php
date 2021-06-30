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

    <link rel="stylesheet" href="a/view/fonts/icomoon/style.css">

    <link rel="stylesheet" href="a/view/css/bootstrap.min.css">
    <link rel="stylesheet" href="a/view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="a/view/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="a/view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="a/view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="a/view/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="a/view/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="a/view/css/style.css">


    <!-- ====================================================================== -->
        <link rel="stylesheet" href="a/victory/css/bootstrap.min.css">
        <link rel="stylesheet" href="a/victory/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="a/victory/css/fontAwesome.css">
        <link rel="stylesheet" href="a/victory/css/hero-slider.css">
        <link rel="stylesheet" href="a/victory/css/owl-carousel.css">
        <link rel="stylesheet" href="a/victory/css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="a/victory/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!-- ===================================================================== -->

</head>

<header>
<?php include "header1.php";?><!-- /.site-navigation --> 
</header>

<body>
<section class="blog-page">
    <div class="container">
        <?php
        $id=$_GET['id'];
        $stmt = $admin->ret("SELECT * FROM `product` where product_id='$id'");
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="blog-item">
                <center>
                <img src="images/<?php echo $row['image'];?>" style="height: 500px; width:550px;" alt="Image">
                
                    <div class="rent-price"><h1><b><span>Rs.<?php echo $row['price'];?>/</span>Piece</b></h1></div> 
                </center>
                </div>
                          
                <div class="down-content">
                <center>
                    <h1><b><?php echo $row['pro_name'];?></b></h1>
                    <p>
                        <h2><b><u><span>Description</span></u></b></h2>
                        <p><h3><?php echo $row['description'];?></h3></p>
                    </p>
                </center>
                </div>

                <div class="d-flex action">
                    <a href="booking.php?id=<?php echo $row['product_id'];?>" class="btn btn-primary"><h1><b>book now</b></h1></a>
                </div>
            </div>
        </div>    
    </div>
    <?php } ?>  
</section>
<br>
<footer>
    <?php include "footer.php";?>
</footer>        
        
    <!-- <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-camera" aria-hidden="true"></i></a> -->
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

     <!-- ============================================================== -->
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    

    <script src="a/victory/js/vendor/bootstrap.min.js"></script>
    <script src="a/victory/js/plugins.js"></script>
    <script src="a/victory/js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
</body>
</html>
                