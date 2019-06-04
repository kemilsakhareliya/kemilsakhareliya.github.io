<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['del']))
{
	 $uj=$_REQUEST['del'];
	 
	 $_SESSION['updimage']=$uj;


	$query="select * from img where id=$uj";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
	   $fimg=$row['fimg'];
	   $simg=$row['simg'];
	   
		
?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Image Update</h1>
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
                                    <form role="form" name="img_ins" action="log_upd_image.php"  method="post"  enctype="multipart/form-data" >
									
                                            <div class="form-group">
                                            <label>Profile Name</label>
                                            <select  class="form-control"  name="multiple">
                                             	<?php
	
											
												$query2="select * from profile p,img i where id=$uj and p.profile_id=i.profile_id ";
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
                                            <label>Image 1</label><br> <?php echo "<img src='images-profile_all/$fimg' height='60' width='60'>"; ?>
                                            <input class="form-control" type="file" name="fimg" >
                                        	<input class="form-control" type="hidden" name="ffimg"   value="<?php echo $row['fimg'];  ?>" >
										</div>	
										
									
										
										
										<div class="form-group">
                                            <label>Image 2</label><br> <?php echo "<img src='images-profile_all/$simg' height='60' width='60'>"; ?>
                                            <input class="form-control" type="file" name="simg"  >
                                        	<input class="form-control" type="hidden" name="ssimg"   value="<?php echo $row['simg'];  ?>" >
										</div>
                                         
										<div class="form-group">
                                            <label>Quote</label>
                                            <textarea class="form-control" rows="3" name="quote" required title="please enter quote" ><?php echo $row['quote'];?></textarea>
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
