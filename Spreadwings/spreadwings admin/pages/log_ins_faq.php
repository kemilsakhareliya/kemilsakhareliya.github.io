<?php
   
    include"connection.php"; 
   
  if(isset($_POST['submit']))
  {
	//$qu=$_POST['que'];
	//$ans=$_POST['ans'];
    $act=$_POST['act'];
	
		$qu=mysqli_real_escape_string($con,$_POST['que']);
		$ans=mysqli_real_escape_string($con,$_POST['ans']);
	
	$query="insert into faq(que,ans,is_active)values('$qu','$ans','$act')";
	$retval=mysqli_query($con,$query);
	
	header('location:faqshow.php');
}
?>