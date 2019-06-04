<?php
 include"header.php"; 
if(isset($_SESSION['log']))
{

    $i=$_SESSION['log'];
}	

 
 ?>
 <html>

<body>
<br>
<script type="text/javascript">
window.onload = function () {
    document.getElementById("pass").onchange = validatePassword;
    document.getElementById("cpass").onchange = validatePassword;
}
function validatePassword(){
var cpass=document.getElementById("cpass").value;
var pass=document.getElementById("pass").value;
if(pass!=cpass)
    document.getElementById("cpass").setCustomValidity("Passwords Don't Match");
else
    document.getElementById("cpass").setCustomValidity('');  
//empty string means no validation error
}
</script>

<?php


	$query="select * from user where uid='$i'";
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	
?>

<div class="left_content" style="
    margin-left: 197px; width: 900px;
">
<div class="region region-content">
<center><h1 style="
    color: #3c496b;
">Account Info!
</h1></center>
<br>
<br>

<form name="f1" action="updmyinfo.php" method="post">
<h3 style="
    color: #3c496b;
">First
</h3>
<input type="text" name="first" required pattern="[A-Za-z]*" title="please enter First name" value="<?php echo $row['first']  ?>">
<br>
<br>
<h3 style="
    color: #3c496b;
">Middle

</h3>

<input type="text" name="middle" required pattern="[A-Za-z]*" value="<?php echo $row['middle']  ?>">
<br>
<br>
<h3 style="
    color: #3c496b;
">Last


</h3>
<input type="text" name="last" required pattern="[A-Za-z]*" value="<?php echo $row['last']  ?>">
<br>
<br>
<h3 style="
    color: #3c496b;
">Email
</h3>

<input type="email" name="email" required value="<?php echo $row['email']  ?>"> 
<br>
<br>
<h3 style="
    color: #3c496b;
">Password

</h3>


<input type="password" id="pass" name="pass" required pattern=".{6,}" title="Six or more characters" value="<?php echo $row['password']  ?>"> 
<br>
<br>

<h3 style="
    color: #3c496b;
">confirm Password
</h3>
<input type="password" id="cpass" name="cpass" required pattern=".{6,}" title="Six or more characters" value="<?php echo $row['password']  ?>">
<br>
<br>


<input type="submit" value="UPDATE OR SAVE" name="submit"  style="
    margin-right: 350px;
    width: 190px;
	  height: 37px;
">
<br>
<br>

</form>
</div>
</div>

</body>
</html>

<?php 

	}

 ?>
<?php include"footer.php"; ?>


