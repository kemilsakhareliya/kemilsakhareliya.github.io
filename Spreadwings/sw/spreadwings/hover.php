<!DOCTYPE html> <html > <head>

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

   <a href="" id="ref"><img src="home page images/leo.png"> </a>

 </body> 
 </html> 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 