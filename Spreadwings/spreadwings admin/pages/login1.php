 <?php include"headerr1.php"; ?>   
<?php   		
 if(isset($_SESSION['log_admin']))
		{
		  header('location:adminshow.php'); 		
        }
		
   ?>
				<h2>
				<center><img src="olv.png"/></center>
				</h2>
				
	
   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: -61px;">
                
				
				
				<div class="login-panel panel panel-default">
				
				
				
				
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="login1" method="post" action="logic_login1.php" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="
													<?php 
													 if(isset($_COOKIE['uname']))
													{
													echo $_COOKIE['uname'];
													}
													 ?>
													">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];} ?>">
                                </div>
								<?php
								if(isset($_COOKIE['uname']))
								{
								?>
                                <div class="checkbox">
                                    <label>
                                        <input name="check" type="checkbox" checked value="Remember Me">Remember Me
                                    </label>
                                </div>
								<?php
								}
								else
								{
								?>
                                <div class="checkbox">
                                    <label>
                                        <input name="check" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>								
								<?php
								}
								?>
								<h5><font color="red">


								<?php
								if(isset($_REQUEST['err']))
								{
								 echo $_REQUEST['err'];
								}
								?>
								</font></h5>
                                <!-- Change this to a button or input when using this as a form -->
								<input  class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="submit">                               
							
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <?php include"footerr.php"; ?>