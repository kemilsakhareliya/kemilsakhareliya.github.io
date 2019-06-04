<?php
    include"connection.php"; 
   
  if(isset($_POST['submit']))
  {
	$pt=$_POST['ptype'];
//	$upd=$_POST['upd'];
    $act=$_POST['isactive'];

	$query="insert into onlinestore(product_type,is_active)values('$pt',$act)";
	$retval=mysqli_query($con,$query);
	
	echo "insert suceessfully";
	header('location:onlinestoreshow.php');
}
?>