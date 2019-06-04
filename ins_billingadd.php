   <?php include"connection.php"; ?>

<?php
  session_start();
 
 if(isset($_POST['submit']))
  {
	$cid=$_POST['multiple'];
	$pn=$_POST['fname'];
	$bo=$_POST['lname'];
	$know=$_POST['add'];
	$yact=$_POST['city'];
    $nat=$_POST['state'];
	$occ=$_POST['pincode'];
	$gdr=$_POST['pno'];
	$htown=$_POST['email'];

	
	
 
	$query="insert into billingadd(uid,fname,lname,address,city,state,pincode,pno,email)values('$cid','$pn','$bo','$know','$yact','$nat','$occ','$gdr','$htown')";
	$retval=mysqli_query($con,$query);
	
	unset($_SESSION["shippingcheck"]);
	
	if(isset($_SESSION['log']))
		{
		  header('location:order_review2.php');
		}
	else
		{
	
			header('location:order_review.php');
		}
	
	}
?>	