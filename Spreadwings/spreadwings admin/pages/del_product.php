<?php

 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $pridd=$_REQUEST['del'];
	 $img=$_REQUEST['pimg'];
 

	$query="delete from product where product_id=$pridd";
	$retval=mysqli_query($con,$query);
	unlink("images-product/".$img);
	header('location:productshow.php');          
}

?>