<?php

 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $chid=$_REQUEST['del'];

 

	$query="delete from checkout where checkout_id=$chid";
	$retval=mysqli_query($con,$query);
	header('location:checkoutshow.php');          
}

?>