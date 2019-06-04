<?php
 include"connection.php"; 
 
            $checkbox=$_REQUEST['del_check'];
   
   
   		
			$count="select * from billingadd";
			$retval1=mysqli_query($con,$count);
			$num_rows = mysqli_num_rows($retval1);
				
   			
			for($i=0;$i<$num_rows;$i++)
   			{
   				$del_id = $checkbox[$i];
				$query="delete from billingadd where billadd_id='$del_id'";
				$retvall=mysqli_query($con,$query);
   			}
   			
   			    header('location:billingshow.php');
   			?>