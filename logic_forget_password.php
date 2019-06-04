
   <?php include"connection.php"; ?>
<?php
session_start();
?>
<?php

if(isset($_POST['submit']))
{
	
	$email=$_POST['email'];
	
	setcookie("email",$email);

	$query="select * from  user where email='$email'" ;
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
	   
	   $database_mail=$row['email'];
	   $password=$row['password'];
		
		$message_body="your password is: ".$password;
	// echo "your password is: ".$password;
 
	 
		$to = "jatin_kaklotar_mscit@yahoo.com";
		$subject = "password";
		$txt = $message_body;
		$headers = "From: dummykonakart@gmail.com" . "\r\n";

		mail($to,$subject,$txt,$headers);

	 
	 
	   header('location:forget_password.php?sucess=E-mail has been sent to your id');
	
	
	}
	$rows = mysqli_num_rows($retval);
	if ($rows=mysqli_num_rows($retval))
    {
	
	}
   	else
   	{
   	
	 header('location:forget_password.php?err=Wrong Email');
   	}
	

}

?>