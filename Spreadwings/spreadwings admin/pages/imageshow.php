 <?php include"headerr.php"; ?>

<?php

   
	$query="select * from img i, profile p where i.profile_id=p.profile_id";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Image</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="image_show" method="post" action="image_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="8"><a href="ins_image.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   	<th>Id</th>
										<th>Profile Name</th>		
										<th>Image 1</th>
										<th>Image 2</th>
										<th>Quote</th>
										<th>Update</th>
										<th>Delete</th>
										<th>Multi Delete</th>
                                         </tr>
                                    </thead>
										
                                    <tbody>
         
				
                                            
<?php	
					$cnt=1;
					while($row=mysqli_fetch_array($retval))
					{
						echo '<tr class="odd gradeX">';
						echo "<td>".$cnt."</td>";
					//	echo "<td>".$row['id']."</td>";
					//	echo "<td>".$row['profile_id']."</td>";
						echo "<td>".$row['name']."</td>";
						$fimgs=$row['fimg'];
						echo "<td><img src='images-profile_all/$fimgs' height='50' width='60'></td>"; 
						$simgs=$row['simg'];
						echo "<td><img src='images-profile_all/$simgs' height='50' width='60'></td>"; 
						echo "<td>".$row['quote']."</td>";
						
						$imid=$row['id'];
						echo "<td><a href='upd_image.php?del=$imid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_image.php?del=$imid&fimg=$fimgs&simg=$simgs'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
					   ?>
					   <td>
					   <center>
					   <div class="checkbox">
							<label><input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $imid; ?>"></center></td>
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