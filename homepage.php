<?php /**
 * @package WordPress
 * @subpackage Anna
 */
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
<div id="full-content">
	<p><?php the_content(); ?></p>
</div>
	<?php endwhile; ?>
	
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
		<?php // Navigation ?>

	<?php else : ?>

		<h3>sorry page not found</h3>
		<?php get_search_form(); ?>

<?php endif; ?>

<?php get_footer(); ?>