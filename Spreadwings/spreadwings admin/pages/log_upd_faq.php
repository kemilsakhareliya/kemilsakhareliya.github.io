<?php
session_start();
   
   include"connection.php"; 
 

?>
<?php
   
if(isset($_SESSION['updfaq']))

$hid=$_SESSION['updfaq'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
//	$mul=$_POST['que'];
//	$ans=$_POST['ans'];
    $active=$_POST['act'];
	
		$mul=mysqli_real_escape_string($con,$_POST['que']);
		$ans=mysqli_real_escape_string($con,$_POST['ans']);
	
	
	 $query="update faq set que='$mul',ans='$ans',is_active='$active' where id='$hid' ";
	 $retval=mysqli_query($con,$query);
	 header('location:faqshow.php');
	
	
	 }
}


?>