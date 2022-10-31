<?php

/**
 * Load assets.
 */
function meet_minimalist_enqueue_styles() {
    $my_theme = wp_get_theme();
    $version = $my_theme['Version'];

    wp_enqueue_style( 'meet-minimalist-gfonts', minimalist_blog_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'meet-minimalist-slick-css', get_stylesheet_directory_uri() . '/assets/js/slick/slick.css' );
    wp_enqueue_style( 'meet-minimalist-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'meet-minimalist-main-style', get_stylesheet_directory_uri() . '/assets/css/main.css' );

    wp_enqueue_script( 'meet-minimalist-slick-js', get_stylesheet_directory_uri() . '/assets/js/slick/slick.min.js', array( 'jquery' ), $version, false );
    wp_enqueue_script( 'meet-minimalist-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery', 'meet-minimalist-slick-js' ), $version, true );
}

add_action( 'wp_enqueue_scripts', 'meet_minimalist_enqueue_styles', 10 );


/*************************************************************************************************************************
 * Loads google fonts to the theme
 * Thanks to themeshaper.com
 ************************************************************************************************************************/

if ( ! function_exists( 'minimalist_blog_fonts_url' ) ) :
    function minimalist_blog_fonts_url() {
        $fonts_url  = '';
        $inter   = _x( 'on', 'Inter font: on or off', 'meet-minimalist' );
        $open = _x( 'on', 'Poppins font: on or off', 'meet-minimalist' );

        if ( 'off' !== $inter || 'off' !== $open) {
            $font_families = array();

            if ( 'off' !== $inter ) {
                $font_families[] = 'Inter:400,500';
            }
            
            if ( 'off' !== $open ) {
                $font_families[] = 'Poppins:700';
            }
        }

        $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
        'subset' => urlencode( 'cyrillic-ext,cyrillic,vietnamese,latin-ext,latin' )
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

        return esc_url_raw( $fonts_url );
    }
endif;
    

/*************************************************************************************************************************
 * Add Class to the body
 ************************************************************************************************************************/
function meet_minimalist_classes( $classes ) {
    $classes[] = 'meet-minimalist-style';
    return $classes;
}

add_filter( 'body_class','meet_minimalist_classes' );

/****************************************************************************
 *  Custom Excerpt Length
 ****************************************************************************/

function meet_minimalist_excerpt( $limit ) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
  
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
  
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  
    return $excerpt;
  }

