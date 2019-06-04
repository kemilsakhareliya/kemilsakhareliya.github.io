<?php
   
   include"connection.php"; 
 
 
  if(isset($_POST['submit']))
  {
	$pid=$_POST['multiple'];
	//$url=$_POST['url'];
   
   $url=mysqli_real_escape_string($con,$_POST['url']);
	
	$query="insert into video(profile_id,url)values('$pid','$url')";
	$retval=mysqli_query($con,$query);
	
	header('location:videoshow.php');
}
?>