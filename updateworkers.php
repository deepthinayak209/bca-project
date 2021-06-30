<?php
define('DIR','');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
if(!isset($_SESSION['user']))
{
    header('Location:adminlogin.php');
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

<body>    
    <div class="dashboard-main-wrapper">
        
        <?php include "sidebar.php";?>
            
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="page-wrapper">
                        <div class="wrapper wrapper--w790">
                            <div class="card card-5">
                                <div class="card-heading">


                                    <h2 class="title">UPDATE WORKERS</h2>
                                </div>
                                <div class="card-body">
                                <?php
        $worker_id=$_GET['worker_id'];
        $stmt=$admin->ret("SELECT * FROM `workers` where worker_id=".$worker_id);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <form action="Controller/workerupdate.php" method="POST">
                    
                                        <div class="form-group form-row">
                                        <label class="col-md-3">Worker name</label>
                                            <input type="text" name="worker_name" value="<?php echo $row['worker_name'];?>" required placeholder="Worker name..." class="col-md-8 input--style-5">
                                            <input type="hidden" name="worker_id" value="<?php echo $row['worker_id'];?>" class="input--style-5">
                                        </div>

                                        <div class="form-group form-row">
                                        <label class="col-md-3">Address</label>
                                            <input type="text" name="address" value="<?php echo $row['address'];?>" required placeholder="address..." class="col-md-8 input--style-5">
                                        </div>

                                        <div class="form-group form-row">
                                        <label class="col-md-3">Phone number</label>
                                            <input type="text" name="phoneno" pattern="^\d{10}$" title="10 numeric characters only" value="<?php echo $row['phoneno'];?>" required placeholder="phone number..." class="col-md-8 input--style-5">
                                        </div>

                                        <div class="form-group form-row">
                                        <label class="col-md-3">Salary</label>
                                            <input type="text" name="salary" autocomplete="off" pattern="^\d{1,}$" title="numeric characters only" value="<?php echo $row['salary'];?>" required placeholder="salary..." class="col-md-8 input--style-5">
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="submit" name="update" value="submit" class="btn btn-danger">
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
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