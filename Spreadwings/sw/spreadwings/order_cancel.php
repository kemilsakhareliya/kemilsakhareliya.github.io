<?php include"connection.php"; ?>
<?php
session_start();
if(isset($_REQUEST['check']))
{
	$ckid=$_REQUEST['check'];
	
	
	
	$query6="select * from checkout_item c,product p where citem_id=$ckid and c.product_id=p.product_id" ;
	$retval6=mysqli_query($con,$query6);
		while($row6=mysqli_fetch_array($retval6))
		{
	       $ckitmid=$row6['citem_id'];
		   $products_ids=$row6['product_id'];
		   $oldqty=$row6['qty'];
		   $p_qty=$row6['quant'];
		   
		   				$quant_upd=$p_qty+$oldqty;
						$query7="update product set quant=$quant_upd where product_id='$products_ids'";
					$retval7=mysqli_query($con,$query7);
		}
	    
	$query="select * from checkout_item where citem_id=$ckid";
		$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
		{
			
			$ciid=$row['citem_id'];
			$checkout_id=$row['checkout_id'];
			$prc=$row['price'];
			$qty=$row['qty'];
			$check_price=$prc*$qty;
		}
		
    
	$query2="select * from checkout where checkout_id=$checkout_id";
	$retval2=mysqli_query($con,$query2);
	while($row=mysqli_fetch_array($retval2))
	{
	    
		$totalamt=$row['totamt'];
	}
    if($totalamt==$check_price)
	{
			$query3="delete from checkout where checkout_id=$checkout_id";
	$retval3=mysqli_query($con,$query3);
	}
	else
	{
			$updamt=$totalamt-$check_price;
			$query4="update checkout set totamt='$updamt' where checkout_id=$checkout_id";
				$retval4=mysqli_query($con,$query4);
	}
	
	$query5="delete from checkout_item where citem_id=$ckid";
	$retval5=mysqli_query($con,$query5);
	
	
	header('location:order_list.php?o_cancel=canceled');
	
}

?>
