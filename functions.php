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
          echo '<li><a href="'.get_the_permalink().'" class="post_search_name">'. get_the_title() . '</li>';
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
    }
    return $query;
  }
add_filter('pre_get_posts','tribepost_search_filter');
}
?>