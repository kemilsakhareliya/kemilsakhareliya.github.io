   <?php include"connection.php"; ?>

<?php
session_start();
if(isset($_SESSION['log']))
		{
		  
		  $usrid=$_SESSION['log'];
		  echo $usrid;
		 


	$query2="select * from shippingadd where uid=$usrid";
		$retval2=mysqli_query($con,$query2);
		while($row=mysqli_fetch_array($retval2))
		{
			
			$chkid=$row['checkout_id'];	
	        $usersid=$row['uid'];	
		  
	
	    }
		
	 if($usrid==$usersid)
		{
		// header('location:order_review2.php');
		//if only enter shipping not enter billing than go for billing address
		header('location:bill_behind.php');
		}
	 else
		{
		header('location:shippingadd.php');
		}

  }
echo "ggg";
?>