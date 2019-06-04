<?php include"headerr.php"; ?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Blog Add</h2>
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
                                    <form role="form" name="blog_ins" action="log_ins_blog.php"  method="post"  enctype="multipart/form-data" >
									
                                        <div class="form-group">
                                            <label>Author Name</label>
                                            <input class="form-control" name="author" required pattern="[A-Z a-z.-]*" title="please enter author name" >
                                        </div>
										

                                         <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name="title" required pattern="[0-9 A-Z a-z.-]*" title="please enter title without special characters" >
                                         </div>
										 
										

                                         <div class="form-group">
                                            <label>Information</label>
                                            <textarea class="form-control" rows="3" name="info" rows="5" required title="please enter info"></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>More Information</label>
                                            <textarea class="form-control" rows="5" name="allinfo" rows="5" required title="please enter All information" ></textarea>
                                        </div>
										
										 <div class="form-group">
                                            <label>Post Date</label>
                                            <input type="date" class="form-control" name="pdate" required title="please enter post date"   >
                                         </div>
										 
										<div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control"  type="file" name="blogimg" required title="please upload blog image">
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
