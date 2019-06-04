<?php include"headerr.php"; ?>
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

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Add</h1>
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
                                    <form role="form" name="f1" action="log_ins_admin.php"  method="post" >
									
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" name="first"  required pattern="[A-Za-z]*" title="please enter First name" >
                                        </div>
										

                                         <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control"  name="middle" required pattern="[A-Za-z]*" >
                                         </div>
										 
										

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control"  name="last" required pattern="[A-Za-z]*" >
                                         </div>
										  <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" required >
                                         </div>
										
										 
										 <div class="form-group">
                                            <label> Password</label>
                                            <input class="form-control" type="password" id="pass" name="pass" required pattern=".{6,}" title="Six or more characters" >
                                         </div>
                                      
									  <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control"  type="password" id="cpass" name="cpass" required pattern=".{6,}" title="Six or more characters or does not match" >
                                         </div>




									  
									  
									  
                                      
                                        <button type="submit"  name="submit"  class="btn btn-success">Insert</button>
                                        <button type="reset" class="btn btn-success">Reset </button>
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
	
<?php include"footerr.php"; ?>
