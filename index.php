<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Régis Raffin - Director</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; user-scalable=no">
	
	<!-- for old doomed brothers (specific CSS + html5 support) -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" href="ie8-and-down.css" />
	<![endif]-->
	
	<!-- for not IE and IE > 9 -->
	<!--[if !IE]><!-->
	<link rel="stylesheet" type="text/css" href="classic.css" />
	<!--<![endif]-->
	<!--[if gte IE 9]>
	<link rel="stylesheet" type="text/css" href="classic.css" />
	<![endif]-->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-20914571-1', 'regisraffin.com');
  ga('send', 'pageview');

</script>
	<script>
	$(function() {
    
    var $allVideos = $("iframe[src^='//player.vimeo.com']"),
    $fluidEl = $(".video");
	    	
	$allVideos.each(function() {
	
	  $(this)
	    // jQuery .data does not work on object/embed elements
	    .attr('data-aspectRatio', this.height / this.width)
	    .removeAttr('height')
	    .removeAttr('width');
	
	});
	
	$(window).resize(function() {
	
	  var newWidth = $fluidEl.width();
	  $allVideos.each(function() {
	  
	    var $el = $(this);
	    $el
	        .width(newWidth)
	        .height(newWidth * $el.attr('data-aspectRatio'));
	  
	  });
	
	}).resize();
    });
    </script>
  </head>
  <body>
  <div class="glub">
  <div class="side">
  <h1>REGIS RAFFIN</h1>
  <div class="menuicon"></div>
  <nav>
  <ul>
  <li><a class="active">Demo reel</a></li>
  <li><a href="./animation">Animation</a></li>
  <li><a href="./music-videos">Music videos</a></li>
  <li><a href="./fiction">Fiction</a></li>
  <li><a href="./commercials">Commercials</a></li>
  <li><a href="./about">About</a></li>
  <li><a href="./contact">Contact</a></li>
  </ul>
  </nav>
  </div>
  <div class="container">
  <div class="main">
  <p><span lang="fr">Réalisateur de fictions, clips, marketing viral et publicités TV /</span> fiction, music videos, viral & TV commercial director</p>
  <section>
    <div class="video visible">
	  <iframe src="//player.vimeo.com/video/82559221" width="1084" height="609" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
  </div>
  </div>
  </div>
  </body>
</html>