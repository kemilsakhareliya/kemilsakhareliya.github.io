   <?php include"connection.php"; ?>

<?php
if(isset($_REQUEST['remove']))
{
	 $aj=$_REQUEST['remove'];

	$query="delete from cart where cart_id=$aj";
	$retval=mysqli_query($con,$query);
	
	
	$return_url = base64_decode($_GET["return_url"]); //return url
	header('Location:'.$return_url);         
}

?>