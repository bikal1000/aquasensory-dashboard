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
               	<p class="white"><?php echo get_the_excerpt(); ?></p>
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
						<a href="<?php the_sub_field('video_link'); ?>">
							<img src="<?php the_sub_field('video_thumbnail'); ?>" alt="<?php the_sub_field('video_title'); ?>">
						</a>
						<?php
					    endwhile;
					else :
					endif;
				?>
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
  