<?php

 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $oid=$_REQUEST['del'];

 

	$query="delete from onlinestore where online_id=$oid";
	$retval=mysqli_query($con,$query);
	header('location:onlinestoreshow.php');          
}

?>