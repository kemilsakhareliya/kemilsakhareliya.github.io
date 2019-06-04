<?php include"header.php"; ?>
<?php
if(isset($_SESSION['log']))
{
		  
    header('location:online_detail2.php');	
}
include_once("config.php");
?>
<div style="
    margin-left: 177px;
">
<h1><a href="home.php">home</a>
>>
<a href="onlinestore.php">onlinestore</a>
</h1>
</div>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
<?php
/*
    $con=mysql_connect("localhost","root","");
	mysql_select_db("spreadwings");
	$query="select product_type from onlinestore";
	$retval=mysql_query($query,$con);
	while($row=mysql_fetch_array($retval))
	{
	    $p=$row['product_type'];
		echo "<a href='online_detail.php?val=$p'>".$row['product_type']."</a>";
		echo "<br>";
                       		  
	}
	*/
?>
<?php
if(isset($_REQUEST['proid']))
{
	 $pid=$_REQUEST['proid'];
   // echo $pid;
    
   	 $ssid=$_REQUEST['onlid'];
   //  echo $ssid;
	
   	$_SESSION['pps']=$pid;
	 $_SESSION['ops']=$ssid;
}
?>



</div>



<div id="products-wrapper">

  <!--  <h1>PRODUCTS</h1> -->

  <div class="products">
   
<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 	
 
     // echo "<h1>Details</h1><br>";
    //	$query="select product_id,product_name,product_price,product_img from product where online_id=1";
    
  if(isset($_SESSION['pps']))
    {
     if(isset($_SESSION['ops']))
	  {
			$prodid=$_SESSION['pps'];
			$onlsid=$_SESSION['ops'];
			
			
			$results = $mysqli->query("select * from product where online_id='$onlsid' and product_id='$prodid' ORDER BY product_id ASC");
	  }
	}
    if ($results) 
	  { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
         {
		 	
			$quant=$obj->quant;
			echo '<div class="product">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb">
			<img align="center" src="../../spreadwings admin/pages/images-product/'.$obj->product_img.'" height="100" width="100" /> </div>';		
			
	//		echo '<div class="product-thumb"><img //src="images-product/'.$obj->product_img.'" height="100" width="100"></div>';
        	echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
        //  echo '<div class="product-desc">'.$obj->product_info.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$obj->product_price.'  ';
            echo '<div><br>';
			echo "Qty <input type='number' id='product_qty' name='product_qty' value='1' size='10'  required min='1' max='$quant' title='please enter  price in number' />";    
		 // echo 'Qty <input type="text" name="product_qty" value="1" size="10" />';
			echo '</div><br>';
		//	echo '<button class="add_to_cart">Add To Cart</button>';
			echo '<input type="submit" value="Add To Cart" name="submit">';
		
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
?>

<html>
<head>
<title>database</title>





<link rel="stylesheet" href="onlinestore tabs/css/jquery-ui.css">
  <script src="onlinestore tabs/js/jquery-1.10.2.js"></script>
  <script src="onlinestore tabs/js/jquery-ui.js"></script>
  <link rel="stylesheet" href="onlinestore tabs/css/style.css">
 
 
 <script src="onlinestore tabs/js/jquery.js" type="text/javascript"></script>
 <script src="onlinestore tabs/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="onlinestore tabs/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
 <link rel="stylesheet" href="onlinestore tabs/css/validationEngine.jquery.css" type="text/css"/>
 
 
 
<!--<script src="js/jquery-1.11.0.min.js"></script>
	--><script src="onlinestore tabs/js/lightbox.min.js"></script>
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

<body>
<div>

	<br>
				
		<div id="div2">
			<div id="tabs">
				<ul>
					<li><a href="#tabs-1">Product Details</a></li>
					<li><a href="#tabs-2">Customern Reviews</a></li>
					<li><a href="#tabs-3">Shipping Information</a></li>
				</ul>
				
				<div id="tabs-1">
				<?php  	echo $obj->product_info; ?>
				</div>
	
					<div id="tabs-2">
					this is awesome products
					</div>	
					
					<div id="tabs-3">
					<table>
					<tr>
					<td><pre><?php echo $obj->purchase_info; ?></pre></td>
					</tr>
					</table>
					
					</div>
					
				</div>
				
					
			</div>
		</div>
	</body>
</html>



<?php	
            echo '</div>';
         }  
    
      }
    
	

 ?>  
    </div>
    
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}
else{
    echo 'Your Cart is empty';
}
?>

</div>
 
</div>

</body>
</html>
<?php include"footer.php"; ?>

