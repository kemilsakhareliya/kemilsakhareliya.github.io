   <?php include"connection.php"; ?>

<?php
session_start();



if(isset($_SESSION['log']))
		{
		  
		  $usrid=$_SESSION['log'];
		  echo $usrid;
		 

		if(isset($_POST['submit'])) 
		 {
		  $proid=$_POST['product_id'];
		  $prc=$_POST['price'];
		  $qunty=$_POST['product_qty'];
		  echo "<br>id:".$proid;
		  echo "<br>prc:".$prc;
		  echo "<br>qunty:".$qunty;
		  $tot=$prc*$qunty;
		  echo "<br>total:".$tot;

		
	 
						
						$query="select * from cart where uid='$usrid' and product_id=$proid";
						$retval=mysqli_query($con,$query);

	
						 if($row=mysqli_fetch_array($retval))
						 {
						
						   
						   $query1="update cart set qty=$qunty,total=$tot where product_id=$proid  and uid=$usrid";
					$retval1=mysqli_query($con,$query1);
						   echo $query1;
						 }
						 else
						 {
						 $query2="insert into cart(product_id,uid,qty,total)values('$proid','$usrid','$qunty','$tot')";
							$retval2=mysqli_query($con,$query2);
						 
						 }
					    $return_url 	= base64_decode($_POST["return_url"]); //return url
						header('Location:'.$return_url);
	
	
	      }

   }
   else
   {
   header("location:onlinestore.php");
    }
   
	
	
?>


