<?php include"header.php"; ?>

<html>
<body>


<div class="left_content" style="
    margin-left: 151px; 
    height: 188px;
    width: 1050px;
">
<div class="region region-content">
<center><h2 style="
    color: #3c496b;
"><a href="myaccount.php">My Account</a></h2></center>
<h3>
<a href="logout.php"><p align="right" style="
    margin-top: -31px; color: #3c496b;
">Log Out</p></a>
</h3>
<br>
<br>
<br>
<center>
<?php

if(isset($_SESSION['log']))
{
 echo "<h2 style='
    color: #3c496b;
'>";
 echo "welcome to your account";
echo "</h2>";
 
 }

else
{
	
header('location:login.php');
}

?>
</center>



</body>
</html>
</div>
</div>

<?php include"footer.php"; ?>