<?php include"headerr.php"; ?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Product Add </h2>
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
                                    <form role="form" name="product_ins" action="log_ins_product.php" method="post"  enctype="multipart/form-data" >
									
                                       
										 
										 <div class="form-group">
                                            <label>Online Id</label>
                                            <select class="form-control" name="oid">
                                      <?php 
										 
											$query="select * from onlinestore";
											$retval=mysqli_query($con,$query);
											while($row=mysqli_fetch_array($retval))
											{
												 ?>
												 <option value="<?php echo $row['online_id']; ?>">
												 <?php echo $row['product_type']."</option>";
												
											}
											?>
                                            </select>
                                        </div>
										

                                         <div class="form-group">
                                            <label>Profile Id</label>
												<select class="form-control" name="pid">
                                      <?php 
											
												$query="select * from profile";
												$retval=mysqli_query($con,$query);
												while($row=mysqli_fetch_array($retval))
												{
													 ?>
													 <option value="<?php echo $row['profile_id']; ?>">
													 <?php echo $row['name']."</option>";
													
												}
												?>
												</select>
                                        </div>
										 
										 <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control"  name="pname" required title="please enter product name" >
                                         </div>
										 
										  <div class="form-group">
                                            <label>Product Information</label>
                                            <textarea class="form-control" rows="3" name="pinfo"  required title="please enter product info"></textarea>
                                         </div>
										

										<div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" name="price" required pattern="\d*" title="please enter product price">
                                         </div>
										 
										<div class="form-group">
                                            <label>Product Quantity</label>
                                            <input class="form-control" name="qnt" required pattern="\d*" title="please enter product quantity" >
                                         </div>

										<div class="form-group">
                                            <label>Product Image</label>
                                            <input class="form-control" type="file" name="pimg" required title="please upload product image">
                                        </div>
										 
										 <div class="form-group">
                                            <label>purchase Information</label>
                                            <textarea class="form-control" name="purchaseinfo" rows="3" required title="please enter purchase info"></textarea>
                                         </div>
										 
										 <div class="form-group">
                                            <label>Product Enter Date</label>
                                            <input type="date" class="form-control" name="updated" required value="<?php echo $row['updated']; ?>" >
                                         </div>
									    
										<div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control" name="isactive" required pattern="[01]"  title="enter only 0 or 1">
                                         </div>

										<div class="form-group">
                                            <label>Code</label>
                                            <input class="form-control" name="code" required pattern="[A-Z 0-9]*" title="please enter code value">
                                         </div>
								
										
										
                                        <button type="submit"  name="submit"  class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
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
