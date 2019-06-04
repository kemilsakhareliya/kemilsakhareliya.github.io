<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['catid']))
{
	 $uj=$_REQUEST['catid'];
	 
	 $_SESSION['updcategory']=$uj;


	$query="select * from category where category_id=$uj";
	$retval=mysqli_query($con,$query);
	
	while($row=mysqli_fetch_array($retval))
	{
	
	$cimgs=$row['img'];	
?>

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category Details</h1>
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
                                    <form role="form" name="category_upd" action="#"  method="post" >
									
                                  <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control"  name="cname" required pattern="[A-Za-z]*" title="please enter category_name"  value="<?php echo $row['category_name']  ?>"  readonly>
                                        </div>
										
										
										 <div class="form-group">
                                            <label>Category Info</label>
                                            <textarea class="form-control"  name="cinfo" rows="6" required title="please enter category_name" readonly><?php echo $row['category_info'];?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Image</label><br><?php echo "<img src='images-category/$cimgs' height='70' width='100'>"; ?>
                                        </div>
										
										
										<div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control" name="isactive" required pattern="[01]"  title="enter only 0 or 1 for Visibility" value="<?php echo $row['is_active']  ?>" readonly >
                                        </div>
										 
										
									  	<a href="categoryshow.php"> <button type="button" class="btn btn-info">Back</button></a>
									 
									  
                                      
                                       
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