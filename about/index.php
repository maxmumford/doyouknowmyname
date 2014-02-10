<?php
require_once('../config.php');

// get page contents from google drive
$cms_contents = file_get_contents('https://googledrive.com/host/0B9fGr6w-dfLWYTA3THdSMHZoLXM/about.html');
$cms_section = -1;
$cms_lines = array_fill(0, 3, '');

// loop over each line of page contents adding them to the cms_lines array. 
// If line begins with /// it is a section marker, so increment the cms_section counter to insert into the correct array element.
foreach(preg_split("/((\r?\n)|(\r\n?))/", $cms_contents) as $line){
    if(substr($line, 0, 3) != '///') {
    	$cms_lines[$cms_section] .= $line;
    }
    else {
    	$cms_section = $cms_section + 1;
    }
} 
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
	<link type="text/css" rel="stylesheet" href="<?= $config['root'] ?>css/about.css" />
	<script type="text/javascript" src="<?= $config['root'] ?>js/about.js"></script>	

</head>
<body>
	<div id="about">
		<div id="content">
			<?= $cms_lines[0] ?>

			<table>
				<tr>
					<td id="videos">
						<?php
						// file_get_contents('https://googledrive.com/host/0B9fGr6w-dfLWYTA3THdSMHZoLXM/about-videos.html'); 
						?>
						<?= $cms_lines[1] ?>
					</td>
					<td id="text">
						<?php 
						file_get_contents('https://googledrive.com/host/0B9fGr6w-dfLWYTA3THdSMHZoLXM/about-text.html'); 
						?>
						<?= $cms_lines[2] ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>