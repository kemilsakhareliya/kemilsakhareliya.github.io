<?php include"header.php"; ?>

<form name="log" method="post" action="logic_forget_password.php">
Enter your E-mail
<input type="email" name="email" required  value="
<?php 
 if(isset($_COOKIE['email']))
{
echo $_COOKIE['email'];
}
 ?>
">

<br>
<h2><font color="red">

<?php
if(isset($_REQUEST['err']))
{
 echo $_REQUEST['err'];
}
?>
</font></h2>
<br>
<h2><font color="blue">
<?php
if(isset($_REQUEST['sucess']))
{
echo $_REQUEST['sucess'];
?>
 <script>

 alert("sucessfully sent your password to your mail ");
 </script>
<?php
}
?>
</font></h2>
<br><br>
<input type="submit" name="submit" value="submit">
<br><br>
</form>




<?php include"footer.php"; ?>