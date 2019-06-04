<?php
session_start();

include"connection.php"; 

?>
<?php

if(isset($_POST['submit']))
{
	
	$email=$_POST['email'];
	$pass=$_POST['password'];
	echo "ff";
	

	$query="select * from  admin where email='$email' and password='$pass' "  ;
	
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	   
	   $_SESSION['log_admin']=$row['aid'];
	   $_SESSION['usernames']=$row['email'];
	   if($_POST['check'])
		{
		$unm=$row['email'];
		$ccps=$row['password'];
		setcookie("uname",$unm,time()+(60*60*60*24*30));
		setcookie("pass",$ccps,time()+(60*60*60*24*30));
		}
		else
		{
		setcookie("uname",$unm,false);
		setcookie("pass",$ccps,false);
		}
	}

	$rows = mysqli_num_rows($retval);
	 if (!$rows==0)
   	   {
	   
	   	 header('location:adminshow.php');

	    }
   	else
   	{
   	
	 header('location:login1.php?err= Wrong Username and Password');
   	}
	

}

?>