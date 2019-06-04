<?php
    include"connection.php"; 
   
  if(isset($_POST['submit']))
  {
//	$que=$_POST['cname'];
//	$ans=$_POST['cinfo'];
	$cimg=$_FILES['cimg']['name'];
    $act=$_POST['isactive'];
	
		$que=mysqli_real_escape_string($con,$_POST['cname']);
		$ans=mysqli_real_escape_string($con,$_POST['cinfo']);
	
	move_uploaded_file( $_FILES['cimg']['tmp_name'],'images-category/'.$_FILES['cimg']['name']);
	
    
	$query="insert into category(category_name,category_info,img,is_active)values('$que','$ans','$cimg',$act)";
	$retval=mysqli_query($con,$query);
	
	header('location:categoryshow.php');
}
?>