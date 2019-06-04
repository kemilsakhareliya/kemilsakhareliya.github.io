 <?php include"connection.php"; ?>
<?php
session_start();
if(isset($_SESSION['log']))
		{
		  
		  $usrid=$_SESSION['log'];
		 
	
		$query2="select * from billingadd where uid=$usrid";
		
			$retval2=mysqli_query($con,$query2);
	while($rows=mysqli_fetch_array($retval2))
		{
			
		    $usersid=$rows['uid'];	
			
			echo $usrid;
			echo $usersid; 
		}
		
	 if($usrid==$usersid)
		{
		 header('location:order_review2.php');
		}
		else
		{
		echo "dd";
			header('location:billingadd.php');
		}
		
	 }
?>
 






