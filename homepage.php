<?php /**
 * @package WordPress
 * @subpackage Anna
 */
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div id="classes">
	<ul><?php wp_page_menu('title_li=&child_of=8'); ?> </ul>
</div>

	<div id="slider">
		<ul>				
			<li><a href="http://templatica.com/preview/30"><img src="<?php bloginfo('template_directory'); ?>/images/01.jpg" alt="Css Template Preview" /></a></li>
			<li><a href="http://templatica.com/preview/7"><img src="<?php bloginfo('template_directory'); ?>/images/02.jpg" alt="Css Template Preview" /></a></li>
			<li><a href="http://templatica.com/preview/25"><img src="<?php bloginfo('template_directory'); ?>/images/03.jpg" alt="Css Template Preview" /></a></li>
			<li><a href="http://templatica.com/preview/26"><img src="<?php bloginfo('template_directory'); ?>/images/04.jpg" alt="Css Template Preview" /></a></li>
			<li><a href="http://templatica.com/preview/27"><img src="<?php bloginfo('template_directory'); ?>/images/05.jpg" alt="Css Template Preview" /></a></li>
			<li><a href="http://templatica.com/preview/26"><img src="<?php bloginfo('template_directory'); ?>/images/04.jpg" alt="Css Template Preview" /></a></li>			
		</ul>
	</div>
	
<div id="two-big">
	<?php $one_heading = get_post_meta($post->ID, "one_heading", true) ; ?>
	<?php $one_paragraph = get_post_meta($post->ID, "one_paragraph", true) ; ?>
	<?php if ($one_heading) { ?>
		<h3><?php echo $one_heading ?></h3>
		<p><?php echo $one_paragraph ?></p>
	<?php } ?>
</div>

<div id="one-small">
	<?php $three_heading = get_post_meta($post->ID, "three_heading", true) ; ?>
	<?php $three_paragraph = get_post_meta($post->ID, "three_paragraph", true) ; ?>
	<?php if ($three_heading) { ?>
		<h3><?php echo $three_heading ?></h3>
		<p><?php echo $three_paragraph ?></p>
	<?php } ?>
</div>

<?php get_footer(); ?>