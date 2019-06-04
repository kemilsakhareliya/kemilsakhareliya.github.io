
<?php
   

include"connection.php"; 


   
  if(isset($_POST['submit']))
  {
	$fn=$_POST['first'];
	$mn=$_POST['middle'];
	$ln=$_POST['last'];
	$mail=$_POST['email'];
	$cps=$_POST['cpass'];
    $isa=$_POST['is_active'];



	$query="insert into user(first,middle,last,email,password,is_active)values('$fn','$mn','$ln','$mail','$cps','$isa')";
	$retval=mysqli_query($con,$query);
	
	header('location:usershow.php');
	

	
	
}
?>