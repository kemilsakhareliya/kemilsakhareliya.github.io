<?php include"header.php"; ?>

 
<div class="main">
<div class="main_midd">
<div class="content_top"></div>
<div class="text-cont">
<div class="center_content">
<div class="region region-content">



<div id="block-system-main" class="block block-system clearfix">
<div class="content">
<div id="node-2219" class="node node-section node-promoted">
<div class="content clearfix">
<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even"><style type="text/css"><!--/*--><![CDATA[/* ><!--*/
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600);

.Z_Mobile { display: none; width: 100%; background-color: #fff; }
.Z_Desktop { display: block; width: 100%; }

.Z_Banner, .Z_Canvas { width: 100%; text-align: center; max-width: 1000px; }
.Z_Banner { margin: -10px auto 0 auto; }
.Z_Banner img { width: 100%; height: auto; 
  font-weight: 600;
  font-size: 42px;
  font-family: "Source Sans Pro";
  color: rgb(3, 121, 178);
  line-height: 2.9;
  text-transform: uppercase; 
}
.Z_Mobile .Z_Banner { margin: 0 auto; }

.Z_Canvas { margin: 60px auto; }
.Z_Contents { float: right; width: 53%; text-align: left; margin-top: -4px; }
.Z_Contents h1 {
  font-weight: 300;
  font-size: 44px;
  font-family: "Source Sans Pro";
  color: rgb(0, 0, 0);
  line-height: 1;
  letter-spacing: -0.4px; 
  padding: 0 25px 0 0;
  margin: 0 0 16px 0;
  border: 0;
  display: block !important;
  text-align: left;
}
.Z_Contents p {
  font-weight: 200;
  font-size: 20px;
  font-family: "Source Sans Pro";
  color: rgb(64,64,64);
  line-height: 1.2;
  padding: 0 61px 0 0;
  margin-bottom: 1em;
}
.Z_Contents ul {
  font-weight: 200;
  font-size: 20px;
  font-family: "Source Sans Pro";
  color: rgb(64,64,64);
  line-height: 1.2;
  padding: 0 61px 0 0;
  margin: 0 0 0.6em 1em;
}
.Z_Contents li {
  margin: 0 0 0.3em 1em;
}
div.Z_Button {
  margin: 0 0 10px 0;
}
div.Z_Button a {
  display: block;
  font-weight: 300;
  font-size: 23px;
  font-family: "Source Sans Pro";
  color: rgb(255, 255, 255);
  text-decoration: none;
  text-align: center;
  background-color: rgb( 42, 169, 223 );
  border-radius: 18px;
  width: 292px;
  padding: 2px 0 4px 0;
}

.Z_Video { float: left; width: 42%; text-align: right; }
.Z_VideoThumb { display: inline-block; position: relative; width: 315px; }
.Z_PlayButton { position: absolute; top: 0px; left: 0px; }
.Z_PlayDuration { position: absolute; bottom: 18px; left: 0px; width: 315px; text-align: center; 
  font-weight: 300;
  font-size: 24px;
  font-family: "Source Sans Pro";
  color: rgb(0, 83, 137);
}

#Z_VideoOverlay { display: none; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba( 0, 0, 0, 0.86 ); border-collapse: collapse; color: rgb( 128,128,128 ); font-family: "Source Sans Pro"; font-weight: 600; font-size: 18px; cursor: pointer; }
#Z_VideoOverlay td { width: 100%; height: 100%; text-align: center; vertical-align: middle; }
.Z_VideoCloser { text-align: right; width: 85%; margin: 2px auto; }
.Z_VideoCloser span { display: inline-block; font-size: 28px; line-height: 20px; background-color: #000; padding: 0px 8px; position: relative; z-index: 500; top: 30px; right: 0px; }
#Z_VideoOverlay p { color: rgb( 164, 164, 164 ); }
#Z_VideoIframe { width: 85%; height: 85%; }

@media only screen and (max-width: 767px) {
  .Z_Mobile { display: block; }
  .Z_Desktop { display: none; }
  .Z_Canvas { margin: 10px auto; }
  .Z_Contents { float: none; width: 96%; margin: 0 auto; text-align: center; }
  .Z_Contents h1 { padding: 0; }
  .Z_Contents p { padding: 0; }
  div.Z_Button { width: 292px; margin: 0 auto 10px auto; }
  .Z_Video { float: none; width: 96%; margin: 20px auto 0 auto; text-align: center; }
}

/*--><!]]>*/
</style><script type="text/javascript">
<!--//--><![CDATA[// ><!--

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      
var Z_VideoBox = { "overlay": false, "iframe": false, "player": false };
Z_VideoBox.open = function() {
  this.overlay.style.display = "table";
  this.player.playVideo();
}
Z_VideoBox.close = function() {
  this.overlay.style.display = "none";
  this.player.pauseVideo();
}
Z_VideoBox.init = function() {
  this.overlay = document.getElementById( "Z_VideoOverlay" );
  this.iframe = document.getElementById( "Z_VideoIframe" );
}
function onYouTubeIframeAPIReady() {
  Z_VideoBox.player = new YT.Player( "Z_VideoIframe" );
}

//--><!]]>
</script><div class="Z_Mobile">
<div class="Z_Banner"><a href="#M_Jump">
<?php
    if(isset($_REQUEST['pro']))
	{
	$id=$_REQUEST['pro'];
	
    }
	
	$query="select * from profile p,img i where p.profile_id='$id' and p.profile_id=i.profile_id";
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
	    

		$fi=$row['fimg'];
    echo "<img alt='SpreadWings' src='../../spreadwings admin/pages/images-profile_all/$fi' />";
	
	?>

</a></div>
<div class="Z_Canvas" id="M_Jump">
<div class="Z_Contents">
<h1> <?php echo $row['quote']; ?></h1>
<br>
<?php } ?>
<p><b><?php
    $id=$_REQUEST['pro'];

	$query="select * from profile p,img i where p.profile_id='$id' and p.profile_id=i.profile_id";
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	    

		echo $row['name'];
    }
	?>


