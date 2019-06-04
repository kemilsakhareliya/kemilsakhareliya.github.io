<?php
include"connection.php"; 


   $checkbox=$_REQUEST['del_check'];
   
   
					$count="select * from video";
					$retval1=mysqli_query($con,$count);
					$num_rows = mysqli_num_rows($retval1);
				
   			
			for($i=0;$i<$num_rows;$i++)
   			{
   				$del_id = $checkbox[$i];
   		
   			$query="delete from video where id='$del_id'";
   			
   			$retval=mysqli_query($con,$query);
   			
   			
   			}
   			
   			header('location:videoshow.php');
   			?>