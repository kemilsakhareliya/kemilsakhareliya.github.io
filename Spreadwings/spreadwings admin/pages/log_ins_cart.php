<?php
    include"connection.php"; 
   
  if(isset($_POST['submit']))
  {
	$mul=$_POST['multiple'];
	$uid=$_POST['userid'];
	$nm=$_POST['qty'];
    $nmif=$_POST['tot'];
	
	$query="insert into cart(product_id,uid,qty,total)values('$mul','$uid','$nm','$nmif')";
	$retval=mysqli_query($con,$query);
	header('location:cartshow.php');
	
}
?>