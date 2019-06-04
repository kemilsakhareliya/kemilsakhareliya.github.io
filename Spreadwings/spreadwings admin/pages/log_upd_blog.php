<?php
session_start();

include"connection.php"; 

?>
<?php

if(isset($_SESSION['updblog']))

$bid=$_SESSION['updblog'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
	$aut=$_POST['author'];
//	$tl=$_POST['title'];
//   $inf=$_POST['info'];
//  $allinfo=$_POST['allinfo'];
    $bimg=$_FILES['blogimg']['name'];
	$bbimg=$_POST['bblogimg'];
	$pdate=$_POST['pdate'];
	
		$tl=mysqli_real_escape_string($con,$_POST['title']);
		$inf=mysqli_real_escape_string($con,$_POST['info']);
		$allinfo=mysqli_real_escape_string($con,$_POST['allinfo']);
	
	if($_FILES['blogimg']['name']!="")
		{
			 
			 move_uploaded_file( $_FILES['blogimg']['tmp_name'],'images-blog/'.$_FILES['blogimg']['name']);
			 
		
			 $query2= "select * from blog where blog_id='$bid'";
			 $retval2=mysqli_query($con,$query2);
			 while($row=mysqli_fetch_array($retval2))
				{
					 $img=$row['blog_img'];
					 unlink("images-blog/".$img);	
				}
			 
			
			 $query="update blog set author='$aut',title='$tl',info='$inf',allinfo='$allinfo',posted_date='$pdate',blog_img='$bimg' where blog_id='$bid' ";
			 $retval=mysqli_query($con,$query);
			
		}
	else
		{
		
			 $query="update blog set author='$aut',title='$tl',info='$inf',allinfo='$allinfo',posted_date='$pdate',blog_img='$bbimg' where blog_id='$bid' ";
			 $retval=mysqli_query($con,$query);
		}		
			
	 header('location:blogshow.php');
	
	
	 }
}


?>