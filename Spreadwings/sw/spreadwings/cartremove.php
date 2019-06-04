   <?php include"connection.php"; ?>

<?php
session_start();
?>
<?php

if(isset($_REQUEST['rm']))
{
   $crtid = $_REQUEST['rm'];
   
	
	

	$query="delete from cart where cart_id='$crtid'";
	$retval=mysqli_query($con,$query);
	header('location:cartt.php');
}
?>