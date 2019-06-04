<?php
		
	include('header.php');

  if(isset($_SESSION['log']))
		{
		  $ussid=$_SESSION['log'];
		}
 ?>
	
<?php 
if(isset($_POST['save'])) 
	{
		
		   $oldpsw=$_POST['oldpsw'];
		   $newpsw=$_POST['newpsw'];	
		 
	$query="select * from  user where uid=$ussid "  ;
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	
	  $pass_word=$row['password'];
	 
	
	    if($pass_word==$oldpsw)
		
		 {
		    $str="update user set password='".$newpsw."' where password='".$oldpsw."' and uid=$ussid";
            $count=mysqli_query($con,$str);
			if($count>0)
			   {
					
				echo "<script>alert('Update Successfully');</script>";
				header('location:myaccount.php');
			   }
			
		 }
		 else
		 {
		  echo "<font color='red'><h3>Old Password Is Not Match</h3></font><br>";
		 }
		} 

	}
	
?>
	
<html>
<head>
<script type="text/javascript">
window.onload = function () {
    document.getElementById("conpsw").onchange = validatePassword;
    document.getElementById("newpsw").onchange = validatePassword;
}
function validatePassword(){
var cpass=document.getElementById("newpsw").value;
var pass=document.getElementById("conpsw").value;
if(pass!=cpass)
    document.getElementById("newpsw").setCustomValidity("Passwords Don't Match");
else
    document.getElementById("newpsw").setCustomValidity('');  
//empty string means no validation error
}
</script>
           

</head>
<body>
		<section>
		<div>
			<div>
				
				
				<div>
					<div><!--features_items-->
						<section><!--form-->
		<div>
			<div>
	             <div>
				    <div>
									
									
					<div><!--sign up form-->
					<div class="left_content" style="
    margin-left: 197px; width: 900px;
">
<div class="region region-content">
					<center>	
					<form name="accountform" action="" method="post">
										<center><h1 style="
    color: #3c496b;
">Change Your Password</h1></center>		   
<br> <br> 
					<font color="#3c496b">   Old Password :<input type="password"  placeholder="Old Password"  required name="oldpsw" id="oldpsw"  required />
				New Password :<input type="password"  placeholder="New Password" name="conpsw" id="conpsw"  required pattern=".{6,}" title="Six or more characters" />
						Confirm Password :<input type="password"  placeholder="Confirm Password" name="newpsw" id="newpsw"  required pattern=".{6,}" title="Six or more characters"  />
							
							</font>
					
						<center>
		
				
				<br>	
				<input type="submit" name="save" value="SAVE" class="btn btn-default" style="
    margin-right: 365px;
    width: 125px;
	  height: 37px;
"> </center>
					
					</form>
					</center>
			</div>
				</div>
					</div><!--/sign up form-->
					</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
						
					</div><!--features_items-->		
								
					</div><!--features_items-->																		
				</div>
			</div>
		
	</section>		
	<br><br>
	<?php
		include('footer.php');
	?>
</body>
</html>