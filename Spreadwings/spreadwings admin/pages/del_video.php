<?php

 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $vi=$_REQUEST['del'];


	$query="delete from video where id=$vi";
	$retval=mysqli_query($con,$query);
	header('location:videoshow.php');          
}

?>