<?php
 include"connection.php"; 
 
if(isset($_REQUEST['del']))
{
	 $aj=$_REQUEST['del'];

 

	$query="delete from faq where id=$aj";
	$retval=mysqli_query($con,$query);
	header('location:faqshow.php');          
}

?>