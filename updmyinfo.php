   <?php include"connection.php"; ?>

<?php
session_start();
?>
<?php
   

$i=$_SESSION['log'];


                 	
   if(isset($_POST['submit']))
  	{
	
	$aut=$_POST['first'];
	$tl=$_POST['middle'];
    $inf=$_POST['last'];
	$pimg=$_POST['email'];
	$gf=$_POST['cpass'];


 $query="update user set first='$aut',middle='$tl',last='$inf',email='$pimg',password='$gf' where uid='$i' ";
	$retval=mysqli_query($con,$query);
	header('location:myaccount.php');  
	
	
	 } 



?>