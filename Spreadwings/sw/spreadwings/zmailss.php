<?php include"connection.php"; ?>

<?php
	
	
		$query9="select * from product where product_id=8";
		$retval9=mysqli_query($con,$query9);
	
			while($row9=mysqli_fetch_array($retval9))
					{
					$prod_idd=$row9['product_id'];
					$online_idd=$row9['online_id'];
					
				


				$d=$row9['updated'];

				$date = date_create($d);
				date_modify($date, '-1 days');
				echo  $prday =date_format($date, 'Y-m-d');
					echo "<br>";
				echo  $curdate=date("Y-m-d");				
					
					
					   $cnt=0;
					if($prday==$curdate)
					{
					echo "yessss";
					
					date_modify($date, '+2 days');
					
					echo  $prday =date_format($date, 'Y-m-d');
					  
					}
					else
					{
					 echo "no";
					} 
					
		/*			
					
   echo "<br><br>";
					$dy=mktime(9, 2, 54);
					echo "<br>";
					echo   $ab=date("h:i:sa", $dy);
					echo "<br>";
				
				     echo $ac=date("h:i:sa");
					   echo "<br><br>";
								if($ab>=$ac)
								{
								echo "yesssssss";
								}
								else
								
								{
								echo "noooo";
								}
					
		*/			
					echo "<br>";
					
				//	echo  date("Y-m-d h:i:sa", $dy);
					echo "<br>";
				// current date and time
				//   echo date("Y-m-d h:i:sa");
			echo "<br>";
				
				
				// current date 
		   
				}	
				

		
/*		$to = "jatin_kaklotar_mscit@yahoo.com";
		$subject = $sub;
		$txt = $message_body;
		$headers = "From:".$emails. "\r\n";

	//	mail($to,$subject,$txt,$headers);
*/

		//header('location:contactus.php?yes=suceessfully sent mail');





?>