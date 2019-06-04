<?php include"header.php"; ?>



<script src="sss.min.js"></script>
<link rel="stylesheet" href="sss.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="mainpagecss/demo.css" />
        <link rel="stylesheet" type="text/css" href="mainpagecss/style_common.css" />
		<link rel="stylesheet" type="text/css" href="mainpagecss/style3.css" />
		<link href="mainpagecss/mycss.css" rel='stylesheet' type='text/css'>
<script>
jQuery(function($) {
$('.slider').sss();
});
</script>

<style type="text/css">

  .showbox {
    float: left;
    margin: 4em 1em;
    width: 100px;
    height: 60px;
    background-color: #fff;
    line-height: 60px;
    text-align: center;
    -webkit-transition: 1s ease-in-out;
    -moz-transition: 1s ease-in-out;
    -o-transition: 1s ease-in-out;
    transition: 0.3s ease-in-out;
  }
  .showbox.slideright:hover {
  -webkit-transform: scale(2);
  -moz-transform: scale(2);
  -o-transform: scale(2);
  -ms-transform: scale(2);
  transform: scale(2);
  }

</style>

<link rel="shortcut icon" href="sites/www.ziglar.com/files/favicon_0.ico"/>
<meta name="description" content="Ziglar strives to be the difference-maker in people’s personal, family and professional success. By doing so, Ziglar hopes to make a positive difference in America and the world."/>
<meta name="keywords" content="Zig Ziglar, Official Zig Ziglar, Ziglar Corporation, Sales Training, Corporate Training, Live Events, The Ziglar Way"/>
<meta name="generator" content="Drupal 7 (http://drupal.org)"/>
<meta name="rights" content="Copyright Ziglar, Inc. 2013"/>
<link rel="canonical" href="index.html"/>
<link rel="shortlink" href="index.html"/>
<title>Ziglar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body class="html front not-logged-in one-sidebar sidebar-second page-node page-node- page-node-2228 node-type-section">

<script text="javascript">

   function openurl(url)
        {
            
            window.open(url, '_self');
            
  }

 </script>

 
 
<div class="main">
<div class="region region-content">




<div class="Z_Mobile">
<div class="Z_Banner"><a href="#M_Jump">


<div class="slider">
<img src="home page imagesss/fifa-13-messi.jpg" alt="belive in your self" />
<img src="home page imagesss/olivier_lutaud.jpg" alt="belive in your self" />
<img src="home page imagesss/ratantataq1080oog.jpg" alt="belive in your self" />
<img src="home page imagesss/25abills.jpg" alt="belive in your self" />
<img src="home page imagesss/amitabh_quote.jpg" alt="belive in your self" />
<img src="home page imagesss/narendra-modi-quotes-desktop-wallpaper.jpg" alt="belive in your self" />
<img src="home page imagesss/akshay kumar 1920x1080.jpg" alt="belive in your self" />
<img src="home page imagesss/maxresdefaultabdul.jpg" alt="belive in your self" />



</div>
</a></div>
<div class="Z_Tagline">
<a name="M_Jump" id="M_Jump"></a>
<h2> WORLD'S MOST POPULAR PEOPLE'S IN DIFFERENT FIELD</h2>
<h2>ALL INFORMATION ABOUT WORLD'S MOST SUCCESFULL PEOPLE'S CATEGORY WISE</h2>
</div>
<div class="Z_Sections">


<?php 

	$query="select * from  category where is_active=1";
		
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
		echo "<h3>";
			$img=$row['img'];
		$cn=$row['category_name'];
				$cid=$row['category_id'];

	
echo "<a href='bussiness.php?cid=$cid'>"."<img src='../../spreadwings admin/pages/images-category/$img' height='350' width='150'  >"."</a>";
	echo "<a href='bussiness.php?cid=$cid'><br>";
	echo $cn; 
    echo "</a>";
	
	echo "</h3>";
	}	 
?>



</div>




<div class="Z_whitespace"> </div>
<?php
	$query3="select * from  category where  is_active=1";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cname=$row['category_name'];
	$cinfo=$row['category_info'];
?>		
<div class="Z_FooterBanner">
<?php echo "<h2>".$cname."</h2>".$cinfo;?></div>
<?php
}
?>

</div>





<div class="Z_Desktop" style="
    background-color: white;
">
<div class="Z_Banner">

<div class="slider">
<img src="home page imagesss/fifa-13-messi.jpg" alt="belive in your self" />
<img src="home page imagesss/olivier_lutaud.jpg" alt="belive in your self" />
<img src="home page imagesss/ratantataq1080oog.jpg" alt="belive in your self" />
<img src="home page imagesss/25abills.jpg" alt="belive in your self" />
<img src="home page imagesss/amitabh_quote.jpg" alt="belive in your self" />
<img src="home page imagesss/narendra-modi-quotes-desktop-wallpaper.jpg" alt="belive in your self" />
<img src="home page imagesss/akshay kumar 1920x1080.jpg" alt="belive in your self" />
<img src="home page imagesss/maxresdefaultabdul.jpg" alt="belive in your self" />



</div>

</div>
<br>
<br>

<div class="Z_Tagline">
<a name="Jump" id="Jump"></a>
<h2 style="
    font-size: xx-large;
">WORLD'S MOST POPULAR PEOPLE'S IN DIFFERENT FIELDS</h2>
<h2> ALL INFORMATION ABOUT WORLD'S MOST SUCCESFULL PEOPLE'S CATEGORY WISE  </h2>
</div>
<br>

<table class="Z_Sections">

<tbody>
<tr>
  <td style='position: relative;
  top: -69px;'>
