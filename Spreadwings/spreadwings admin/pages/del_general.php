<?php
if(isset($_REQUEST['del']))
{
	 $aj=$_REQUEST['del'];

 
	$con=mysql_connect("localhost","root","");
	mysql_select_db("spreadwings");
	$query="delete from general where id=$aj";
	$retval=mysqli_query($con,$query);
	header('location:generalshow.php');          
}

?>