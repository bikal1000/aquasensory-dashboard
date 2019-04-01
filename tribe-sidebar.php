<?php
add_action( 'widgets_init', 'tribeblog_sidebar_widgets_init' );
function tribeblog_sidebar_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Tribe Blog Sidebar', 'tribeblog_sidebar' ),
        'id' => 'tribeblog_sidebar',
        'description' => __( 'Tribe Blog Sidebar', 'tribeblog_sidebar' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
?>