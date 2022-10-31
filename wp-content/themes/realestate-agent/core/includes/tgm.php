<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function realestate_agent_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'realestate-agent' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	realestate_agent_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'realestate_agent_register_recommended_plugins' );