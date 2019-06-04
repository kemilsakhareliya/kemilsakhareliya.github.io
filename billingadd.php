<?php include"header.php"; ?>
<script type="text/javascript">
    // Countries
var country_arr = new Array("Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh","Chhattisgarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Lakshadweep","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Pondicherry","Punjab","Rajasthan","Sikkim","Tamil Nadu","Tripura","Uttar Pradesh","Uttaranchal","West Bengal");

// States
var s_a = new Array();
s_a[0] = "";
s_a[1] = "Guwahati|Imphal|Agartala|Shillong|Aizawl|Silchar|Bongaigaon|Dibrugarh|Jorhat|Nagaon|Tinsukia|Dimapur|Port Blair|Tezpur";
s_a[2] = "Visakhapatnam|Vijayawada|Guntur|Nellore|Anantapur|Kurnool|Rajahmundry|Tirupathi";
s_a[3] = "Bordumsa|Bubang|Changlang|Chopelling|Deban|Dharampur|Gandhigram|Jairampur";
s_a[4] = "Udalgur|Karimganj|Karimganj";
s_a[5] = "Patna Patna district|Gaya|Bhagalpur|Muzaffarpur|Purnia";
s_a[6] = "Ludhiana|Amritsar|Jalandhar|Patiala";
s_a[7] = "Raipur|Durg-Bhilainagar|Bilaspur";
s_a[8] = "Dadra and Nagar Haveli";
s_a[9] = "Daman and Diu";
s_a[10] = "Faridabad|Gurgaon Gurgaon|Panipat Panipat|Ambala";
s_a[11] = "North goa|South goa";
s_a[12] = "Ahmedabad|Surat|Vadodara|Rajkot|Bhavnagar|Jamnagar|Junagadh|Gandhinagar|Mahesana|Morbi|Surendranagar|Gandhidham|Veraval|Navsari|Bharuch|Anand|Porbandar|Godhra|Botad|Sidhpur";
s_a[13] = "Faridabad|Gurgaon Gurgaon|Panipat Panipat|Ambala";
s_a[14] = "Kangra|Mandi|Shimla|Chamba|Solan|Sirmaur|Una";
s_a[15] = "Srinagar Srinagar|Jammu|Anantnag";
s_a[16] = "Jamshedpur|Dhanbad Dhanbad|Ranchi  Ranchi|Bokaro Steel City";
s_a[17] = "Bagalkot|Bengaluru Urban|Bengaluru Rural|Belagavi";
s_a[18] = "Alappuzha|Ernakulam|Idukki|Kannur|Kasaragod|Kollam|Kottayam|Kozhikode|Malappuram|Palakkad|Pathanamthitta|Thiruvananthapuram|Thrissur|Wayanad";
s_a[19] = "Lakshadweep";
s_a[20] = "Indore|Bhopal|Jabalpur|Gwalior|Shivpuri|Ujjain";
s_a[21] = " Mumbai|Pune|Nagpur|Thane|Pimpri-Chinchwad|Nashik|Kalyan-Dombivali|Vasai-Virar|Aurangabad|Navi Mumbai|Solapur|Bhiwandi|Amravati|Nanded|Kolhapur|Sangli";
s_a[22] = "Imphal West";
s_a[23] = "East Khasi Hills|West Garo Hills";
s_a[24] = "Aizawl|Lunglei";
s_a[25] = "Dimapur|Kiphire|Kohima|Longleng|Mokokchung|Mon|Peren|Phek|Tuensang|Wokha|Zunheboto";
s_a[26] = "Bhubaneshwar|Cuttack|Rourkela";
s_a[27] = "Pondicherry";
s_a[28] = "Ludhiana|Amritsar|Jalandhar|Patiala";
s_a[29] = "Jaipur|Jodhpur|Alwar|Nagaur|Udaipur|Sikar|Barmer|Ajmer|Bharatpur|Bhilwara|Bikaner|Jhunjhunu|Churu|Pali|Sri Ganganagar|Kota|Jalor|Banswara|Hanumangarh|Dausa|Chittorgarh|Karauli|Tonk|Jhalawar|Dungarpur|Sawai|Baran|Dholpur|Rajsamand|Bundi|Sirohi|Pratapgarh|Jaisalmer";
s_a[30] = "ES East Sikkim|NS  North Sikkim|SS  South Sikkim|WS  West Sikkim";
s_a[31] = "Chennai|Coimbatore|Madurai|Trichy|Salem ";
s_a[32] = "Agartala";
s_a[33] = "Kanpur|Lucknow|Ghaziabad|Agra|Varanasi|Meerut|Allahabad|Bareilly|Aligarh|Moradabad|Saharanpur|Gorakhpur|Noida|Jhansi";
s_a[34] = "Dehradun|Haridwar";
s_a[35] = "Kolkata|Asansol Bardhaman|Siliguri|Durgapur|Bardhaman";


