<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['upd']))
{
	 $oi=$_REQUEST['upd'];
	 
	 $_SESSION['updonline']=$oi;


	$query="select * from onlinestore where online_id=$oi";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
		
?>


 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Onlinestore Update</h2>
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
                                    <form role="form" name="online_upd" action="log_upd_onlinestore.php"  method="post" >
									
                                        <div class="form-group">
                                            <label>Product Type</label>
                                            <input type="text" class="form-control" name="ptype" required pattern="[A-Z a-z.-]*" title="please enter product_type" value="<?php echo $row['product_type']  ?>"  >
                                        </div>
								
										
										 <div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control"  name="isactive"  required pattern="[01]"  title="enter only 0 or 1 for visibility" value="<?php echo $row['is_active']  ?>"  >
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