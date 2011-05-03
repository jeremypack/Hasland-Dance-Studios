<!DOCTYPE>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="google-site-verification" content="M_fc-bJZoXiKZ4-4KdA-GhR5Fy4aQFMSGCkBrXQNHaA" />
	<title><?php bloginfo('name'); ?> </title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
	<link rel="Shortcut Icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
<!-- Google Analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7075448-7']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

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
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" /></a>
			</div>
			<!-- End Static -->
		</div>
		<!-- End Header -->
		
		<!-- Begin Navigation -->
			<?php include(TEMPLATEPATH . '/nav.php') ?>
		<!-- End Navigation -->