<?php 

	$query="select * from  category where is_active=1 limit 4";
		
		$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
		$img=$row['img'];
		$cn=$row['category_name'];
		$cid=$row['category_id'];
?>

<h3>
<?php	
	echo "<div class='showbox slideright'>";
	
	echo "<a href='bussiness.php?cid=$cid'>"."<img src='../../spreadwings admin/pages/images-category/$img'  ></a>";
	echo "<a href='bussiness.php?cid=$cid'>";
	echo "<center>".$cn."</center>"; 
    
	echo "</a>";
    echo "</div>";		 
?>

</h3>
<?php
	}
?>
</td>

</tr>


<tr>
<td style='position: relative;
  top:-34px;'>
<?php 
	
	$query="select * from  category where  category_id > 4 and is_active=1";
		
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
		
	$img=$row['img'];
		$cn=$row['category_name'];
				$cid=$row['category_id'];
?>

<h3>
<?php	
echo "<div class='showbox slideright'>";
	
	echo "<a href='bussiness.php?cid=$cid'>"."<img src='../../spreadwings admin/pages/images-category/$img' >"."</a>";
	echo "<a href='bussiness.php?cid=$cid'>";
	echo "<center>".$cn."</center>"; 
    echo "</a>";
	echo "</div>";	 
?>

</h3>

<?php
	}
?>
</td>
</tr>

</tbody>
</table>
<br>
<br>
<br>
<br>
        <div>
				<div class="mb-wrap mb-style-3" style="
    margin-left: 154px;
    margin-top: 34px;
">
					<blockquote>
						<p>
						<?php
	$query3="select * from  category where category_id=1";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cinfo=$row['category_info'];
	echo $cinfo;
	}
?>		
</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">About Bussiness</p>
						<font color="#3c496b"><b><cite>Sam Walton</cite></b></font>
						<div class="mb-thumb"><img src="home page imagesss/sam1.png"></div>
					</div>
				</div>
				
		</div>
     

 <div>
				<div class="mb-wrap mb-style-3" style="
    margin-right: 153px;
    margin-top: -397px;

">
					<blockquote>
						<p>
						<?php
	$query3="select * from  category where category_id=2";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cinfo=$row['category_info'];
	echo $cinfo;
	}
?>		
</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">About Inventions</p>
						<font color="#3c496b"><b><cite>Nikola Tesla </cite></b></font>
						<div class="mb-thumb"><img src="home page imagesss/sam.png"></div>
					</div>
				</div>
				
		</div>


	 <div>
				<div class="mb-wrap mb-style-3" style="
   margin-left: 154px;">
					<blockquote>
						<p>
						<?php
	$query3="select * from  category where category_id=3";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cinfo=$row['category_info'];
	echo $cinfo;
	}
?>		
</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">About Music</p>
						<font color="#3c496b"><b><cite>Plato </cite></b></font>
						<div class="mb-thumb"><img src="home page imagesss/plato.png"></div>
					</div>
				</div>
				
		</div>
		
		

	 <div>
				<div class="mb-wrap mb-style-3" style="
    margin-right: 153px;
    margin-top: -361px;
">
					<blockquote>
						<p>
						<?php
	$query3="select * from  category where category_id=4";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cinfo=$row['category_info'];
	echo $cinfo;
	}
?>		
</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">About Sports</p>
						<font color="#3c496b"><b><cite>Doug Williams </cite></b></font>
						<div class="mb-thumb"><img src="home page imagesss/g.png"></div>
					</div>
				</div>
				
		</div>		
		
		
	 <div>
				<div class="mb-wrap mb-style-3" style="margin-left: 154px;">
					<blockquote>
						<p>
						<?php
	$query3="select * from  category where category_id=5";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cinfo=$row['category_info'];
	echo $cinfo;
	}
?>		
</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">About Politics</p>
						<font color="#3c496b"><b><cite>Joseph Stalin </cite></b></font>
						<div class="mb-thumb"><img src="home page imagesss/q.png"></div>
					</div>
				</div>
				
		</div>			
		
		
	 <div>
				<div class="mb-wrap mb-style-3" style="
    margin-right: 153px;
    margin-top: -398px; height: 377px;

">
					<blockquote>
						<p>
						<?php
	$query3="select * from  category where category_id=6";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cinfo=$row['category_info'];
	echo $cinfo;
	}
?>		
</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">About Acting</p>
						<font color="#3c496b"><b><cite>Rodney Dangerfield</cite></b></font>
						<div class="mb-thumb"><img src="home page imagesss/f.png"></div>
					</div>
				</div>
				
		</div>			
		
	 <div>
				<div class="mb-wrap mb-style-3" style="
   margin-left: 154px;">
					<blockquote>
						<p>
						<?php
	$query3="select * from  category where category_id=7";
		
	$retval3=mysqli_query($con,$query3);

	while($row=mysqli_fetch_array($retval3))
	{
	$cinfo=$row['category_info'];
	echo $cinfo;
	}
?>		
</p>
					</blockquote>
					<div class="mb-attribution">
						<p class="mb-author">About Writing</p>
						<font color="#3c496b"><b><cite>J. K. Rowling</cite></b></font>
						<div class="mb-thumb"><img src="home page imagesss/k.png"></div>
					</div>
				</div>
				
		</div>				
<div class="Z_FooterBanner">
</div>

<div class="Z_FooterBanner"></div>
<div class="Z_FooterBanner">
<div class="Z_Footer2Up"><img src="" /></a></div>
<div class="Z_Footer2Up"><img src="" /></div>
<div class="Z_whitespace"> </div>
</div>
</div>
</div></div>


  <div class="clearfix">
  <div class="links"></div>
  </div>




<?php include"footer.php"; ?>