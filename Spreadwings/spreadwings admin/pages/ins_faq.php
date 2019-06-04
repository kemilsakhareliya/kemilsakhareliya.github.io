<?php include"headerr.php"; ?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Faq Add</h1>
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
                                    <form role="form" name="faq_ins" action="log_ins_faq.php"  method="post" >
									
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input class="form-control" name="que"  required title="please enter Question">
                                        </div>
										

                                         <div class="form-group">
                                            <label>Answers</label>
                                            <textarea class="form-control" rows="3" name="ans" required pattern="[A-Za-z]*" ></textarea>
                                         </div>
										 

                                        <div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control"  name="act" required pattern="[01]"  title="enter only 0 or 1 for Visibility" >
                                         </div>
										 
		
                                        <button type="submit"  name="submit"  class="btn btn-success">Submit</button>
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
