 <?php include"headerr.php"; ?>
<?php


	$query="select * from category";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
       
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4> Category</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="category" method="post" action="category_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="8"><a href="ins_category.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   	
                                            <th>Category id</th>		
											<th>Category Name</th>
									<!--	<th>Category Info</th>  -->
											<th>Image</th>
											<th>Visibility</th>
											<th>View</th>
											<th>Update</th>
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
					//	echo "<td>".$row['category_id']."</td>";
						echo "<td>".$row['category_name']."</td>";
					//	echo "<td>".$row['category_info']."</td>";
						$cimgs=$row['img'];
						echo "<td><img src='images-category/$cimgs' height='60' width='90'></td>"; 
						echo "<td>".$row['is_active']."</td>";
						$catid=$row['category_id'];
						echo "<td><center><a href='categoryview1.php?catid=$catid'><p class='fa fa-search-plus'></p></a></center></td>";
						echo "<td><a href='upd_category.php?del=$catid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_category.php?del=$catid&cimg=$cimgs'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td><center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $catid; ?>">
							</center></td>    
							</tr>
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