</b>

</p>
<br>

<p>
<?php
       
 
	$query="select * from profile p,img i where p.profile_id='$id' and p.profile_id=i.profile_id";
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	 echo "<p style='overflow: scroll;word-wrap:break-word;height: 295px;'>".$row['other_info']."</p>";
    }
	?>

 </p>
 <?php
       

	$query="select * from onlinestore";
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
	    

		echo "<div class='Z_Button'>";
		echo "<a href=''>". $row['product_type']."</a>";
		echo "</div>";
    }
	?>



</div>



<?php
    if(isset($_REQUEST['pro']))
	{
	$id=$_REQUEST['pro'];
	
    }

	$query="select * from profile p,img i, video v where p.profile_id='$id' and p.profile_id=i.profile_id and p.profile_id=v.profile_id";
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
	    
		$vl=$row['url'];
       echo "<div class='Z_Video'>";
	   echo "<a class='Z_VideoThumb' target='youtube'>";

		$si=$row['simg'];
    echo "<img alt='Spredwings' src='../../spreadwings admin/pages/images-profile_all/$si' />";
	?>
	<html>
<iframe width="310" height="200" src="<?php echo $vl; ?>" frameborder="0" allowfullscreen></iframe>
</html>
	<?php
	}
	?>
	
	
	
	
	

</a></div>
<div style="clear: both; font-size: 1px"> </div>
</div>
<div style="clear: both; font-size: 1px"> </div>
</div>








<div class="Z_Desktop">
<div class="Z_Banner"><a href="#Jump">


<?php
    if(isset($_REQUEST['pro']))
	{
	$id=$_REQUEST['pro'];
	
    }

	$query="select * from profile p,img i where p.profile_id='$id' and p.profile_id=i.profile_id";
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
	    

		$fi=$row['fimg'];
    echo "<img alt='Spredwings' src='../../spreadwings admin/pages/images-profile_all/$fi' />";
	
	?>
</a></div>
<div class="Z_Canvas" id="Jump">
<div class="Z_Contents">

<h1><?php echo $row['quote']; ?></h1>
<br>
<?php } ?>
<p><b><?php
    $id=$_REQUEST['pro'];

	$query="select * from profile where profile_id='$id'";
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
	    
       
		echo "<h2><b><u><center>".$row['name']."</center></u></b></h2>";
		echo "<br>";
    }
	?>


