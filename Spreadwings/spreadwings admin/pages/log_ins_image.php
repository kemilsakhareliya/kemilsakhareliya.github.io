<?php

 include"connection.php"; 
   
  if(isset($_POST['submit']))
  {
	$pid=$_POST['multiple'];
	$fimg=$_FILES['fimg']['name'];
	$simg=$_FILES['simg']['name'];
	$quote=mysqli_real_escape_string($con,$_POST['quote']);
    
	move_uploaded_file( $_FILES['fimg']['tmp_name'],'images-profile_all/'.$_FILES['fimg']['name']);
	move_uploaded_file( $_FILES['simg']['tmp_name'],'images-profile_all/'.$_FILES['simg']['name']);
	
   
	
	$query="insert into img(profile_id,fimg,simg,quote)values('$pid','$fimg','$simg','$quote')";
	$retval=mysqli_query($con,$query);
	
	header('location:imageshow.php');          

}
?>