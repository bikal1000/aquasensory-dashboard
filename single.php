<?php
	
global $post;
$postcat = get_the_category( $post->ID );
$currentcatid = json_encode($postcat[0]->term_id);
$cat_list = array(1 => '30' , 2 =>'69', 3 => '70', 4 => '71', 5  => '72', 6  => '73', 7  => '74', 8  => '75');
$cat_list = json_encode($cat_list );
if (strcmp($currentcatid, $cat_list)) {
   get_header('tribe');
?>
<div id="singlepage_wrapper">
	<div class="tribe-main">
		<?php
			// load fullwidth page in Product Tour mode
			while ( have_posts() ): the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
					<div class="entry-content">
						<h2 class="tribe-post-title"><?php the_title(); ?></h2>
						<p class="tribe-post-content"><?php the_content(); ?></p>

					<?php
						$facebook_appid  = get_theme_mod( 'facebook_appid_text_block');
						echo $fb_comment_section = '<div id="fb-root"></div>
						<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId='.$facebook_appid.'&autoLogAppEvents=1"></script>'
						?>
						<div class="tab-post">

						<ul class="tabs">
							<li class="tab-link current" data-tab="tab-1">Facebook User</li>
							<li class="tab-link" data-tab="tab-2">Non-Facebook User </li>
						</ul>

						<div id="tab-1" class="tab-content current">
							<div class="fb-comments" data-href="https://www.facebook.com/AquaSensory/" data-width="500px" data-numposts="5"></div>
						</div>

						<div id="tab-2" class="tab-content">
							<div class="tribe-custom-comment">
									<?php 

										if ( comments_open() || get_comments_number() ) :
											  comments_template();
										endif;
									?>
										</div>

								</div>
						</div>
						
					</div> <!-- .entry-content -->

				</article> <!-- .et_pb_post -->

		<?php endwhile;
	?>
</div>
	<div class="tribe-sidebar">
	<?php 
	get_sidebar();
	?>
	</div>
</div>
<?php 
}else{
	get_header();
}

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<?php

if (strcmp($currentcatid, $cat_list)) {
   	get_footer('tribe');
}else{
	get_footer();
}


