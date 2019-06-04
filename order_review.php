 <?php include"header.php"; ?>
<?php

include_once("config.php");
?>

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


		jQuery(document).ready(function(){
			jQuery("#form2").validationEngine();
		});
		
		$(function() {
		$( "#tabs" ).tabs();
		});
		
		
		$(function() {
		$( "#datepicker" ).datepicker();
		});
	
		$(document).ready(function() {
		$(".lightbox").lightbox();
		});	
		
		</script>


</head>

<font size="3" face="Trebuchet MS", "Helvetica", "Arial", "Verdana", "sans-serif";>
<div class="shopping-cartttt">


<?php
//$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  
if(isset($_SESSION["products"]))
{
    $total = 0;
?>  
<h2 style="	    margin-left: 198px;
  margin-right: 350px;TEXT-ALIGN: center;	    margin: 9em 949px  0.5em 179px;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 19px;
	line-height: 55px;
	background: #3c496b;
	border: 1px solid #fff;
		    padding: -4px 13px;
	color: white;
		    border-radius: 9 3px -2 9px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family: 'Muli', sans-serif;"> Review your order </h2>
<div class="left_content" style="
    margin-left: 178px; width: 993px;
">
<div class="region region-content">
<table class="checkout-review" style="
    width: 962px;
">
<tbody>
<tr class="pane-title odd odd">


</tr>
<tr class="pane-data even even">
<td colspan="2" class="pane-data-full">
<div class="view view-commerce-cart-summary view-id-commerce_cart_summary view-display-id-default view-dom-id-44d9f89df048907e78a0b870c01c47cf" style="
    line-height: 38px;
">
<div class="view-content" style="
    margin-top: -37px;
">
<div class="scrolBox">
<table class="views-table cols-4">
<thead>
<tr bgcolor="lightcyan">
<th class="views-field views-field-commerce-unit-price" style="
    background-color: slategrey;
">
Name Of Product </th>

<th class="views-field views-field-commerce-unit-price" style="
    background-color: slategrey;
">
Price </th>
<th class="views-field views-field-quantity" style="
    background-color: slategrey;
">
Quantity </th>
<th class="views-field views-field-commerce-total views-align-right" style="
    background-color: slategrey;
">
Total </th>

</tr>
</thead>
	
	
	
	
	
<?php	
    foreach ($_SESSION["products"] as $cart_itm)
    {
   //     echo '<li class="cart-itm">';
  //    echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
/*      echo '<h4>'.$cart_itm["name"].'</h4>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$cart_itm["price"].'</div>';  */
        $qtty=$cart_itm["qty"];
		$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
		$torder=$total;
//		echo '<div>Total :'.$subtotal.'</div>';
		echo '</li>';
		echo '<br>';
?> 

<tbody>
<tr>
<td class="views-field views-field-commerce-unit-price price" bgcolor="Lavender">
<?php echo $cart_itm["name"]; ?>&nbsp;&nbsp;&nbsp;&nbsp; </td>

<td class="views-field views-field-commerce-total views-align-right price" bgcolor="Lavender">
<center><?php echo $cart_itm["price"]; ?> </center>  </td>	



<td class="views-field views-field-quantity" bgcolor="Lavender">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $cart_itm["qty"]; ?> </td>



<td class="views-field views-field-commerce-total views-align-right price" bgcolor="Lavender" >
<center><?php echo $subtotal ?> </center>  </td>



<?php
   }
?>
</tr>

</tbody>
</table>

<table class="commerce-price-formatted-components">
<tbody>
<tr class="component-type-commerce-price-formatted-amount odd">
<hr>
<td class="component-title">Order Total  :</td>
<td class="component-total" ><?php echo $total ?> </td> 
</tr>
	
	
	
	<?php
}
else
{
    echo 'Please select products...  ';
}
?>
</tbody>

</table>

</td> 
</tr>
</table>
</div>
</div>

 
<div class='clear'></div>
</div>
 </font>




<form name="check11" method="post" action="paypal.php" >



<div style="
    margin-left: -19px;
    width: 3;
">

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
	echo "<tr><td>Name: ".$row['fname'];
	echo " ".$row['lname']."</td></tr>";
    echo "<tr><td>Address: ".$row['address']."</td></tr>";
	echo "<tr><td>".$row['city']."</td></tr>";
	echo "<tr><td>".$row['state']."</td></tr>";
	echo "<tr><td>".$row['pincode']."</td></tr>";
	echo "<tr><td>Mobile number: ".$row['pno']."</td></tr>";
		echo "<tr><td><a href='billingadd2.php?billuserid=$usid' style='	    margin-left: 220px;
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
	echo "<tr><td>".$row['city']."</td></tr>";
	echo "<tr><td>".$row['state']."</td></tr>";
	echo "<tr><td>".$row['pincode']."</td></tr>";
	echo "<tr><td>Mobile number: ".$row['pno']."</td></tr>";
echo "<tr><td><a href='shippingadd2.php?shipuserid=$usid'  style='	    margin-left: 220px;
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
<center>
<div style="
    margin-left: 193px;
">
<h1 style="
    color: #3c496b;
    margin-left: -527px;
    margin-bottom: -46px;
    margin-top: 57px;
" style="
    color: #3c496b;
">

Choose Your Payment Method </h1>

<h1>

<input type="radio" required name="pay" value="Paypal" style="
    margin-left: -90px;
" >Paypal
<br><br>
<input type="radio"  name="pay" value="Cash on Delivery">Cash on Delivery
</h1>
</div>
</center>

<br> 
 
<br>
<br>
<br>
<center>
<div style="
    margin-right: 319px;
">
<h1 style="
    color: #3c496b;">
Remaks for Delivery</h1>
<div style="
    margin-right: -727px;
    margin-top: -25px;
    width: 1000px;
    /* margin-left: 40px; */
"><input type="text" name="remarks" required > </div>
</div>
</div>
    
<input type="hidden" name="qty" value="<?php echo $qtty; ?>">   

<input type="hidden" name="userid" value="<?php echo $usid; ?>">   
<input type="hidden" name="shipid" value="<?php echo $shipid; ?>"> 
<input type="hidden" name="bilid" value="<?php echo $bilid; ?>"> 
<input type="hidden" name="totalamt" value="<?php echo $torder; ?>"> 
<br><br>
<br><br>
<input type="submit" name="submit" value="CONTINUE TO NEXT STEP" style="
    margin-right:566px;
    width: 238px;
	  height: 37px;
"> 
<br><br>
<br><br>
</form>
<br><br>
<br><br>
<?php include"footer.php"; ?>

