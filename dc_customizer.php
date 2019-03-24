<?php

/* Default settings for main theme colors */

function dc_customizer( $wp_customize ) {
// add "Divi Center" panel
$wp_customize->add_panel( 'dc_center_all_options', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Divi Center options', 'divicenter'),
        'description'    => __('Customize theme colors', 'divicenter'),
) );
	// add "Divi Center" section
	$wp_customize->add_section( 'divi_center_theme_colors' , array(
		'title'      => __( 'Divi Center theme colors', 'dc' ),
		'priority'   => 100,
                'panel'  => 'dc_center_all_options',
	) );
	
	// add setting for primary color 1
	$wp_customize->add_setting( 'primary_color_1', array( 
		'default' => '#ff278c'
	) );
	$wp_customize->add_setting( 'primary_color_2', array( 
		'default' => '#b00f57'
	) );
        $wp_customize->add_setting( 'primary_color_3', array( 
		'default' => '#d7156a'
	) );
     $wp_customize->add_setting( 'primary_color_4', array( 
		'default' => '#242424'
	) );
    $wp_customize->add_setting( 'primary_color_5', array( 
		'default' => '#ffffff'
	) );
    $wp_customize->add_setting( 'primary_color_6', array( 
		'default' => '#7d7d7d'
	) );
	// add controls for main colors and its defaults
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_1', array(
	'label' => 'Main color 1 (default: pink)',
	'section' => 'divi_center_theme_colors',
	'settings' => 'primary_color_1',
) ) );
         $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_2', array(
	'label' => 'Main color 2 (default: purple)',
	'section' => 'divi_center_theme_colors',
	'settings' => 'primary_color_2',
) ) );
         $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_3', array(
	'label' => 'Main color 3 (default: purple 2)',
	'section' => 'divi_center_theme_colors',
	'settings' => 'primary_color_3',
) ) );
         $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_4', array(
	'label' => 'Headline colors',
	'section' => 'divi_center_theme_colors',
	'settings' => 'primary_color_4',
) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_5', array(
	'label' => 'All whites',
	'section' => 'divi_center_theme_colors',
	'settings' => 'primary_color_5',
) ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_6', array(
	'label' => 'All texts',
	'section' => 'divi_center_theme_colors',
	'settings' => 'primary_color_6',
) ) );
}
add_action( 'customize_register', 'dc_customizer' );


/* Echoing the values from customizer */

function dc_main_color_1_settings() {
	$link_color = get_theme_mod( 'primary_color_1' ); 
	
	if ( $link_color != '#ff278c' ) :
	?>
		<style type="text/css">
			.dc_main_gym_color_1{
				color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_background_color_1{
				background-color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_border_color_1{
				border-color: <?php echo $link_color; ?> !important;
			}
                       .dc_main_gym_color_box_shadow_about_1{  -webkit-box-shadow: -62px -21px 0px 0px <?php echo $link_color; ?> !Important;
                                                               -moz-box-shadow: -62px -21px 0px 0px <?php echo $link_color; ?> !Important;
                                                                box-shadow: -62px -21px 0px 0px <?php echo $link_color; ?> !important;}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'dc_main_color_1_settings' );

function dc_main_color_2_settings() {
	$link_color = get_theme_mod( 'primary_color_2' ); 
	
	if ( $link_color != '#b00f57' ) :
	?>
		<style type="text/css">
			.dc_main_gym_color_2{
				color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_background_color_2{
				background-color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_border_color_2{
				border-color: <?php echo $link_color; ?> !important;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'dc_main_color_2_settings' );

function dc_main_color_3_settings() {
	$link_color = get_theme_mod( 'primary_color_3' ); 
	
	if ( $link_color != '#d7156a' ) :
	?>
		<style type="text/css">
			.dc_main_gym_color_3{
				color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_background_color_3{
				background-color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_border_color_3{
				border-color: <?php echo $link_color; ?> !important;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'dc_main_color_3_settings' );

function dc_main_color_4_settings() {
	$link_color = get_theme_mod( 'primary_color_4' ); 
	
	if ( $link_color != '#242424' ) :
	?>
		<style type="text/css">
			.dc_main_gym_color_4{
				color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_background_color_4{
				background-color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_border_color_4{
				border-color: <?php echo $link_color; ?> !important;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'dc_main_color_4_settings' );

function dc_main_color_5_settings() {
	$link_color = get_theme_mod( 'primary_color_5' ); 
	
	if ( $link_color != '#ffffff' ) :
	?>
		<style type="text/css">
			.dc_main_gym_color_5{
				color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_background_color_5{
				background-color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_border_color_5{
				border-color: <?php echo $link_color; ?> !important;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'dc_main_color_5_settings' );

function dc_main_color_6_settings() {
	$link_color = get_theme_mod( 'primary_color_6' ); 
	
	if ( $link_color != '#7d7d7d' ) :
	?>
		<style type="text/css">
			.dc_main_gym_color_6{
				color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_background_color_6{
				background-color: <?php echo $link_color; ?> !Important;
			}
                        .dc_main_gym_border_color_6{
				border-color: <?php echo $link_color; ?> !important;
			}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'dc_main_color_6_settings' );


/* End Default settings for main theme colors */

/* Default settings for main contact form icons */



?>