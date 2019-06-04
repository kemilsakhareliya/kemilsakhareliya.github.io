<?php
session_start();
include"connection.php"; 

?>
<?php
 
	 
if(isset($_SESSION['updprofile']))

$prid=$_SESSION['updprofile'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
    $cid=$_POST['multiple'];
//	$pn=$_POST['pname'];
//	$bo=$_POST['born'];
	$know=$_POST['known'];
//	$yact=$_POST['yactive'];
    $nat=$_POST['nationality'];
//	$occ=$_POST['occupation'];
	$gdr=$_POST['gender'];
	$pimg=$_FILES['pimg']['name'];
	$htown=$_POST['hometown'];
	
//	$oinfo=$_POST['otherinfo'];
	$isact=$_POST['isactive'];
	
	$ppimg=$_POST['ppimg'];
	
	
	    $pn=mysqli_real_escape_string($con,$_POST['pname']);
		$bo=mysqli_real_escape_string($con,$_POST['born']);
		$yact=mysqli_real_escape_string($con,$_POST['yactive']);
		$nat=mysqli_real_escape_string($con,$_POST['nationality']);
		$occ=mysqli_real_escape_string($con,$_POST['occupation']);
		$oinfo=mysqli_real_escape_string($con,$_POST['otherinfo']);
	
	echo $oinfo;
	
	
	if($_FILES['pimg']['name']!="")
    {
	 move_uploaded_file( $_FILES['pimg']['tmp_name'],'images-profile/'.$_FILES['pimg']['name']);

	
	 $query= "select * from profile where profile_id='$prid'";
	 $retval=mysqli_query($con,$query);
	 while($row=mysqli_fetch_array($retval))
		{
	         $img=$row['pimage'];
			// $img1=$row['signature_img'];
		     
			 unlink("images-profile/".$img);	
			// unlink("images-profile/".$img1);
	    }
	 
	 $query1="update profile set category_id='$cid',name='$pn',born='$bo',known='$know',years_active='$yact',nationality='$nat',occupation='$occ',gender='$gdr',pimage='$pimg',hometown='$htown',other_info='$oinfo',is_active='$isact' where profile_id='$prid' ";
	 $retval1=mysqli_query($con,$query1);
	}
	else
	{
	
     $query="update profile set category_id='$cid',name='$pn',born='$bo',known='$know',years_active='$yact',nationality='$nat',occupation='$occ',gender='$gdr',pimage='$ppimg',hometown='$htown',other_info='$oinfo',is_active='$isact' where profile_id='$prid' ";
	 $retval=mysqli_query($con,$query);
	}
	


	
  header('location:profileshow.php');
	 
	 
	 
	 }
	
}


?>