<?php include"header.php"; ?>

<style>


</style>


<script type="text/javascript" src="gmaps/jquery.min.js"></script>
<script src="gmaps/gm.js?sensor=false" type="text/javascript"></script>



<?php

$_POST['address']="J.P.Dawar Institute Of Technology Sardar Vallabhbhai Engineering College Rd SVNIT Campus, Athwa";
$_POST['city']="Surat";
$_POST['state']="Gujarat";
$_POST['country']="India";
$_POST['zip']="395007";
/*
$_POST['address']="Veer Narmad South Gujarat University J.P. Dawer Institute of Information Science & Technology Opp. VNSGU Convention Hall	Near V. C. Bungalow	Udhana Magdalla Road";
$_POST['city']="Surat";
$_POST['state']="Gujarat";
$_POST['country']="India";
$_POST['zip']="395007"; */

$add	= trim(urlencode($_POST['address']));
$city 		= trim(urlencode($_POST['city']));
$state 		= trim(urlencode($_POST['state']));
$country  	= trim(urlencode($_POST['country']));
$zip 		= trim($_POST['zip']);




$geocode	=	file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$city.',+'.$state.',+'.$country.'&sensor=false');

$output		= json_decode($geocode); //Store values in variable
//print_r($output);

if($output->status == 'OK'){ // Check if address is available or not
	echo "<br/>";
	$latitude = $output->results[0]->geometry->location->lat; //Returns Latitude
	
	echo "<br/>";
	$longitude = $output->results[0]->geometry->location->lng; // Returns Longitude

}
else {
	echo "Sorry we can't find this location.Check the details again!";
}

?>

<script type="text/javascript">
$(document).ready(function () {
	// Define the latitude and longitude positions
	var latitude = parseFloat("<?php echo $latitude; ?>"); // Latitude get from above variable
	var longitude = parseFloat("<?php echo $longitude; ?>"); // Longitude from same
	var latlngPos = new google.maps.LatLng(latitude, longitude);
	
	// Set up options for the Google map
	var myOptions = {
		zoom: 14,
		center: latlngPos,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoomControlOptions: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE
		}
	};
	
	// Define the map
	map = new google.maps.Map(document.getElementById("map"), myOptions);
	
	// Add the marker
	var marker = new google.maps.Marker({
		position: latlngPos,
		map: map,
		title: "Your Location"
	});
	
});
</script>

<div id="map" style="width:100%;height:350px;  margin:20px auto 0;"></div> 
<div class="left_content" style="
    width: 74%;
    margin-right: 1%;
">
<br>
<h2>Conatact Us</h2>
<hr/><hr/>
<h3>Leave message</h3>
<br>
<form name="f1" action="contactus_mail.php" method="post">

Name
<input type="text" name="name" required pattern="[A-Z a-z]*" title="enter name">
<br>
<br>
Conatact No
<input type="text" name="contact"   required pattern="[789][0-9]{9}" title="please enter phone number starting with 789">
<br>
<br>

Email
<input type="email" name="email" required>
<br>
<br>
Subject
<input type="text" name="sub" required >
<br>
<br>
Message
<input type="text" name="msg" required >
<br>
<br>
<input type="submit" value="submit" name="submit">
</div>

</form>
<br><br>
<div id="block-views-right-sidebar-blocks-block-2" class="block block-views clearfix">
<h2>Visit Us</h2>
<hr><hr>
<br><br>
<span style="line-height: 1.5;">
<p>Veer Narmad South Gujarat University</p> 
<p>J.P. Dawer Institute of Information Science & Technology</p> 
<p>Opp. VNSGU Convention Hall</p> 
<p>Near V. C. Bungalow</p> 
<p>Tele : 0261 -2258030,2258031</p> 
<p>Udhana Magdalla Road</p>
<p>Surat - 395007</p>
<p>Gujarat- India</p>
<p>Email:office@vnsguit.org</p> 
</span>





<br><br>
<h2>Quote</h2>

<hr><hr>
<br>
<p>There are two ways of spreading light: to be the candle or the mirror that reflects it.</p>
</div>
<br>
<br>
<h2><font color="red">

<?php
if(isset($_REQUEST['yes']))
{
 $msgg= $_REQUEST['yes'];
 ?>
  
 <script>

 alert("sucessfully sent your mail ");
 </script>
 <?php
}
?>
</font></h2>

<?php include"footer.php"; ?>

