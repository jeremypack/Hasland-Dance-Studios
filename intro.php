<!-- Begin Intro -->

<div id="intro">
	<?php
	$slider_posts = new WP_Query();
	$slider_posts->query('showposts=1&cat=4');
	while($slider_posts->have_posts()) : $slider_posts -> the_post();
	?>

<!-- 11:45 Day 17 Follow Link-->
<div id="image_slider">
	<?php
	$args = array(
		'order'						=>	'ASC',
		'post_type'				=>	'attatchment',
		'post_parent'			=>	$post->ID,
		'post_mime_type'	=>	'image',
		'post_status' 		=> 	null,
		'numberposts'			=>	-1
		);
		
		$attatchments = get_posts($args);
		if ($attatchments) {
			foreach ($attatchments as $attatchment) {
				// echo '<img src=',wp_get_attatchment_link($attatchment->ID, 'full', false), '/>';
				echo wp_get_attachment_url($attachment_id);
			}
		}
	?>
	
	<?php endwhile ?>
</div>

	<h3><?php the_title(); ?></h3>
	<p><?php echo wp_get_attachment_image( 1 ); ?></p>
	<p><?php the_content('<div class=\'more\'>Find Out More</div>'); ?></p>
	

</div>