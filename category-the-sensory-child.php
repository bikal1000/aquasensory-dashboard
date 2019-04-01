<?php get_header('tribe'); ?>
<?php
	$current_category_ID =  getCurrentCatID();
	$category_meta = get_category($current_category_ID);
	$cat_slug = $category_meta->slug;
?>
<div class="tribe_category_wrapper <?php echo $cat_slug; ?>">
	<div class="tribe_category_content">
		<div class="category_left">
		<header class="page-header">
			<?php $cat_title = explode(":", get_the_archive_title()); ?>
			<h2 class="page-title"><?php echo $cat_title[1]; ?></h2>
		</header><!-- .page-header -->
<?php  
$args = array( 'numberposts' => 1, 'offset'=> 0, 'cat' => $current_category_ID );
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul class="catpost_wrapper'.' '.$cat_slug.'">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li class="catpost_title"><a href="'.get_the_permalink().'">'.get_the_title() . '</a></li>';
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

?>	
</div>
	<div class="tribe-left-sidebar">
	<?php if ( is_active_sidebar( 'et_pb_widget_area_6' ) ) : ?>
                <?php dynamic_sidebar( 'et_pb_widget_area_6' ); ?>
            <?php endif; ?>
	</div>
</div>	
</div>

<?php get_footer('tribe'); ?>

