 <?php include"headerr.php"; ?>
<?php

 
	$query="select * from faq";
	$retval=mysqli_query($con,$query);
?>
 
 
        <div id="page-wrapper">
        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-heading">
                           
								<div class="alert alert-success">
									<center><h4>Faq </h4></center>
                               </div>
						   
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form role="form" name="faq" method="post" action="faq_muldel.php">
  

								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
									 <th align="right" colspan="8"><a href="ins_faq.php"><button type="button" class="btn btn-info">ADD</button></a></th>
									</tr>
                                        <tr>
									   	    <th>Id</th>		
											<th>Question</th>
											<th>Answer</th>
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
					//	echo "<td>".$row['id']."</td>";
						echo "<td>".$row['que']."</td>";
						echo "<td>".$row['ans']."</td>";
						echo "<td>".$row['is_active']."</td>";
						$faqid=$row['id'];
						echo "<td><a href='upd_faq.php?del=$faqid'><center><i class='fa fa-edit fa-fw'></i></center></a></td>";
						echo "<td><a href='del_faq.php?del=$faqid'><center><span class='glyphicon glyphicon-remove-sign'></span></center></a></td>";
						
							?>
							<td>
							<center>
							<div class="checkbox">
							<label>
							<input type="checkbox" name="del_check[]" id="del_check[]" value="<?php echo $faqid; ?>"></center></td>    </tr>
					         </label>
							</div>
                                                
                      <?php      
						$cnt=$cnt+1;					  
					}
?>
 	  	                    
                                    </tbody>
                                </table>
                        <button type="submit"  name="submit" class="btn btn-success">delete</button>
           
			
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