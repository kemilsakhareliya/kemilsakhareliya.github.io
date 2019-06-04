<?php include"headerr.php"; ?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">OnlineStore Add</h2>
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
                                    <form role="form" name="online_ins" action="log_ins_onlinestore.php"   method="post" >
									
                                        <div class="form-group">
                                            <label>Product Type</label>
                                            <input class="form-control" name="ptype"  required pattern="[A-Z a-z.-]*" title="please enter product_type" >
                                        </div>
										

                                         <div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control"  name="isactive" required pattern="[01]"  title="enter only 0 or 1 for visibility" >
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
