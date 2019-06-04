<?php
 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $bill=$_REQUEST['del'];

 

	$query="delete from billingadd where billadd_id=$bill";
	$retval=mysqli_query($con,$query);
	header('location:billingshow.php');          
}

?>