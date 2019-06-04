   <?php include"connection.php"; ?>

<?php
session_start();
 ?>
 <?php 
 if(isset($_POST['submit']))
  {
	
      
	      
	  
			$cid=$_POST['multiple'];
			$pn=$_POST['fname'];
			$bo=$_POST['lname'];
			$know=$_POST['add'];
			$nat=$_POST['state'];
			$yact=$_POST['city'];
			$occ=$_POST['pincode'];
			$gdr=$_POST['pno'];
			$htown=$_POST['email'];

	
			$query="insert into shippingadd(uid,fname,lname,address,city,state,pincode,pno,email)values('$cid','$pn','$bo','$know','$yact','$nat','$occ','$gdr','$htown')";
			$retval=mysqli_query($con,$query);
			
			if(isset($_POST['check']))
			{
			  
			  $_POST['check']=billid;
			  $shipcheck=$_POST['check'];
			  $_SESSION['shippingcheck']=$shipcheck;
			
			      
			}
			
			header('location:billingadd.php');
	  
	}

?>
