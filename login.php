<?php include"header.php"; ?>

<?php




		  
		
if(isset($_SESSION['log']) && (isset($_SESSION["products"])) && (isset($_SESSION['cartii'])))
	{
			include("ins_cartuser.php");
			unset($_SESSION["cartii"]);
		//	header('location:shippingadd.php');
		}   
		
else if(isset($_SESSION['log']))
		{
		  header('location:home.php'); 		
        }
		
else
{
?>

<html>
<body>
<div class="left_content" style="
    margin-left: 197px; width: 900px;
">
<div class="region region-content">
<center><h1 style="
    color: #3c496b;
">Welcome</h1></center>

<br>

<form name="log" method="post" action="logic_login.php">
Username
<input type="text" name="uname" required title="PLEASE ENTER USERNAME" value="
<?php 
 if(isset($_COOKIE['uname']))
{
echo $_COOKIE['uname'];
}
 ?>
">
<br><br>
Password
<input type="password" name="pass" required title="PLEASE ENTER PASSWORD" value="
<?php 
 if(isset($_COOKIE['pass']))
{
echo $_COOKIE['pass'];
}
 ?>
">
<br><br>

<?php
if(isset($_COOKIE['uname']))
{
?>
<input type="checkbox" name="check" checked>Remember Me
<br><br>

<?php
}
else
{
?>
<input type="checkbox" name="check">Remember Me
<br><br>
<?php
}
?>
<a href="forget_password.php">Forget password</a>
<br>
<input type="submit" name="submit" value="Log In" style="
    margin-right: 365px;
    width: 125px;
	  height: 37px;
">


</form>

<br>
<br>
<br>

<a href="register.php">Create Account </a>

<h2><font color="red">


<?php
if(isset($_REQUEST['err']))
{
 echo $_REQUEST['err'];
}
?>
</font></h2>
</div>
</div>
</body>
</html>

<?php  } ?>
<br>
<br>
<br>

<?php include"footer.php"; ?>