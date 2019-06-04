   <?php include"connection.php"; ?>

<?php
   
  if(isset($_POST['submit']))
  {
	$fn=$_POST['first'];
	$mn=$_POST['middle'];
	$ln=$_POST['last'];
	$mail=$_POST['email'];
	$cps=$_POST['cpass'];
   

	$query="insert into user(first,middle,last,email,password,is_active)values('$fn','$mn','$ln','$mail','$cps','1')";
		$retval=mysqli_query($con,$query);
	
	header('location:login.php');
	
/*	
	session_start();
	$con1=mysql_connect("localhost","root","");
	mysql_select_db('collage');
	$query1="select * from  user "  ;
	
	$retval1=mysql_query($query1,$con1);
	while($row=mysql_fetch_array($retval1))
	{
	   echo $row['uid'];
	   $_SESSION['log']=$row['uid'];
	}
*/
	
	
}
?>