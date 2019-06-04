<?php
 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $aj=$_REQUEST['del'];

 
	$query="delete from cart where cart_id=$aj";
	$retval=mysqli_query($con,$query);
	header('location:cartshow.php');          
}

?>