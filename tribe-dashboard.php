<?php
/* Template Name: Tribe Dashboard */
get_header('tribe');
?>

<div class="mid-part">
    <div class="first-part">
        <figure>
            <a><img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>Sensory-Bite-Sized.png" alt="images"></a>
        </figure>
    </div>
    <div class="second-part">
        <div class="top-part">
            <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'lesson-part',
                'orderby' => array('publish_date'),
                'order' => 'ASC',
                'posts_per_page' => 1,
            );
            $lessonpart_query = new WP_Query( $args);
            if ( $lessonpart_query->have_posts() ) :
                while ( $lessonpart_query->have_posts() ) {
                    $lessonpart_query->the_post(); 
                    ?>
                    <a href="
                    <?php            
                    if(!get_field('download_option')):
                    trim(the_field('download_link'));
                    endif;
                    if(get_field('download_option')):
                    trim(the_field('external_link'));
                    endif;
                    ?>
                    " class="dow-btn a" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>Lesson-Plan-Download.png" alt="lesson plan"></a>
                    <?php
                }
            endif;
            if ( !$lessonpart_query->have_posts() ) :
                ?>
                 <a href="#" class="dow-btn b" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>Lesson-Plan-Download.png" alt="lesson plan">
                </a>
                <?php
            endif;
            ?>
        </div>
        <div class="bot-part">
            <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'fact-sheet',
                'orderby' => array('publish_date'),
                'order' => 'ASC',
                'posts_per_page' => 1,
            );
            $fact_sheet_query = new WP_Query( $args);
            if ( $fact_sheet_query->have_posts() ) :
                while ( $fact_sheet_query->have_posts() ) {
                    $fact_sheet_query->the_post();
                    ?>
                    <a href="
                    <?php            
                    if(!get_field('download_option')):
                    trim(the_field('download_link'));
                    endif;
                    if(get_field('download_option')):
                    trim(the_field('external_link'));
                    endif;
                    ?>
                    " class="dow-btn" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>Fact-Sheet-Download.png" alt="Fact Sheet">
                    </a>
                    <?php
                }
            endif;
            if ( !$fact_sheet_query->have_posts() ) :
                ?>
                 <a href="#" class="dow-btn" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>Fact-Sheet-Download.png" alt="Fact Sheet">
                </a>
                <?php
            endif;
            ?>
        </div>
    </div>
    <div class="third-part">
        <figure>
                <a href="https://aquastaging1.wpengine.com/we-vibe/" class="wevibe_wrapper" target="_blank">
                    	<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>We-Vibe.png" alt="images">
                	</a>
            </a>
        </figure>
    </div>
    <div class="fourth-part">
        <div class="fourth-part-content">
            <div class="left-content">
                <div class="white-box">
                    <?php
                    $user = wp_get_current_user();
                    if ( $user ) :
                        ?>
                        <img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>headshot.png" alt="expert">
                    <?php endif; ?>
                    <div class="tribe-account">
                        <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>" class="myaccount_link">My Account</a> | <a href="<?php echo wp_logout_url(); ?>" class="tribe_logout">Logout</a>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <h4 class="white">MEMBERS DIRECTORY</h4>
                <input type="text" name="search" id="member-search" class="profile-search" placeholder="SEARCH">
                <div id="profile-livesearch">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="connecting-dot-section">
    <h2>CONNECTING THE DOTS</h2>
    <div class="tribe-circle-section">
        <h4>HOVER CLICK EXPLORE</h4>
        <div class="tribe-circle-images">
        <?php
            $args = array(
            	'parent' => 76,
            	'meta_key' => 'category_position',
  				'orderby' => 'meta_value',
        	);
            $categories = get_categories( $args );
            foreach($categories as $category) {
             ?>
            <div class="main-circle">
                <a href="<?php echo get_category_link( $category->term_id ); ?>" class="white"><span><?php echo $category->name; ?></span></a>
                <div class="tribe-circle-dots">
                <?php
                    $args = array(
                        'posts_per_page' => 5, 
                        'post_status' => array('publish','pending'),
                        'orderby' => 'publish_date',
                        'order' => 'DESC',
                        'cat' => $category->term_id 
                    );
                    $cat_query = new WP_Query( $args);
                    if ( $cat_query->have_posts() ) :
                        $i=1;
                        while ( $cat_query->have_posts() ) {
                            $cat_query->the_post();    
                    ?>
                    <div class="tribe-circle <?php echo'c'.$i;
                        if(get_post_status() == 'pending'){
                            echo ' inactive-circle';
                        }
                        ?>">
                        <a href="" class="white"></a>
                        <div class="tribe-circle-content">
                            <h5 class="tribe-content-title white"> <a href="<?php
                            if(get_post_status() == 'publish'){
                              the_permalink(); 
                              }else{ 
                                echo '#'; 
                            } ?>" class="white
                            <?php
                            if(get_post_status() != 'publish'){
                              echo 'disabled';
                              }
                            ?>"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a></h5>
                        </div>
                    </div>
                      <?php
                      $i++;  } endif; ?>
                </div>
            </div>
              <?php  } ?>
        </div>
    </div>
</div>

<div class="expert-insight-section-p">
    <h2>EXPERT INSIGHTS</h2>
    <div class="expert-content-section">
        <?php 
        $args = array( 'post_type' => 'content-expert', 'posts_per_page' => 4 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="expert-content-p">
                <a href="<?php the_permalink(); ?>">
                    <figure class="expert-image-p">
                        <?php the_post_thumbnail('medium'); ?>
                    </figure>
                    <h6 class="white"><?php the_title(); ?></h6>
                    <p class="white"><?php echo get_the_excerpt(); ?></p>
                </a>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</div>
<div class="sensory-spark-section">
    <h2>SENSORY SPARKS</h2>
    <div class="outer-part">
        <div class="inner-part">
        <?php 
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'facebook',
                'orderby' => array('publish_date'),
                'order' => 'ASC',
                'posts_per_page' => 1,
            );
            $lessonpart_query = new WP_Query( $args);
            if ( $lessonpart_query->have_posts() ) {
                while ( $lessonpart_query->have_posts() ) {
                    $lessonpart_query->the_post();
                    ?>
                     <a href="<?php the_permalink(); ?>" class="play-btn white facebookpost_title"><?php the_title(); ?></a>
                    <?php } }else{ ?>
                    <a href="#" class="play-btn white facebookpost_title" >PLAY</a>
        <?php } ?>
            
        </div>
    </div>
    <div class="rect-part">
        <div class="small-rect"></div>
    </div>
    <div class="large-rect-part">
        <div class="large-rect"></div>
    </div>
</div>
<?php get_footer('tribe'); ?>