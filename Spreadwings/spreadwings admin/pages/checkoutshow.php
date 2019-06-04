 <?php include"headerr.php"; ?>
<?php
   

	$query="select * from checkout c,user u where c.uid=u.uid order by c.checkout_id desc";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
          
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Order Checkout </h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="checkoutt" method="post" action="checkout_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <!-- <th align="right" colspan="8"><a href="ins_checkout.php">ADD</a></th>  -->
									</tr>
                                        <tr>
									   	<th>Checkout Id</th>		
										<th>User Name</th>	
								<!--	<th>Shipadd id</th>	
										<th>Billadd id</th>  -->
										<th>Total Amount</th>
										<th>Order Date</th>
								<!--	<th>Order Deliver</th> 
								        <th>Payment Type</th>
										<th>Order Status</th>
										<th>Remarks</th>
										<th>Visiblity</th>   -->
										<th>View</th>
										<th>Order Total</th>
										<th>Cancel</th>
								<!--	<th>Update</th> -->
										<th>Delete</th>
										<th>Multiple Delete</th>  
                                         </tr>
                                    </thead>
										
                                    <tbody>
         
				
                                            
<?php	
					$cnt=1;
					while($row=mysqli_fetch_array($retval))
					{
						
						  
						echo '<tr class="odd gradeX">';
					  echo "<td>".$cnt."</td>";
					//	echo "<td>".$row['checkout_id']."</td>";
						echo "<td>".$row['first']."</td>";
					//	echo "<td>".$row['uid']."</td>";
					//	echo "<td>".$row['shipadd_id']."</td>";
					//	echo "<td>".$row['billadd_id']."</td>";
						echo "<td>".$row['totamt']."</td>";
						echo "<td>".$row['order_date']."</td>";
					/*	echo "<td>".$row['order_deliver']."</td>";
						echo "<td>".$row['paymenttype']."</td>";
						echo "<td>".$row['status']."</td>";
						echo "<td>".$row['remarks']."</td>";
						echo "<td>".$row['is_active']."</td>"; */
						$chkid=$row['checkout_id'];
						
						echo "<td><center><a href='checkoutview1.php?chid=$chkid'><p class='fa fa-search-plus'></p></a></center></td>";
						echo "<td><center><a href='order_info.php?chid=$chkid'><p class='fa fa-plus-square'></p></a></center></td>";
						
						$std=$row['status'];
						if($std=="Dispatched")
						{
						echo "<td><center>Dispatched</center></td>";
						}
					    else if($std!="Cancel")
					    {
						echo "<td><a href='upd_order_cancellation.php?cancel=$chkid'><center> <span class='glyphicon glyphicon-remove-circle'> </span></center></a></td>";
						}
						
						else
						{
						echo "<td><center>Canceled</center></td>";
						
						}
					
					
					//	echo "<td><a href='upd_checkout.php?upd=$chkid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_checkout.php?del=$chkid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $chkid; ?>"></center></td>    </tr>
					         </label>
							</div>
					
                                                
                    <?php        
						$cnt=$cnt+1;	
					}
					?>
 	  	                    
                                    </tbody>
                                </table>
                        <button type="submit"  name="submit" class="btn btn-success">Delete</button>  
           
			
						  </form>
							</div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			  	
            <!-- /.row -->
    <!-- /#wrapper -->
 <?php include"footerr.php"; ?>