</b>

</p>


<p>

<?php
    $id=$_REQUEST['pro'];

	$query="select * from profile  where profile_id='$id'";
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
	    

	?>

 </p>

<?php
 echo "<table>";
  echo "<tr>";
   echo "<th>BORN </th>";
   echo "<th> -  </th>";
   echo "<th>".$row['born']."</th>";
   echo "</tr>";
    echo "<tr>";
   echo "<th>KNOWN </th>";
   echo "<th> -  </th>";
   echo "<th>".$row['known']."</th>";
   echo "</tr>";
    echo "<tr>";
   echo "<th>YEARS ACTIVE </th>";
   echo "<th> -  </th>";
   echo "<th>".$row['years_active']."</th>";
   echo "</tr>";
    echo "<tr>";
   echo "<th>NATIONALITY </th>";
   echo "<th> -  </th>";
   echo "<th>".$row['nationality']."</th>";
   echo "</tr>";
    echo "<tr>";
   echo "<th>OCCUPATION </th>";
   echo "<th> -  </th>";
   echo "<th>".$row['occupation']."</th>";
   echo "</tr>";
    echo "<tr>";
   echo "<th>GENDER </th>";
   echo "<th> -  </th>";
   echo "<th>".$row['gender']."</th>";
   echo "</tr>";
    echo "<tr>";
   echo "<th>HOMETOWN </th>";
   echo "<th> -  </th>";
   echo "<th>".$row['hometown']."</th>";
   echo "</tr>";

  
   echo "</table>";
   
   
   echo "<p>";
		echo "<pre style='overflow: scroll;word-wrap:break-word;height: 295px;'>".$row['other_info']."</pre>";
   echo "</p>";  
	}
 ?> 

<div style="margin-top:-160px">
<?php
       
 
	$query="select * from onlinestore ";
	$retval=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($retval))
	{
	    $oid=$row['online_id'];
         $id=$_REQUEST['pro'];
		echo "<div class='Z_Button' style='margin-left:-360px;'>";
		
		if(isset($_SESSION['log']))
		{
		echo "<a href='profileonlinestore2.php?pro=$id&type=$oid'>". $row['product_type']."</a>";
		 } 
		else
		{
		echo "<a href='profileonlinestore.php?pro=$id&type=$oid'>". $row['product_type']."</a>";
		}
		echo "</div>";
    }
	?>
</div>

</div>



<?php
    if(isset($_REQUEST['pro']))
	{
	$id=$_REQUEST['pro'];
	
    }

	$query="select * from profile p,img i, video v where p.profile_id='$id' and p.profile_id=i.profile_id and p.profile_id=v.profile_id ";
	$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	    
		$vl=$row['url'];
       echo "<div class='Z_Video'>";
	   echo "<a class='Z_VideoThumb' target='youtube'>";

		$si=$row['simg'];
    echo "<img alt='spreadwings' src='../../spreadwings admin/pages/images-profile_all/$si' />";
	echo "<br>";
	?>
	
<iframe width="310" height="200" src="<?php echo $vl; ?>" frameborder="0" allowfullscreen></iframe>

	<?php
	}
	?>






</a>
</div>

<div style="clear: both; font-size: 1px"> </div>
</div>
</div>
<script type="text/javascript">
<!--//--><![CDATA[// ><!--

Z_VideoBox.init();

//--><!]]>
</script></div></div></div>  </div>

  <div class="clearfix">
          <div class="links"></div>
    
      </div>

</div>
  </div>
</div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
<hr>
<hr>
<div class="text-message-box">
   <div class="region region-content-bottom">
    <div id="block-block-34" class="block block-block clearfix">

    
 
</div>
  </div>
</div></div>
</div>

</div>

<!--Main Container End-->


  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"d76abb225a","applicationID":"6457278","transactionName":"bgMAbEdRWhcDVU1ZXVdJI1tBWVsKTVhWVFdmFgNfUG9CDQdB","queueTime":0,"applicationTime":464,"atts":"QkQDGg9LSRk=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-627.min.js"}</script><script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>


<!-- Mirrored from www.ziglar.com/presentation-skills-new by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2015 06:07:56 GMT -->

<?php include"footer.php"; ?>