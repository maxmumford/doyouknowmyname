<?php
require_once('config.php');
$cms_contents = file_get_contents('https://googledrive.com/host/0B9fGr6w-dfLWYTA3THdSMHZoLXM/home.html');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- big video imports -->
	<script src="<?= $config['root'] ?>bower_components/jquery/jquery.js"></script>
	<script src="<?= $config['root'] ?>bower_components/jquery-ui/ui/jquery-ui.js"></script>
	<script src="<?= $config['root'] ?>bower_components/video.js/video.js"></script>
	<script src="<?= $config['root'] ?>bower_components/imagesloaded/imagesloaded.js"></script>
	<script src="<?= $config['root'] ?>bower_components/BigVideo.js/lib/bigvideo.js"></script>
	<link type="text/css" rel="stylesheet" href="<?= $config['root'] ?>bower_components/BigVideo.js/css/bigvideo.css" />

	<!-- index page -->
	<link type="text/css" rel="stylesheet" href="<?= $config['root'] ?>css/core.css" />
	<link type="text/css" rel="stylesheet" href="<?= $config['root'] ?>css/index.css" />
	<script type="text/javascript" src="<?= $config['root'] ?>js/index.js"></script>	

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47936354-1', 'doyouknowmy.name');
	  ga('send', 'pageview');

	</script>

</head>
<body>
	<header id="banner">
		<?= str_replace('@@root@@', $config['root'], $cms_contents); ?>
	</header>
</body>
</html>
