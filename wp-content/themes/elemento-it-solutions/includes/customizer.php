<?php

if ( class_exists("Kirki")){

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'elemento-it-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'elemento_it_solutions_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'elemento-it-solutions' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'elemento-it-solutions' ),
			'off' => esc_html__( 'Disable', 'elemento-it-solutions' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'elemento_it_solutions_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'elemento-it-solutions' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'elemento-it-solutions' ),
			'off' => esc_html__( 'Disable', 'elemento-it-solutions' ),
		],
	] );

	// Additional Settings

	Kirki::add_section( 'elemento_it_solutions_additional_setting', array(
	    'title'          => esc_html__( 'Additional Settings', 'elemento-it-solutions' ),
	    'description'    => esc_html__( 'Additional Settings of themes', 'elemento-it-solutions' ),
	    'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'elemento_it_solutions_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'elemento-it-solutions' ),
		'section'     => 'elemento_it_solutions_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	// HEADER SECTION

	Kirki::add_section( 'elemento_it_solutions_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'elemento-it-solutions' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'elemento-it-solutions' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_enable_hiring_heading',
		'section'     => 'elemento_it_solutions_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Timing', 'elemento-it-solutions' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'	   =>  esc_html__( 'Title', 'elemento-it-solutions' ),
		'settings' => 'elemento_it_solutions_header_hiring_head',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'elemento-it-solutions' ),
		'settings' => 'elemento_it_solutions_header_hiring',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Text', 'elemento-it-solutions' ),
		'settings' => 'elemento_it_solutions_header_hiring_text',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Url', 'elemento-it-solutions' ),
		'settings' => 'elemento_it_solutions_header_hiring_url',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_enable_location_heading',
		'section'     => 'elemento_it_solutions_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'elemento-it-solutions' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'elemento_it_solutions_header_location',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_enable_email_heading',
		'section'     => 'elemento_it_solutions_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'elemento-it-solutions' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'elemento_it_solutions_header_email',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_header_phone_number_heading',
		'section'     => 'elemento_it_solutions_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'elemento-it-solutions' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Text', 'elemento-it-solutions' ),
		'settings' => 'elemento_it_solutions_header_phone_number_text',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Phone Number', 'elemento-it-solutions' ),
		'settings' => 'elemento_it_solutions_header_phone_number',
		'section'  => 'elemento_it_solutions_section_header',
		'default'  => '',
		'sanitize_callback' => 'elemento_it_solutions_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_enable_socail_link',
		'section'     => 'elemento_it_solutions_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'elemento-it-solutions' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'elemento_it_solutions_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'elemento-it-solutions' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'elemento-it-solutions' ),
		'settings'     => 'elemento_it_solutions_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'elemento-it-solutions' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'elemento-it-solutions' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'elemento-it-solutions' ),
				'description' => esc_html__( 'Add the social icon url here.', 'elemento-it-solutions' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'elemento_it_solutions_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'elemento-it-solutions' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'elemento-it-solutions' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_footer_text_heading',
		'section'     => 'elemento_it_solutions_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'elemento-it-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'elemento_it_solutions_footer_text',
		'section'  => 'elemento_it_solutions_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'elemento_it_solutions_footer_enable_heading',
		'section'     => 'elemento_it_solutions_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'elemento-it-solutions' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'elemento_it_solutions_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'elemento-it-solutions' ),
		'section'     => 'elemento_it_solutions_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'elemento-it-solutions' ),
			'off' => esc_html__( 'Disable', 'elemento-it-solutions' ),
		],
	] );
}
