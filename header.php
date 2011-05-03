<!DOCTYPE>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google-site-verification" content="M_fc-bJZoXiKZ4-4KdA-GhR5Fy4aQFMSGCkBrXQNHaA" />
	<title><?php bloginfo('name'); ?> </title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
	<link rel="Shortcut Icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>

	
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/easySlider1.7.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true,
				numeric: true
			});
		});	
	</script>
	
</head>

<body>
	<div id="wrap">
		<!--Begin Header-->
		<div id="header">

			<!-- Static Header -->
			<div id="heading">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/title.png" /></a>
			</div>
			<div id="tagline">
				<?php bloginfo('description'); ?>
			</div>
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" /></a>
			</div>
			<!-- End Static -->
		</div>
		<!-- End Header -->
		
		<!-- Begin Navigation -->
			<?php include(TEMPLATEPATH . '/nav.php') ?>
		<!-- End Navigation -->