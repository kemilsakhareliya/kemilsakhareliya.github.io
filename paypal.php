<?php include"header.php"; ?>
<br>

<?php

if(isset($_POST['submit']))
{
	if(isset($_POST['pay']))
		{
		 
			  $cmp=$_POST['pay'];
         
			  $paytype=$_POST['pay'];
			  $rms=$_POST['remarks'];
			  $usid=$_POST['userid'];
			  $shid=$_POST['shipid'];
			  $bilid=$_POST['bilid'];
			  $total=$_POST['totalamt'];
			  $qty=$_POST['qty'];
  	
  
			  $_SESSION['ptype']=$paytype;
			  $_SESSION['remarks']=$rms;
			  $_SESSION['userid']=$usid;
			  $_SESSION['shipid']=$shid;
			  $_SESSION['bilid']=$bilid;
			  $_SESSION['totoalamt']=$total; 
	  

			if($cmp=='Paypal')
			{
					 

			}
		  
		  else
		  {
		  
		   header('location:payment_complate2.php');
		  }
		  
	}
}



?>
<h3 style="	    margin-left: 212px;
  margin-right: 350px;
  TEXT-ALIGN: start;
  margin: 9em 930px 0.5em 140px;
  font-weight: normal;
  position: relative;
  text-shadow: 0 -1px rgba(0,0,0,0.6);
  font-size: 19px;
  line-height: 24px;
  background: #3c496b;
  border: 1px solid #fff;
  padding: 3px 13px;
  color: white;
  border-radius: 0 10px 0 10px;
  box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
  font-family: 'Muli', sans-serif;
}"> Make payment easy with paypal</h3>

<br>
<br>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">

<input type="hidden" name="business" value="dummykonakart@gmail.com">
<input type="hidden" name="currency_code" value="US">
<?php
  if(isset($_SESSION['log']))
	{
	$usrs_id=$_SESSION['log'];
	$query2="select * from cart c,product p where uid=$usrs_id and c.product_id=p.product_id";
	$retval2=mysqli_query($con,$query2);
	$cnt=0;
	while($row=mysqli_fetch_array($retval2))
	{
	 $prname=$row['product_name'];
	 $qttyss=$row['product_price'];
	 $qttys=$qttyss/60;
	 $prccc=$row['qty'];
	 $cnt=$cnt+1;
?>
<input type="hidden" name="item_name_<?php echo $cnt?>" value="<?php echo $prname;?>">
<input type="hidden" name="amount_<?php echo $cnt?>" value="<?php echo $qttys;?>">
<input type="hidden" name="quantity_<?php echo $cnt?>" value="<?php echo $prccc;?>">


<?php
	  
	}
}

?>

<input type="hidden" name="notify_url" value="http://www.easternts.com">
<input type="hidden" name="return" value="http://localhost/sw/spreadwings/payment_complate2.php">
<input type="image" src="http://www.sandbox.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" height="60" width="90"  style="margin-left: 248px;">
</form>
<br>
<br>
<?php include"footer.php"; ?>