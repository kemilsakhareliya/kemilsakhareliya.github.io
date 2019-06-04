<?php include"connection.php"; ?>

<?php

if(isset($_POST['submit']))
{
  
    $name=$_POST['name'];
	$con=$_POST['contact'];
	$emails=$_POST['email'];
	$subj=$_POST['sub'];
    $msg=$_POST['msg'];
	//echo $emails;
	

		$msg_all = array($name,$con,$emails,$sub,$msg);

		list($name, $con, $sub) = $msg_all;
		$message_body= "name=  $name, contact no= $con ,  user email= $emails , subject= $subj , message= $msg ";
		
		
		$to = "jatin_kaklotar_mscit@yahoo.com";
		$subject = $subj;
		$txt = $message_body;
		$headers = "From: dummykonakart@gmail.com" . "\r\n";

		mail($to,$subject,$txt,$headers);


		header('location:contactus.php?yes=suceessfully sent mail');




}
else
{
   header('location:contactus.php');
}
  


?>