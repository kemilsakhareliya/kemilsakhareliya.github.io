<?php include"headerr.php"; ?>

	   <div id="page-wrapper">
      
            <div class="row">
               
             
        
            <div class="row">
             
                <div >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4> User Order Details </h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Total Order</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">Shipping Address</a>
                                </li>
                                <li><a href="#messages-pills" data-toggle="tab">Billing Address</a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                           <div class="tab-content">
                            <div class="tab-pane fade in active" id="home-pills">
                               		   <br>
											<table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
												
													<tr>
													
													<th>Checkout Item Id</th>		
												<!--	<th>Chekout Id</th> -->
													<th>Product Name</th>
													<th>Quantity</th>
													<th>Price</th>
											
													</tr>
												</thead>
													
												<tbody>
					 				<?php	
					
								  $cnt=1;
								  $ptot=0;
								  if(isset($_REQUEST['chid']))
									 {
									    $chid=$_REQUEST['chid'];
										$_SESSION["chids"]=$chid;
										$ckid=$_SESSION["chids"];
									  }  
										
										$query="select * from checkout_item c, product p where checkout_id=$ckid and c.product_id=p.product_id";
										$retval=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($retval))
											{
												
												  
												echo '<tr class="odd gradeX">';
												echo "<td>".$cnt."</td>";
											//  echo "<td>".$row['citem_id']."</td>";
											//	echo "<td>".$row['checkout_id']."</td>";
											//	echo "<td>".$row['product_id']."</td>";
												echo "<td>".$row['product_name']."</td>";
												echo "<td>".$row['qty']."</td>";
												echo "<td>".$row['price']."</td>";
												$citid=$row['citem_id'];
												echo "</tr>";
														  
												$cnt=$cnt+1;	
												$subto=$row['qty']*$row['price'];
												$ptot=$ptot+$subto;
											}
									?>
									 
												</tbody>
											</table>
										
										<div class="row show-grid" align="right" >
											<div class="col-md-2 col-md-offset-10">Total : <?php echo $ptot;?></div>
										</div>
										
										
                            </div>
                            <div class="tab-pane fade" id="profile-pills">
                                    <h4>Shipping Address</h4>
<!--------------------------------------------------------------------------------------------->

											<table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
												<tr>
												<!-- <th align="right" colspan="8"><a href="ins_shipping.php">ADD</a></th> -->
												</tr>
													<tr>
													
													<th>Shipping Id</th>		
													<th>User Name</th>	
													<th>First Name</th>	
													<th>Last Name</th>
													<th>City</th>
													<th>State</th>
													
													<th>Address</th>
											<!--	<th>City</th>
													<th>State</th>
													<th>Pincode</th>
													<th>Phone No </th>
													<th>E-Mail</th>
													<th>Update</th> -->
													<th>view</th>
												
													 </tr>
												</thead>
													
												<tbody>
					 
							
														
								<?php	
									 
								
										$cnt=1;
										$query2="select * from shippingadd s,checkout c,user u where s.shipadd_id=c.shipadd_id and  s.uid=u.uid and checkout_id=$ckid";
										$retval2=mysqli_query($con,$query2);
										while($row=mysqli_fetch_array($retval2))
										{
											
											  
											echo '<tr class="odd gradeX">';
											echo "<td>".$cnt."</td>";
											//echo "<td>".$row['shipadd_id']."</td>";
										//	echo "<td>".$row['uid']."</td>";
											echo "<td>".$row['first']."</td>";
											echo "<td>".$row['fname']."</td>";
											echo "<td>".$row['lname']."</td>";
											echo "<td>".$row['city']."</td>";
											echo "<td>".$row['state']."</td>";
											
											echo "<td>".$row['address']."</td>";
										/*	echo "<td>".$row['city']."</td>";
											echo "<td>".$row['state']."</td>";
											echo "<td>".$row['pincode']."</td>";
											echo "<td>".$row['pno']."</td>";
											echo "<td>".$row['email']."</td>"; */
											$sid=$row['shipadd_id'];
											echo "<td><center><a href='shippingview1.php?shid=$sid'><p class='fa fa-search-plus'></p></a></center></td>";
										//	echo "<td><a href='upd_shipping.php?del=$sid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
										//	echo "<td><a href='del_shipping.php?del=$sid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
											
												?>
											
																	
										  <?php        
											$cnt=$cnt+1;	
										}
										?>
												
														</tbody>
													</table>

						
										
		
<!--------------------------------------------------------------------------------------------->

							   </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Billing Address</h4>
<!--------------------------------------------------------------------------------------------->

										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
												<tr>
												<!-- <th align="right" colspan="8"><a href="ins_shipping.php">ADD</a></th> -->
												</tr>
													<tr>
													
													<th>Billing Id</th>		
													<th>User Name</th>	
													<th>First Name</th>	
													<th>Last Name</th>
													<th>City</th>
													<th>State</th>
													
													<th>Address</th>
											<!--	<th>City</th>
													<th>State</th>
													<th>Pincode</th>
													<th>Phone No </th>
													<th>E-Mail</th>
													<th>Update</th> -->
													<th>view</th>
													
													 </tr>
												</thead>
													
												<tbody>
					 
							
														
								<?php	
						  	 
						
								$cnt=1;
								$query3="select * from billingadd b,checkout c,user u where b.billadd_id=c.billadd_id and  b.uid=u.uid and checkout_id=$ckid";
								$retval3=mysqli_query($con,$query3);
								while($row=mysqli_fetch_array($retval3))
								{
									
									  
									echo '<tr class="odd gradeX">';
									echo "<td>".$cnt."</td>";
									//echo "<td>".$row['billadd_id']."</td>";
								//	echo "<td>".$row['uid']."</td>";
									echo "<td>".$row['first']."</td>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['lname']."</td>";
									echo "<td>".$row['city']."</td>";
									echo "<td>".$row['state']."</td>";
									
									echo "<td>".$row['address']."</td>";
								/*	echo "<td>".$row['city']."</td>";
									echo "<td>".$row['state']."</td>";
									echo "<td>".$row['pincode']."</td>";
									echo "<td>".$row['pno']."</td>";
									echo "<td>".$row['email']."</td>"; */
									$bid=$row['billadd_id'];
									echo "<td><center><a href='billingview1.php?bilid=$bid'><p class='fa fa-search-plus'></p></a></center></td>";
													
 								
								//	echo "<td><a href='upd_shipping.php?del=$sid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
								//	echo "<td><a href='del_shipping.php?del=$sid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
									
										?>
									
															
								  <?php        
									$cnt=$cnt+1;	
								}
								?>
										
										
							
												</tbody>
											</table>

<!--------------------------------------------------------------------------------------------->
                              
							   </div>
                               
                            </div>
									<a href="checkoutshow.php"> <button type="button" class="btn btn-info">Back</button></a>
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
       
            <!-- /.row -->
          
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
	
	
	
	   
	
	
								
				 <?php include"footerr.php"; ?>