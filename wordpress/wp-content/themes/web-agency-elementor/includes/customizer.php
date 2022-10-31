<?php

if ( class_exists("Kirki")){

	// HEADER SECTION

	Kirki::add_section( 'web_agency_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'web-agency-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'web-agency-elementor' ),
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_enable_button_heading',
		'section'     => 'web_agency_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'web-agency-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Text', 'web-agency-elementor' ),
		'settings' => 'web_agency_elementor_header_button_text',
		'section'  => 'web_agency_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button URL', 'web-agency-elementor' ),
		'settings' => 'web_agency_elementor_header_button_url',
		'section'  => 'web_agency_elementor_section_header',
		'default'  => '',
	] );	
	    
	// FOOTER SECTION

	Kirki::add_section( 'web_agency_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'web-agency-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'web-agency-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_text_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'web_agency_elementor_footer_text',
		'section'  => 'web_agency_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'web_agency_elementor_footer_enable_heading',
		'section'     => 'web_agency_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'web-agency-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'web_agency_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'web-agency-elementor' ),
		'section'     => 'web_agency_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'web-agency-elementor' ),
			'off' => esc_html__( 'Disable', 'web-agency-elementor' ),
		],
	] );
}