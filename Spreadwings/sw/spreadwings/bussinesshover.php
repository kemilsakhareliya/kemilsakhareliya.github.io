<html > <head>

    <link rel="stylesheet" type="text/css" media="all" href="animate.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>
<body>
<script>

   $(document).ready(function(){
    $('#ref').each(function() {
        animationHover(this, 'rubberBand');
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
            }, 100);         
        });
}

</script>

<?php include"header.php"; ?>
<table class="Z_Sections">
<tbody>
<tr>

<?php 
       $cid=$_REQUEST['cid'];	

	$query="select * from  profile p,img i where category_id=$cid and p.profile_id=i.profile_id";
		
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	   	 $id=$row['profile_id'];
	   	 $i=$row['url'];
		 
?>
<td>
<h2>

<?php 


echo "<a href='bussinesspage.php?pro=$id'>"."<img src='home page images/$i' alt='Topic:' id='ref' />"."</a>"; 
echo "<a href='bussinesspage.php?pro=$id'>"; 
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
<?php include"footer.php"; ?>