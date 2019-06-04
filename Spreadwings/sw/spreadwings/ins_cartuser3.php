   <?php include"connection.php"; ?>

<?php
session_start();
include_once("config.php");

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
	
	
						
						$query1="select * from cart where uid='$usrid' and product_id=$jps";
						$retval1=mysqli_query($con,$query1);
						if($row1=mysqli_fetch_array($retval1))
						 {
						   $query2="update cart set qty=$cqty,total=$subtotal where product_id=$jps  and uid=$usrid";
							$retval2=mysqli_query($con,$query2);
						   echo $query2;
						 }
						 else
						 {
						   $query3="insert into cart(product_id,uid,qty,total)values('$jps','$usrid','$cqty','$subtotal')";
						$retval3=mysqli_query($con,$query3);
						   
						 }
	
	/*
	$con1=mysql_connect("localhost","root","");
	mysql_select_db("spreadwings");
	$query1="insert into cart(uid,product_id,qty,total)values('$usrid','$jps','$cqty','$subtotal')";
	$retval1=mysql_query($query1,$con1);
*/
	}
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}

 header('location:home.php'); 
?>