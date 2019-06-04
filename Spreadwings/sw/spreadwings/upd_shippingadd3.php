   <?php include"connection.php"; ?>
<?php

session_start();
if(isset($_POST['submit']))
  {
	$usid=$_POST['usrid'];
	
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$add=$_POST['add'];
	$cty=$_POST['city'];
    $stat=$_POST['state'];
	$pcode=$_POST['pincode'];
	$pno=$_POST['pno'];
	$email=$_POST['email'];
	
	
	echo $usid;
	

	$query="update shippingadd set fname='$fn',lname='$ln',address='$add',city='$cty',state='$stat',pincode='$pcode',pno='$pno',email='$email' where uid=$usid";
	$retval=mysqli_query($con,$query);
	
	header("location:changeaddress.php");
  
  
  }
  	
?>