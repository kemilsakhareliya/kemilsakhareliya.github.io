<?php include"headerr.php"; ?>
<?php
if(isset($_REQUEST['del']))
{
	 $uj=$_REQUEST['del'];
	 
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
                    <h1 class="page-header">Category Update</h1>
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
                                    <form role="form" name="category_upd" action="log_upd_category.php"  method="post"  enctype="multipart/form-data"  >
									
                                  <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control"  name="cname" required pattern="[A-Za-z]*" title="please enter category_name"  value="<?php echo $row['category_name']  ?>"  >
                                        </div>
										
										
										 <div class="form-group">
                                            <label>Category Info</label>
                                            <textarea class="form-control" rows="5"  name="cinfo" rows="5" required title="please enter category_name"><?php echo $row['category_info'];?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Image</label><br> <?php echo "<img src='images-category/$cimgs' height='60' width='80'>"; ?>
                                            <input  class="form-control" type="file" name="cimg" >
											<input class="form-control" type="hidden" name="catimg"   value="<?php echo $row['img'];  ?>" >                                       
									   </div>
										
										<div class="form-group">
                                            <label>Visibility</label>
                                            <input class="form-control" name="isactive" required pattern="[01]"  title="enter only 0 or 1 for Visibility" value="<?php echo $row['is_active']  ?>" >
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