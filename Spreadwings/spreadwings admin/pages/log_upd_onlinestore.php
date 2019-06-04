<?php
session_start();
include"connection.php"; 

?>
<?php
   
if(isset($_SESSION['updonline']))

$oid=$_SESSION['updonline'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
	
	$pt=$_POST['ptype'];
	//$upd=$_POST['upd'];
    $act=$_POST['isactive'];
	
	
	 echo $_SESSION['upd'];

	 $query="update onlinestore set product_type='$pt',is_active='$act' where online_id='$oid' ";

	$retval=mysqli_query($con,$query);
	 header('location:onlinestoreshow.php');
	
	
	 }
}


?>