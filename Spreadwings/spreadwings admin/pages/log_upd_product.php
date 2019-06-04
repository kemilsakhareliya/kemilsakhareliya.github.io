<?php
session_start();
include"connection.php"; 

?>
<?php
   
if(isset($_SESSION['updprod']))

$prid=$_SESSION['updprod'];

{
                 	
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
	$ist=$_POST['isactive'];
	$updated=$_POST['updated'];
	$code=$_POST['code'];
	echo $oid;
	echo $pid;
	echo $pimg;
    echo $prid;

	    $proi=mysqli_real_escape_string($con,$_POST['pinfo']);
		$purinfo=mysqli_real_escape_string($con,$_POST['purchaseinfo']);
	
	$ppimg=$_POST['proimg'];
	
	if($_FILES['pimg']['name']!="")
		{
	
			 move_uploaded_file( $_FILES['pimg']['tmp_name'],'images-product/'.$_FILES['pimg']['name']);
			
			 $query2= "select * from product where product_id='$prid'";
			 $retval2=mysqli_query($con,$query2);
			 while($row=mysqli_fetch_array($retval2))
				{
					 $img=$row['product_img'];
					 unlink("images-product/".$img);
					 //echo "<br>".$img."<br>";
				}
					
					 echo $_SESSION['updprod'];
					 $query="update product set online_id='$oid',profile_id='$pid',product_name='$pnm',product_info='$proi',product_price='$prc',quant='$qnt',product_img='$pimg',purchase_info='$purinfo',updated='$updated',is_active='$ist',code='$code' where product_id=$prid";
					 $retval=mysqli_query($con,$query);
					 echo "<br><br>";
					 echo $query;
			
		}
		else
		{
			  $query="update product set online_id='$oid',profile_id='$pid',product_name='$pnm',product_info='$proi',product_price='$prc',quant='$qnt',product_img='$ppimg',purchase_info='$purinfo',updated='$updated',is_active='$ist',code='$code' where product_id=$prid";
			  $retval=mysqli_query($con,$query);

		}	

	header('location:productshow.php');

	 }
}


?>