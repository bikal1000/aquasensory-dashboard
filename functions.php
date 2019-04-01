<?php 

include('dc_customizer.php');
function dc_load_divi_gym_js() {
    wp_enqueue_script(
        'divi-gym',
        get_stylesheet_directory_uri() . '/js/divigym.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'dc_load_divi_gym_js' );


require_once get_stylesheet_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'Divi_Center_register_required_plugins' );

function Divi_Center_register_required_plugins() {
    
    $plugins = array(
        
   
    array(
			'name'      => 'Snazzy Maps',
			'slug'      => 'snazzy-maps',
			'required'  => true,
		),
    array(
			'name'      => 'TwentyTwenty',
			'slug'      => 'twentytwenty',
			'required'  => true,
		),
        array(
			'name'      => 'One Click Demo Import',
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),
        array(
			'name'      => 'Better Font Awesome',
			'slug'      => 'better-font-awesome',
			'required'  => true,
		),
    );
    
    $config = array(
		'id'           => 'Divi-center',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'Divi center install plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
);

    tgmpa( $plugins, $config );
}

function ocdi_import_files() {
  return array(
    array(
      'import_file_name'             => 'Import Demo data',
      'local_import_file'            => trailingslashit( get_stylesheet_directory() ) . 'demodata/importer.xml',
      'local_import_widget_file'     => trailingslashit( get_stylesheet_directory() ) . 'demodata/widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_stylesheet_directory() ) . 'demodata/customizer.dat',
      'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
      'import_notice'                => __( 'After successful import set your permalinks to post name in settigns -> reading section. Please note that import may take few minutes deppending on your server enviroment.', 'your-textdomain' ),
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );


function change_author_permalink_base() {
    global $wp_rewrite;
    $wp_rewrite->author_base = "profile";
}
add_filter( 'init', 'change_author_permalink_base' );

// remove query strings from css and js

//function _remove_script_version( $src ){ 
//$parts = explode( '?', $src ); 	
//return $parts[0]; 
//} 
//add_filter( 'script_loader_src', '_remove_script_version', 15, 1 ); 
//add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

function print_thumbnail() {
		the_post_thumbnail();
	}

function create_posttype() {
	register_post_type( 'content-expert',
    array(
      'labels' => array(
        'name' => __( 'Experts' ),
        'singular_name' => __( 'Expert' ),
        'plural_name' => __( 'Experts' ),
     		'all_items'             => __( 'All Expert', 'content-expert' ),
    		'add_new_item'          => __( 'Add New Expert', 'content-expert' ),
    		'add_new'               => __( 'Add New', 'content-expert' ),
    		'new_item'              => __( 'New Expert', 'content-expert' ),
    		'edit_item'             => __( 'Edit Expert', 'content-expert' ),
    		'update_item'           => __( 'Update Expert', 'content-expert' ),
    		'view_item'             => __( 'View Expert', 'content-expert' ),
    		'view_items'            => __( 'View Experts', 'content-expert' ),
    		'search_items'          => __( 'Search Expert', 'content-expert' ),
          ),
      '	     public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'content-expert' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    )
  );
}
add_action( 'init', 'create_posttype' );


function script_for_ajax_load() {
  wp_register_script( "my_ajax_script", get_stylesheet_directory_uri().'/tribe-assets/js/tribe-script.js', array('jquery') );
  wp_localize_script( 'my_ajax_script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
  wp_enqueue_script( 'my_ajax_script' );
  
 wp_register_script("slick_script", get_stylesheet_directory_uri().'/tribe-assets/js/slick.js', array('jquery') );
wp_enqueue_script( 'slick_script' );

 
}
add_action( 'init', 'script_for_ajax_load' );

function getposts_list(){
  // $query = new WP_Query( 'cat=30,69,70,71,72,73,74,75&tag=apples' );
  $searchtag = $_POST["searchtag"];
  $search_results = new WP_Query( array( 
    'post_type' => 'post',
    'post_status' => 'published',
    's' => $searchtag,
    'cat' => array('relation' => 'OR', array(30,69,70,71,72,73,74,75 )),
     )
  );
  if($search_results){
  // The Loop
      if ( $search_results->have_posts() ) {
        echo '<ul>';
        while ( $search_results->have_posts() ) {
          $search_results->the_post();
          if (get_post_status() == 'publish') {
            echo '<li class="post_search_name"><a href="'.get_the_permalink().'">'. get_the_title().'</li>';
          }
        }
        echo '</ul>';
        /* Restore original Post Data */
        wp_reset_postdata();
        } else {
          echo 'No Data found.';
        }
          //                       echo "<pre>";
          //         print_r($search_results);
          //   if ($search_results->get_results() ) {

          //     // foreach ( $search_results->get_results() as $result_data ) {
          //     //     echo "<pre>";
          //     //     print_r($result_data);
          //     // }
          //   }else {
          //   echo 'No Data found.';
          // } 
      }
   die();
}
add_action('wp_ajax_getposts_list', 'getposts_list');
add_action('wp_ajax_nopriv_getposts_list', 'getposts_list');

function getuser_list(){
  $searchname = $_POST["searchname"];
  $args  =  array (
      'role' => 'Subscriber',
      'meta_query' => array(
      'relation' => 'OR',
      array(
          'key'     => 'first_name',
          'value'   => $searchname,
          'compare' => 'LIKE'
      ),
      array(
          'key'     => 'last_name',
          'value'   => $searchname,
          'compare' => 'LIKE'
      )
    )
  );
  $user_query = new WP_User_Query( $args );
  if ( ! empty( $user_query->get_results() ) ) {
    foreach ( $user_query->get_results() as $user ) {
        echo '<div class="search_name_wrapper"><a href="'.get_site_url().'/profile?'.'xhuysx='.'uygh34u7ys6x'.$user->ID.'" class="search_name">'.$user->first_name.' '.$user->last_name.'</a></div>';
    }
  } else {
    echo 'No users found.';
   
  }
   die();
}
add_action('wp_ajax_getuser_list', 'getuser_list');
add_action('wp_ajax_nopriv_getuser_list', 'getuser_list');

if (!is_admin()) {
  function tribepost_search_filter($query) {
    if ($query->is_search) {
      $query->set('post_type', 'post');
      $query->set('post_status', 'published');
    }
    return $query;
  }
add_filter('pre_get_posts','tribepost_search_filter');
}
add_action( 'customize_register', 'custom_fb_field_register_theme_customizer' );


// function exclude_category( $query ) {
//   if ( $query->is_front_page() ) {
//     $query->set( 'cat', '-30 -69 -70 -71 -72 -73 -74 -75 -77 -78 -79 -80' );
//   }
// }
// add_action( 'pre_get_posts', 'exclude_category' );
/*
 * Register Our Customizer Stuff Here
 */
function custom_fb_field_register_theme_customizer( $wp_customize ) {
	// Create custom panel.
	$wp_customize->add_panel( 'fb_appid_blocks', array(
		'priority'       => 500,
		'theme_supports' => '',
		'title'          => __( 'Facebook', 'custom_fb_field' ),
		'description'    => __( 'Set editable text for certain content.', 'custom_fb_field' ),
	) );
	// Add Footer Text
	// Add section.
	$wp_customize->add_section( 'facebook_appid' , array(
		'title'    => __('Facebook APP ID','custom_fb_field'),
		'panel'    => 'fb_appid_blocks',
		'priority' => 10
	) );
	// Add setting
	$wp_customize->add_setting( 'footer_text_block', array(
		 'default'           => __( '', 'custom_fb_field' ),
		 'sanitize_callback' => 'sanitize_text'
	) );
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'facebook_appid',
		    array(
		        'label'    => __( 'Facebook APPID', 'custom_fb_field' ),
		        'section'  => 'facebook_appid',
		        'settings' => 'footer_text_block',
		        'type'     => 'text'
		    )
	    )
	);
 	// Sanitize text
	function sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}
}
add_action('wp_logout','auto_redirect_tribeuser_after_logout');
function auto_redirect_tribeuser_after_logout(){
    if(!is_admin()){
        wp_redirect( get_site_url().'/login' );
    }

 exit();
}
function getCurrentCatID(){
  global $wp_query;
  if(is_category() || is_single()){
    $cat_ID = get_query_var('cat');
  }
  return $cat_ID;
}
function simplehour_time_ago() {
     
    global $post;
     
    $date = get_post_time('G', true, $post);
     
    // Array of time period chunks
    $chunks = array(
        array( 60 * 60 * 24 * 365 , __( 'year', 'simplehour' ), __( 'years', 'simplehour' ) ),
        array( 60 * 60 * 24 * 30 , __( 'month', 'simplehour' ), __( 'months', 'simplehour' ) ),
        array( 60 * 60 * 24 * 7, __( 'week', 'simplehour' ), __( 'weeks', 'simplehour' ) ),
        array( 60 * 60 * 24 , __( 'day', 'simplehour' ), __( 'days', 'simplehour' ) ),
        array( 60 * 60 , __( 'hour', 'simplehour' ), __( 'hours', 'simplehour' ) ),
        array( 60 , __( 'minute', 'simplehour' ), __( 'minutes', 'simplehour' ) ),
        array( 1, __( 'second', 'simplehour' ), __( 'seconds', 'simplehour' ) )
    );
 
    if ( !is_numeric( $date ) ) {
        $time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
        $date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
        $date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
    }
     
    $current_time = current_time( 'mysql', $gmt = 0 );
    $newer_date = strtotime( $current_time );
 
    // Difference in seconds
    $since = $newer_date - $date;
 
    // Something went wrong with date calculation and we ended up with a negative date.
    if ( 0 > $since )
        return __( 'sometime', 'simplehour' );
 
    /**
     * We only want to output one chunks of time here, eg:
     * x years
     * xx months
     * so there's only one bit of calculation below:
     */
 
    //Step one: the first chunk
    for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
 
        // Finding the biggest chunk (if the chunk fits, break)
        if ( ( $count = floor($since / $seconds) ) != 0 )
            break;
    }
 
    // Set output var
    $output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];
     
 
    if ( !(int)trim($output) ){
        $output = '0 ' . __( 'seconds', 'simplehour' );
    }
     
    $output .= __(' ago', 'simplehour');
     
    return $output;
}
//add_filter('the_time', 'simplehour_time_ago');

function pressfore_comment_time_output($date, $d, $comment){
    return sprintf( _x( '%s ago', '%s = human-readable time difference', 'your-text-domain' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter('get_comment_date', 'pressfore_comment_time_output', 10, 3);
?>