 <?php include"headerr.php"; ?>
<?php

	$query="select * from profile p,category c where p.category_id=c.category_id order by profile_id";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
         
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Profile</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="profile" method="post" action="profile_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="8"><a href="ins_profile.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   	
										<th>Profile Id</th>		
										<th>Category Name</th>
										<th>Name</th>
										<th>Image</th>
										<th>View</th>
										
								<!--		
										<th>Born</th>
										<th>Years Active</th>		
										<th>Nationality</th>
										<th>Occupation</th>
										<th>Gender</th>
										<th>Image</th>
										<th>Hometown</th>		
										
										<th>Other Info</th>
										<th>Visibility</th> -->
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
						
						  $up=$row['profile_id'];
						echo '<tr class="odd gradeX" >';
						echo "<td>".$cnt."</td>";
					//	echo "<td>".$row['profile_id']."</td>";
						echo "<td>".$row['category_name']."</td>";
					//	echo "<td>".$row['category_id']."</td>";
						echo "<td>".$row['name']."</td>";
						$pimgs=$row['pimage'];
						echo "<td><img src='images-profile/$pimgs' height='60' width='60'></td>"; 
						
					//	echo "<td>".$row['born']."</td>";
					    echo "<td><center><a href='profileview1.php?vid=$up'><p class='fa fa-search-plus'></p></a></center></td>";
					/*	echo "<td>".$row['known']."</td>";
						echo "<td>".$row['years_active']."</td>";
						echo "<td>".$row['nationality']."</td>";
						echo "<td>".$row['occupation']."</td>";
						echo "<td>".$row['gender']."</td>"; 
					//	echo "<td>".$row['pimage']."</td>";
						echo "<td>".$row['hometown']."</td>";
					
						$simgs=$row['signature_img'];
						echo "<td><img src='images-profile/$simgs' height='40' width='80'></td>"; 
						echo "<td>".$row['other_info']."</td>";
						
						echo "<td>".$row['is_active']."</td>"; */ 
						
				
					
						
						echo "<td><a href='upd_profile.php?upd=$up'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
				
						echo "<td><a href='del_profile.php?del=$up&proimg=$pimgs'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $up; ?>"></center></td>    </tr>
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