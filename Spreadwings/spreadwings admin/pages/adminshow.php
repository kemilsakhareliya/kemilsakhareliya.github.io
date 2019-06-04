 <?php include"headerr.php"; ?>
<?php
  
	$query="select * from admin";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="f1" method="post" action="admin_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="10"><a href="ins_admin.php"><a href="ins_admin.php"><button type="button" class="btn btn-info">ADD</button></a></a></th>
									</tr>
                                        <tr>
									   	
                                         <th>Admin id</th>		
										 <th>First</th>
										 <th>middle</th>
										 <th>Last</th>
										 <th>E-mail</th>
										 <th>password</th>
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
						//echo "<td>".$row['aid']."</td>";
						echo "<td>".$row['first']."</td>";
						echo "<td>".$row['middle']."</td>";
						echo "<td>".$row['last']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".$row['password']."</td>";
						$adid=$row['aid'];
						echo "<td><a href='upd_admin.php?del=$adid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_admin.php?del=$adid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $adid; ?>"></center></td>    </tr>
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