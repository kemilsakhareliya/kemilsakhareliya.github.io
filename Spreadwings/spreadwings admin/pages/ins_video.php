<?php include"headerr.php"; ?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Video Add</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="video_ins" action="log_ins_video.php"  method="post"  enctype="multipart/form-data" >
									
                                            <div class="form-group">
                                            <label>Selects Profile</label>
                                            <select  class="form-control"  name="multiple" required>
											<option value="">Select</option>
                                              <?php 
 
												$query="select * from profile";
												$retval=mysqli_query($con,$query);
												while($row=mysqli_fetch_array($retval))
												{
													 ?>
													 <option value="<?php echo $row['profile_id']; ?>">
													 <?php echo $row['name']."</option>";
													
												}
												?>
                                            </select>
                                        </div>
										

                                         <div class="form-group">
                                            <label>Url</label>
                                            <input class="form-control" name="url" required title="please enter url" >
                                         </div>
										 
										

                                        <button type="submit"  name="submit"  class="btn btn-success">Insert</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
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
	
<?php include"footerr.php"; ?>
