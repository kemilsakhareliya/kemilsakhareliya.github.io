<?php include"header.php"; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
<meta charset="utf-8"/>


<link rel="shortcut icon" href="sites/www.ziglar.com/files/favicon_0.ico"/>
<meta name="generator" content="Drupal 7 (http://drupal.org)"/>
<link rel="canonical" href="blog.html"/>
<link rel="shortlink" href="blog.html"/>
<title>Blog | Spreadwings</title>

<script>
var switchTo5x = false;
</script>
<script src="../w.sharethis.com/button/buttons.js"></script>
<script>
if (stLight !== undefined) { stLight.options({"publisher":"dr-ccf7f72e-798f-bd7d-21be-46ecadcf70a2","version":"4x"}); }
</script>
<script src="sites/all/modules/tb_megamenu/js/tb-megamenu-frontend5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/tb_megamenu/js/tb-megamenu-touch5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/libraries/jquery.cycle/jquery.cycle.all5cf0.js?nlw5s2"></script>
<script src="sites/www.ziglar.com/modules/views_slideshow/contrib/views_slideshow_cycle/js/views_slideshow_cycle5cf0.js?nlw5s2"></script>
<script src="sites/all/modules/google_analytics/googleanalytics5cf0.js?nlw5s2"></script>
<script>/* CloudFlare analytics upgrade */
</script>
<script src="sites/www.ziglar.com/themes/ziglar_new/script5cf0.js?nlw5s2"></script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</head>
<body class="html not-front not-logged-in one-sidebar sidebar-second page-blog">
<div id="skip-link">
<a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
</div>
<script text="javascript">

        function openurl(url)
        {
            
            window.open(url, '_self');
            

        }

    </script>

 
<div class="main">
<div class="main_midd">

<div class="text-cont">


<?php
    if(isset($_REQUEST['bid']))
	{
	$bid=$_REQUEST['bid'];
	
    }

	$query="select * from blog where blog_id=$bid";
		$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	    

		$t=$row['title'];
		$a=$row['author'];
		$d=$row['posted_date'];
		$in=$row['info'];
		$img=$row['blog_img'];
	    $ainfo=$row['allinfo'];
		
	?>	
<div class="left_content">
<div class="region region-content">



<div id="block-system-main" class="block block-system clearfix">
<div class="content">
<div class="view view-blog-view-page view-id-blog_view_page view-display-id-page view-dom-id-a34c78140d3567e220f41f4b76494fa4">
<div class="view-content">
<div class="views-row views-row-1 views-row-odd views-row-first">
<div class="views-field views-field-title"> <span class="field-content"><a href="#">


		
    <?php
         echo $t;
	
	?>



</a></span> </div>
<div class="views-field views-field-field-author"> <span class="views-label views-label-field-author">Author: <?php echo $a; ?></span> <div class="field-content"></div> </div>

<div class="views-field views-field-created"> <span class="field-content"><?php echo $d; ?></span> </div>

<div class="views-field views-field-field-image"> <div class="field-content"><a href="">


<?php
  
  echo "<img src='../../spreadwings admin/pages/images-blog/$img' width='169' height='110' />";


?>


</a></div> </div>

<div class="views-field views-field-body"> <div class="field-content">

	<?php echo "<pre style='
    overflow: scroll; width: 747px;'>".$ainfo."<pre>";  ?> 
	
	</div> </div>
<div class="views-field views-field-sharethis"> <span class="field-content"><div class="sharethis-wrapper"><span st_url="" st_title="	" class="st_facebook"></span>
<span st_url="" st_title="	" class="st_twitter"></span>
<span st_url="" st_title="	" class="st_linkedin"></span>
<span st_url="" st_title="  " class="st_plusone"></span>


<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="2" data-colorscheme="light"></div>
</div></span> </div> </div>


</div>
</div> </div>
</div>
</div>
</div>

<?php
	}
	
	?>

<div class="text-message-box">
<div class="region region-content-bottom">
<div id="block-block-34" class="block block-block clearfix">
<div class="content">
<div>
<div>Let’s get started!</div>
</div>
</div>
</div>
</div>
</div></div>
</div>
</div>
 
 


</body>

</html>
<?php include"footer.php"; ?>