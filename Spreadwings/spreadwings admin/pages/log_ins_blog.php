<?php
    include"connection.php"; 
   
  if(isset($_POST['submit']))
  {
	$aut=$_POST['author'];
//	$tl=$_POST['title'];
//  $inf=$_POST['info'];
//  $allinfo=$_POST['allinfo'];
    $pimg=$_FILES['blogimg']['name'];
	$pdate=$_POST['pdate'];
		
		$tl=mysqli_real_escape_string($con,$_POST['title']);
		$inf=mysqli_real_escape_string($con,$_POST['info']);
		$allinfo=mysqli_real_escape_string($con,$_POST['allinfo']);
		
	move_uploaded_file( $_FILES['blogimg']['tmp_name'],'images-blog/'.$_FILES['blogimg']['name']);

	$query="insert into blog(author,title,info,allinfo,posted_date,blog_img)values('$aut','$tl','$inf','$allinfo','$pdate','$pimg')";
	$retval=mysqli_query($con,$query);
		
	header('location:blogshow.php');
}
?>