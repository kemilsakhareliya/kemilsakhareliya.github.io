<?php
		//session_start();
	include('header.php');
?>
<head>
<style>
.menu_simple ul {
    margin: 0; 
    padding: 0;
    width:185px;
    list-style-type: none;
}

.menu_simple ul li a {
    text-decoration: none;
    color: white; 
    padding: 10.5px 11px;
    background-color:#3c496b;;
    display:block;
}
 
.menu_simple ul li a:visited {
    color: white;
}
 
.menu_simple ul li a:hover, .menu_simple ul li .current {
    color: white;
    background-color: #5FD367;
}

</style>
</head>

<div class="left_content" style="
    margin-left: 151px; 
    height: 360px;
    width: 1050px;
">
<div class="region region-content">








<center><h2 style="
    color: #3c496b;
"><a href="myaccount.php"><font color="#3c496b">Account Settings</font></a></h2></center>

<h3>
<a href="logout.php"><p align="right" style="
    margin-top: -31px; color: #3c496b;
">Log Out</p></a>
</h3>
<br>
<br>
<br>
<br>

<center>

<div class="menu_simple">

<ul style="
    margin-left: -201px;
">
<li style="
    width: 400px;
"><a href="accountinfo.php">View And Change My Account Information</a></li><br>
<li style="
    width: 400px;
"><a href="changeaddress.php">View Or Change Entries In My Address Books</a></li><br>
<li style="
    width: 400px;
"><a href="changepass.php">Change My Account Password</a></li><br>
<li style="
    width: 400px;
"><a href="order_List.php">View The Orders I Have Made</a></li><br>

</ul>
</div>

</center>

<br>
<br>
<br>
</div>
</div>

<?php
	include('footer.php');
?>