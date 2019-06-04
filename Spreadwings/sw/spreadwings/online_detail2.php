<?php include"header.php"; ?>
<?php

include_once("config.php");
?><div style="
    margin-left: 177px; font-size: 10px;
">
<h1><a href="home.php">home</a>
>>
<a href="onlinestore.php">onlinestore</a>
</h1>
</div>
<br>
<br>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">



<div>

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
			
			
			$query2="select * from product where online_id='$onlsid' and product_id='$prodid' ORDER BY product_id ASC";
				$retval2=mysqli_query($con,$query2);
			  
	  
	  }
	}
   
   	      while($row2=mysqli_fetch_array($retval2))
		   {
		
  
            $prid=$row2['product_id'];
			$onid=$row2['online_id'];
			$quant=$row2['quant'];
			
    	   echo '<div class="product">'; 
            echo '<form method="post" action="ins_cartuser2.php">';
			$pimgs=$row2['product_img'];
			
			echo '<div class="product-thumb"><img src="../../spreadwings admin/pages/images-product/'.$pimgs.'" height="100" width="100"></div>';
			
			echo "<div class='product-content'><a href='online_detail2.php?proid=$prid&onlid=$onid'><h3>".$row2['product_name']."</h3></a>";
		
            echo '<div class="product-info">';
			echo 'Price '.$row2['product_price'].'  ';
            echo '<div><br>';
    	 // echo 'Qty <input type="text" id="product_qty"  name="product_qty" value="1" size="10" />';
			echo "Qty <input type='number' id='product_qty'  name='product_qty' value='1' size='10'  required min='1' max='$quant' title='please enter  price in number' />";
			
			echo '</div><br>';
		//  echo '<button class="btnss">Add To Cart</button>';
			
			 echo '<input type="hidden" name="product_code" value="'.$row2['code'].'" />';
			 echo '<input type="hidden" name="product_id" value="'.$row2['product_id'].'" />';
             echo '<input type="hidden" name="price" value="'.$row2['product_price'].'" />';
			 echo '<input type="submit" value="Add To Cart" name="submit">';
		     echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
			 echo '</div></div>';
			 echo '</form>';
?>
			

<title>database</title>





<link rel="stylesheet" href="onlinestore tabs/css/jquery-ui.css">
  <script src="onlinestore tabs/js/jquery-1.10.2.js"></script>
  <script src="onlinestore tabs/js/jquery-ui.js"></script>
  
 
 
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
	
		
		
		</script>

	

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
				<?php  	echo $row2['product_info']; ?>
				</div>
	
					<div id="tabs-2">
					this is awesome products
					</div>	
					
					<div id="tabs-3">
					<table>
					<tr>
					<td><pre><?php echo $row2['purchase_info']; ?></pre></td>
					</tr>
					</table>
					
					</div>
					
				</div>
				
					
			</div>
		</div>



			
<?php
			echo '</div>';
	       }  
		   
		   

?>  
    </div>
    
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php

if(isset($_SESSION['log']))
{
		  
    $usrid=$_SESSION['log'];	
}
else
{
  header("location:onlinestore.php");
} 


    $total = 0;
    echo '<ol>';
   
    $query3="select * from cart c,product p where c.product_id=p.product_id  and uid=$usrid";
	$retval3=mysqli_query($con,$query3);
	while($row=mysqli_fetch_array($retval3))
	{
	    $crtid=$row['cart_id'];
        echo '<li class="cart-itm">';
		
	//	echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<span class="remove-itm"><a href="del_cart_user.php?remove='.$crtid.'&return_url='.$current_url.'">&times;</a></span>';

        echo '<h3>'.$row['product_name'].'</h3>';
        echo '<div class="p-code">P code : '.$row['code'].'</div>';
        echo '<div class="p-qty">Qty : '.$row['qty'].'</div>';
        echo '<div class="p-price">Price :'.$row['product_price'].'</div>';
        $cqty=$row['qty'];
		
        $subtotal = ($row['product_price']*$row['qty']);
        $total = ($total + $subtotal);
		echo '<div>Total :'.$subtotal.'</div>';  
	
   }
	echo '</ol>';
	

	$row = mysqli_num_rows($retval3);
	if (!$row==0)
			{
				echo '<span class="check-out-txt"><strong>Total : '.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
				echo '<span class="empty-cart"><a href="del_cart_userall.php?all='.$usrid.'&return_url='.$current_url.'">Empty Cart</a></span>';
			}
	else
			{
				echo 'Your Cart is empty';
			}
	
?>

</div>
 
</div>


<?php include"footer.php"; ?>






