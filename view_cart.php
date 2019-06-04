<?php include"header.php"; ?>
<?php

include_once("config.php");
?>
<?php
if(isset($_SESSION['log']))
		{
		  
		  header("location:view_cart2.php");
		 }
		 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="products-wrapper">
<h2 style="	    margin-left: 198px;
  margin-right: 350px;TEXT-ALIGN: center;margin: 9em 820px  0.5em 1px;
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
	font-family: 'Muli', sans-serif;"> CART </h2>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="login.php?cart=this is for insertion">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_img,product_name,product_info, product_price FROM product WHERE code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.'<h2 style="color: #3c496b;">Rs '.$obj->product_price.'</h2>'.'</div>';
			
            echo '<div class="product-info">';
			
			echo "<img src='../../spreadwings admin/pages/images-product/$obj->product_img' height='15' width='30'>".'<h2 style="
    color: #3c496b;
">'.'<div style="
    margin-left: 32px;
    margin-top: -33px;
">'.$obj->product_name.' (Code :'.$product_code.')</div></h2> ';
     echo "<br>";
	 echo "<br>";
		
		echo '<div class="p-qty">'.'<h3 style="
    color: #3c496b;
">';
			echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
			echo '</div>';
			echo "<br>";
            echo '<div><h4>'.$obj->product_info.'</h4></div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_info.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$total.'</strong>  ';
		echo '</span>';
		echo '<input type="submit" value="place order">';
		
		echo '</form>';
		$_SESSION['cartii']=6;
		$_SESSION['cart_number']=$cart_items;
		
    }
	else
	{
		echo 'Your Cart is empty';
		unset($_SESSION["cart_number"]);
	}
	
	
    ?>
    </div>
</div>
</body>
</html>
<?php include"footer.php"; ?>