   <?php include"connection.php"; ?>

<?php
session_start();
?>

   <?php
            
			 
	  $_SESSION['hid1']=$_POST['hid1'];
	  $_SESSION['hid2']=$_POST['hid2'];
	  $_SESSION['qty1']=$_POST['qty1'];
	  
      $_SESSION['hid3']=$_POST['hid3'];
	  $_SESSION['hid4']=$_POST['hid4'];
	  $_SESSION['qty2']=$_POST['qty2'];
	  
	  $_SESSION['hid5']=$_POST['hid5'];
	  $_SESSION['hid6']=$_POST['hid6'];
	  $_SESSION['qty3']=$_POST['qty3'];
	  
	  $_SESSION['hid7']=$_POST['hid7'];
	  $_SESSION['hid8']=$_POST['hid8'];
	  $_SESSION['qty4']=$_POST['qty4'];       
	   
	  $_SESSION['hid9']=$_POST['hid9'];
	  $_SESSION['hid10']=$_POST['hid10'];
	  $_SESSION['qty5']=$_POST['qty5'];     
           
   		    $a=$_SESSION['hid1'];
	        $b= $_SESSION['hid2'];
	        $c= $_SESSION['qty1'];
	  
			$d=$_SESSION['hid3'];
	        $e=$_SESSION['hid4'];
	        $f=$_SESSION['qty2'];
	 
       	    $g=$_SESSION['hid5'];
	        $h=$_SESSION['hid6'];
	        $i=$_SESSION['qty3'];
			
			$j=$_SESSION['hid7'];
	        $k=$_SESSION['hid8'];
	        $l=$_SESSION['qty4'];
	 	 
		    $m=$_SESSION['hid9'];
	        $n=$_SESSION['hid10'];
	        $o=$_SESSION['qty5'];   
			
			if(isset($_SESSION['proid2']))
			{
			
			echo $_SESSION['proid2'];
			}
	
			
if(isset($_SESSION['proid']))
	{
	$pss=$_SESSION['proid'];
	$tot=$b*$c;

	$query="insert into cart(product_id,qty,total)values('$pss','$c','$tot')";
	$retval=mysqli_query($con,$query);
    }  
else if(isset($_SESSION['proid1']))     
    {
	$pss=$_SESSION['proid1'];
	$tot=$e*$f;

	$query="insert into cart(product_id,qty,total)values('$pss','$f','$tot')";
		$retval=mysqli_query($con,$query);
	}
else if(isset($_SESSION['proid2']))     
    {
	$pss=$_SESSION['proid2'];
	$tot=$h*$i;

	$query="insert into cart(product_id,qty,total)values('$pss','$i','$tot')";
		$retval=mysqli_query($con,$query);
	}
else if(isset($_SESSION['proid3']))     
    {
	$pss=$_SESSION['proid3'];
	$tot=$k*$l;

	$query="insert into cart(product_id,qty,total)values('$pss','$l','$tot')";
	$retval=mysqli_query($con,$query);
	}		
else if(isset($_SESSION['proid4']))     
    {
	$pss=$_SESSION['proid4'];
	$tot=$n*$o;

	$query="insert into cart(product_id,qty,total)values('$pss','$o','$tot')";
	$retval=mysqli_query($con,$query);
	}		
		
	
	header('location:cartt.php');

	?>
