<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'realestate-agent' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'realestate-agent' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'realestate-agent' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'realestate_agent_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'realestate-agent' ),
	) );

	Kirki::add_section( 'realestate_agent_font_style_section', array(
		'title'      => esc_attr__( 'Typography Option',  'realestate-agent' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_all_headings_typography',
		'section'     => 'realestate_agent_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'realestate_agent_all_headings_typography',
		'label'       => esc_attr__( 'Heading Typography',  'realestate-agent' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'realestate-agent' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'realestate-agent' ),
		'section'     => 'realestate_agent_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_body_content_typography',
		'section'     => 'realestate_agent_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'realestate_agent_body_content_typography',
		'label'       => esc_attr__( 'Content Typography',  'realestate-agent' ),
		'description' => esc_attr__( 'Select the typography options for your heading.',  'realestate-agent' ),
		'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'realestate-agent' ),
		'section'     => 'realestate_agent_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	// PANEL

	Kirki::add_panel( 'realestate_agent_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'realestate-agent' ),
	) );

	// Scroll Top

	Kirki::add_section( 'realestate_agent_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'realestate-agent' ),
	    'description'    => esc_html__( 'Scroll To Top', 'realestate-agent' ),
	    'panel'          => 'realestate_agent_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'realestate_agent_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_realestate_agent',
		'label'       => esc_html__( 'Menus Text Transform', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_scroll',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'realestate-agent' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'realestate-agent' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'realestate-agent' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'realestate-agent' ),

		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_scroll',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// POST SECTION

	Kirki::add_section( 'realestate_agent_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'realestate-agent' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'realestate-agent' ),
	    'panel'          => 'realestate_agent_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_post_heading',
		'section'     => 'realestate_agent_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_excerpt_post_heading',
		'section'     => 'realestate_agent_section_post',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text.', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'realestate-agent' ),
		'section'     => 'realestate_agent_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'realestate_agent_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'realestate-agent' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'realestate-agent' ),
	    'panel'          => 'realestate_agent_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_email_address_heading',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'realestate_agent_header_email_address',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_phone_number_heading',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'realestate_agent_header_phone_number',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_search',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_search_box_enable',
		'section'     => 'realestate_agent_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_header_property_btn_heading',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Property Button', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'realestate-agent' ),
		'settings' => 'realestate_agent_header_property_btn_text',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Link', 'realestate-agent' ),
		'settings' => 'realestate_agent_header_property_btn_link',
		'section'  => 'realestate_agent_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_socail_link',
		'section'     => 'realestate_agent_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'realestate_agent_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'realestate-agent' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'realestate-agent' ),
		'settings'     => 'realestate_agent_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'realestate-agent' ),
				'description' => esc_html__( 'Add the social media text ex: fab fa-facebook-f.', 'realestate-agent' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'realestate-agent' ),
				'description' => esc_html__( 'Add the social icon url here.', 'realestate-agent' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'realestate_agent_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'realestate-agent' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'realestate-agent' ),
        'panel'          => 'realestate_agent_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_enable_heading',
		'section'     => 'realestate_agent_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_slide_title_enable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_slide_text_enable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_slide_button_enable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_slider_heading',
		'section'     => 'realestate_agent_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'realestate_agent_blog_slide_number',
		'label'       => esc_html__( 'Slide Content Range', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'realestate_agent_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'realestate-agent' ),
		'priority'    => 10,
		'choices'     => realestate_agent_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_slider_text_heading_4',
		'section'     => 'realestate_agent_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Slider Text', 'realestate-agent' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'realestate_agent_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'realestate-agent' ),
		'section'     => 'realestate_agent_blog_slide_section',
		'default'     => 20,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// PROPERTIES SECTION

	Kirki::add_section( 'realestate_agent_popular_section', array(
        'title'          => esc_html__( 'Properties Settings', 'realestate-agent' ),
        'description'    => esc_html__( 'You have to select category to show properties.', 'realestate-agent' ),
        'panel'          => 'realestate_agent_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_about_enable_heading',
		'section'     => 'realestate_agent_popular_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Properties', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_your_properties_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_popular_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_properties_heading',
		'section'     => 'realestate_agent_popular_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Properties Section', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Section Title', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_title',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Section Text', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_text',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Section Button Text', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_btn_text',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Section Button Link', 'realestate-agent' ),
		'settings' => 'realestate_agent_section_btn_link',
		'section'  => 'realestate_agent_popular_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'realestate_agent_your_properties_number',
		'label'       => esc_html__( 'Number of properties to show', 'realestate-agent' ),
		'section'     => 'realestate_agent_popular_section',
		'default'     => '',
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'realestate_agent_your_properties_category',
		'label'       => esc_html__( 'Select the category to show properties', 'realestate-agent' ),
		'section'     => 'realestate_agent_popular_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'realestate-agent' ),
		'priority'    => 10,
		'choices'     => realestate_agent_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'realestate_agent_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'realestate-agent' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'realestate-agent' ),
        'panel'          => 'realestate_agent_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_footer_text_heading',
		'section'     => 'realestate_agent_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'realestate_agent_footer_text',
		'section'  => 'realestate_agent_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'realestate_agent_footer_enable_heading',
		'section'     => 'realestate_agent_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'realestate-agent' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'realestate_agent_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'realestate-agent' ),
		'section'     => 'realestate_agent_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'realestate-agent' ),
			'off' => esc_html__( 'Disable', 'realestate-agent' ),
		],
	] );
}
