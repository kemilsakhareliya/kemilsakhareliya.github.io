<?php

 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $udel=$_REQUEST['del'];

 
	$query="delete from user where uid=$udel";
	$retval=mysqli_query($con,$query);
	header('location:usershow.php');          
}

?>