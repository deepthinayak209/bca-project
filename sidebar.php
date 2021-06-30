
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
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="admin.php"><img src="images/logo.jpg" style="height: 50px; width: 50px;" alt="Image" class="img-fluid">  Sovereign</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <!-- <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li> -->
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <i class="fas fa-fw fa-bell"></i>  -->
                            <i class="far fa-comments"></i>
                            <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> contact</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                        <?php
     $stmt = $admin->ret("SELECT * FROM `contact` ORDER BY `contact`.`con_id` DESC ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                                            <a href="replyclients.php" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?php echo $row['user_name']?></span>sent you a message.

                                                        <!-- <div class="notification-date">2 min ago</div> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <?php }?>


                                            
    
                                            <!-- <a href="displaypayments.php" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?php echo $row['user_id']?></span>has booked a product. 
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a> -->
                                           
                                            <!-- <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Victor</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a> -->
                                            <!-- <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Alessio Ivanshov</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a> -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="replyclients.php">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                    


                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-bell"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    
                                    <div class="notification-title">Bookings</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                        <?php
     $stmt = $admin->ret("SELECT * FROM `payment` ORDER BY `payment`.`payment_id` DESC ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                                            <a href="displaypayments.php" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?php echo $row['user_name']?></span>has booked a product.

                                                        <!-- <div class="notification-date">2 min ago</div> -->
                                                    </div>
                                                </div>
                                            </a>
                                            <?php }?>


                                            
    
                                            <!-- <a href="displaypayments.php" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name"><?php echo $row['user_id']?></span>has booked a product. 
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a> -->
                                           
                                            <!-- <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Victor</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a> -->
                                            <!-- <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="adminside/assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Alessio Ivanshov</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a> -->
                                        </div>
                                    </div>


                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="displaypayments.php">More</a></div>
                                </li>
                            </ul>
                        </li>




                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/logo.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Ganesh Nayak </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="adminlogin.php"><i class="fas fa-user mr-2"></i>Account</a>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> -->
                                <a class="dropdown-item" href="adminlogout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
       <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- <a class="d-xl-none d-lg-none" href="#">Dashboard</a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                               <a href="admin.php"> Dashboard </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">Product Details <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="addproducts.php">add</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="displayproducts.php">display</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">Manage Workers</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="addworkers.php">add <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="displayworkers.php">display</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">Manage clients</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="addclients.php">add</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="displayclients.php">display</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li> -->
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">Manage Booking</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="displaybooking.php">display</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="bookingnotify.php">send notifications</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"> Transportation </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="addtransportation.php">Add</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="displaytransportation.php">Display</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7">Manage payment <span class="badge badge-secondary"></span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="addpayments.php">add</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="displaypayments.php">Display</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8">Reply to clients</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="replyclients.php">view</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9">reviews</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="viewreviews.php">view</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10">blog</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="articles.php">articles</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="displayblog.php">blog post details</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="displaymember.php">membership details</a>
                                        </li>
                                        
                                    </ul>
                                    <li class="nav-item">
                                            <a class="nav-link" href="displayuser.php">user details</a>
                                        </li>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        
        <!-- ============================================================== -->
        <!-- end left sidebar -->
 
</body>
</html>