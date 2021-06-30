<?php
define('DIR','');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sovereign</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">

    <!-- Icons font CSS-->
    <link href="a/add/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="a/add/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="a/add/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="a//vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="a/add/css/main.css" rel="stylesheet" media="all">
</head>

<body>



    <div class="page-wrapper">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">QUESTIONS</h2>
                </div>
                <div class="card-body">
                    <form action="Controller/usercontroller.php" method="POST">
                       
                        <div class="form-row">
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
                        </div>


                        <div class="form-row">
                            <div class="name">Answer</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea name="answer" required cols="50" placeholder="Answer..." class="input--style-5"></textarea>
                                </div>
                            </div>
                        </div>
                       
                        

                        <div class="form-group">
                            <input type="submit" name="submit" value="submit" class="btn btn--red">
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="a/add/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="a/add/vendor/select2/select2.min.js"></script>
    <script src="a/add/vendor/datepicker/moment.min.js"></script>
    <script src="a/add/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="a/add/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->