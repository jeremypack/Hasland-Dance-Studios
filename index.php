<?php get_header(); ?>

<!-- Begin Intro -->
	<!-- <?php include(TEMPLATEPATH . '/intro.php') ?> -->
<!-- End Intro -->

	<!-- Begin Content -->
	<div id="content">		
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			
			<div class="post_snippet">
				<h2>
				<a href="<?php the_permalink($post->ID); ?>" title="Permanent link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>	
				<!-- <?php wp_get_attachment_image(); ?> -->
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Continue reading the rest of this entry &#187;"><img src="<?php $key="thumbnail"; echo get_post_meta($post->ID, $key, true); ?>" alt="thumbnail" class="thumbnail" /></a>
				<?php the_content('Continue Reading...'); ?>
			</div>


		<?php endwhile; ?>

			<p><?php previous_posts_link('Next Entries &raquo;') ?> <?php next_posts_link('&laquo; Previous Entries') ?></p>

		<?php else : ?>
			
			<!-- No Posts Found -->
			<h2>Sorry No Content Found</h2>	

	<?php endif; ?>
	</div>
	<!-- End Content -->
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>