
<?php include"header.php"; ?>

    <link rel="stylesheet" type="text/css" media="all" href="animate.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<script>

   $(document).ready(function(){
    $('.ref').each(function() {
        animationHover(this, 'bounceIn');
    });
});
     
 function animationHover(element, animation){
    element = $(element);
    element.hover(
        function() {
            element.addClass('animated ' + animation);        
        },
        function(){
            //wait for animation to finish before removing classes
            window.setTimeout( function(){
                element.removeClass('animated ' + animation);
            }, 3000);         
        });
}

</script>

<br>
<br>
<br>
<div style="
    margin-top: 144px;
">
<table class="Z_Sections">
<tbody>
<tr>
<div class="left_content" style="
    margin-left: 160px;
    width: 1014px;
">
<div class="region region-content">
<div style="
    margin-left: -58px;color: #3c496b;
">
<?php
	$cid=$_REQUEST['cid'];	
	
	$quer="select * from  category where  category_id=$cid";
		
	$retval3=mysqli_query($con,$quer);

	while($row=mysqli_fetch_array($retval3))
	{
	
     echo "<h2 style='margin-left: 79px;'>".$row['category_name']."</h2>";
	 }
?>
</div>
</div>
</div>

<?php 
       $cid=$_REQUEST['cid'];	

	$query="select * from  profile p,img i where category_id=$cid and p.profile_id=i.profile_id and is_active=1";
		
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	   	 $id=$row['profile_id'];
	   	 $i=$row['pimage'];
		 
?>
<td>
<h2>

<?php 


echo "<a href='bussinesspage.php?pro=$id'>"."<img src='../../spreadwings admin/pages/images-profile/$i' alt='Topic:' height='200' width='200' class='ref' />"."</a>"; 
echo "<br>";

echo "<a href='bussinesspage.php?pro=$id' style='
    color: #3c496b; text-decoration: none;

'>"; 
   echo "<center>".$row['name']."</center>";
 echo "</a>"; 
 
 
?>
</h2>
</td>
<?php
	}
?>

</tr>


</tbody>
</table>
</div>
<br>
<br>

<?php include"footer.php"; ?>