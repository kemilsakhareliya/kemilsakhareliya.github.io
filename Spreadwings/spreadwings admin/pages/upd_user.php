<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['del']))
{
	 $usr=$_REQUEST['del'];
	 
	 $_SESSION['usr_id']=$usr;


	$query="select * from user where uid=$usr";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		
?>
<!--
<head>
<script type="text/javascript">
window.onload = function () {
    document.getElementById("pass").onchange = validatePassword;
    document.getElementById("cpass").onchange = validatePassword;
}
function validatePassword(){
var cpass=document.getElementById("cpass").value;
var pass=document.getElementById("pass").value;
if(pass!=cpass)
    document.getElementById("cpass").setCustomValidity("Passwords Don't Match");
else
    document.getElementById("cpass").setCustomValidity('');  
//empty string means no validation error
}
</script>
</head>
-->

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">User Visibility</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="form_user_ins" action="log_upd_user.php" method="post" >
									
                                  <!--      <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first"  required pattern="[A-Za-z]*" title="please enter First name" value="<?php echo $row['first']  ?>" >
                                        </div>
										

                                         <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control"  name="middle" required pattern="[A-Za-z]*" value="<?php echo $row['middle']  ?>" >
                                         </div>
										 
										

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control"  name="last" required pattern="[A-Za-z]*" value="<?php echo $row['last']  ?>" >
                                         </div>
										 
										 <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" required value="<?php echo $row['email']  ?>" >
                                         </div>
										 
								 
										 <div class="form-group">
                                            <label> Password</label>
                                            <input class="form-control" type="password" id="pass" name="pass" required pattern=".{6,}" title="Six or more characters" value="<?php echo $row['password']  ?>" >
                                         </div>
                                      
									  <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control"  type="password" id="cpass" name="cpass" required pattern=".{6,}" title="Six or more characters or does not match" value="<?php echo $row['password']  ?>" >
                                         </div>
										 
										  <div class="form-group">
                                            <label>Visible</label>
                                            <input class="form-control" name="is_active" required pattern="[01]" title="enter only 0 or 1" value="<?php echo $row['is_active']  ?>"  >
                                         </div>

-->

										 <div class="form-group">
                                            <label>Visible</label>
                                            <input class="form-control" name="is_active" required pattern="[01]" title="enter only 0 or 1" value="<?php echo $row['is_active']  ?>"  >
                                         </div>
                                        <button type="submit"  name="submit"  class="btn btn-success">Update</button>
                                        
                                    </form>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
	



<?php 

	}
 }
 ?>
 <?php include"footerr.php"; ?>