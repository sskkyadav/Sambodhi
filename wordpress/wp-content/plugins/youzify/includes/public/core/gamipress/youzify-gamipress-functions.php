<?php

/**
 * Include GamiPress Files.
 */

add_action( 'setup_theme', 'youzify_init_gamipress' );

function youzify_init_gamipress() {

	// Functions.
    require YOUZIFY_CORE . 'gamipress/youzify-gamipress-balance.php';
    require YOUZIFY_CORE . 'gamipress/youzify-gamipress-badges.php';

}

/**
 * GamiPress Enqueue scripts.
 */

add_action( 'wp_enqueue_scripts', 'youzify_gamipress_scripts' );

function youzify_gamipress_scripts( $hook_suffix ) {

    // Register GamiPress Css.
    wp_register_style( 'youzify-mycred', YOUZIFY_ASSETS . 'css/youzify-mycred.min.css', array(), YOUZIFY_VERSION );

    // Call GamiPress Css.
    wp_enqueue_style( 'youzify-mycred' );

}

/**
 * Edit My Cred Title
 */

add_filter( 'gamipress_br_history_page_title' , 'youzify_edit_gamipress_tab_title' );

function youzify_edit_gamipress_tab_title( $title ) {

	ob_start();

	?>

	<div class="youzify-tab-title-box">
		<div class="youzify-tab-title-icon"><i class="fas fa-history"></i></div>
		<div class="youzify-tab-title-content">
			<h2><?php echo $title; ?></h2>
			<span><?php _e( 'This is the user points log.', 'youzify' );?></span>
		</div>
	</div>

	<?php

	$output = ob_get_contents();
	ob_end_clean();

	return $output;

}



/**
 * Leader Board Widget.
 */

add_filter( 'gamipress_ranking_row', 'youzify_gamipress_leader_board_widget', 10, 5 );

function youzify_gamipress_leader_board_widget( $layout, $template, $user, $position, $data ) {

	if ( apply_filters( 'youzify_gamipress_leader_board_widget', true ) ) {
		$avatar = bp_core_fetch_avatar( array( 'item_id' => $user['ID'], 'type' => 'thumb' ) );
		$layout = '<li class="youzify-leaderboard-item"><div class="youzify-leaderboard-avatar"><span class="youzify-leaderboard-position"># ' . $position .'</span>'. $avatar . '</div><div class="youzify-leaderboard-content"><a class="youzify-leaderboard-username" href="' . bp_core_get_user_domain( $user['ID'] ).'">' . bp_core_get_user_displayname( $user['ID'] ) . '</a><div class="youzify-leaderboard-points">' . sprintf( _n( '%s ' . $data->core->core['name']['singular'], '%s ' . $data->core->core['name']['plural'], $user['cred'], 'youzify' ), $user['cred'] ) . '</div></li>';
	}
	return $layout;
}


/**
 * Get Statistics Value
 */

add_filter( 'youzify_get_user_statistic_number', 'youzify_get_gamipress_statistics_values', 10, 3 );

function youzify_get_gamipress_statistics_values( $value, $user_id, $type ) {

	if ( $type == 'points' ) {
		return youzify_gamipress_get_sum_of_points( $user_id, 'all' );
	}

	return $value;

}

/**
 * GamiPress Get Total Points
 * */
function youzify_gamipress_get_sum_of_points( $user_id, $points_type = 'all' ) {

    // Check desired points types
    if( $points_type === 'all' ) {
        $points_types = gamipress_get_points_types_slugs();
    } else {
        $points_types = explode( ',', $points_type );
    }

    $sum_of_points = 0;

    foreach ( $points_types as $points_type ) {

        // Ensure that this points type slug is registered
        if( ! in_array( $points_type, gamipress_get_points_types_slugs() ) ) {
            continue;
        }

        $sum_of_points += gamipress_get_user_points( $user_id, $points_type );
    }

    // Return the sum of points of all or specific points types
    return $sum_of_points;

}