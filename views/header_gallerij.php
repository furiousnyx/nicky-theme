<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="revisit-after" content="15 days" />
	
	<meta name="description" content="<ion:meta_description />" />
	<meta name="keywords" content="<ion:meta_keywords />" />
	<meta name="language" content="<ion:current_lang />" />

	<title><ion:meta_title /> | <ion:site_title /></title> 
  
    <link rel="stylesheet" href="<ion:theme_url />assets/css/jquery.fullPage.css">
  
	<link rel="stylesheet" href="<ion:theme_url />assets/css/normalize.css">

    <link rel="stylesheet" href="<ion:theme_url />assets/css/examples.css">  
    <link rel="stylesheet" href="<ion:theme_url />assets/css/demo.css">  
    <link rel="stylesheet" href="<ion:theme_url />assets/css/colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    
    
    <script type="text/javascript" src="<ion:theme_url />javascript/vendor/jquery.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/vendor/modernizr.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/examples.js"></script> 
    <script type="text/javascript" src="<ion:theme_url />javascript/vendor/jquery.js"></script> 
    <script type="text/javascript" src="<ion:theme_url />javascript/jquery.slimscroll.min.js"></script> 
    <script type="text/javascript" src="<ion:theme_url />javascript/jquery.fullPage.js"></script> 
    <script type="text/javascript" src="<ion:theme_url />javascript/examples.js"></script> 
    <script type="text/javascript" src="<ion:theme_url />javascript/jquery.colorbox.js"></script>
    
	<style>
	h1{font-size: 5em;font-family: arial,helvetica;color: #fff;margin:0;}
	.intro p{color: #fff;}
	.section{text-align:center;} 
	.controlArrow.prev {left: 50px;}
	.controlArrow.next{right: 50px;}
	#infoMenu li a {color: #fff;}
	</style>

<!-- // --- == SCRIPT == --- // -->
<!-- COLORBOX -->
<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
</script>
<!-- COLORBOX -->
<!-- FULLPAGE -->
<script type="text/javascript"> 
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['Front-page', 'Over-ons', 'Tattoos', 'Piercings', 'Contact'],
				sectionsColor: ['#000', '#000', '#000', '#000'],
				navigation: false,
				navigationPosition: 'right',
				navigationTooltips: ['Front-page', 'Over-ons', 'Piercings', 'Contact'],
                scrollOverflow: true,
			});
		});
</script>
<!-- FULLPAGE -->
<!-- FACEBOOK -->
<script> 
            (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3&appId=1579268132333291";
    fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>
<!--FACEBOOK-->
<!-- // --- == SCRIPT == --- // -->
    
<ion:jslang /><!-- Ionize JS Lang object -->
	<!-- if JS needs to get the theme URL, we give it to him -->
<script type="text/javascript">
		var theme_url = '<ion:theme_url />'; 
</script>

	<ion:google_analytics />

</head>

<body>
	<!-- container -->
<div class="container"> 
    <!-- MENU -->    
<ul id="menu"> 		
    
    <ion:navigation level="0"  active_class="active"  >
        
							<li class="divider"></li>
                            <?php
                                if ("<ion:url />" == "http://#") {
                                    $pageurl = '#<ion:name />';
                                } else {
                                     $pageurl = '<ion:url />';
                                }
                            ?>
							<li><a href="<?php echo $pageurl; ?>"><ion:title /></a></li>
    </ion:navigation>     
<!--
    <li data-menuanchor="Front-page"><a href="#Front-page">Front page</a></li>
    <li data-menuanchor="Over-ons"><a href="#Over-ons">Over ons</a></li>
    <li data-menuanchor="Tattoos"><a href="#Tattoos">Tattoos</a></li>
    <li data-menuanchor="Gallerij"><a href="#gallerij">Tattoo Gallerij</a></li>
    <li data-menuanchor="Gallerij"><a href="<ion:url />">Tattoo Gallerij</a></li>
    <li data-menuanchor="Piercings"><a href="#Piercings">Piercings</a></li>
    <li data-menuanchor="Contact"><a href="#Contact">Contact</a></li>
-->   
</ul>
<!-- MENU --> 
    
    

 
<!-- Twitter Widget --> <!-- Twitter Widget 
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
--><!-- Twitter Widget --> <!-- Twitter Widget -->



