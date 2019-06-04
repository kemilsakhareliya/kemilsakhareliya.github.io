 <?php include"headerr.php"; ?>
<?php

   
	$query="select * from blog";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
    
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Blog</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="blog_show" method="post" action="blog_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="8"><a href="ins_blog.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   		<th>Blog id</th>		
											<th>Author</th>
											<th>Title</th>
									<!--	<th>Information</th> -->
											<th>Blog img</th>
									<!--	<th>Post Date</th>  -->
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
						//echo "<td>".$row['blog_id']."</td>";
						echo "<td>".$row['author']."</td>";
						echo "<td>".$row['title']."</td>";
				//		echo "<td>".$row['info']."</td>";
				//		echo "<td>".$row['posted_date']."</td>";
						$pimgs=$row['blog_img'];
						echo "<td><img src='images-blog/$pimgs' height='70' width='70'></td>"; 
						$bid=$row['blog_id'];
						echo "<td><center><a href='blogview1.php?blogid=$bid'><p class='fa fa-search-plus'></p></a></center></td>";
						echo "<td><a href='upd_blog.php?del=$bid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_blog.php?del=$bid&bimg=$pimgs'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
					   ?>
					   <td>
					   <center>
					   <div class="checkbox">
							<label><input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $bid; ?>"></center></td>
							</label>
							</div>
					   <input class="form-control" type="hidden" name="muldel_check[]" id="muldel_check[]" value="<?php echo $pimgs; ?>">
					   
						
                                                
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