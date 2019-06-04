<?php
session_start();
   
   include"connection.php"; 

   
if(isset($_SESSION['updvideo']))

$vid=$_SESSION['updvideo'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
	$pid=$_POST['multiple'];
	$url=$_POST['url'];
	
	

	 $query="update video set profile_id='$pid',url='$url' where id='$vid' ";

	 $retval=mysqli_query($con,$query);
	 header('location:videoshow.php');
	
	
	 }
}


?>