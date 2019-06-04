<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['del']))
{
	 $uj=$_REQUEST['del'];
	 
	 $_SESSION['updblog']=$uj;


	$query="select * from blog where blog_id=$uj";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
	
	 $bimgs=$row['blog_img'];
		
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Blog Update</h2>
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
                                    <form role="form" name="blog_ins" action="log_upd_blog.php"  method="post"  enctype="multipart/form-data" >
									
                                        <div class="form-group">
                                            <label>Author Name</label>
                                            <input class="form-control" name="author" required pattern="[A-Z a-z.-]*" title="please enter author name" value="<?php echo $row['author']  ?>" >
                                        </div>
										

                                         <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" required pattern="[0-9 A-Z a-z.-]*" title="please enter title" value="<?php echo $row['title']  ?>" >
                                         </div>
										 
										

                                         <div class="form-group">
                                            <label>Information</label>
                                            <textarea class="form-control" rows="3" name="info" rows="5" required title="please enter information"><?php echo $row['info']  ?></textarea>
                                        </div>
										 
										 <div class="form-group">
                                            <label>More Information</label>
                                            <textarea class="form-control" rows="5" name="allinfo" rows="5" required title="please enter All information" ><?php echo $row['allinfo']  ?></textarea>
                                        </div>
										
										 <div class="form-group">
                                            <label>Post Date</label>
                                            <input type="date" class="form-control" name="pdate" required title="please enter post date"  value="<?php echo $row['posted_date']  ?>"  >
                                         </div>
										 
										<div class="form-group">
                                            <label>Image</label><br> <?php echo "<img src='images-blog/$bimgs' height='50' width='80'>"; ?>
                                            <input class="form-control" type="file" name="blogimg" >
							        		<input class="form-control" type="hidden" name="bblogimg"  value="<?php echo $row['blog_img'];  ?>" >  
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
