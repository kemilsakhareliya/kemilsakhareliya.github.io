<?php include"header.php"; ?>


<?php

if(!isset($_SESSION['log']))
		{
		  
		  header("location:view_cart.php");
		 } 
?>		  
		


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View shopping cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css"></head>

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
if(isset($_SESSION['log']))
		{
		
		$usrid=$_SESSION['log'];	
		 }
	    $total = 0;
		echo '<form method="post" action="place_order.php?cart=this is for insertion">';
		echo '<ul>';
		$cart_items = 0;
		
		
	
	$query="select * from cart c,product p where c.product_id=p.product_id  and uid=$usrid ";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
           $product_code = $row['code'];
		   $product_name=$row['product_name'];
		   $crtid=$row['cart_id'];
		   $im=$row['product_img'];
		    echo '<li class="cart-itm">';
		//	echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<span class="remove-itm"><a href="del_cart_user.php?remove='.$crtid.'&return_url='.$current_url.'">&times;</a></span>';

			
			echo '<div class="p-price">'.'<h2 style="
    color: #3c496b;
">Rs '.$row['product_price'].'</h2>'.'</div>';
            echo '<div class="product-info">';
			
			echo "<img src='../../spreadwings admin/pages/images-product/$im' height='15' width='30'>".'<h2 style="
    color: #3c496b;
">'.'<div style="
    margin-left: 32px;
    margin-top: -33px;
">'.$product_name.' (Code :'.$product_code.')</div></h2> ';
     echo "<br>";
	 echo "<br>";
            echo '<div class="p-qty">'.'<h3 style="
    color: #3c496b;
">'.'Qty : '.$row["qty"].'</h3>'.'</div>';
echo "<br>";
            echo '<div><h4>'.$row["product_info"].'</h4></div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($row["product_price"]*$row["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$row["product_info"].'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$row["qty"].'" />';
			$cart_items ++;
			
			

			
			
      }
    	echo '</ul>';
		
		$row = mysqli_num_rows($retval);
		if (!$row==0)
		{	
			echo '<span class="check-out-txt">';
			echo '<h2 style="
    color: #3c496b;
"><strong>Total : '.$total.'</strong> </h2> ';
			echo '</span>';

			echo '<input type="submit" value="place order">';
			echo '</form>';
			$_SESSION['cartii']=6;
		}
		else
		{
			echo 'Your Cart is empty';
		}
	
	
	
	
	
	
    ?>
    </div>
</div>

<?php include"footer.php"; ?>