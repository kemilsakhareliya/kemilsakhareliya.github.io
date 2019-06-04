<?php

include"connection.php"; 


   $checkbox=$_REQUEST['del_check'];
   
   
   			
					$count="select * from onlinestore";
					$retval1=mysqli_query($con,$count);
					$num_rows = mysqli_num_rows($retval1);
				
   			
			for($i=0;$i<$num_rows;$i++)
   			{
   				$del_id = $checkbox[$i];
   		
   			$query="delete from onlinestore where online_id='$del_id'";
   			
   			$retval=mysqli_query($con,$query);
   			
   			
   			}
   			
   			header('location:onlinestoreshow.php');
   		?>