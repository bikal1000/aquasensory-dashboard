<?php
/* Template Name: We Vibe Template */
get_header('tribe');
?>
 <div class="singlepage_wrapper">
	<div class="wevibe-content">
		<div class="wevibeleft-content">
			<h2 class="page-title"><?php echo get_the_title(); ?></h2>
			<?php
			$args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'we-vibe',
                'orderby' => array('publish_date'),
                'order' => 'ASC',
                'posts_per_page' => 10,
            );
            $wevibe_query = new WP_Query( $args);
            if ( $wevibe_query->have_posts() ) :
                while ( $wevibe_query->have_posts() ) {
                    $wevibe_query->the_post(); 
                    ?>
                    <div class="wevibe_title">
                    	<ul class="wevibe_ul">
                    		<li>
                    			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    		</li>
                    	</ul>
                    </div>
             	  <?php
                }
            endif;
			?>

		</div>
		<div class="tribe-left-sidebar">
        <?php if ( is_active_sidebar( 'et_pb_widget_area_6' ) ) : ?>
                  <?php dynamic_sidebar( 'et_pb_widget_area_6' ); ?>
            <?php endif; ?>
    </div>
	</div>
</div>
<?php 
get_footer('tribe');
?>