function populateStates(countryElementId, stateElementId, countryName, stateName) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

    var stateElement = document.getElementById(stateElementId);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('sublocation', '');
    stateElement.selectedIndex = 0;
	
    var state_arr = s_a[selectedCountryIndex].split("|");
   
   stateIndex = 0;
   
   for (var i = 0; i < state_arr.length; i++) 
	{
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
		if(state_arr[i] == stateName)
		{
			stateIndex = i;
		}
    }
	stateElement.selectedIndex = (stateIndex+1);
	console.log(" stateIndex" + stateIndex);

}
	
function populateCountries(countryElementId, stateElementId, countryName, stateName) {
	console.log(countryName);
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('location', '-1');
    countryElement.selectedIndex = 0;
	countryIndex = 0;
    for (var i = 0; i < country_arr.length; i++) 
	{
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
		if(country_arr[i] == countryName)
		{
			countryIndex = i;
		}
		
    }
	countryElement.selectedIndex = (countryIndex+1);
	console.log(" countryIndex" + countryIndex);
	
	
    // Assigned all countries. Now assign event listener for the states.

    if (stateElementId) {
        countryElement.onchange = function () {
            populateStates(countryElementId, stateElementId,countryName, stateName);
        };
    }
	populateStates(countryElementId, stateElementId,countryName, stateName);
}

</script>

<div class="left_content" style="
    margin-left: 197px; width: 900px;
">
<div class="region region-content">
<center><h1 style="
    color: #3c496b;
">Billing Address
</h1></center>

<?php
?>



 <?php
        

if(isset($_SESSION['shippingcheck']))
	  {
	  
		if(isset($_SESSION['log']))
			  {
		  
				$usrid=$_SESSION['log'];
				//echo "ff".$usrid;
			  }
      
	  
	
	$query="select * from shippingadd where uid=$usrid";

			$retval=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($retval))
	{
	     
?>
	

<form name="billadd" action="ins_billingadd.php" method="post">

	  
<input type="hidden" name="multiple" value="<?php echo $usrid; ?>">
<br>
<br>
first name
<input type="text" name="fname" required pattern="[A-Z a-z]*" title="please enter first name" value="<?php echo $row['fname'];?>" >
<br>
<br>

last name
<input type="text" name="lname" required pattern="[A-Z a-z]*" title="please enter last name" value="<?php echo $row['lname'];?>" >
<br>
<br>

address
<textarea name="add" required title="please enter address" ><?php echo $row['address'];?></textarea>
<br>
<br>

state<br>
<select id="state" name="state" required  title="please enter state" ></select>
<br>
<br>

city<br>
<select id="city" name="city"></select>
<br>
<br>



  <script language="javascript">
            populateCountries("state", "city", "<?php echo $row['state'] ?>", "<?php echo $row['city'] ?>");
  </script>


pincode
<input type="text" name="pincode" required pattern="\d*" title="please enter pincode" value="<?php echo $row['pincode'];?>">
<br>
<br>

phone no
<input type="text" name="pno" required pattern="[789][0-9]{9}" title="please enter phone number" value="<?php echo $row['pno'];?>">
<br>
<br>


Email
<input type="email" name="email" required value="<?php echo $row['email'];?>"  >
<br>
<br>


<input type="submit" value="CONTINUE" name="submit">
</form>


<?php
}		
}
else
        
 {	

		if(isset($_SESSION['log']))
				{
					  
					  $usrid=$_SESSION['log'];
					 // echo "else" .$usrid;
					  
				} 
?>
		<form name="billadd" action="ins_billingadd.php" method="post">

		
			<input type="hidden" name="multiple" value="<?php echo $usrid; ?>">
			<br>
			<br>
			first name
			<input type="text" name="fname" required pattern="[A-Z a-z]*" title="please enter first name">
			<br>
			<br>

			last name
			<input type="text" name="lname" required pattern="[A-Z a-z]*" title="please enter last name">
			<br>
			<br>

			address
			<textarea name="add" required title="please enter address"></textarea>
			<br>
			<br>

			state<br>
			<select id="state" name="state" required  title="please enter state" ></select>
			<br>
			<br>

			city<br>
			<select id="city" name="city"></select>
			<br>
			<br>


			  <script language="javascript">
						populateCountries("state", "city");
			  </script>

			pincode
			<input type="text" name="pincode" required pattern="\d*" title="please enter pincode">
			<br>
			<br>

			phone no
			<input type="text" name="pno" required pattern="[789][0-9]{9}" title="please enter phone number">
			<br>
			<br>


			Email
			<input type="email" name="email" required>
			<br>
			<br>

			<input type="submit" value="CONTINUE" name="submit">
			<br><br>
			</form>
		
<?php
    }	
   ?>
   <br>
   </div>
   </div>
   
<?php include"footer.php"; 