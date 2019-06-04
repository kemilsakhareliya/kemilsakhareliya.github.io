 <?php include"headerr.php"; ?>
<?php

	$query="select * from user";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
         
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>User</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name= "user" method="post" action="user_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
								<!--	<tr>
									 <th align="right" colspan="10"><a href="ins_user.php">ADD</a></th>
									</tr> -->
                                        <tr>
									   	
                                            <th>User Id</th>		
											<th>First</th>
											<th>Middle</th>
											<th>Last</th>
											<th>E-Mail</th>
											<th>Password</th>
											<th>Visibility</th>
											<th>Update<br>Visibility</th>
											<th>Delete</th>
											<th>Multiple<br>Delete</th>
                                         </tr>
                                    </thead>
										
                                    <tbody>
         
				
                                            
<?php	
					$usid=1;
					while($row=mysqli_fetch_array($retval))
					{
						
						  
							echo '<tr class="odd gradeX">';
							echo "<td>".$usid."</td>";
							//echo "<td>".$row['uid']."</td>";
							echo "<td>".$row['first']."</td>";
							echo "<td>".$row['middle']."</td>";
							echo "<td>".$row['last']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['password']."</td>";
							echo "<td><center>".$row['is_active']."</center></td>";
							$user=$row['uid'];
							
						echo "<td><a href='upd_user.php?del=$user'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_user.php?del=$user'><center><span class='glyphicon glyphicon-remove-sign'></center></span></a></td>";
						   $usid=$usid+1;
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $user; ?>"></center></td>    </tr>
					         </label>
							</div>
                                                
                      <?php                       
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