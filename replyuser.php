<?php
define('DIR','');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
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
  <!-- <link rel="icon" type="image/png" href="a/addblog/images/icons/favicon.ico"/> -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/addblog/css/util.css">
  <link rel="stylesheet" type="text/css" href="a/addblog/css/main.css">
<!--===============================================================================================-->
</head>

<header>
      <?php include "header1.php";?>
</header>

<body>
  <div class="container-contact100" style="background-image: url('images/bg3.jpg');">

    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="Controller/replycontroller.php" method="POST">
        <span class="contact100-form-title">
          Client Queries
        </span>

        <?php
                $id=$_SESSION['id'];
               $stmt = $admin->ret("SELECT * FROM  `contact` where user_id='".$id."' ORDER BY con_id DESC ");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                ?>
        <!-- <div class="wrap-input100 validate-input" data-validate="Please enter your user id">
          <input class="input100" type="text" name="con_id" placeholder="Question..." value="<?php echo $row['message'];?>" readonly>
          <span class="focus-input100"></span>
        </div> -->

        <div class="wrap-input100 validate-input" data-validate = "Please enter your discription">
          <textarea class="input100" name="con_id" placeholder="Question..." readonly><?php echo $row['message'];?></textarea>
          <span class="focus-input100"></span>
        </div>
        

        <div class="wrap-input100 validate-input" data-validate = "Please enter your discription">
          <textarea class="input100" name="reply" placeholder="Reply..." readonly><?php echo $row['reply'];?></textarea>
          <span class="focus-input100"></span>
        </div>
        

        <div class="container-contact100-form-btn">
          <div class="contact100-form-btn">
              <!-- <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i> -->
              <td><a href="Controller/replydelete.php?con_id=<?php echo $row['con_id']; ?>" OnClick="return confirm('are you sure')">Clear</a></td>
              <!-- <input type="reset" name="reset" value="clear" class="contact100-form-btn"> --> 

          </div>
        </div>
        <?php }?>
        <br>
      </form>
    </div>
  </div>


  <!-- <div id="dropDownSelect1"></div> -->
  <footer>
  <?php include "footer.php";?>
</footer>

<!--===============================================================================================-->
  <script src="a/addblog/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="a/addblog/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="a/addblog/vendor/bootstrap/js/popper.js"></script>
  <script src="a/addblog/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="a/addblog/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="a/addblog/vendor/daterangepicker/moment.min.js"></script>
  <script src="a/addblog/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="a/addblog/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="a/addblog/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  // window.dataLayer = window.dataLayer || [];
  // function gtag(){dataLayer.push(arguments);}
  // gtag('js', new Date());

  // gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
