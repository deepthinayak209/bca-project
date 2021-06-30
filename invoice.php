<?php
define('DIR', '');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();
if(!isset($_SESSION['user']))
{
    header('Location:userlogin.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Sovereign</title>
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo.jpg">
	
	<link rel='stylesheet' type='text/css' href='a/invoice/css/style.css' />
	<link rel='stylesheet' type='text/css' href='a/invoice/css/print.css' media="print" />
	<script type='text/javascript' src='a/invoice/js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='a/invoice/js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header" readonly>INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address" readonly>Sulthan Battery Road, Boloor, Mangalore-575003   (Near Church Gate)

Phone: +0824-245-7086</textarea>

            <div id="logo">

              <div id="logoctr">
                <!-- <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a> -->
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.jpg" style="height: 100px; width: 150px;" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title" readonly>Sovereign Tile Works, Mangalore</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Client</td>
                    <td><textarea readonly><?php echo $_SESSION['user'];?></textarea></td>
                </tr>

                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" readonly><?php echo date("d/m/Y");?></textarea></td>
                </tr>
<!--                 value="<?php echo date("d/m/Y");?>"
 -->                <!-- <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr> -->

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  <?php
		  		$num=0;
		  		$id=$_SESSION['id'];
		  		$date1=date('d-m-Y');
                $stmt = $admin->ret("SELECT * FROM `booking` inner join `product` inner join `payment` on `payment`.booking_id=`booking`.booking_id and `product`.product_id=`booking`.product_id where user_id='".$id."' and date1='".$date1."'");
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                	$num=$num+$row['amount'];
                ?>
                   
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr" readonly><textarea><?php echo $row['pro_name'];?></textarea></div></td>
		      
		      <td class="description" readonly><textarea><?php echo $row['description'];?></textarea></td>
		      <td><textarea class="cost" readonly><?php echo $row['price'];?></textarea></td>
		      <td><textarea class="qty" readonly><?php echo $row['pieces'];?></textarea></td>
		      <td><span class="price" readonly><?php echo $row['amount']?></span></td>
		  </tr>
		  <?php }?>
		  
		 <!--  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea class="cost">$75.00</textarea></td>
		      <td><textarea class="qty">3</textarea></td>
		      <td><span class="price">$225.00</span></td>
		  </tr> -->
		  
		  <!-- <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr> -->
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line"><b>Grand total</b></td>
		      <td class="total-value"><div id="subtotal"><?php echo $row['amount']?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total"><?php echo $num;?></div></td>
		  </tr>
		  <!-- <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr> -->
		
		</table>
		
		<!-- <div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div> -->
	<!-- 	<div class="container-contact100-form-btn"> -->
    <a href="thankyou.php">
   <!--  <div class="contact100-form-btn"> -->
     <center><h2>done</h2></center>
     
     <!--  </div> -->
      </a>
    <!-- </div> -->
	
	</div>
	
</body>

</html>