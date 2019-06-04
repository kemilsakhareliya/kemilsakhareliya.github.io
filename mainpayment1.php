<?php include"header.php"; ?>
<?php

include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>

<body>

 
<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  
?>



<?php

if(isset($_POST['submit']))
{
  $paytype=$_POST['ptype'];
  $rms=$_POST['remarks'];
  $usid=$_POST['userid'];
  $shid=$_POST['shipid'];
  $bilid=$_POST['bilid'];
  $tota=$_POST['totalamt'];
  
  /*
        setcookie("usrid",$usid,time()+(60*60*60*24*30));
		setcookie("billid",$shid,time()+(60*60*60*24*30));
		setcookie("shippid",$bilid,time()+(60*60*60*24*30));
*/
?>
<div class="left_content" style="
    margin-left: 197px; width: 900px;
    background: #3c496b; height: 336px;  margin-top: 8px;
">
<div class="region region-content">

<h3 style="
    color: #3c496b;
">


<div class="left_content" style="
    margin-left: 1px; 
    width: 867px;
   
    background: darkgray;
">
<div class="region region-content">
 Thank you for your order!
 Your order has been placed and is being processed. When the item(s) are shipped, you will receive an email with the details.
 Rs  <?php echo $tota; ?> paid through <?php echo $paytype; ?>
</h2>
<!--------CHECHOUT INSERT---------->
 <?php
    $dt = date('Y/m/d', time());
	$edate = date('Y/m/d', time()+3600*60*2);
	

	$query="insert into checkout(uid,shipadd_id,billadd_id,order_date,order_deliver,totamt,paymenttype,status,remarks)values('$usid','$shid','$bilid','$dt','$edate','$tota','$paytype','Processing','$rms')";
	$retval=mysqli_query($con,$query);

	?>
<!--------CHECHOUT_ITEM INSERT---------->
<?PHP	


	$query1="select * from checkout where uid=$usid";
		$retval1=mysqli_query($con,$query1);
    while($row=mysqli_fetch_array($retval1))
	  {
		
		$chkid=$row['checkout_id'];	
      }
?>

<font color="blue">
<div >
<br><br>

<hr>
<h3><?php echo "ORDER ID: ".$chkid; ?></h3>  <br>  
<table name="dated" cellpadding="40">
<tr>
<td><p  style="color:black">Order Date:  </td>
<td><?php echo $dt;?></p></td>
</tr>
<tr>
<td><p style="color:black">Estimate Delivery Date:  </td>
<td><?php echo $edate;?></p></td>
</tr>
</table>
<hr>


<?php
if(isset($_SESSION["products"]))
  {
    $total = 0;
  //  echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
      //  echo '<li class="cart-itm">';
    //  echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
       
//		echo '<font color="red"><h3>'.$cart_itm["name"].'</h3></font>';
//        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
//        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
//        echo '<div class="p-price">Price :'.$cart_itm["price"].'</div>';
        $cqty=$cart_itm["qty"];
		$prc=$cart_itm["price"];
	
     	$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
//		echo '<div>Total :'.$subtotal.'</div>';
	    
		
		$jj=$cart_itm["code"];
	
		$query="select * from product where code='$jj'";
		$retval=mysqli_query($con,$query);
	
			while($row=mysqli_fetch_array($retval))
			{
				$jps=$row['product_id'];
				//echo $jps;
				$img=$row['product_img'];
//				echo "<img src='images-product/$img' height='40' width='40'>";
			    $quant=$row['quant'];
	
	//<-----------UPDATE QUANTITY FOR PRODUCT---------->
	
				        $quant_upd=$quant-$cqty;
						$query5="update product set quant=$quant_upd where product_id=$jps";
						$retval5=mysqli_query($con,$query5);
			           
			
			}
	
//	 echo "$jps  ";
//	 echo "$cqty  ";
//	 echo "$prc  ";
//	 echo "$subtotal  ";
		

	
	$query2="insert into checkout_item(checkout_id,product_id,qty,price)values('$chkid','$jps','$cqty','$prc')";
	$retval2=mysqli_query($con,$query2);

	
		
	}
     
  }

    $query3="delete from cart where uid=$usid";
	$retval3=mysqli_query($con,$query3);
	unset($_SESSION["products"]); 

	}

else
{
 
		  
		 header("location:onlinestore.php");
		 
}

?>
<br><br>
</div>
 
</font>
<a href="payment_behind.php">View Your Orders</a>
</body>
</html>
<?php include"footer.php"; ?>