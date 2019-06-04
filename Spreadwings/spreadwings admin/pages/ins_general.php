<?php include"headerr.php"; ?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">General Add</h2>
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
                                    <form role="form" name="general_ins" action="log_ins_general.php"  method="post"  enctype="multipart/form-data" >
									
                                            <div class="form-group">
                                            <label>Multiple Selects</label>
                                            <select  class="form-control"  name="multiple" required>
											<option value="">select</option>
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
                                            <label>Name</label>
                                            <input class="form-control"name="names" required pattern="[A-Z a-z.-]*" title="please enter name">
                                         </div>
										  <div class="form-group">
                                            <label>Name information</label>
                                            <input class="form-control" name="nameinfo" required title="please enter name info">
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
