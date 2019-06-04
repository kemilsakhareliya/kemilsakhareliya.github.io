<?php
session_start();
include"connection.php"; 

?>
<?php
   
if(isset($_SESSION['updimage']))

$hid=$_SESSION['updimage'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
	$mul=$_POST['multiple'];
	$fimg=$_FILES['fimg']['name'];
	$simg=$_FILES['simg']['name'];
	
	$ffimg=$_POST['ffimg'];
	$ssimg=$_POST['ssimg'];
	
	$quote=mysqli_real_escape_string($con,$_POST['quote']);
	
	
	
	
	if($_FILES['fimg']['name']!="")
    {
	 move_uploaded_file( $_FILES['fimg']['tmp_name'],'images-profile_all/'.$_FILES['fimg']['name']);

	
	 $query= "select * from img where id='$hid'";
	 $retval=mysqli_query($con,$query);
	 while($row=mysqli_fetch_array($retval))
		{
	         $img=$row['fimg'];
			// $img1=$row['signature_img'];
		     
			 unlink("images-profile_all/".$img);	
			// unlink("images-profile/".$img1);
	    }
	 
	 $query1="update img set profile_id='$mul',fimg='$fimg',quote='$quote' where id='$hid' ";
	 $retval1=mysqli_query($con,$query1);
	}
	else
	{
	
     $query="update img set profile_id='$mul',fimg='$ffimg',quote='$quote' where id='$hid' ";
	 $retval=mysqli_query($con,$query);
	}
	
	
	if($_FILES['simg']['name']!="")
    {
	move_uploaded_file( $_FILES['simg']['tmp_name'],'images-profile_all/'.$_FILES['simg']['name']);
	

	 $query2= "select * from img where id='$hid'";
	 $retval2=mysqli_query($con,$query2);
	 while($row=mysqli_fetch_array($retval2))
		{
	       //  $img=$row['pimage'];
			 $img1=$row['simg'];
		     
			// unlink("images-profile/".$img);	
			 unlink("images-profile_all/".$img1);
	    }
	 
	 $query4="update img set profile_id='$mul',simg='$simg',quote='$quote' where id='$hid' ";
	 $retval4=mysqli_query($con,$query4);

	}
	else
	{
		 
		 $query3="update img set profile_id='$mul',simg='$ssimg',quote='$quote' where id='$hid' ";
		 $retval3=mysqli_query($con,$query3);
	     //echo $query3;	 
	}
	
	
	
	 header('location:imageshow.php');
	
	
	 }
}


?>