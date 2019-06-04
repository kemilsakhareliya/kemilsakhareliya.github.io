<?php
 include"connection.php"; 

   $checkbox=$_REQUEST['del_check'];
   
   
   		
			$count="select * from img";
			$retval1=mysqli_query($con,$count);
			$num_rows = mysqli_num_rows($retval1);
				
   			
			for($i=0;$i<$num_rows;$i++)
   			{
				$del_id = $checkbox[$i];
					
				
				$multi= "select * from img where id='$del_id'";
				$retval2=mysqli_query($con,$multi);
				while($row=mysqli_fetch_array($retval2))
				{
	              $img=$row['fimg'];
				  $img1=$row['simg'];
				  unlink("images-profile_all/".$img);	
				  unlink("images-profile_all/".$img1);
				}
   			
			
			
				$query="delete from img where id='$del_id'";
				$retval=mysqli_query($con,$query);
   			
   			
   			}
   			
   			header('location:imageshow.php');
   			?>