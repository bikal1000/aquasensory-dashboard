<?php get_header('tribe'); ?>
<div class="expert-insight-section">
    <h2>EXPERT INSIGHTS</h2>
    <div class="expert-content">
        <div class="expert-bio">
            <figure class="expert-image">
                 <?php the_post_thumbnail('medium'); ?>
            </figure>
            <div class="expert-dscription">
                <h3><?php the_title(); ?></h3>
               	<p class="white"><?php the_content(); ?></p>
                <h4><?php the_field('fancy_quote'); ?></h4>
            </div>
        </div>
        <div class="expert-bot-section">
            <div class="video-part">
            	<?php

					// check if the repeater field has rows of data
					if( have_rows('videos') ):

					 	// loop through the rows of data
					    while ( have_rows('videos') ) : the_row();
						?>
						 <a data-video="<?php the_sub_field('video_link'); ?>" class="tribe-popup" href="#popupvideo">
							 <img src="<?php the_sub_field('video_thumbnail'); ?>" alt="thumbnail">
						</a>
						<?php
					    endwhile;
					else :
					endif;
				?>
            </div>
   			<div class="tribe-popup-content">
				<div class="tpc-inner">
					<div class="tribe-video-content">
						<button class="tribe-close-btn">&times;</button>
						<div class="tribe-video-embed">
							<iframe src="" id="tribe__video">
						 </iframe>
						</div>
				  </div>
				</div>
            </div>
            <div class="pdf-part">
                <a href="#">
                <img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>Fact-Sheet-Download.png" alt="lesson plan">
                 </a>
                <!-- <h3>FACT SHEET</h3>
                <a href="#" class="dow-btn">DOWNLOAD</a> -->
            </div>
        </div>
    </div>
</div>
<?php get_footer('tribe'); ?>
  