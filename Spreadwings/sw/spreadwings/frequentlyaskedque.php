<?php include"header.php"; ?>

<?php
 
	$query="select * from faq where is_active=1";
	$retval=mysqli_query($con,$query);
?>
<div class="left_content" style="
    width: 66%;    float: left;    
    margin-right: 94%;    position: relative;    background: #f5f7f8;    padding: 15px;    border: 1px solid #dfdfdf;    margin-bottom: 20px;
    margin-left: 199px;
    line-height: 32px;
">
<h2 style="	margin: 0em 792px -0.5em 0px;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 19px;
	line-height: 30px;
	background: #355681;
	background: rgba(121, 119, 126, 0.8);
	border: 1px solid #fff;
	padding: 3px 13px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
	font-family: 'Muli', sans-serif;"> FAQ </h2>
<br>


<div class="region region-content">
<center>

<table>	
<?php	
$cnt=0;
	while($row=mysqli_fetch_array($retval))
	{
		$cnt=$cnt+1;
		echo "<tr>";
	    echo "<td style='	margin: 1em 0 0.5em 0;
	font-weight: normal;
	position: relative;
	text-shadow: 0 -1px rgba(0,0,0,0.6);
	font-size: 19px;
	line-height: 30px;
	background: #355681;
	background: rgba(53,86,129, 0.8);
	border: 1px solid #fff;
	padding: 3px 13px;
	color: white;
	border-radius: 0 10px 0 10px;
	box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
    font-family: -webkit-pictograph;
'>"."<b>".$cnt."."." ".$row['que']."</b>"."</td>"; 
    	echo "</tr>";
		echo "<tr>";
		echo "<td style='padding-left: 53px;	margin: 1em 0 0.5em 0;
	font-weight: 600;
	font-family: 'Titillium Web', sans-serif;
	position: relative;
	text-shadow: 0 -1px 1px rgba(0,0,0,0.4);
	font-size: 22px;
	line-height: 40px;
	color: #355681;
	text-transform: uppercase;
	border-bottom: 1px solid rgba(53,86,129, 0.3);font-family: inherit;'>".$row['ans']."</td>";
        echo "</tr>";
	}
?>
</table>		
<br>


</center>		
</div>
</div>

<?php include"footer.php"; ?>