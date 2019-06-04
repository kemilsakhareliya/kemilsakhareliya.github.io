<?php
 include"connection.php"; 
if(isset($_REQUEST['del']))
{
	 $aj=$_REQUEST['del'];

 

	$query="delete from admin where aid=$aj";
	$retval=mysqli_query($con,$query);
	header('location:adminshow.php');          
}

?>