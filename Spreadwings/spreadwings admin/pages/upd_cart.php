<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['del']))
{
	 $uj=$_REQUEST['del'];
	 
	 $_SESSION['updcart']=$uj;


	$query="select * from cart where cart_id=$uj";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		 echo $row['qty']; 
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cart Edit</h1>
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
                                    <form role="form" name="cart_upd" action="log_upd_cart.php" method="post" enctype="multipart/form-data" >
									

										

											<div class="form-group">
                                            <label>User Name</label>
											<select class="form-control" name="userid" >
											
												<?php
												
												$query="select * from user u, cart c where u.uid=c.uid and cart_id=$uj";
												$retval=mysqli_query($con,$query);

												while($row2=mysqli_fetch_array($retval))
												{
													 ?>
													
													 <option value="<?php echo $row2['uid']; ?>">
													 <?php echo $row2['first']."</option>";
													
												}
												?>
											    
											 </select>
                                             </div>



											
											<div class="form-group">
                                            <label>Product Name</label>
											<select class="form-control" name="multiple"  >
											
												 <?php
												
													$query="select * from product p,cart c where p.product_id=c.product_id and cart_id=$uj";
													$retval=mysqli_query($con,$query);

													while($row3=mysqli_fetch_array($retval))
													{
														 ?>
														
														 <option value="<?php echo $row3['product_id']; ?>">
														 <?php echo $row3['product_name']."</option>";
														
													}
													?>
											    
											 </select>
											</div>
											
											<div class="form-group">
												<label>Quantity</label>
												<input class="form-control" name="qty" required pattern="\d*" title="please enter quantity" value="<?php echo $row['qty']  ?>" >
											</div>
								
								
											<div class="form-group">
												<label>Total</label>
												<input class="form-control" name="tot" required pattern="\d*" title="please enter total amount" value="<?php echo $row['total']  ?>" >
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