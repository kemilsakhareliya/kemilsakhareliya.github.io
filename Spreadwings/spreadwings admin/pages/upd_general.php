<?php include"headerr.php"; ?>

<?php
if(isset($_REQUEST['del']))
{
	 $gid=$_REQUEST['del'];
	 
	 $_SESSION['updgeneral']=$gid;


	$query="select * from general where id=$gid";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		
?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">General Update</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="general_update" action="log_upd_general.php"  method="post" >
									
                                         <div class="form-group">
                                            <label>Profile Id</label>
                                            <select class="form-control" name="multiple" >
                                               <?php
	
											
												$query2="select * from profile p,general g where id=$gid and p.profile_id=g.profile_id ";
												$retval2=mysqli_query($con,$query2);
												
												while($row2=mysqli_fetch_array($retval2))
												{
												 $vvid=$row2['id'];
												 $ppid=$row2['profile_id'];
												 $pnm=$row2['name'];
												
												
												?>
												<option value="<?php echo $ppid; ?>"> <?php echo $pnm;  ?> </option>
											    <?php
											     }
											    ?>
                                            </select>
                                        </div>
										

                                         <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="names" required pattern="[A-Z a-z.-]*" title="please enter name" value="<?php echo $row['field_name']  ?>" >
                                         </div>
										 
										 
										 <div class="form-group">
                                            <label>Name Info</label>
                                            <input class="form-control" name="nameinfo" required title="please enter name info" value="<?php echo $row['field_name_info']  ?>">
                                         </div>


									  
                                      
                                        <button type="submit"  name="submit"  class="btn btn-success">Update</button>
                                      
                                    </form>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
	



<?php 

	}
 }
 ?>
 <?php include"footerr.php"; ?>