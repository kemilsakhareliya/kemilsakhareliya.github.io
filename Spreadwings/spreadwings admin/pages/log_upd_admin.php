<?php
session_start();
   
   include"connection.php"; 
 

?>
<?php
      


if(isset($_SESSION['upd']))

$hid=$_SESSION['upd'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
	$fn=$_POST['first'];
	$ln=$_POST['middle'];
	$adr=$_POST['last'];
	$mails=$_POST['email'];
	$ct=$_POST['cpass'];
	
	 echo $_SESSION['upd'];

	 $query="update admin set first='$fn',middle='$ln',last='$adr',email='$mails',password='$ct' where aid='$hid' ";

	 $retval=mysqli_query($con,$query);
	 header('location:adminshow.php');
	
	
	 }
}


?>