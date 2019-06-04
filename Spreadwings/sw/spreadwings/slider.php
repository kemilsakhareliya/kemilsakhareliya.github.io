<html>
<head>

<style type="text/css">

#slideshow { 
    margin: 50px auto; 
    position: relative; 
    width: 240px; 
    height: 240px; 
    padding: 10px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#slideshow > div { 
    position: absolute; 
    top: 10px; 
    left: 10px; 
    right: 10px; 
    bottom: 10px; 
}

</style>



</head>
<body>

<script language="javascript/text">
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);


</script>
<div id="slideshow">
   <div>
     <img src="home page images/fifa-13-messi.jpg">
   </div>
   <div>
     <img src="home page images/olivier_lutaud.jpg">
   </div>

</div>
</body>
</html>