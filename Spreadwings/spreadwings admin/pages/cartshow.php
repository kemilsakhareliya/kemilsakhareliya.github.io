 <?php include"headerr.php"; ?>
<?php

    
	$query="select * from cart c,user u,product p where c.uid=u.uid and c.product_id=p.product_id order by cart_id";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
       
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                           
						  <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Cart</h4></center>
                               </div>
						   
                        </div>
                     
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="cart" method="post" action="cart_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="8"><a href="ins_cart.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   	
										<th>Cart<br>id</th>
										<th>User<br>Name</th>		
										<th>Product Name</th>
										<th>Quantity</th>
										<th>Total</th>
										<th>Update</th>
										<th>Delete</th>
										<th>Multiple<br>Delete</th>
                                         </tr>
                                    </thead>
										
                                    <tbody>
         
				
                                            
<?php	
					$cnt=1;
					while($row=mysqli_fetch_array($retval))
					{
						
						  
						echo '<tr class="odd gradeX">';
						echo "<td>".$cnt."</td>";
					//	echo "<td>".$row['cart_id']."</td>";
					//	echo "<td>".$row['uid']."</td>";
					//	echo "<td>".$row['product_id']."</td>";
						echo "<td>".$row['first']."</td>";
						echo "<td>".$row['product_name']."</td>";					
						echo "<td>".$row['qty']."</td>";
						echo "<td>".$row['total']."</td>";
						$cartid=$row['cart_id'];
						echo "<td><a href='upd_cart.php?del=$cartid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_cart.php?del=$cartid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $cartid; ?>"></center></td>    </tr>
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