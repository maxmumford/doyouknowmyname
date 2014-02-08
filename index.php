<?php
require_once('config.php');
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

</head>
<body>
	<header id="banner">
		<h1>
			COMMERCIAL AND VIRAL VIDEO PRODUCTION SERVICES
		</h1>
		<h2>
			Some more interesting information about my services. Click The Button!
		</h2>
		<div id="button">
			<a class="button" href="<?= $config['root'] ?>about">
				More Information
			</a>
		</div>
	</header>
</body>
</html>