// Category Dropdown
require_once get_stylesheet_directory() . '/inc/dropdown-category.php';
function meet_minimalist_customize_register( WP_Customize_Manager $wp_customize ) {

	$wp_customize->add_section( 'meet_minimalist_homepage', array(
		'title' => esc_html_x( 'Homepage Options', 'customizer section title', 'meet-minimalist' ),
	) );

    // Enable Slider Section?
	$wp_customize->add_setting('meet_minimalist_show_slider_settings', array(
		'default'    => 1,
        'sanitize_callback' => 'absint',
	));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'meet_minimalist_show_block_control',
            array(
                'label'     => __('Enable Homepage Slider?', 'meet-minimalist'),
                'section'   => 'meet_minimalist_homepage',
                'settings'  => 'meet_minimalist_show_slider_settings',
                'type'      => 'checkbox',
            )
        )
    );

	// SLider Select Categories
	$wp_customize->add_setting( 'meet_minimalist_categories_setting', array(
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'meet_minimalist_project_types_sanitize'
    ) );

    $wp_customize->add_control(
        new Meet_Minimalist_Customize_Control_Multiple_Select(
            $wp_customize,
            'meet_minimalist_categories_control',
            array(
                'settings' => 'meet_minimalist_categories_setting',
                'label'    => __( 'Select Post Categories', 'meet-minimalist' ),
				'description'     => __( "You can select multiple categories by pressing Ctrl + Click ( Windows ) or Command + Click ( Mac )", "meet-minimalist" ),
                'section'  => 'meet_minimalist_homepage', // Enter the name of your own section
                'type'     => 'multiple-select', // The $type in our class
                'choices'  => meet_minimalist_project_types(), // Your choices
                'active_callback' => 'meet_minimalist_is_block_section_enabled'
            )
        )
    );

    // Enable Category Container?
	$wp_customize->add_setting('meet_minimalist_cat_container_settings', array(
		'default'    => 1,
        'sanitize_callback' => 'absint',
	));
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'meet_minimalist_cat_container_control',
            array(
                'label'     => __('Enable Category Container?', 'meet-minimalist'),
                'section'   => 'meet_minimalist_homepage',
                'settings'  => 'meet_minimalist_cat_container_settings',
                'type'      => 'checkbox',
            )
        )
    );

    // SLider Select Categories
	$wp_customize->add_setting( 'meet_minimalist_cont_categories_setting', array(
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'meet_minimalist_project_types_sanitize'
    ) );

    $wp_customize->add_control(
        new Meet_Minimalist_Customize_Control_Multiple_Select(
            $wp_customize,
            'meet_minimalist_cont_categories_control',
            array(
                'settings' => 'meet_minimalist_cont_categories_setting',
                'label'    => __( 'Select Post Categories', 'meet-minimalist' ),
				'description'     => __( "You can select multiple categories by pressing Ctrl + Click ( Windows ) or Command + Click ( Mac )", "meet-minimalist" ),
                'section'  => 'meet_minimalist_homepage', // Enter the name of your own section
                'type'     => 'multiple-select', // The $type in our class
                'choices'  => meet_minimalist_project_types(), // Your choices
                'active_callback' => 'meet_minimalist_is_cat_section_enabled'
            )
        )
    );

    // Premium Info
	$wp_customize->add_setting( 'meet_minimalist_premium_description_setting', array(
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'meet_minimalist_premium_description_control', array(
		/* translators: %1$s: Widget Link Start, %2$s: Link End, %3$s: Nav Menu Link */
		'description'     => __( "Upgrade to Minimalist Pro for full customization.", "meet-minimalist" ),
		'section'         => 'meet_minimalist_homepage',
		'settings'        => 'meet_minimalist_premium_description_setting',
		'type'            => 'hidden',
	) ) );

    // Single Post setting
    $wp_customize->add_section( 'meet_minimalist_single_post_section', array(
		'title' => esc_html_x( 'Single Post Options', 'customizer section title', 'meet-minimalist' ),
	) );

    // Enable Slider Section?
	$wp_customize->add_setting('meet_minimalist_single_post_settings', array(
        'default'    => 'right-sidebar',
        'sanitize_callback' => 'meet_minimalist_sanitize_select',
	));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize, //Pass the $wp_customize object (required)
        'meet_minimalist_single_post_control', //Set a unique ID for the control
        array(
           'label'      => __( 'Sidebar Settings', 'meet-minimalist' ), //Admin-visible name of the control
           'settings'   => 'meet_minimalist_single_post_settings', //Which setting to load and manipulate (serialized is okay)
           'priority'   => 10, //Determines the order this control appears in for the specified section
           'section'    => 'meet_minimalist_single_post_section', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
           'type'    => 'select',
           'choices' => array(
               'right-sidebar' => 'Right Sidebar',
               'no-sidebar' => 'No Sidebar',
           )
       )
    ) );
}

add_action( 'customize_register', 'meet_minimalist_customize_register' );

// Active Callbacks
function meet_minimalist_is_block_section_enabled() {
    if( get_theme_mod( "meet_minimalist_show_slider_settings", 1 ) ) {
        return true;
    }

    return false;
}


function meet_minimalist_is_cat_section_enabled() {
    if( get_theme_mod( "meet_minimalist_cat_container_settings", 1 ) ) {
        return true;
    }

    return false;
}

/*
 * Sanitization Callbacks
 ******************************************************************************/
