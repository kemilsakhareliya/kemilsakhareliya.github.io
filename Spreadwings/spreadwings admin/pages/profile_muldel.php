<?php

include"connection.php"; 

   $checkbox=$_REQUEST['del_check'];
   
   
 
			$count="select * from profile";
			$retval1=mysqli_query($con,$count);
			$num_rows = mysqli_num_rows($retval1);
				
   			
			for($i=0;$i<$num_rows;$i++)
   			{
   				$del_id = $checkbox[$i];
   		
				$multi= "select * from profile where profile_id='$del_id'";
				$retval2=mysqli_query($con,$multi);
				while($row=mysqli_fetch_array($retval2))
				{
	              $img=$row['pimage'];
				 
				  unlink("images-profile/".$img);	
				  
				}
		
				$query="delete from profile where profile_id='$del_id'";
				$retval=mysqli_query($con,$query);
   			
   			
   			}
   			
   			header('location:profileshow.php');
   			?>