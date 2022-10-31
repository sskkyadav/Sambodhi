<?php
/**
 * Homepage Sections.
 *
 * @package eleven_blog
 */

// Add Panel.
$wp_customize->add_panel( 'homepage_sections',
	array(
	'title'      => __( 'Homepage Sections', 'eleven-blog' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

// Slider Posts Section
$wp_customize->add_section('section_slider_posts', array(    
	'title'       => __('Slider Posts', 'eleven-blog'),
	'panel'       => 'homepage_sections'    
));

// Show Section
$wp_customize->add_setting('slider_posts_section_show', array(
	'default' 			=> false,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'eleven_blog_sanitize_checkbox'
	)
);

$wp_customize->add_control('slider_posts_section_show', array(		
	'label' 	=> __('Show Section', 'eleven-blog'),
	'section' 	=> 'section_slider_posts',
	'type' 		=> 'checkbox',	
	)
);

// Category
$wp_customize->add_setting('slider_posts_category', 
	array(
	'default' 			=> '0',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control( 
	new eleven_blog_Customize_Category_Control( $wp_customize, 'slider_posts_category', 
        array(
            'label'         => __( 'Select Category', 'eleven-blog' ),
            'section'       => 'section_slider_posts',
			'settings'  	=> 'slider_posts_category',
        )
    )
);

// Read More Text
$wp_customize->add_setting( 'slider_posts_read_more_text', array(
	'default'           => esc_html__('Read More', 'eleven-blog'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'slider_posts_read_more_text', array(
	'label'       => __( 'Read More', 'eleven-blog' ),
	'section'     => 'section_slider_posts',
	'type'        => 'text',
) );

// Specialities Posts Section
$wp_customize->add_section('section_specialities_posts', array(    
	'title'       => __('Our Specialities', 'eleven-blog'),
	'panel'       => 'homepage_sections'    
));

// Show Section
$wp_customize->add_setting('specialities_posts_section_show', array(
	'default' 			=> false,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'eleven_blog_sanitize_checkbox'
	)
);

$wp_customize->add_control('specialities_posts_section_show', array(		
	'label' 	=> __('Show Section', 'eleven-blog'),
	'section' 	=> 'section_specialities_posts',
	'type' 		=> 'checkbox',	
	)
);

// Title
$wp_customize->add_setting( 'specialities_section_title', array(
	'default'           => esc_html__('Our Specialities', 'eleven-blog'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'specialities_section_title', array(
	'label'       => __( 'Title', 'eleven-blog' ),
	'section'     => 'section_specialities_posts',
	'type'        => 'text',
) );

// Description
$wp_customize->add_setting( 'specialities_section_description', array(
	'default'           => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto doeiusmod tempor incidition ulla mco laboris nisi ut aliquip ex ea commo condorico consectetur adipiscing elitut aliquip.', 'eleven-blog'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'specialities_section_description', array(
	'label'       => __( 'Description', 'eleven-blog' ),
	'section'     => 'section_specialities_posts',
	'type'        => 'textarea',
) );

// Category
$wp_customize->add_setting('specialities_posts_category', 
	array(
	'default' 			=> '0',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control( 
	new eleven_blog_Customize_Category_Control( $wp_customize, 'specialities_posts_category', 
        array(
            'label'         => __( 'Select Category', 'eleven-blog' ),
            'section'       => 'section_specialities_posts',
			'settings'  	=> 'specialities_posts_category',
        )
    )
);

// Latest Posts Section
$wp_customize->add_section('section_latest_posts', array(    
	'title'       => __('Latest Posts', 'eleven-blog'),
	'panel'       => 'homepage_sections'    
));

// Show Section
$wp_customize->add_setting('latest_posts_section_show', array(
	'default' 			=> false,
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'eleven_blog_sanitize_checkbox'
	)
);

$wp_customize->add_control('latest_posts_section_show', array(		
	'label' 	=> __('Show Section', 'eleven-blog'),
	'section' 	=> 'section_latest_posts',
	'type' 		=> 'checkbox',	
	)
);

// Title
$wp_customize->add_setting( 'latest_posts_section_title', array(
	'default'           => esc_html__('Latest Posts', 'eleven-blog'),
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => 'refresh',
) );

$wp_customize->add_control( 'latest_posts_section_title', array(
	'label'       => __( 'Title', 'eleven-blog' ),
	'section'     => 'section_latest_posts',
	'type'        => 'text',
) );

// Category
$wp_customize->add_setting('latest_posts_category', 
	array(
	'default' 			=> '0',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	'transport'         => 'refresh',
	)
);

$wp_customize->add_control( 
	new eleven_blog_Customize_Category_Control( $wp_customize, 'latest_posts_category', 
        array(
            'label'         => __( 'Select Category', 'eleven-blog' ),
            'section'       => 'section_latest_posts',
			'settings'  	=> 'latest_posts_category',
        )
    )
);