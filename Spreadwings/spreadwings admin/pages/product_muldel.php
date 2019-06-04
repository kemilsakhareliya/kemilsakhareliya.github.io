<?php

include"connection.php"; 


   $checkbox=$_REQUEST['del_check'];
   
   
   		
			$count="select * from product";
			$retval1=mysqli_query($con,$count);
			$num_rows = mysqli_num_rows($retval1);
				
   			
			for($i=0;$i<$num_rows;$i++)
   			{
   				$del_id = $checkbox[$i];
				
				$multi= "select * from product where product_id='$del_id'";
				$retval2=mysqli_query($con,$multi);
				while($row=mysqli_fetch_array($retval2))
				{
	              $img=$row['product_img'];
				  unlink("images-product/".$img);	
				}
		
				
				
				
				$query="delete from product where product_id='$del_id'";
				$retval=mysqli_query($con,$query);
   			}
   			
   			    header('location:productshow.php');
   			?>