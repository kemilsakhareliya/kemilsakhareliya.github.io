<?php
session_start();

include"connection.php"; 

?>


<?php
   
if(isset($_SESSION['updcategory']))

$catid=$_SESSION['updcategory'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
//	$mul=$_POST['cname'];
//	$nm=$_POST['cinfo'];
    $isa=$_POST['isactive'];
	
	$cimg=$_FILES['cimg']['name'];
	
	$catimg=$_POST['catimg'];
	 
	    $cname=mysqli_real_escape_string($con,$_POST['cname']);
		$cinfo=mysqli_real_escape_string($con,$_POST['cinfo']);
	
	
	
	 echo $cimg."fff";
	 echo $catimg;
	
	if($_FILES['cimg']['name']!="")
		{
		

			 move_uploaded_file( $_FILES['cimg']['tmp_name'],'images-category/'.$_FILES['cimg']['name']);
			
			 $query2= "select * from category where category_id='$catid'";
			 $retval2=mysqli_query($con,$query2);
			 while($row=mysqli_fetch_array($retval2))
				{
					 $img=$row['img'];
					 unlink("images-category/".$img);
					 //echo "<br>".$img."<br>";
				}
					
				
			 $query="update category set category_name='$cname',category_info='$cinfo',img='$cimg',is_active='$isa' where category_id='$catid' ";
			 $retval=mysqli_query($con,$query);

					
			
		}
		else
		{
		
						 $query="update category set category_name='$cname',category_info='$cinfo',img='$catimg',is_active='$isa' where category_id='$catid' ";
						 $retval=mysqli_query($con,$query);
		
		}
		header('location:categoryshow.php');  
	 }
}


?>