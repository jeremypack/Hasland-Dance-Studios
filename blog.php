<?php /**
 * @package WordPress
 * @subpackage Anna
 */
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="posts">
	<!-- The First Loop -->
<?php query_posts( 'showposts=1' ); ?>
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
<div class="post-content">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<h3 class="post-title">
		<?php the_title(); ?>
		</h3>	
		</a>

	<p class="post-date"><?php the_time('F,jS,Y') ?></p>
	<p><?php the_content(); ?></p>
	<p><?php the_tags(); ?></p>
</div>
	
	<?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

		<h2>Sorry Not Found</h2>	

<?php endif; ?> 

	
<!-- The Second Loop -->
<?php query_posts( 'showposts=4&offset=1' ); ?>
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
<div class="post-content">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<h3 class="post-title">
			<?php the_title(); ?>
			</h3>
			</a>

		<p class="post-date"><?php the_time('F,jS,Y') ?></p>
</div>
	<?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

		<?php // No Posts Found ?>

<?php endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>