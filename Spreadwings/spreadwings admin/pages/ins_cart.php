<?php include"headerr.php"; ?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cart Add</h1>
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
                                    <form role="form" name="cart_ins" action="log_ins_cart.php"  method="post" >
									
											<div class="form-group">
                                            <label>User Name</label>
											<select class="form-control" name="userid" required="required"  title="please select User Name" >
											
											<option value="">Select</option>
											 <?php
												
												$query="select * from user";
												$retval=mysqli_query($con,$query);

												while($row=mysqli_fetch_array($retval))
												{
													 ?>
													
													 <option value="<?php echo $row['uid']; ?>">
													 <?php echo $row['first']."</option>";
													
												}
												?>
   
											 </select>
                                             </div>
									

											
											<div class="form-group">
                                            <label>Product Name</label>
											<select class="form-control" name="multiple" required="required"  title="please select product name " >
											<option value="">Select</option>
											 <?php
												
												$query="select * from product";
												$retval=mysqli_query($con,$query);

												while($row=mysqli_fetch_array($retval))
												{
													 ?>
													
													 <option value="<?php echo $row['product_id']; ?>">
													 <?php echo $row['product_name']."</option>";
													
												}
												?>
											 </select>
                                             </div>
											 
											
									  
									    <div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" name="qty" required pattern="\d*"  title="please enter quantity" >
                                        </div>
							
									    <div class="form-group">
                                            <label>Total</label>
                                            <input class="form-control" name="tot" required pattern="\d*"  title="please enter total amount" >
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
