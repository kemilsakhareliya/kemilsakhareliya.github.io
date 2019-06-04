<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['upd']))
{
	 $ps=$_REQUEST['upd'];
	 
	 $_SESSION['updprofile']=$ps;


	$query="select * from profile where profile_id=$ps";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Profile Update</h2>
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
                                    <form role="form" name="profile_update" action="log_upd_profile.php" method="post" enctype="multipart/form-data" >
									
                                      
										

										<div class="form-group">
                                            <label>Category Name</label>
                                            <select  class="form-control" name="multiple" required="required"  title="please select category">
											
  
											<?php
											
										
											$query2="select * from category c,profile p where profile_id=$ps and c.category_id=p.category_id ";
											$retval2=mysqli_query($con,$query2);
											
											while($row2=mysqli_fetch_array($retval2))
											{
											 $vvid=$row2['id'];
											 $ppid=$row2['category_id'];
											 $pnm=$row2['category_name'];
											 $pimgs=$row['pimage']; 
											 $simgs=$row['signature_img'];
											?>
											<option value="<?php echo $ppid; ?>"> <?php echo $pnm;  ?> </option>
										<?php
										   }
										?>
											
											</select>
                                        </div>

									
   									    <div class="form-group">
                                            <label>Profile Name</label>
                                            <input class="form-control" name="pname" required pattern="[A-Z a-z.-]*" title="please enter profile name" value="<?php echo $row['name'];  ?>" >
                                        </div>
										
										<div class="form-group">
                                            <label>Born</label>
                                            <input class="form-control"  name="born" required title="please enter born info" value="<?php echo $row['born'];  ?>" >
                                        </div>
																				
										<div class="form-group">
                                            <label>Known</label>
                                            <input class="form-control"  name="known" required title="please enter known info" value="<?php echo $row['known'];  ?>" > 
                                        </div>										
										
										<div class="form-group">
                                            <label>Years Active</label>
                                            <input class="form-control"  name="yactive" required title="please enter years active info" value="<?php echo $row['years_active'];  ?>" >
                                        </div>	

										<div class="form-group">
                                            <label>Nationality</label>
                                            <input class="form-control"  name="nationality" required pattern="[A-Z a-z.-]*" title="please enter nationality info" value="<?php echo $row['nationality'];  ?>" >
                                        </div>	

										<div class="form-group">
                                            <label>Occupation</label>
                                            <input class="form-control"  name="occupation" required title="please enter occupation info" value="<?php echo $row['occupation'];  ?>" >
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
                                            <label>Profile Image</label><br> <?php echo "<img src='images-profile/$pimgs' height='30' width='60'>"; ?>
                                            <input class="form-control" type="file" name="pimg"   >
											<input class="form-control" type="hidden" name="ppimg"   value="<?php echo $row['pimage'];  ?>" >
										</div>	

										<div class="form-group">
                                            <label>Hometown</label>
                                            <input class="form-control" name="hometown" required pattern="[A-Z a-z.-]*" title="please enter hometown info" value="<?php echo $row['hometown'];  ?>"  >
                                        </div>	
										
									

                                        <div class="form-group">
                                            <label>Other Information</label>
                                            <textarea class="form-control" rows="4" name="otherinfo" required title="please enter other info" ><?php echo $row['other_info'];  ?></textarea>
                                        </div>

										<div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control" name="isactive" required pattern="[01]"  title="enter only 0 or 1 for Visibility"  value="<?php echo $row['is_active'];  ?>"  >
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