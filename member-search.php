<?php
$searchname = $_GET["searchname"];
$args  =  array (
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
	   $results =  '<a href="'.get_site_url().'/profile?'.'xhuysx='.'uygh34u7ys6x'.$user->ID.'">'.$user->first_name.' '.$user->last_name.'</a>'.'<br>';
	    echo json_encode(array('status'=>200,'data'=>$results));
	    exit();
	}
} else {
	echo 'No users found.';
	exit();
}
?>