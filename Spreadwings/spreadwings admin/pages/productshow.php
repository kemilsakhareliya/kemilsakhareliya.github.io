<?php include"headerr.php"; ?>

<?php


	$query="select * from product p,onlinestore o,profile r where p.online_id=o.online_id and p.profile_id=r.profile_id order by p.product_id";
	$retval=mysqli_query($con,$query);
?>

        <div id="page-wrapper">
        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Product</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="product"  method="post" action="product_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									<th align="right" colspan="8" ><a href="ins_product.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   	
                                            <th>Product Id</th>		
											<th>Online Name</th>	
											
											<th>Product name</th>
											<th>Image</th>	
								<!--		<th>product info</th>
											<th>product price</th>
											<th>Quantity </th>
											<th>product img</th>
											<th>purchase info</th>
											<th>Visiblity</th>
											<th>code</th>  -->
											<th>View</th>
											<th>Update</th>
											<th>Delete</th>
											<th>More Delete</th>
                                         </tr>
                                    </thead>
										
                                    <tbody>
         
				
                                            
<?php	
						$cnt=1;
					while($row=mysqli_fetch_array($retval))
					{
						
						
						echo '<tr class="odd gradeX">';
					//	echo "<td>".$row['product_id']."</td>";
				    	echo "<td>".$cnt."</td>";
						echo "<td>".$row['product_type']."</td>";
					//	echo "<td>".$row['name']."</td>";
					//	echo "<td>".$row['online_id']."</td>";
					//	echo "<td>".$row['profile_id']."</td>";
						echo "<td>".$row['product_name']."</td>";
				/*		echo "<td>".$row['product_info']."</td>";
						echo "<td>".$row['product_price']."</td>";
						echo "<td>".$row['quant']."</td>";  */
						$pimgs=$row['product_img'];
						echo "<td><img src='images-product/$pimgs' height='60' width='90'></td>"; 
			/*			echo "<td>".$row['purchase_info']."</td>";
						echo "<td>".$row['is_active']."</td>";
						echo "<td>".$row['code']."</td>";   */
						$proid=$row['product_id'];
						echo "<td><center><a href='productview1.php?prid=$proid'><p class='fa fa-search-plus'></p></a></center></td>";
						echo "<td><a href='upd_product.php?upd=$proid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_product.php?del=$proid&pimg=$pimgs'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $proid; ?>"></center></td>    </tr>
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