<?php include"header.php"; ?>
<?php

include_once("config.php");
?>
<head>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="css/pagination.css" rel="stylesheet" />
   <link rel="stylesheet" href="styles.css">
   <link href="lightbox/css/lightbox.css" rel="stylesheet" />

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<script src="lightbox/js/lightbox.min.js"></script>
<script src="lightbox/js/jquery-1.11.0.min.js"></script>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>

<?php
if(isset($_SESSION['log']))
		{
		  
		  header("location:onlinestore2.php");
		 } 

?>




<?php





echo "<ul>";



?>
<div style="clear:both"></div>

<div id='cssmenu'>
<ul style="
    margin-right: 98px;
    margin-left: 143px;
	width:1059px;
	 margin-top: 10px;

">

<?php
	$query="select * from onlinestore where is_active=1";
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	    $p=$row['online_id'];
		echo  "<li class='active'>";
		echo "<a href='onlinestore.php?val=$p'>".$row['product_type']."</a>";
		echo "</li>";
   
	}
?>

</ul>
</div>
<div style="clear:both"></div>
<?php
         // show product type .. 
	/*
	$query="select * from onlinestore";
	$retval=mysql_query($query,$con);
	while($row=mysql_fetch_array($retval))
	{
	    $p=$row['online_id'];
		echo "<b><a href='onlinestore.php?val=$p'  class='buttononline' style='
   
    border: 2px solid black;    
     background: #3c496b;
    box-shadow: 10px 5px 18px #3c496b;
'>".$row['product_type']."</a></b>";
		//echo "<a href='onlinestore.php?val=$p' class='buttononline'>hello</a>";
		echo "<br><br>";
                       		  
	}*/
?>




<br><br><br>
<div id="products-wrapper">

  <!--  <h1>PRODUCTS</h1> -->

  <div class="products">
   
<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  

if(isset($_REQUEST['pro']))
{
	 $x=$_REQUEST['pro'];
	 $y=$_REQUEST['type'];
	 
     
       // echo "<h1>CD</h1><br>";
    //	$query="select product_id,product_name,product_price,product_img from product where online_id=1";
    	$results = $mysqli->query("select * from product where is_active=1  and online_id=$y and profile_id=$x ORDER BY product_id ");
  
    if ($results) 
	  { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
         {
			echo '<div class="product" style="box-shadow: 10px 10px 10px #3c496b;width:551px;margin-left: -34px;">'; 
            echo '<form method="post" action="cart_update.php">';
			echo '<div class="product-thumb"><a href="../../spreadwings admin/pages/images-product/'.$obj->product_img.'" data-lightbox="example-1">
			<img src="../../spreadwings admin/pages/images-product/'.$obj->product_img.'" height="100" width="100" /></a> </div>';
		    

			$prid=$obj->product_id;
			$onid=$obj->online_id;
			$quant=$obj->quant;
			
			echo "<div class='product-content'><a href='online_detail.php?proid=$prid&onlid=$onid'><h3>".$obj->product_name."</h3></a>";
		  
		
			//echo "<div class='product-content'><a href='online_detail.php?proid=$prid'><h3>".$obj->product_name."</h3></a>";
          //  echo '<div class="product-desc">'.$obj->product_info.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$obj->product_price.'  ';
			
            echo '<div>';
		    echo '<br>';
    	    echo "Qty <input type='number' id='product_qty'  name='product_qty' value='1' size='10'  required min='1' max='$quant' title='please enter  price in number' />";
			echo '</div>';
			echo '<br>';
		   // echo '<button class="add_to_cart">Add To Cart</button>';
			echo '<input type="submit" value="Add To Cart" name="submit">';
			
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';			
   		   echo '</div>';
			
			$ccde=$obj->code;
			
		 
         }
		
      }
	 
    }
$roww = mysqli_num_rows($results);
 if (!$roww==0)
			{
			 echo "<h2><a href='bussinesspage.php?pro=$x'>Back</a></h2>";
	 
			}
	else
			{
				echo '<h2>Not Available </h2><br><br><br>';
				 echo "<h2><a href='bussinesspage.php?pro=$x'>Back</a></h2>";
			}
?>
    

<?php
echo "</ul>";

?>

<div class="shopping-cart" style="
  width: 28%;
  margin-right: 136px;
">
<h2>Your Shopping Cart</h2>
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
	$crt=0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$cart_itm["price"].'</div>';
        $cqty=$cart_itm["qty"];
		
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
		echo '<div>Total :'.$subtotal.'</div>';
		
if(isset($_SESSION['log']))
{
		  
    $usrid=$_SESSION['log'];	
	$procode=$cart_itm["code"];
    
	
	$query2="select * from product where code='$procode'";
		$retval2=mysqli_query($con,$query2);
	
	while($row2=mysqli_fetch_array($retval2))
	{
	   $jps=$row2['product_id'];
	   $prscode=$row2['code'];
	   //echo $jps;
    }
	
	// echo "$jps  ";
	// echo "$cqty  ";
	// echo "$subtotal  ";
	 echo '</li>';
	
	
}
	 $crt++;
	 
  }
  
    $_SESSION['cart_number']=$crt;
	
	echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total Rs: '.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}
else
{
    echo 'Your Cart is empty';
	unset($_SESSION["cart_number"]);
}
?>

</div>
<br/> 
<div class='clear'></div>
<br/>
<br/>
<?php include"footer.php"; ?>


