<?php include"header.php"; ?>
<?php

include_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="css/pagination.css" rel="stylesheet" />
   <link rel="stylesheet" href="styles.css">
   <link href="lightbox/css/lightbox.css" rel="stylesheet" />

   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<script src="lightbox/js/lightbox.min.js"></script>
</head>
<body>



<?php


$start=0;
$limit=3;

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}
else
{
$id="1";
}


echo "<ul>";



?><div style="clear:both"></div>

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
		echo "<a href='onlinestore2.php?val=$p'>".$row['product_type']."</a>";
		echo "</li>";
   
	}
?>

</ul>
</div>
<div style="clear:both"></div>




<br><br><br>

<div id="products-wrapper">

  <!--  <h1>PRODUCTS</h1> -->

  <div class="products">
   
<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
  
if(isset($_REQUEST['val']))
   {
	 $x=$_REQUEST['val'];

	$query2="select * from product where is_active=1 and online_id=$x ORDER BY product_id ASC LIMIT $start, $limit";
		$retval2=mysqli_query($con,$query2);
		while($row2=mysqli_fetch_array($retval2))
		{
		
  
            $prid=$row2['product_id'];
			$onid=$row2['online_id'];
			$quant=$row2['quant'];
			
   	echo '<div class="product" style="box-shadow: 10px 10px 10px #3c496b;width:551px;margin-left: -34px;">'; 
            echo '<form method="post" action="ins_cartuser2.php">';
			$pimgs=$row2['product_img'];
			
			echo '<div class="product-thumb"><a href="../../spreadwings admin/pages/images-product/'.$pimgs.'" data-lightbox="example-1">
			<img src="../../spreadwings admin/pages/images-product/'.$pimgs.'" height="100" width="100" /></a> </div>';
            
			echo "<div class='product-content'><a href='online_detail2.php?proid=$prid&onlid=$onid'><h3>".$row2['product_name']."</h3></a>";
		    echo '<div class="product-info">';
			echo 'Price '.$row2['product_price'].'  ';
            echo '<div><br>';
    	 // echo 'Qty <input type="text" id="product_qty"  name="product_qty" value="1" size="10" required pattern="\d*" title="please enter  price in number" />';
		    echo "Qty <input type='number' id='product_qty'  name='product_qty' value='1' size='10'  required min='1' max='$quant' title='please enter  price in number' />";
			echo '</div><br>';
			//echo '<button class="btnss">Add To Cart</button>';
			
			 echo '<input type="hidden" name="product_code" value="'.$row2['code'].'" />';
			 echo '<input type="hidden" name="product_id" value="'.$row2['product_id'].'" />';
             echo '<input type="hidden" name="price" value="'.$row2['product_price'].'" />';
			
			
			echo '<input type="submit" value="Add To Cart" name="submit"  >';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
			
			echo '</div></div>';
            echo '</form>';
            echo '</div>';
	 
	 
   }
 }
else
{   

	$query2="SELECT * FROM product where is_active=1  ORDER BY product_id ASC LIMIT $start, $limit";
	$retval2=mysqli_query($con,$query2);
		while($row2=mysqli_fetch_array($retval2))
		{
		
  
            $prid=$row2['product_id'];
			$onid=$row2['online_id'];
			$quant=$row2['quant'];
			
    			echo '<div class="product" style="box-shadow: 10px 10px 10px #3c496b;width:551px;margin-left: -34px;">'; 
            echo '<form method="post" action="ins_cartuser2.php">';
			$pimgs=$row2['product_img'];
			
			echo '<div class="product-thumb"><a href="../../spreadwings admin/pages/images-product/'.$pimgs.'" data-lightbox="example-1">
			<img src="../../spreadwings admin/pages/images-product/'.$pimgs.'" height="100" width="100" /></a> </div>';
		    		
			echo "<div class='product-content'><a href='online_detail2.php?proid=$prid&onlid=$onid'><h3>".$row2['product_name']."</h3></a>";
		
            echo '<div class="product-info">';
			echo 'Price '.$row2['product_price'].'  ';
            echo '<div><br>';
			
			//echo  $quant;
    	    echo "Qty <input type='number' id='product_qty'  name='product_qty' value='1' size='10'   required min='1' max='$quant' title='please enter  price in number' />";
			echo '</div><br>';
			//echo '<button class="btnss">Add To Cart</button>';
			
			 echo '<input type="hidden" name="product_code" value="'.$row2['code'].'" />';
			 echo '<input type="hidden" name="product_id" value="'.$row2['product_id'].'" />';
             echo '<input type="hidden" name="price" value="'.$row2['product_price'].'" />';
			
			
		    echo '<input type="submit" value="Add To Cart" name="submit">';
		    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';

    	    echo '</div></div>';
           
          
            echo '</form>';
            echo '</div>';
		//	$ccde=$obj->code;
		//	$_SESSION["codess"]=$ccde;

        }  
    
   }  

	

/*	*/
 ?>  
    

<?php
echo "</ul>";

?>

<div class="shopping-cart" style="
    float: inherit;width: 28%;
">
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
   
    $query3="select * from cart c,product p where is_active=1 and  c.product_id=p.product_id  and uid=$usrid";
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
 
<div class='clear'></div>

<div id="content">
<?php

if(isset($x))
	{
		$rows=mysqli_num_rows(mysqli_query($con,"select * from product where is_active=1 and online_id=$x"));
		$total=ceil($rows/$limit);

		if($id>1)
		{
			echo "<a href='?val=$x&id=".($id-1)."' class='button'>PREVIOUS</a>";
		}

		echo "<ul class='page' STYLE='float : left'>";
		for($i=1;$i<=$total;$i++)
		{
			if($i==$id) { echo "<li class='current'>".$i."</li>"; }
			
			else { echo "<li><a href='?val=$x&id=".$i."'>".$i."</a></li>"; }
		}
		echo "</ul>";
		if($id!=$total)
		{
			echo "<a href='?val=$x&id=".($id+1)."' class='button'>NEXT</a>";
		}

		
	}
else
	{
		$rows=mysqli_num_rows(mysqli_query($con,"select * from product where is_active=1 "));
		$total=ceil($rows/$limit);

		if($id>1)
		{
			echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
		}
		echo "<ul class='page' STYLE='float : left'>";
		for($i=1;$i<=$total;$i++)
		{
			if($i==$id) { echo "<li class='current'>".$i."</li>"; }
			
			else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
		}
		echo "</ul>";
		if($id!=$total)
		{
			echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
		}

}
?>
</div>



</body>
</html>

<?php include"footer.php"; ?>


