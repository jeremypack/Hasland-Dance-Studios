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
	<ul>
		<?php wp_page_menu('title_li=&child_of=8'); ?>
	</ul>
</div><!-- End Classes -->

<div id="slideshow"> 
    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2010/06/1.jpg" /> 
    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2010/06/2.jpg" />
    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2010/06/3.jpg" />
    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2010/06/4.jpg" />
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