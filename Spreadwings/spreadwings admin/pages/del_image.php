<?php

 include"connection.php"; 
 
if(isset($_REQUEST['del']))
{
	 $aj=$_REQUEST['del'];
	 $fimg=$_REQUEST['fimg'];
	 $simg=$_REQUEST['simg'];
 

	$query="delete from img where id=$aj";
	$retval=mysqli_query($con,$query);
	unlink("images-profile_all/".$fimg);
	unlink("images-profile_all/".$simg);
	header('location:imageshow.php');          
}

?>