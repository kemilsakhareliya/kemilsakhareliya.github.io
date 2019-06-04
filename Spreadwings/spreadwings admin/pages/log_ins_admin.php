<?php  include"connection.php";  ?>
<?php
  
  if(isset($_POST['submit']))
  {
  
	$fn=$_POST['first'];
	$mn=$_POST['middle'];
	$ln=$_POST['last'];
	$mails=$_POST['email'];
	$cps=$_POST['cpass'];
   



    $query="insert into admin(first,middle,last,email,password)values('$fn','$mn','$ln','$mails','$cps')";
	$retval=mysqli_query($con,$query);
	header('location:adminshow.php');
	echo "insert suceessfully";
}
?>
