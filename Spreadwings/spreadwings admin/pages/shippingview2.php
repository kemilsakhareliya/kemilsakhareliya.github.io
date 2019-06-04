<?php include"headerr.php"; ?>


<?php
 if(isset($_REQUEST['shid']))
    {
	 
	   
	$shipp=$_REQUEST['shid'];
	

	

	$query="select * from shippingadd where shipadd_id=$shipp";
	$retval=mysqli_query($con,$query);
     while($row=mysqli_fetch_array($retval))
	   {
	   $usids=$row['uid'];
		
?>  

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Shipping Details</h2>
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
                                    <form role="form"  action="#"  >
									

										
									   <div class="form-group">
                                            <label>User Name</label>
                                       <select name="multiple" class="form-control" readonly>

												<?php 
													$query1="select * from user where uid=$usids";
													$retval1=mysqli_query($con,$query1);
													
													while($row1=mysqli_fetch_array($retval1))
													{
													 $uid=$row1['uid'];
													 $uname=$row1['first'];
													
												?>
													<option value="<?php echo $uid; ?>"> <?php echo $uname;  ?> </option>
												<?php
													 }
												?>
												</select>
                                        </div>
									  


  
									  
									    <div class="form-group">
                                            <label>first name</label>
                                            <input type="text" class="form-control"  value="<?php echo $row['fname'];?>" readonly >
                                        </div>
								  
									   <div class="form-group">
                                            <label>last name</label>
                                            <input type="text" class="form-control" value="<?php echo $row['lname'];?>"  readonly>
                                        </div>
									  
									  
									    <div class="form-group">
                                            <label>Address</label>
                                         <textarea class="form-control"  name="add" required title="please enter address" readonly><?php echo $row['address'];?></textarea>
									   </div>
									  
										<div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" value="<?php echo $row['city'];?>" readonly>
                                        </div>
										
										<div class="form-group">
                                            <label>State</label>
                                            <input class="form-control" value="<?php echo $row['state'];?>"  readonly >
                                        </div>

										<div class="form-group">
                                            <label>Pincode</label>
                                            <input class="form-control"  value="<?php echo $row['pincode'];?>" readonly>
                                        </div>
														
										<div class="form-group">
                                            <label>Phone No</label>
                                            <input class="form-control" value="<?php echo $row['pno'];?>" title="enter only 0 or 1 for Visibility" readonly >
                                        </div>
	
										<div class="form-group">
                                            <label>E-Mail</label>
                                            <input class="form-control" type="email" name="email" value="<?php echo $row['email'];?>" readonly >
                                        </div>
									
										<a href='shippingshow.php'> <button type='button' class='btn btn-info'>Back</button></a>
									 	
                                      
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