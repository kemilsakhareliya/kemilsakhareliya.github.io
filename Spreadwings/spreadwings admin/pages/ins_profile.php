<?php include"headerr.php"; ?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Profile Add</h2>
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
                                    <form role="form" name="profile_insert" action="log_ins_profile.php" method="post" enctype="multipart/form-data" >
									
                                       
										<div class="form-group">
											<label>First Name</label>
											<select  class="form-control" name="multiple" required="required"  title="please select category">
											<option value="">select</option>
											<?php 
										 
										
											$query="select * from category";
											$retval=mysqli_query($con,$query);

											while($row=mysqli_fetch_array($retval))
											{
												 ?>
												
												 <option value="<?php echo $row['category_id']; ?>">
												 <?php echo $row['category_name']."</option>";
												
											}
											?>

										   
											</select>
										</div>

										<div class="form-group">
                                            <label>Profile Name</label>
                                            <input class="form-control" name="pname" required pattern="[A-Z a-z.-]*" title="please enter profile name" >
                                        </div>
										
										<div class="form-group">
                                            <label>Born</label>
                                            <input class="form-control"  name="born" required title="please enter born info" >
                                        </div>
																				
										<div class="form-group">
                                            <label>Known</label>
                                            <input class="form-control"  name="known" required title="please enter known info"> 
                                        </div>										
										
										<div class="form-group">
                                            <label>Years Active</label>
                                            <input class="form-control"  name="yactive" required title="please enter years active info" >
                                        </div>	

										<div class="form-group">
                                            <label>Nationality</label>
                                            <input class="form-control"  name="nationality" required pattern="[A-Z a-z.-]*" title="please enter nationality info" >
                                        </div>	

										<div class="form-group">
                                            <label>Occupation</label>
                                            <input class="form-control"  name="occupation" required title="please enter occupation info" >
                                        </div>	



                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio"  name="gender" value="Female" >Female
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" value="Male" checked >Male
                                                </label>
                                            </div>
                                          
                                        </div>
										
										<div class="form-group">
                                            <label>Profile Image</label>
                                            <input class="form-control" type="file" name="pimg"  required  title="please upload profile image">
                                        </div>	

										<div class="form-group">
                                            <label>Hometown</label>
                                            <input class="form-control" name="hometown" required pattern="[A-Z a-z.-]*" title="please enter hometown info">
                                        </div>	
										
									
                                        <div class="form-group">
                                            <label>Other Information</label>
                                            <textarea class="form-control" rows="4" name="otherinfo" required title="please enter other info" ></textarea>
                                        </div>

										<div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control" name="isactive" required pattern="[01]"  title="enter only 0 or 1 for Visibility"  >
                                        </div>	
										
                                       

						
									  
                                      
                                        <button type="submit"  name="submit"  class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-success">Reset </button>
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
