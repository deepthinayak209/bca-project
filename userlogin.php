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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="a/admin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="a/admin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="a/admin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form class="login100-form validate-form" action="Controller/userlogincontroller.php" method="POST">
					<!-- <span class="login100-form-title p-b-40">
						Login
					</span> -->

					<!-- <div>
						<a href="#" class="btn-login-with bg1 m-b-10">
							<i class="fa fa-facebook-official"></i>
							Login with Facebook
						</a>

						<a href="#" class="btn-login-with bg2">
							<i class="fa fa-twitter"></i>
							Login with Twitter
						</a>
					</div> -->

					<div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							Login with username
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="user_name" placeholder="user name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">
						<input class="input100" type="password" name="password" placeholder="password" title="Please check your password">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
						<!-- <a href="admin.php"> -->
							Login
							<!-- </a> -->

						</button>
					</div>

					<div class="text-center p-t-55 p-b-30">
						<!-- <a class="txt1" href="password.php"> -->
						<button name="forgot">
							<h6><b>Forgot password?</b></h6>
							</button>		
						<!-- </a> -->
						</div>
						<div class="text-center p-t-55 p-b-30">
						<span class="txt2 p-b-10">
							Don’t have an account?
						</span>

						<a href="userregister.php" class="txt3 bo1 hov1">
							Sign up now
						</a>
					</div>
					
					<!-- <div class="flex-col-c p-t-224">
						<span class="txt2 p-b-10">
							Don’t have an account?
						</span>

						<a href="userregister.php" class="txt3 bo1 hov1">
							Sign up now
						</a>
					</div> -->
					
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="a/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="a/admin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="a/admin/vendor/bootstrap/js/popper.js"></script>
	<script src="a/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="a/admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="a/admin/vendor/daterangepicker/moment.min.js"></script>
	<script src="a/admin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="a/admin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="a/admin/js/main.js"></script>

</body>
</html>