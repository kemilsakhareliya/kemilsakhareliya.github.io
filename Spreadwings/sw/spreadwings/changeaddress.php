<?php include"header.php"; ?>




<link href="style/style.css" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="onlinestore tabs/css/jquery-ui.css">
  <script src="onlinestore tabs/js/jquery-1.10.2.js"></script>
  <script src="onlinestore tabs/js/jquery-ui.js"></script>
  <link rel="stylesheet" href="onlinestore tabs/css/style.css">
 
 
 <script src="onlinestore tabs/js/jquery.js" type="text/javascript"></script>
 <script src="onlinestore tabs/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="onlinestore tabs/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
 <link rel="stylesheet" href="onlinestore tabs/css/validationEngine.jquery.css" type="text/css"/>
 
 
 
<!--<script src="js/jquery-1.11.0.min.js"></script>
	-->
	<script src="onlinestore tabs/js/lightbox.min.js"></script>
	<link href="onlinestore tabs/css/lightbox.css" rel="stylesheet" />

	
<script type="text/javascript">


	
		
		$(function() {
		$( "#tabs" ).tabs();
		});
		
		
	
		
</script>





<?php


if(isset($_SESSION['log']))
{
	  
    $usrid=$_SESSION['log'];	

 }
?> 
<div class='clear'></div>
<div>

	<br/>
				
		<div id="div2" style="
    margin-left: 196px;
    width: 1200px;
">
			<div id="tabs" style="
    margin-right: 204px;
" >
				<ul style="

    padding: 0.2em 29.2em 0px;
">
					<li><a href="#tabs-1"><h3>Billing Information</h3></a></li>
					<li><a href="#tabs-2"><h3>Shipping Information</h3></a></li>
					
				</ul>
				
				<div id="tabs-1" style="display: inline-table; height: 230px;">
				
		
<div class="left_content" style="
    margin-left: -3px; 
    width: 468px;
    height: 262px;
">
<div class="region region-content">		
<h2>
<table name="ship1" border="0px" style="
    margin-left: 5px;height: 231px;
">

<?php

if(isset($_SESSION['log']))
	{
		  
		  $usid=$_SESSION['log'];
		//  echo $usid;
	} 

	$query="select * from billingadd where uid=$usid";
	
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	$bilid=$row['billadd_id'];
//	echo "<tr><td>".$row['billadd_id']."</td></tr>";
	echo "<tr><td>Name : ".$row['fname'];
	echo " ".$row['lname']."</td></tr>";
    echo "<tr><td>Address : ".$row['address']."</td></tr>";
	echo "<tr><td>City : ".$row['city']."</td></tr>";
	echo "<tr><td>State : ".$row['state']."</td></tr>";
	echo "<tr><td>Pincode :".$row['pincode']."</td></tr>";
	echo "<tr><td>Mobile number : ".$row['pno']."</td></tr>";
	echo "<tr><td><a href='billingadd3.php?billuserid=$usid' style='	    margin-left: 220px;
  margin-right: 350px;TEXT-ALIGN: center;margin: 9em 930px  0.5em 0px;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 19px;
	line-height: 38px;
	background: #3c496b;
	border: 1px solid #fff;
	padding: 3px 13px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family:'Muli', sans-serif;'>  Edit</a></td></tr>";
	}
	$rows = mysqli_num_rows($retval);
	if ($rows=mysqli_num_rows($retval))
    {
	
	}
	else
	{
	 echo "<h3>You have to first purchase any item then Edit billng addrss</h3>";
	}
	
?>

</table>
</h2>

</div>

</div>

</div>
	
	<div id="tabs-2" style="display: inline-table; height: 230px;">
	
<div class="left_content" style="
    margin-left: 471px; 
    width: 493px;
    height: 262px;
">
<div class="region region-content">
	<h2>		
<table name="ship1" border="0px" style="margin-left: 6px;height: 231px;">
<?php

	$query="select * from shippingadd where uid=$usid";
	
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	$shipid=$row['shipadd_id'];
//	echo "<tr><td>".$row['shipadd_id']."</td></tr>";
	echo "<tr><td>Name: ".$row['fname'];
	echo " ".$row['lname']."</td></tr>";
    echo "<tr><td>Address: ".$row['address']."</td></tr>";
	echo "<tr><td>City: ".$row['city']."</td></tr>";
	echo "<tr><td>State: ".$row['state']."</td></tr>";
	echo "<tr><td>Pincode:".$row['pincode']."</td></tr>";
	echo "<tr><td>Mobile number: ".$row['pno']."</td></tr>";
	echo "<tr><td><a href='shippingadd3.php?shipuserid=$usid'  style='	    margin-left: 220px;
  margin-right: 350px;TEXT-ALIGN: center;margin: 9em 930px  0.5em 3px;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 19px;
	line-height: 38px;
	background: #3c496b;
	border: 1px solid #fff;
	padding: 3px 13px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family:'Muli', sans-serif;'>Edit</a></td></tr>";
	}
		$rows = mysqli_num_rows($retval);
	if ($rows=mysqli_num_rows($retval))
    {
	
	}
	else
	{
	 echo "<h3>You have to first purchase any item then Edit shipping address</h3>";
	}
	
?>
</table>
</h2>

</div>
</div>


					</div>	
					
				</div>
				
			</div>
		</div>
<br>
<br>


<?php include"footer.php"; ?>