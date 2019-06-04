<?php
session_start();

include"connection.php"; 

?>

<?php

 
   
if(isset($_SESSION['updcart']))

$hid=$_SESSION['updcart'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
	
	$usrid=$_POST['userid'];
	$mul=$_POST['multiple'];
	$qty=$_POST['qty'];
    $total=$_POST['tot'];
	

	 $query="update cart set uid='$usrid',product_id='$mul',qty='$qty',total='$total' where cart_id='$hid' ";

	$retval=mysqli_query($con,$query);
	header('location:cartshow.php');
	
	echo $query;
	 }
}


?>