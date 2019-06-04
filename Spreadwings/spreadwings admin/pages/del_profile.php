<?php

 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $proi=$_REQUEST['del'];
	 $pimg=$_REQUEST['proimg'];

 

	$query="delete from profile where profile_id=$proi";
	$retval=mysqli_query($con,$query);
	unlink("images-profile/".$pimg);
	
	header('location:profileshow.php');          
}

?>