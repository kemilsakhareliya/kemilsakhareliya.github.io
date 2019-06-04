<?php include"headerr.php"; ?>

<?php
if(isset($_REQUEST['del']))
{
	 $uj=$_REQUEST['del'];
	 
	 $_SESSION['updfaq']=$uj;


	$query="select * from faq where id=$uj";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Faq Update</h1>
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
                                    <form role="form" name="faq_upd" action="log_upd_faq.php"  method="post" >
									
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input class="form-control" name="que"  required title="please enter Question" value="<?php echo $row['que'] ?>">
                                        </div>
										

                                         <div class="form-group">
                                            <label>Answers</label>
                                            <textarea class="form-control" rows="3" name="ans" required pattern="[A-Za-z]*" ><?php echo $row['ans'] ?></textarea>
                                         </div>
										 

                                        <div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control"  name="act" required pattern="[01]"  title="enter only 0 or 1" value="<?php echo $row['is_active'] ?>">
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
