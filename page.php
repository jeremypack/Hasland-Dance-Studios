<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
<div id="page_content">
	<h3><?php the_title(); ?></h3>
	<p><?php the_content(); ?></p>

		<?php $one_heading = get_post_meta($post->ID, "one_heading", true) ; ?>
		<?php $one_paragraph = get_post_meta($post->ID, "one_paragraph", true) ; ?>
		<?php if ($one_heading) { ?>
			<div class="class-info">
			<h5><?php echo $one_heading ?></h5>
			<p><?php echo $one_paragraph ?></p>
		</div>
		<?php } ?>
				
		<?php $two_heading = get_post_meta($post->ID, "two_heading", true) ; ?>
		<?php $two_paragraph = get_post_meta($post->ID, "two_paragraph", true) ; ?>
		<?php if ($two_heading) { ?>
			<div class="class-info">
			<h5><?php echo $two_heading ?></h5>
			<p><?php echo $two_paragraph ?></p>
		</div>
		<?php } ?>

		<?php $three_heading = get_post_meta($post->ID, "three_heading", true) ; ?>
		<?php $three_paragraph = get_post_meta($post->ID, "three_paragraph", true) ; ?>
		<?php if ($three_heading) { ?>
			<div class="class-info">
			<h5><?php echo $three_heading ?></h5>
			<p><?php echo $three_paragraph ?></p>
		</div>
		<?php } ?>
		
		<?php $four_heading = get_post_meta($post->ID, "four_heading", true) ; ?>
		<?php $four_paragraph = get_post_meta($post->ID, "four_paragraph", true) ; ?>
		<?php if ($four_heading) { ?>
			<div class="class-info">
			<h5><?php echo $four_heading ?></h5>
			<p><?php echo $four_paragraph ?></p>
		</div>
		<?php } ?>
		
	<p><?php edit_post_link(); ?></p>
</div>
	<?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

<div id="page_content">
		<h3>sorry page not found</h3>
		<?php get_search_form(); ?>
</div>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>