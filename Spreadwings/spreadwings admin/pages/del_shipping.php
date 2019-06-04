<?php

 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	$shipp=$_REQUEST['del'];

 

	$query="delete from shippingadd where shipadd_id=$shipp";
	$retval=mysqli_query($con,$query);
	header('location:shippingshow.php');          
}

?>