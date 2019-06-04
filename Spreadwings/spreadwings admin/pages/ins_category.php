<?php include"headerr.php"; ?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category Add</h1>
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
                                    <form role="form" name="category" action="log_ins_category.php"  method="post" enctype="multipart/form-data" >
									
                                        
										
										<div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control"  name="cname" required pattern="[A-Za-z]*" title="please enter valid category name" >
                                        </div>
										
										
										 <div class="form-group">
                                            <label>Category Info</label>
                                            <textarea class="form-control" rows="3"  name="cinfo" rows="5" required title="please enter category information"></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" type="file" name="cimg" required title="please upload image">
                                        </div>
										 
										
										<div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control" name="isactive" required pattern="[01]"  title="enter only 0 or 1 for Visibility" >
                                        </div>


                                      
                                        <button type="submit"  name="submit"  class="btn btn-success">Insert</button>
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
