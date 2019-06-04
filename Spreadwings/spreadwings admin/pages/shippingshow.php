 <?php include"headerr.php"; ?>
<?php


	$query="select * from shippingadd s, user u where s.uid=u.uid";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
          
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Shipping Address</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="f1" method="post" action="shipping_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									<!-- <th align="right" colspan="8"><a href="ins_shipping.php">ADD</a></th> -->
									</tr>
                                        <tr>
									   	
										<th>Shipping Id</th>		
										<th>User Name</th>	
										<th>First Name</th>	
										<th>City</th>
										<th>State</th>
							<!--		<th>Last Name</th>
								    	<th>Address</th>
								    	<th>City</th>
										<th>State</th>
								    	<th>Pincode</th>
										<th>Phone No </th>
										<th>E-Mail</th>
									    <th>Update</th> -->
										<th>view</th>
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
						//echo "<td>".$row['shipadd_id']."</td>";
					//	echo "<td>".$row['uid']."</td>";
						echo "<td>".$row['first']."</td>";
						echo "<td>".$row['fname']."</td>";
						echo "<td>".$row['city']."</td>";
						echo "<td>".$row['state']."</td>";
					/*	echo "<td>".$row['lname']."</td>";
						echo "<td>".$row['address']."</td>";
						echo "<td>".$row['city']."</td>";
						echo "<td>".$row['state']."</td>";
				    	echo "<td>".$row['pincode']."</td>";
						echo "<td>".$row['pno']."</td>";
						echo "<td>".$row['email']."</td>"; */
						$sid=$row['shipadd_id'];
						echo "<td><center><a href='shippingview2.php?shid=$sid'><p class='fa fa-search-plus'></p></a></center></td>";
					//	echo "<td><a href='upd_shipping.php?del=$sid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_shipping.php?del=$sid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $sid; ?>"></center></td>    </tr>
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