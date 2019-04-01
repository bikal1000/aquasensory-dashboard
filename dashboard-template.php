<?php
/* Template Name: Dashboard Template */
get_header();
$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">

	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
				<?php
					$args = array(
					    'role'    => 'subscriber',
					    'orderby' => '',
					    'order'   => 'ASC'
					);
					$users = get_users( $args );

					echo '<ul>';
						foreach ( $users as $user ) {
							// echo '<pre>';
							// var_dump($user);
							echo '<a href="'.get_site_url().'/profile?'.'xhuysx='.'uygh34u7ys6x'.$user->ID.'">'.$user->first_name.' '.$user->last_name.'</a>'.'<br>';
						    //echo '<li>' . esc_html( $user->display_name ) . '[' . esc_html( $user->user_email ) . ']</li>';
						}
					echo '</ul>';
				?>
			</div> <!-- #left-area -->

		</div> <!-- #content-area -->
	</div> <!-- .container -->

</div> <!-- #main-content -->

<?php

get_footer();