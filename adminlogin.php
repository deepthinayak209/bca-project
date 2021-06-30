<?php
define('DIR','');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
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
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="a/admin/vendor/daterangepicker/daterangepicker.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="a/admin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/deep.jpg');">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form class="login100-form validate-form" action="Controller/adminlogin.php" method="POST">
					<span class="login100-form-title p-b-40">
						Login
					</span>

						<!-- <form action="Controller/adminlogin.php" method="POST"> -->

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
						<!-- <a href="admin.php"> -->
							Login
							<!-- </a> -->

						</button>
					</div>
					
					</form>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	 <!-- <script src="a/vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
	 <!-- <script src="a/vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	 <!-- <script src="a/vendor/bootstrap/js/popper.js"></script>
	// <script src="a/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="a/vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	 <!-- <script src="a/vendor/daterangepicker/moment.min.js"></script>
	// <script src="a/vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	 <!-- <script src="a/vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
	 <!-- <script src="a/js/main.js"></script> -->

</body>
</html>