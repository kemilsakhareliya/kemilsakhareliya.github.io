 <?php
  include"connection.php"; 
 if(isset($_REQUEST['cancel']))
 {
 	 $canid=$_REQUEST['cancel'];
	 
 	
	 $query="update checkout set status='Cancel' where checkout_id=$canid";
	 $retval=mysqli_query($con,$query);
	
	
				
	
	
					$query1="select * from checkout_item where checkout_id=$canid";
					$retval1=mysqli_query($con,$query1);
					
					while($row=mysqli_fetch_array($retval1))
					{
						
					   $qty=$row['qty'];
					   $prod_id=$row['product_id'];
						
								
								$query3="select * from product where product_id=$prod_id";
								$retval3=mysqli_query($con,$query3);
					
									while($row3=mysqli_fetch_array($retval3))
									{
					                     $p_qunt=$row3['quant'];
									}
						
						
						
						         $upd=$p_qunt+$qty; 
								 $query2="update product set quant='$upd' where product_id=$prod_id";
								 $retval2=mysqli_query($con,$query2);
					
				
					}
	
	
	
	 echo $query;
	 header('location:checkoutshow.php');
}
?>