function meet_minimalist_sanitize_select( $input ) {
    $valid = array(
        'right-sidebar' => 'Right Sidebar',
        'no-sidebar' => 'No Sidebar',
    );
  
    if ( array_key_exists( $input, $valid ) ) {
      return $input;
    } else {
      return '';
    }
} 

/****************************************************************************
 *  Welcome Page
 ****************************************************************************/

/* Theme Setup */
if ( ! function_exists( 'minimalist_blog_theme_setup' ) ) :

function minimalist_blog_theme_setup() {

    // Theme Activation Notice
    global $pagenow;

    if ( is_admin() && ( 'themes.php' == $pagenow ) && isset( $_GET['activated'] ) ) {
        add_action( 'admin_notices', 'minimalist_blog_activation_notice' );
    }
}

endif;
add_action( 'after_setup_theme', 'minimalist_blog_theme_setup' );

// Notice after Theme Activation
function minimalist_blog_activation_notice() {
    echo '<div class="notice notice-info is-dismissible get-started">';
        echo '<p>'. esc_html__( 'Thank you for choosing Meet Minimalist. Please proceed towards the welcome page and give us the privilege to serve you.', 'meet-minimalist' ) .'</p>';
        echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=minimalist_blog_about' ) ) .'" class="button button-primary">'. esc_html__( 'Get Started', 'meet-minimalist' ) .'</a></p>';
    echo '</div>';
}

//about theme info
function minimalist_blog_add_main_theme_page() {
    add_theme_page( esc_html__( 'About Meet Minimalist', 'meet-minimalist' ), esc_html__( 'About Meet Minimalist', 'meet-minimalist' ), 'edit_theme_options', 'minimalist_blog_about', 'minimalist_blog_about' );
}
add_action( 'admin_menu', 'minimalist_blog_add_main_theme_page' );

function minimalist_blog_about() {

    $theme = wp_get_theme();
    $theme_name = $theme->get( 'Name' );
    $theme_description = $theme->get( 'Description' );
    $theme_user = wp_get_current_user();
    $theme_slug = basename( get_stylesheet_directory() );
?>

<div class="container about-theme">
    <div class="row">
        <?php /* translators: %s: theme name. */ ?>
        <h1><?php printf( esc_html__( 'Getting started with %s', 'meet-minimalist' ), esc_html( $theme_name ) ); ?></h1>

        <?php /* translators: 1: Theme user name. 2: Theme name */ ?>
        <p><?php printf( esc_html__( 'Hi %1$s, thank you for installing %2$s!', 'meet-minimalist' ), esc_html( $theme_user->display_name ), esc_html( $theme_name ) ); ?> <?php echo esc_html( $theme_description ); ?></p>

        <div class="six columns clearfix">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="Theme Screenshot" />
        </div><!-- /.six columns -->

        <div class="six columns">
            <h3><a href="https://www.crafthemes.com/docs/<?php echo esc_attr( $theme_slug ); ?>-documentation/installation/" target="_blank"><?php esc_html_e( 'Theme Documentation', 'meet-minimalist' ); ?></a></h3>
            <p>
                <?php esc_html_e( 'Read about all of the theme settings, and find out about its features.', 'meet-minimalist' ); ?>
            </p>

            <h3><a href="https://www.crafthemes-demo.click/<?php echo esc_attr( $theme_slug ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'meet-minimalist' ); ?></a></h3>
            <p>
                <?php esc_html_e( 'Checkout the live demo of Minimalist Blog.', 'meet-minimalist' ); ?>
            </p>

            <h3><a href="<?php echo esc_url( 'https://www.crafthemes.com/docs/meet-minimalist-documentation/demo-content-installation/' ); ?>" target="_blank"><?php esc_html_e( 'Import Demo Content', 'meet-minimalist' ); ?></a></h3>
            <p>
                <?php esc_html_e( 'Tutorial on how to import demo data to look your website same as the demo website.', 'meet-minimalist' ); ?>
            </p>
        </div><!-- /.six columns -->
    </div><!-- /.row -->
</div><!-- /.container about-writer -->

<?php
}
