<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['blogid']))
{
	 $uj=$_REQUEST['blogid'];
	 
	


	$query="select * from blog where blog_id=$uj";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
	
	 $bimgs=$row['blog_img'];
		
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Blog Details</h2>
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
                                            <input class="form-control" name="author" required pattern="[A-Z a-z.-]*" title="please enter author name" value="<?php echo $row['author']  ?>" readonly >
                                        </div>
										

                                         <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" required pattern="[0-9 A-Z a-z.-]*" title="please enter title" value="<?php echo $row['title']  ?>" readonly >
                                         </div>
										 
										

                                         <div class="form-group">
                                            <label>Information</label>
                                            <textarea class="form-control" rows="3" name="info" rows="5" required title="please enter information" readonly><?php echo $row['info']  ?></textarea>
                                        </div>
										 
										<div class="form-group">
                                            <label>More Information</label>
                                            <textarea class="form-control" rows="5" name="allinfo" rows="5" required title="please enter All information" readonly><?php echo $row['allinfo']  ?></textarea>
                                        </div>
										 
										  <div class="form-group">
                                            <label>Post Date</label>
                                            <input type="date" class="form-control" name="pdate"  value="<?php echo $row['posted_date']  ?>" readonly >
                                         </div>
										 
										 
										<div class="form-group">
                                            <label>Blog Image</label><br> <?php echo "<img src='images-blog/$bimgs' height='80' width='100'>"; ?>
                                        </div>
										
										
                                      
                                      	<a href="blogshow.php"> <button type="button" class="btn btn-info">Back</button></a>
									 
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
