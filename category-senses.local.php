<?php get_header('tribe'); ?>

<div class="category_wrapper">
	<div class="category_content">
		<figure class="cat-banner">
			<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>cat-banner.png" alt="banner">
		</figure>

		<div class="cat-description">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<div class="tribecarousal-section">
		<h2>READ & EXPLORE</h2>
		<div class="cat-carousal">
			<div class="regular slider" id="cat-slider">
				<div>
					<div class="single-slider">
						<a href="#" class="catimg">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="images">
							</figure>
						</a>
					</div>
				</div>
				<div>
					<div class="single-slider">
						<a href="#" class="catimg">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="images">
							</figure>
						</a>
					</div>
				</div>
				<div>
					<div class="single-slider">
						<a href="#" class="catimg">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="images">
							</figure>
						</a>
					</div>
				</div>
				<div>
					<div class="single-slider">
						<a href="#" class="catimg">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="images">
							</figure>
						</a>
					</div>
				</div>
				<div class="single-slider">
						<a href="#" class="catimg">
							<figure>
								<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="images">
							</figure>
						</a>
					</div>
				</div>
				
				
			</div>
		</div>


		<div class="listenwatch_section">
				<h2>LISTEN & WATCH</h2>
			 <div class="cat-video-part">
			 	<ul>
                         <li>
                          	<a data-video="https://www.youtube.com/embed/IydJuwA0yJ4" class="tribe-popup" href="#popupvideo">
                          		<figure>
                          			<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="thumbnail">
                          		</figure>
                          	</a>
                      	</li>

                      	 <li>
                          	<a data-video="https://www.youtube.com/embed/IydJuwA0yJ4" class="tribe-popup" href="#popupvideo">
                          		<figure>
                          			<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="thumbnail">
                          		</figure>
                          	</a>
                      	</li>
                          
                           <li>
                          	<a data-video="https://www.youtube.com/embed/IydJuwA0yJ4" class="tribe-popup" href="#popupvideo">
                          		<figure>
                          			<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="thumbnail">
                          		</figure>
                          	</a>
                      	</li>
                          
                         <li>
                          	<a data-video="https://www.youtube.com/embed/IydJuwA0yJ4" class="tribe-popup" href="#popupvideo">
                          		<figure>
                          			<img src="<?php echo get_stylesheet_directory_uri().'/tribe-assets/images/'?>video.png" alt="thumbnail">
                          		</figure>
                          	</a>
                      	</li>
                          
                          

                        </ul>
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
		</div>


		<div class="cat-connectdot">
			<h2>CONNECTING THE DOTS</h2>
			<div class="connectdot_content">
				<div class="text_with_link">
					<div class="each__post_tribe">
						<a href="#">Each Tribe Title</a> 
						
					</div>
				</div>
				<div class="text_with_link">
					<div class="each__post_tribe">
							<a href="#">Each Tribe Title</a> 
						
					</div>
				</div>
				<div class="text_with_link">
					<div class="each__post_tribe">
						<a href="#">Each Tribe Title</a> 
						
					</div>
				</div>
				<div class="text_with_link">
					<div class="each__post_tribe">
							<a href="#">Each Tribe Title</a> 
						
					</div>
				</div>
			</div>
		</div>

		<div class="reflectivepart-section">
			<h2>REFLECTIVE PRACTICE</h2>
			<div class="user_response_part">
				<textarea></textarea>
				
				
			</div>
		</div>

	</div>
</div>
<script>
	 jQuery(document).on('ready', function() {
	 	// var w_width = jQuery(window).width();
 		jQuery(".regular").slick({
	        dots: false,
	        infinite: true,
	        slidesToShow: 4,
	        slidesToScroll: 1,
	        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                        }
                
            },
            {
                breakpoint: 578,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                        }
                
            },
        ]
	    });
	 	
    });
	jQuery(window).resize(function(){
	  //var w_width = jQuery(window).width();
	 	
	});
	jQuery('.tribe-close-btn').click(function(){
    jQuery(this).parents('.tribe-popup-content').fadeOut();
    var videosrc = '';
    jQuery('#tribe__video').attr('src', videosrc);
  });
  jQuery('.tribe-popup').click(function(){
    var videosrc = jQuery(this).attr('data-video');
    videosrc = videosrc + '?autoplay=1';
    jQuery('.tribe-popup-content').show();
    jQuery('#tribe__video').attr('src', videosrc);
   // jQuery('#tribe__video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
  
});
</script>
<?php get_footer('tribe'); ?>