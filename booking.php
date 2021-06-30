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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Sovereign</title>
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="a/booking/css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="a/booking/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your booking</h1>
						</div>
						<form action="Controller/bookingcontroller.php" method="POST">
							<div class="form-group">
								<input class="form-control" name="user_id" type="text" value="<?php echo $_SESSION['user'];?>" readonly>
								
								<span class="form-label">client name</span>
							</div>

							<?php
    						$id=$_GET['id'];
     						$stmt = $admin->ret("SELECT * FROM `product` where product_id='$id'");
     						$row = $stmt->fetch(PDO::FETCH_ASSOC);
     						?>

							<div class="form-group">
	
								<input class="form-control" name="product_id" type="hidden" value="<?php echo $row['product_id'];?>">
								<input class="form-control" name="pro_name" type="text" value="<?php echo $row['pro_name'];?>" readonly>
								<input class="form-control" name="price" type="hidden" value="<?php echo $row['price'];?>">
	
								<span class="form-label">selected product</span>
							</div>
							
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select name="category" class="form-control" required>
											<option value="" selected hidden>product category</option>
											<option>first class</option>
											<option>second class</option>
											<option>third class</option>
											<option>fourth class</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">category</span>
									</div>
								</div>

								<div class="col-md-4">
								<div class="form-group">
								<input class="form-control" name="pieces" type="text" placeholder="Number of Pieces..." required>
								<span class="form-label">Number of Pieces</span>
							</div>
							</div>
							</div>

							<!-- <div class="form-group">
								<input class="form-control" name="pieces" type="text" placeholder="Number of Pieces..." required>
								<span class="form-label">Number of Pieces</span>
							</div> -->

                            <div class="row">

								<div class="col-md-6">

									<div class="form-group">
										   <label>Delivery date</label>
										<input class="form-control" type="date" name="date" title="delivery date..." required>
										<span class="form-label">Delivery date</span>
									</div>
								</div>
							</div>


		<?php
        $id=$_SESSION['id'];
        $stmt = $admin->ret("SELECT * FROM `user` where user_id='$id'");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="email" type="email" value="<?php echo $row['email_id'];?>" readonly>
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="phoneno" type="tel" value="<?php echo $row['phone_no'];?>" readonly>
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>

							<div class="form-group">
								<input class="form-control" name="delivery_address" type="textarea" placeholder="delivery address...">
								<span class="form-label">delivery address</span>
							</div>
							
							<div class="form-btn">
                                <input type="submit" name="submit" value="Book Now" class="submit-btn">
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="a/booking/js/jquery.min.js"></script>
	

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>