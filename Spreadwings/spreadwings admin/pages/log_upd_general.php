<?php
session_start();

include"connection.php"; 
?>
<?php
   
if(isset($_SESSION['updgeneral']))

$hid=$_SESSION['updgeneral'];

{
                 	
    if(isset($_POST['submit']))
  	{
	
	$mul=$_POST['multiple'];
	$nm=$_POST['names'];
    $nmif=$_POST['nameinfo'];
	
	$query="update general set profile_id='$mul',field_name='$nm',field_name_info='$nmif' where id='$hid' ";

	$retval=mysqli_query($con,$query);
	 header('location:generalshow.php');
	
	
	 }
}


?>