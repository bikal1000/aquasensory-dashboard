<?php
/* Template Name: Profile Template */
get_header();
$getuserid = $_GET['xhuysx'];
$puserid = explode('x', $getuserid);
$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">

	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
				<?php
						$user_info = get_userdata($puserid[1]);
	      				echo $user_info->last_name .  ", " . $user_info->first_name .'<br>';
						echo $user_info->user_email .'<br>';
						if ( $user_info ) :
				    ?>
				    <img src="<?php echo esc_url( get_avatar_url( $user_info->ID ) ); ?>" />
				<?php endif; ?>
			</div> <!-- #left-area -->

		</div> <!-- #content-area -->
	</div> <!-- .container -->

</div> <!-- #main-content -->

<?php

get_footer('tribe');