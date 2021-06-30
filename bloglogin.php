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
	<!-- <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/bloglogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="a/bloglogin/css/main.css">
<!--===============================================================================================-->
</head>

<header>
<?php include "header1.php";?><!-- /.site-navigation --> 
</header>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/deep.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="Controller/bloglogincontroller.php" method="POST">

					<span class="login100-form-title p-t-20 p-b-45">
						<h2>Sovereign Tile Blog</h2>
					</span>
						<!-- <form action="Controller/logincontroller.php" method="POST"> -->

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<!-- <div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
						<a class="txt1" href="addblog.php">
							Login
							</a>
							login
						</button>
					</div> -->

					<div class="container-login100-form-btn p-t-10">
			<input type="submit" name="submit" value="login" class="login100-form-btn">
		</div>
					
					<div class="text-center w-full login100-form-btn">
						<a class="txt1" href="blogregister.php">
							<h6><b>Create new account</b></h6>
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<header>
<?php include "footer.php";?><!-- /.site-navigation --> 
</header>
<!--===============================================================================================-->	
	// <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
	// <!-- <script src="vendor/bootstrap/js/popper.js"></script>
	// <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	// <!-- <script src="vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	// <!-- <script src="js/main.js"></script> -->

</body>
</html>