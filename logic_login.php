<?php include"connection.php"; ?>

<?php
session_start();
?>
<?php

if(isset($_POST['submit']))
{
	
	$un=$_POST['uname'];
	$ps=$_POST['pass'];
	
	

	

	$query="select * from  user where first='$un' and password='$ps'  and is_active=1 "  ;
	
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	   
	   $_SESSION['log']=$row['uid'];
	   $_SESSION['username']=$row['first'];
	   
	   
	   if($_POST['check'])
		{
		$unm=$row['first'];
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
		 if(isset($_SESSION["products"])&& (isset($_SESSION['cartii'])))
			{
				header('location:ins_cartuser.php');
			     unset($_SESSION["cartii"]);
     			//header('location:shippingadd.php');
		    }
			else
			{
			    //if user want to login then product insert or updated form session   and go for home  
			     header('location:ins_cartuser3.php'); 
				//header('location:home.php');
	        }
	
	    }
   	else
   	{
				$query2="select * from  user where first='$un' and password='$ps' and is_active=0 "  ;
				$retval2=mysqli_query($con,$query2);
						
				if(!$row = mysqli_num_rows($retval2)==0)
				{
					header('location:login.php?err=Blocked by Admin');
				}
				else
				{
				 header('location:login.php?err= wrong username and password');
				 }
   	}
	

}

?>