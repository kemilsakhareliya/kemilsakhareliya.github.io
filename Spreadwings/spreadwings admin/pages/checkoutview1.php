<?php include"headerr.php"; ?>


<?php
if(isset($_REQUEST['chid']))
{
	 $cid=$_REQUEST['chid'];
	 



	$query="select * from checkout where checkout_id=$cid";
	$retval=mysqli_query($con,$query);
//	echo $cid;
	while($row=mysqli_fetch_array($retval))
	{
		
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Checkout Details</h1>
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
                                    <form role="form" name="checkout_upd" action="#"  method="post" >
									

										
									   <div class="form-group">
                                            <label>User Name</label>
                                          <select class="form-control" name="usid" readonly>

											<?php 
										 
										
											$query2="select * from checkout c,user u where checkout_id=$cid and c.uid=u.uid";
											$retval2=mysqli_query($con,$query2);
											
											while($row2=mysqli_fetch_array($retval2))
											{
											 
											$uid=$row2['uid'];

											$uname=$row2['first'];
											
											?>
											<option value="<?php echo $uid; ?>"> <?php echo $uname;  ?> </option>
										 <?php
										   }
										 ?>

										 </select>
                                        </div>
									  
                                     
							
									  
									    <div class="form-group">
                                            <label>Order date</label>
                                            <input type="date" class="form-control" name="odate" value="<?php echo $row['order_date']; ?>" required title="please enter order date" readonly >
                                        </div>
									  
									   <div class="form-group">
                                            <label>Order deliver</label>
                                            <input type="date" class="form-control" name="odeliver" value="<?php echo $row['order_deliver']; ?>" required title="please enter order date" readonly>
                                        </div>
									  
									  
									    <div class="form-group">
                                            <label>Total Amount</label>
                                            <input class="form-control" name="totamt" value="<?php echo $row['totamt']; ?>"  required pattern="\d*" title="please enter total amount" readonly>
                                        </div>
									  
										<div class="form-group">
                                            <label>Payment Type</label>
                                            <input class="form-control" name="ptype" value="<?php echo $row['paymenttype']; ?>" required title="please enter payment type" readonly>
                                        </div>
										
										<div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" name="status" value="<?php echo $row['status']; ?>" required title="please enter order status" readonly >
                                        </div>

										<div class="form-group">
                                            <label>Remarks For Delivery</label>
                                            <input class="form-control" name="remarks" value="<?php echo $row['remarks']; ?>" required title="please enter remarks for delivery" readonly>
                                        </div>
														
										
	
										<a href="checkoutshow.php"> <button type="button" class="btn btn-info">Back</button></a>
									 
                                      
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