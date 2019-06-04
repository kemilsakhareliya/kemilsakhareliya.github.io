<?php
session_start();
   
   include"connection.php"; 
 

?>
<?php
   
if(isset($_SESSION['usr_id']))

$hid=$_SESSION['usr_id'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
/*	$fn=$_POST['first'];
	$mn=$_POST['middle'];
	$ln=$_POST['last'];
	$em=$_POST['email'];
	$ct=$_POST['cpass']; */
	$isactive=$_POST['is_active'];
	 
	 

	 $query="update user set is_active='$isactive' where uid='$hid' ";

	$retval=mysqli_query($con,$query);
	 header('location:usershow.php');
	
	
	 }
}


?>