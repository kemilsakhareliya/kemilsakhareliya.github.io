<?php include"header.php"; ?>

<!--START LIGHTBOX JS & CSS -->
<!--<script src="lightbox/js/jquery-1.11.0.min.js"></script> -->
<script src="lightbox/js/lightbox.min.js"></script>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />
<!--END LIHGHTBOX JS & CSS -->
<link href="css/pagination.css" rel="stylesheet" />


<?php



if(isset($_SESSION['log']))
{
		  $user=$_SESSION['log'];
	
 
	$query="select p.product_name,p.product_price,i.qty,p.product_img,c.status,c.order_date,c.order_deliver,i.citem_id,c.checkout_id,i.price from checkout c,checkout_item i,product p where c.checkout_id=i.checkout_id and p.product_id=i.product_id and  uid=$user ORDER BY citem_id desc" ;
	$retval=mysqli_query($con,$query);
	$rows= mysqli_num_rows($retval);
	if(!$rows==0)
	{
?>
<h2 style="	    margin-left: 198px;
  margin-right: 350px;TEXT-ALIGN: center;margin: 9em 930px  0.5em 140px;
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
	font-family: 'Muli', sans-serif;"> Your Orders </h2>
<div class="left_content" style="
    width: 1049px;
    margin-left: 139px; background: #3c496b;
">
<div class="region region-content">
<table class="checkout-review" style="
    margin-right: 66px;
    margin-left: -6px;
    width: 1030px;
    margin-top: -5px;
"	>
<tbody>
<tr class="pane-data even even">
<td colspan="2" class="pane-data-full">
<div class="view view-commerce-cart-summary view-id-commerce_cart_summary view-display-id-default view-dom-id-44d9f89df048907e78a0b870c01c47cf">
<div class="view-content">
<div class="scrolBox">
<table class="views-table cols-4">
<thead>
<tr>
<th class="views-field views-field-line-item-title">
Product </th>
<th class="views-field views-field-commerce-unit-price">
Name Of Product </th>
<th class="views-field views-field-commerce-unit-price">
Price </th>
<th class="views-field views-field-quantity">
Quantity </th>
<th class="views-field views-field-commerce-total views-align-right">
Total </th>
<th class="views-field views-field-commerce-total views-align-right">
Status Of Delivery</th>
<th class="views-field views-field-commerce-total views-align-right">
Order Date</th>
<th class="views-field views-field-commerce-total views-align-right">
Order Deliver</th>
<th class="views-field views-field-commerce-total views-align-right">
Action </th>
</tr>
</thead>

<?php	
	$total=0;
	$dt = date('Y/m/d', time());
	 
	while($row=mysqli_fetch_array($retval))
	{

	   $jks=$row['product_img'];
	   //$subtot=$row['product_price']*$row['qty'];
	   $subtot=$row['price']*$row['qty'];
	   
	     $std_tus=$row['status'];

	?>


<tbody>
<tr>
<td class="views-field views-field-line-item-title">
<?php
echo "<div class='product-thumb'><a href='../../spreadwings admin/pages/images-product/$jks' data-lightbox='example-1'><img alt='books' height='70' width='70' src='../../spreadwings admin/pages/images-product/$jks' /></a> </div>";
?>
</td>

<td class="views-field views-field-commerce-unit-price price">
<?php echo $row['product_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp; </td>

<td class="views-field views-field-commerce-unit-price price">
<?php echo $row['price']; ?> </td>
<td class="views-field views-field-quantity">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['qty']; ?> </td>
	
<td class="views-field views-field-commerce-total views-align-right price">
<center><?php echo $subtot ?> </center>  </td>

<td class="views-field views-field-commerce-total views-align-right price">
<center><?php echo $row['status']; ?> </center>  </td>

<td class="views-field views-field-commerce-total views-align-right price">
<center><?php echo $row['order_date']; ?> </center>  </td>

<td class="views-field views-field-commerce-total views-align-right price">
<center>
<?php
 if($std_tus!="Cancel")
	{
		echo $row['order_deliver']; 
		 
	} 
else
	{
		echo "--";
	}
 ?> 
</center>  </td>

<td class="views-field views-field-commerce-total views-align-right price">
<center> 
<?php

$edt=$row['order_deliver'];
$itemid=$row['citem_id'];
$date1=$dt;
$date2=$edt;



		if(strtotime($date1)<=strtotime($date2))
		{
			if($std_tus!="Cancel")
			{
	 
			echo "<a class='button' href='order_cancel.php?check=$itemid'>CANCEL</a>";
			
			}
			else
			{
			echo "cancelled";
			}
		}
		else
		{
			$checkoutid=$row['checkout_id'];
			$query2="update checkout set status='Dispatched' where checkout_id=$checkoutid";
	$retval2=mysqli_query($con,$query2);
		   
			echo "Dispatched";
		}
		
?>
</center>  </td>
<?php

 $total=$total+$subtot;
//echo $total;
	
	}
?>


</tr>
</tbody>
</table>

</div>
</div>


<table class="commerce-price-formatted-components">
<tbody>
<tr class="component-type-commerce-price-formatted-amount odd">
<hr>
<td class="component-title">Order total : </td>
<td class="component-total" ><?php echo $total ?> </td> </tr>

<?php
	}
	else
	{
		echo "<hr>";
		echo "No item you have purchase<br>";
	}
}
else
{
  header('location:login.php');
}


if(isset($_REQUEST['o_cancel']))
{
?>
<script>
alert("your order has been canceled")
</script>
<?php 
}  ?>
</tbody>

</table>
<hr/>
</td> 
</tr>
</table>
</div>
</div>

<br/>
<br/>
<?php include"footer.php"; ?>