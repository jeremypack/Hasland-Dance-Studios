<?php $args = array(
    'orderby'            => 'name',
    'order'              => 'ASC',
    'show_last_update'   => 0,
    'style'              => 'list',
    'show_count'         => 0,
    'hide_empty'         => 1,
    'use_desc_for_title' => 1,
    'child_of'           => 1,
    'current_category'   => 0,
    'hierarchical'       => true,
    'title_li'           => __( 'Categories' ),
    'number'             => NULL,
    'echo'               => 1,
    'depth'              => 1 ); ?>

<div id="sidebar">
	<ul>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
			
			<!-- Search Bar -->
			<li><?php get_search_form(); ?></li>
			
			<!-- Pages -->
			<li><?php wp_list_pages('title_li=<h3>Pages</h3>') ?></li>
			
			<!-- Archives -->
			<li><h3>Archives</h3>	</li>
			<ul>
				<?php wp_get_archives('type=monthly&limit=12&show_post_count=1'); ?>
			</ul>
			
			<!-- Categories -->
			<?php wp_list_categories('title_li=<h3>Categories</h3>'); ?>
			<p><?php wp_list_categories($args); ?></p>
			
			<!-- Login & Out -->
			<ul>
				<li><?php wp_loginout(); ?></li>
			</ul>
			
		<?php endif ?>
	</ul>	
</div>