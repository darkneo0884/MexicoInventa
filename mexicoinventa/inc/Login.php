<?php 
	if (array_key_exists("login", $_GET)) {
   $oauth_provider = $_GET['oauth_provider'];
     if ($oauth_provider == 'twitter') {
       header("Location: login-twitter.php");
     }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=0.7, user-scalable=yes"> 
         <title>::MEXICO INVENTA::</title>
        <meta name="description" content="" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="../favicon.ico"> 
         
		<!-- CSS -->
        
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="css/mobiles.css" rel="stylesheet" type="text/css" media="screen and (max-width: 800px) and (min-width: 300px)"/>
        <link href="css/mediano.css" rel="stylesheet" type="text/css" media="screen (min-width: 1200px)"/>
        <link href="css/grande.css" rel="stylesheet" type="text/css" media="screen (min-width: 1600px)"/>
   		
		
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		 <!-- JavaScript -->
		<script src="js/complete.min.js" type="text/javascript"></script>
       	<script src="js/authfacebook.js" type="text/javascript"></script>
       	<script src="js/unslider.js" type="text/javascript"></script>
       	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
       	<script type="text/javascript"> 
       		
     	//function slider
		    function slideSwitch() {
		    var $active = $('#slideshow IMG.active');
		
		    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
		
		    var $next =  $active.next().length ? $active.next()
		        : $('#slideshow IMG:first');
		
		    $active.addClass('last-active');
		        
		    $next.css({opacity: 0.0})
		        .addClass('active')
		        .animate({opacity: 1.0}, 1000, function() {
		            $active.removeClass('active last-active');
		        });
			}		
		$(function() {
		    setInterval( "slideSwitch()", 5000 );
		    
		 $('#myModal').reveal({
     animation: 'fadeAndPop',                   //fade, fadeAndPop, none
     animationspeed: 300,                       //how fast animtions are
     closeonbackgroundclick: true,              //if you click background will modal close?
     dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal			
		});
       	
       		
       	</script>
    </head>
    <body>
    	<div class="maincontainer">
			<header>
				
				<img src="img/logo.jpg" id="logo" >
					
				
					<div id="slideshow">
    					<img src="img/x.jpg" alt="" class="active" />
  						<img src="img/y.jpg" alt="" class="active" />
    
					</div>
				<nav>
				
					
				</nav>	
			</header>
			<div>
			<section >
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data" role="form">
						<div class="container"><img src="img/under.jpg" id="underimg"/>  
				  		<div><p>Sitio Web en Construccion.</p>
				  			<p> Gracias por su comprension, en breve estara disponible!</p>
        					<p>Contacto: mexicoinventa@hotmail.com</p></div></div>
        					
        					<div id="myModal" class="reveal-modal">
						     <h1>Modal Title</h1>
						     <p>Any content could go in here.</p>
						     <a class="close-reveal-modal">&#215;</a>
						</div>
        					
				</form>
			
				​​​​
			</section>
				</div>
				<div id="footer-wrap">
		 <footer class="footer-section"><span class="footer"><img src="img/logo.jpg" id="imgfooter"/></span>
		 							   
		 							   <span><img src="img/barfooter.jpg" id="barfooter"/></span>
		 </footer></div>	
        </div>
       
	
		
   
    </body>
</html>