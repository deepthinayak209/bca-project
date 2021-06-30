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
    <title>Sovereign</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">
</head>

<body>
    
    <div class="dashboard-main-wrapper">
        
        <?php include "sidebar.php";?>
        
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                   


    <!-- <input type="text" name="search" class="form-control" placeholder="Enter Name for search" onkeyup="searchit(this.value)"> -->
   <table border='1' id="example" class="table table-striped badge-warning">
   <center><h1>Transportation</h1></center>
    <tr>
    <th>Name</th>
    <th>Vehical number</th>
    <th>Destination</th>
    <th>Description</th>
    </tr>
   <?php
     $stmt = $admin->ret("SELECT * FROM `transportation` ORDER BY `tra_id` DESC ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['vehical_no']; ?></td>
    <td ><?php echo $row['destination']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><a href="Controller/transportationdelete.php?tra_id=<?php echo $row['tra_id']; ?>" OnClick="return confirm('are you sure')">delete</a></td>
    <td><a href="updatetransportation.php?tra_id=<?php echo $row['tra_id']; ?>" OnClick="return confirm('are you sure')">update</a></td>
</tr>
<?php } ?>
</table>





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
    <script src="a/adminside/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="a/adminside/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="a/adminside/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="a/adminside/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="a/adminside/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="a/adminside/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="a/adminside/assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>