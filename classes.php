<?php

/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */
/*
Template Name: Classes
*/
?>

<?php get_header(); ?>

<div id="content">
<?php
	$pages = get_pages('child_of='.$post->ID.'&sort_column=post_date&sort_order=desc&parent=-1');
	$count = 0;
	foreach($pages as $page)
	{		
		$content = $page->post_content;
		if(!$content)
			continue;
		if($count >= 2)
			break;
		$count++;	
		$content = apply_filters('the_content', $content);
	?>
		<h2><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></h2>
		<div class="entry">
		<?php echo $content ?>
		</div>
	<?php
	}	
?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>