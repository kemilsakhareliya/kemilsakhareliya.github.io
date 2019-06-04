<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['upd']))
{
	 $uj=$_REQUEST['upd'];
	 
	 $_SESSION['updvideo']=$uj;


	$query="select * from video where id=$uj";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		
?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Video</h1>
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
                                    <form role="form" name="img_ins" action="log_upd_video.php"  method="post"  enctype="multipart/form-data" >
									
                                            <div class="form-group">
                                            <label>Multiple Selects</label>
                                            <select  class="form-control"  name="multiple">
                                             	<?php
	
											
												$query2="select v.id,p.profile_id,p.name from profile p,video v where id=$uj and p.profile_id=v.profile_id ";
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
                                            <label>Url</label>
                                            <input class="form-control" name="url" required title="please enter url" value="<?php echo $row['url'];  ?>" >
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
