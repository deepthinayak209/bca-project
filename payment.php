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

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="a/adminside/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="a/adminside/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="a/adminside/assets/libs/css/style.css">
    <link rel="stylesheet" href="a/adminside/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="a/adminside/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="a/adminside/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="a/adminside/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="a/adminside/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="a/adminside/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">


    <link href="a/add/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="a/add/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="a/add/css/main.css" rel="stylesheet" media="all">

    <title>Sovereign</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">
</head>

<header>
    <?php include "header1.php";?>
</header>

<body>    
    

                    <div class="page-wrapper">
                        <div class="wrapper wrapper--w790">
                            <div class="card card-5">
                                <div class="card-heading">
                                    <h2 class="title">PAYMENT</h2>
                                </div>
                                <div class="card-body">
                                    <form action="Controller/paymentcontroller.php" method="POST">
                    

                                        <!-- <div class="form-group form-row">
                                        <label class="col-md-3">Client Name</label>
                                            <input type="text" name="client_name" pattern="[A-Za-z]+" title="letters only" required placeholder="Client Name..." class="col-md-8 input--style-5">
                                        </div> -->

                                        <?php
    $id=$_GET['id'];
     $stmt = $admin->ret("SELECT * FROM `booking` where booking_id='$id'");
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
     ?>


                                        <div class="form-group form-row">
                                        <label class="col-md-3">Booking Id</label>
                                            <input type="text" name="booking_id" value="<?php echo $row['booking_id'];?>" required placeholder="Booking Id..." class="col-md-8 input--style-5" readonly>
                                            <input class="form-control" name="user_name" type="hidden" value="<?php echo $_SESSION['user'];?>">
                                            <input class="form-control" name="pro_name" type="hidden" value="<?php echo $row['pro_name'];?>">
                                        </div>

                                        <div class="form-group form-row">
                                        <label class="col-md-3">Date</label>
                                            <input type="text" name="date1" value="<?php echo date("d-m-Y");?>" required class="col-md-8 input--style-5" readonly>
                                        </div>
                                                                                
                                        <div class="form-group form-row">
                            <div class="name">Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="type" required>
                                                    <option disabled="disabled" value="" selected="selected">Choose option</option>
                                                    <option>Cash</option>
                                                    <option>Cheque</option>
                                                    
                                                </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>





                                        <div class="form-group form-row">
                                        <label class="col-md-3">Amount</label>
                                            <input type="text" name="amount" value="<?php echo $row['price']?>" class="col-md-8 input--style-5" readonly>
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="submit" class="btn btn-danger">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
    <?php include "footer.php";?>
</footer>
    
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="a/adminside/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="a/adminside/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="a/adminside/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="a/adminside/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="a/adminside/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="a/a/adminside/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="a/adminside/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="a/adminside/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="a/adminside/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="a/adminside/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="a/adminside/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="a/adminside/assets/libs/js/dashboard-ecommerce.js"></script>
    
    <script src="a/add/vendor/jquery/jquery.min.js"></script>
    <script src="a/add/vendor/select2/select2.min.js"></script>
    <script src="a/add/js/global.js"></script>

</body>
</html>