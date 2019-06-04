<?php
 include"connection.php"; 

if(isset($_REQUEST['del']))
{
	 $aj=$_REQUEST['del'];
     $img=$_REQUEST['bimg'];
 

	$query="delete from blog where blog_id=$aj";
	$retval=mysqli_query($con,$query);
	unlink("images-blog/".$img);
	header('location:blogshow.php');          
}

?>