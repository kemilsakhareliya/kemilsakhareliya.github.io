 <?php include"headerr.php"; ?>
<?php

   
	$query="select * from onlinestore";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
          
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Online Store</h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="onlinestore" method="post" action="onlinestore_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="8"><a href="ins_onlinestore.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   	
                                         <th>Online Id</th>		
										 <th>Product type</th>
										 <th>Visibility</th>
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
					//	echo "<td>".$row['online_id']."</td>";
						echo "<td>".$row['product_type']."</td>";
					//	echo "<td>".$row['updated']."</td>";
						echo "<td>".$row['is_active']."</td>";
						$onid=$row['online_id'];
						echo "<td><a href='upd_onlinestore.php?upd=$onid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_onlinestore.php?del=$onid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $onid; ?>"></center></td>    </tr>
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