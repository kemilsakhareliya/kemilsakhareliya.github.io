<?php include"header.php"; ?><html>
<head>
 
<head>
<body>

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
<div class="left_content" style="
    margin-left: 197px; width: 900px;
">
<div class="region region-content">
<center><h1 style="
    color: #3c496b;
">Registration</h1></center>

<br>

<form name="f1" action="log_insert.php" method="post">
First
<input type="text" name="first" required pattern="[A-Za-z]*" title="please enter First name">
<br>
<br>
Middle
<input type="text" name="middle" required pattern="[A-Za-z]*">
<br>
<br>
Last
<input type="text" name="last" required pattern="[A-Za-z]*">
<br>
<br>

Email
<input type="email" name="email" required>
<br>
<br>

Password
<input type="password" id="pass" name="pass" required pattern=".{6,}" title="Six or more characters">
<br>
<br>

confirm Password
<input type="password" id="cpass" name="cpass" required pattern=".{6,}" title="Six or more characters">
<br>
<br>

<input type="submit" value="submit" name="submit" style="
    margin-right: 365px;
    width: 125px;
	  height: 37px;
">
</form>
</div>
</div>

</body>
</html>
<?php include"footer.php"; ?>