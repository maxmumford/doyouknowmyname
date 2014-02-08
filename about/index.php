<?php
require_once('../config.php');
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
			<h1>COMMERCIAL AND VIRAL VIDEO PRODUCTION SERVICES</h1>

			<table>
				<tr>
					<td>
						<iframe src="//player.vimeo.com/video/11959566" width="500" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						<br /><br />
						<iframe src="//player.vimeo.com/video/11959968" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</td>

					<td style="padding-left: 20px">
						<p>Leo Mumford has over 6 years experience directing, shooting and producing commercials. Cinematic commercials that meet your budget and engage your audience, unlike the often dull commercial videos made by corporate videographers.</p>

						<p>Leo's experience comes from the study of cinema, fiction and stylistic video. He learnt his craft working with many lighting cameramen, including the cameraman of the oscar winning "Peter and the Wolf", the lighting cameraman from that shot the feature film "Pusher", and other award winning camera operators.</p>


						<p>His early training and work as an editor, under former BBC news editor Sam Alwin, gave him advanced skills, above the basic corporate film editing skill set.</p>

						<p>Video is important. The internet is a large place. People are spending massive amounts of time online and those who don't have an online presence suffer in their branding and sales. A video is a great tool for branding and sales. It's also a versitile tool, as it involves a one off fee for the production of the ad, which can then be uploaded in a massive amount of places on the web. These days videos must be captivating and engage the audience. People are getting media savy and won't settle for dull boring corporate videos. Our videos are perfect for capturing the clients imagination and interest because Leo Mumford's skills come from film making and commercials, not corporate video. And once you're customer is interested half the battle is already won.</p>


						<p>Please get in touch for an informal chat or quote regarding your commercial video project.</p>

						<p>Full production service, from conception to completion </p>
						<p>To suit your budget</p>
						<p>Free informal chat/quote for your video commercial project</p>
						<br />
						<a class="button" style="background-color: black;" href="mailto:leomumford@gmail.com">Email Me</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>