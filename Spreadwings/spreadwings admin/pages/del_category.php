<?php

 include"connection.php"; 
 
if(isset($_REQUEST['del']))
{
	 $aj=$_REQUEST['del'];
	 $img=$_REQUEST['cimg'];

	$query="delete from category where category_id=$aj";
	$retval=mysqli_query($con,$query);
	unlink("images-category/".$img);
	header('location:categoryshow.php');          
}

?>