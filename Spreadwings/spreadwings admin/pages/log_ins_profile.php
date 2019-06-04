<?php
    include"connection.php"; 

   
  if(isset($_POST['submit']))
  {
	$cid=$_POST['multiple'];
//	$pn=$_POST['pname'];
//	$bo=$_POST['born'];
	$know=$_POST['known'];
//	$yact=$_POST['yactive'];
//  $nat=$_POST['nationality'];
//	$occ=$_POST['occupation'];
	$gdr=$_POST['gender'];
	$pimg=$_FILES['pimg']['name'];
	$htown=$_POST['hometown'];

//	$oinfo=$_POST['otherinfo'];
	//$upd=$_POST['updated'];
	$iact=$_POST['isactive'];
	
		$pn=mysqli_real_escape_string($con,$_POST['pname']);
		$bo=mysqli_real_escape_string($con,$_POST['born']);
		$yact=mysqli_real_escape_string($con,$_POST['yactive']);
		$nat=mysqli_real_escape_string($con,$_POST['nationality']);
		$occ=mysqli_real_escape_string($con,$_POST['occupation']);
		$oinfo=mysqli_real_escape_string($con,$_POST['otherinfo']);
	
	move_uploaded_file( $_FILES['pimg']['tmp_name'],'images-profile/'.$_FILES['pimg']['name']);
	
   
	$query="insert into profile(category_id,name,born,known,years_active,nationality,occupation,gender,pimage,hometown,other_info,is_active)values('$cid','$pn','$bo','$know','$yact','$nat','$occ','$gdr','$pimg','$htown','$oinfo','$iact')";
	$retval=mysqli_query($con,$query);
	header('location:profileshow.php');
	}
?>	