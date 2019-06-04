<?php
 include"connection.php"; 
   $checkbox=$_REQUEST['del_check'];
   
   
   			
					$count="select * from admin";
					$retval=mysqli_query($con,$count);
					$num_rows=mysqli_num_rows($retval);
				
   			
			for($i=0;$i<$num_rows;$i++)
   			{
   				$del_id=$checkbox[$i];
   		
				$query="delete from admin where aid='$del_id'";
				$retval=mysqli_query($con,$query);
   			
   			
   			}
   			
   			header('location:adminshow.php');
   		?>