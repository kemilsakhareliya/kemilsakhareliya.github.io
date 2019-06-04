   <?php include"connection.php"; ?>

<?php
session_start();
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

if(isset($_SESSION['log']))
		{
		  
		  $usrid=$_SESSION['log'];
		  echo $usrid;
		 } 
?>


<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php

if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$cart_itm["price"].'</div>';
        $cqty=$cart_itm["qty"];
	
    
     	$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
		echo '<div>Total :'.$subtotal.'</div>';
	
    
	
    $jj=$cart_itm["code"];

	$query="select * from product where code='$jj'";
		$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
	   $jps=$row['product_id'];
	   //echo $jps;
    }
	
	 echo "$jps  ";
	 echo "$cqty  ";
	 echo "$subtotal  ";
	 echo '</li>';
	

	$query1="insert into cart(uid,product_id,qty,total)values('$usrid','$jps','$cqty','$subtotal')";
	$retval1=mysqli_query($con,$query1);
	}
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}
else
{
    echo 'Your Cart is empty';
}



			

    
	$query2="select * from shippingadd where uid=$usrid";
	$retval2=mysqli_query($con,$query2);
		while($row=mysqli_fetch_array($retval2))
		{
			
			$chkid=$row['checkout_id'];	
	        $usersid=$row['uid'];	
		  
	
	    }
		
	 if($usrid==$usersid)
		{
		 header('location:order_review.php');
		}
	 else
		{
		header('location:shippingadd.php');
		}



?>

</div>
 
</div>

</body>
</html>