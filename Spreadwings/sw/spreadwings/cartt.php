<html>
	<head>
		<link rel="stylesheet" 
		href="css/font-awesome.min.css">
	
	</head>
	<body>

<?php
session_start();
?>
<?php include"header.php"; ?>
<br>
<br>
<br>

<form name='cart1' method='post' action='login.php'>


<?php
   
	$query="select product_type from onlinestore";
	$retval=mysqli_query($con,$query);
?>

<?php	
	while($row=mysql_fetch_array($retval))
	{
	 
	    $p=$row['product_type'];
		echo "<a href='pro.php?val=$p'>".$row['product_type']."</a>";
		echo "<br>";
   }


	$query="select cart_id,product_name,product_price,qty,total from product p,cart c where p.product_id=c.product_id order by cart_id";
		$retval=mysqli_query($con,$query);
?>
<center>
<table border="3">
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Remove</th>
<th>edit</th>

 
<?php	
	while($row=mysqli_fetch_array($retval))
	{
	
      echo "<tr><td>".$row['product_name']."</td>";
	  echo "<td>".$row['product_price']."</td>";
	  echo "<td>".$row['qty']."</td>";
	  echo "<td>".$row['total']."</td>";
	  $cr1=$row['cart_id'];
?>   
        
      <td>
	  <center>
	  <?php echo " <a href='cartremove.php?rm=$cr1'>"; ?>
	  <i class="fa fa-trash-o" style="color : red; width:100px; font-size:150%;" ></i></a>
	  <center>
	  </td>
	  <td>
	  <center>
	  <?php echo " <a href='cartupdate.php?rm=$cr1'>"; ?>
	  <i class="fa fa-pencil-square" style="color : red; width:100px; font-size:150%;" ></i></a>
	  <center>
	  </td>
	  
     
     

<?php
      echo "</tr>";
      
    } 
	
	unset($_SESSION['proid']);
	unset($_SESSION['proid1']);
	unset($_SESSION['proid2']);
	unset($_SESSION['proid3']);
	unset($_SESSION['proid4']);
		
?>



</table>
<br>
<br>
<br>

<input type="submit" name="submit" value="checkout"> 
<br>
<br>

</center>
<br>
<br>
</form>
<?php include"footer.php"; ?>
	
	</body>
</html>