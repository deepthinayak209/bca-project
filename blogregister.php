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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="a/blogregister/images/icons/favicon.ico"/> -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="a/blogregister/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="a/blogregister/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/blogregister/css/util.css">
	<link rel="stylesheet" type="text/css" href="a/blogregister/css/main.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--===============================================================================================-->
</head>
<!-- <body style="background-color: #999999;"> -->
<header>
<?php include "header1.php";?><!-- /.site-navigation --> 
</header>

<body>
	
	<!-- <div class="limiter"> -->
		<div class="container-login100">   <!-- image will vanish -->
			<div class="login100-more" style="background-image: url('images/train.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<!-- <form class="login100-form validate-form"> -->
					<span class="login100-form-title p-b-59">
						Blog Register
					</span>

					<form class="login100-form validate-form" action="Controller/bloginsert.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="fullname" placeholder="Name..." autocomplete="off"  pattern="[A-Za-z]+" title="letters only" required/>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email addess..." autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-z.-]+\.[a-z]{2,4}$" title="xyz@something.com" required/>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number, 1 uppercase and lowercase letter and at least 8 or more charecters" placeholder="********" required / autocomplete="off">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
							<!-- <button class="login100-form-btn">
							<input type="submit" name="submit" value="">
								Sign Up
							</button> -->
							
							<!-- <div class="login100-form-btn">
                                            <input type="submit" name="submit" value="sign up" class="login100-more">                                            
                                        </div> -->
                                        <div class="login100-form-btn">
                                            <input type="submit" name="submit" value="Sign up" class="">
                                        </div>
						</div>				
					</div>
					</form>
			</div>
		</div>

		<header>
<?php include "footer.php";?><!-- /.site-navigation --> 
</header>
	
<!--===============================================================================================-->
	<script src="a/blogregister/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	 <script src="a/blogregister/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	 <script src="a/blogregister/vendor/bootstrap/js/popper.js"></script>
	 <script src="a/blogregister/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	 <script src="a/blogregister/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	 <script src="a/blogregister/vendor/daterangepicker/moment.min.js"></script>
	 <script src="a/blogregister/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	 <script src="a/blogregister/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	 <script src="a/blogregister/js/main.js"></script>

</body>
</html>