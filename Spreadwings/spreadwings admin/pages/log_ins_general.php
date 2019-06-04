<?php
   
    include"connection.php"; 
   
  if(isset($_POST['submit']))
  {
	$mul=$_POST['multiple'];
	$nm=$_POST['names'];
    $nmif=$_POST['nameinfo'];

	$query="insert into general(profile_id,field_name,field_name_info)values('$mul','$nm','$nmif')";
	$retval=mysqli_query($con,$query);
	

    header('location:generalshow.php');    
}
?>