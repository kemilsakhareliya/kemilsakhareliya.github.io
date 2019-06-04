<?php include"header.php"; ?>

<?php
 if (isset($_POST['keyword'])) 
   {
				
			echo "<div class='search' style=' margin-left: 80px;'>";
			$search=$_POST['keyword'];
			if($search=="")
			{
			echo "<h3>No search found</h3>" ;
			}
			else
			{
				$query="select * from product  where product_name like '%$search%'";
				$retval=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($retval))
				{
			    $prid=$row['product_id'];
				$onid=$row['online_id'];
				echo "<h2><a style='text-decoration: none;' href='online_detail.php?proid=$prid&onlid=$onid'>".$row['product_name']."</a></h2><br>";
				echo $row['product_info']."<br><br>";
				}
				
				$query2="select * from profile  where name like '%$search%'   ";
	            $retval2=mysqli_query($con,$query2);
				while($row=mysqli_fetch_array($retval2))
				{
				  $pid=$row['profile_id'];
				echo "<h2><a  style='text-decoration: none;' href='bussinesspage.php?pro=$pid'>".$row['name']."</a></h2><br>";
				echo $row['occupation']."<br><br>";
				}
				
				
				$query3="select * from blog  where title like '%$search%'   ";
		        $retval3=mysqli_query($con,$query3);
				while($row=mysqli_fetch_array($retval3))
				{
				$bid=$row['blog_id'];
				echo "<h2><a style='text-decoration: none;' href='blogmore.php?bid=$bid'>".$row['title']."</a></h2><br>";
				echo $row['info']."<br><br>";
				}
			}
			echo "</div>";	
	}


	else
	{
	  header('location:index.php');
	}
	?>
	
	<?php include"footer.php"; ?>