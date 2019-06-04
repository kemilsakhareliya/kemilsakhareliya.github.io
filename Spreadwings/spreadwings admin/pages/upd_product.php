<?php include"headerr.php"; ?>

<?php
if(isset($_REQUEST['upd']))
{
	 $ps=$_REQUEST['upd'];
	 
	 $_SESSION['updprod']=$ps;


	$query="select * from product where product_id=$ps";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product Update</h1>
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
                                    <form role="form" name="fproduct" action="log_upd_product.php" method="post"  enctype="multipart/form-data" >
									
                                       
										 
										 <div class="form-group">
                                            <label>Onlinestore Name</label>
                                            <select class="form-control" name="oid">
												<?php 
											 
										
												$query2="select * from product p,onlinestore o where product_id=$ps and p.online_id=o.online_id ";
												$retval2=mysqli_query($con,$query2);
												
												while($row2=mysqli_fetch_array($retval2))
												{
												 $vvid=$row2['product_id'];
												$onid=$row2['online_id'];

												$ptypes=$row2['product_type'];
												
												?>
												<option value="<?php echo $onid; ?>"> <?php echo $ptypes;  ?> </option>
												<?php
												}
												?>
                                            </select>
                                        </div>
										

                                         <div class="form-group">
                                            <label>Profile Name</label>
												<select class="form-control" name="pid">
												<?php 
											
												$query3="select * from product p,profile s where product_id=$ps and p.profile_id=s.profile_id ";
												$retval3=mysqli_query($con,$query3);
												
												while($row3=mysqli_fetch_array($retval3))
												{
												 $idss=$row3['product_id'];
												 $prid=$row3['profile_id'];
												 $prname=$row3['name'];
												 $pimgs=$row['product_img'];
												?>
												<option value="<?php echo $prid; ?>"> <?php echo $prname;  ?> </option>
											<?php
											   }
											?>
												</select>
                                        </div>
										 
										 <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control"  name="pname" required title="please enter product name" value="<?php echo $row['product_name']; ?>" >
                                         </div>
										 
										  <div class="form-group">
                                            <label>Product Information</label>
                                            <textarea class="form-control" rows="3" name="pinfo"  required title="please enter product info"><?php echo $row['product_info']; ?></textarea>
                                         </div>
										

										<div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" name="price" required pattern="\d*" title="please enter product price" value="<?php echo $row['product_price']; ?>">
                                         </div>
										
										<div class="form-group">
                                            <label>Product Quantity</label>
                                            <input class="form-control" name="qnt" required pattern="\d*" title="please enter product quantity" value="<?php echo $row['quant']; ?>">
                                         </div>
										
										<div class="form-group">
                                            <label>Product Image</label><br> <?php echo "<img src='images-product/$pimgs' height='40' width='80'>"; ?>
                                            <input  class="form-control" type="file" name="pimg" >
											<input class="form-control" type="hidden" name="proimg"   value="<?php echo $row['product_img'];  ?>" >                                       
									   </div>
										 
										 <div class="form-group">
                                            <label>purchase Information</label>
                                            <textarea class="form-control" name="purchaseinfo" rows="3" required title="please enter purchase info"><?php echo $row['purchase_info']; ?></textarea>
                                         </div>
									
										<div class="form-group">
                                            <label>Product Entery Date</label>
                                            <input type="date" class="form-control" required  name="updated"  value="<?php echo $row['updated']; ?>" >
                                         </div>
									    
										<div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control" name="isactive" required pattern="[01]"  title="enter only 0 or 1" value="<?php echo $row['is_active']; ?>">
                                         </div>

										<div class="form-group">
                                            <label>Code</label>
                                            <input class="form-control" name="code" required pattern="[A-Z 0-9]*"  title="please enter  alphabetic  & numeric code  " value="<?php echo $row['code']; ?>">
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
