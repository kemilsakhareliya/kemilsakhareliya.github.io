   <?php include"connection.php"; ?>

<?php
if(isset($_REQUEST['all']))
{
	 $aj=$_REQUEST['all'];

 
	$query="delete from cart where uid=$aj";
	$retval=mysqli_query($con,$query);
	
	
	$return_url = base64_decode($_GET["return_url"]); //return url
	header('Location:'.$return_url);           
}

?>