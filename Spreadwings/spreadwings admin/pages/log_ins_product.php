<?php
   
    include"connection.php"; 

   
  if(isset($_POST['submit']))
  {
	$oid=$_POST['oid'];
	$pid=$_POST['pid'];
    $pnm=$_POST['pname'];
//	$proi=$_POST['pinfo'];
	$prc=$_POST['price'];
	$qnt=$_POST['qnt'];
    $pimg=$_FILES['pimg']['name'];
//	$purinfo=$_POST['purchaseinfo'];
    $updated=$_POST['updated'];
	$ist=$_POST['isactive'];
	$code=$_POST['code'];
	echo $oid;
	echo $pid;

	    $proi=mysqli_real_escape_string($con,$_POST['pinfo']);
		$purinfo=mysqli_real_escape_string($con,$_POST['purchaseinfo']);
	
	
	move_uploaded_file( $_FILES['pimg']['tmp_name'],'images-product/'.$_FILES['pimg']['name']);
	

	$query="insert into product(online_id,profile_id,product_name,product_info,product_price,quant,product_img,purchase_info,updated,is_active,code)values('$oid','$pid','$pnm','$proi','$prc','$qnt','$pimg','$purinfo','$updated','$ist','$code')";
	$retval=mysqli_query($con,$query);
	
	echo "insert suceessfully";
	echo $query;

	header('location:productshow.php');
 
 }
?>