<?php
define('DIR','');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
// if(!isset($_SESSION['user']))
// {
//     header('Location:userlogin.php');
// }
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
	<link rel="stylesheet" type="text/css" href="a/userregister/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="a/userregister/css/util.css">
	<link rel="stylesheet" type="text/css" href="a/userregister/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100" style="background-image: url('images/bg12.jpg');">
		<div class="wrap-contact100 login100-more">
			<form class="contact100-form validate-form" action="Controller/usercontroller.php" method="POST">
				<span class="contact100-form-title">
					Register yourself
				</span>

					

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" type="text" name="full_name" placeholder="Name..." autocomplete="off" title="letters only" required/>
					<!-- <label class="label-input100" for="name"> -->
						<span class=""></span>
					<!-- </label> -->
				</div>

				<div class="wrap-input100 validate-input" data-validate="Username is required">
					<input class="input100"  type="text" name="user_name" placeholder="Username...">
					<!-- <label class="label-input100" for="name"> -->
						<span class=""></span>
					<!-- </label> -->
				</div>



				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<!-- <input class="input100" type="email" name="email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email..."> -->
					<input class="input100" type="email" name="email_id" placeholder="Email..." autocomplete="off" pattern="[a-zA-Z0-9._%+-]+@[a-z.-]+\.[a-z]{2,4}$" title="xyz@something.com" required />
					<!-- <label class="label-input100" for="email"> -->
						<span class=""></span>
					<!-- </label> -->
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Phone number is required">
					<input class="input100" type="tel" name="phone_no" placeholder="Phone number..." autocomplete="off" pattern="^\d{10}$" title="10 numeric characters only" required/>
					<!-- <label class="label-input100" for="phone"> -->
						<span class=""></span>
					<!-- </label> -->
				</div>

				<div class="wrap-input100 validate-input" data-validate = "password is required">
					<input class="input100" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number, 1 uppercase and lowercase letter and at least 8 or more characters" name="password" placeholder="Password..." required / autocomplete="off">
					<!-- <label class="label-input100" for="phone"> -->
						<span class=""></span>
					<!-- </label> -->
				</div>

				<div class="wrap-input100 validate-input">
				<!-- <div class="wrap-input100 validate-input"> --> 
                            <!-- <div class="name">Questions</div> -->
                            <!-- <div class="value"> -->
                                <div class="input-group">
                                <!-- <div class="input100"> -->
                                    <!-- <div class="wrap-input100 validate-input input100"> -->
                                        <select name="question" class="input100">
                                            <option disabled="disabled" selected="selected">Select the question???</option>
                                            <option>Your favorite color ?</option>
                                            <option>Your favorite animal ?</option>
                                            <option>Your favorite place ?</option>
                                            <option>Your favorite food ?</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    <!-- </div> -->
                                <!-- </div> -->
                                </div>
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>

                        <!-- <div class="form-row">
                            <div class="name">Questions</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="question">
                                            <option disabled="disabled" selected="selected">Select the question???</option>
                                            <option>Your favorite color ?</option>
                                            <option>Your favorite animal ?</option>
                                            <option>Your favorite place ?</option>
                                            <option>Your favorite food ?</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                        

                        <div class="wrap-input100 validate-input" data-validate = "answer is required">
					<input class="input100" type="text" name="answer" placeholder="answer..." required/>
				</div>


				<div class="container-contact100-form-btn contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>					
						<div class="contact100-form-btn">
                            <input type="submit" name="submit" value="sign up">                                                                  
                        </div>                        
					</div>
				</div>
<br>
				
			</form>
		</div>
	</div>




	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="a/userregister/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="a/userregister/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="a/userregister/vendor/bootstrap/js/popper.js"></script>
	<script src="a/userregister/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="a/userregister/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="a/userregister/vendor/daterangepicker/moment.min.js"></script>
	<script src="a/userregister/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="a/userregister/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="a/userregister/js/main.js"></script>

</body>
</html>
