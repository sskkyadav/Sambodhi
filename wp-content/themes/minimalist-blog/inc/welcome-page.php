<?php

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

// Add a Custom CSS file to Admin Area
if ( ! function_exists( 'minimalist_blog_admin_theme_stylesheet' ) ) :
function minimalist_blog_admin_theme_stylesheet() {
    wp_enqueue_style( 'custom-admin-style', get_template_directory_uri() .'/assets/css/admin-css.css' );
}
endif;

add_action( 'admin_enqueue_scripts', 'minimalist_blog_admin_theme_stylesheet' );

// Notice after Theme Activation
if ( ! function_exists( 'minimalist_blog_activation_notice' ) ) :
function minimalist_blog_activation_notice() {
    echo '<div class="notice notice-info is-dismissible get-started">';
        echo '<p>'. esc_html__( 'Thank you for choosing Minimalist Blog. Please proceed towards the welcome page and give us the privilege to serve you.', 'minimalist-blog' ) .'</p>';
        echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=minimalist_blog_about' ) ) .'" class="button button-primary">'. esc_html__( 'Get Started', 'minimalist-blog' ) .'</a></p>';
    echo '</div>';
}
endif;

//About theme info
if ( ! function_exists( 'minimalist_blog_add_main_theme_page' ) ) :
function minimalist_blog_add_main_theme_page() {
    add_theme_page( esc_html__( 'About Minimalist Blog', 'minimalist-blog' ), esc_html__( 'About Minimalist Blog', 'minimalist-blog' ), 'edit_theme_options', 'minimalist_blog_about', 'minimalist_blog_about' );
}
endif;
add_action( 'admin_menu', 'minimalist_blog_add_main_theme_page' );

if ( ! function_exists( 'minimalist_blog_about' ) ) :
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
        <h1><?php printf( esc_html__( 'Getting started with %s', 'minimalist-blog' ), esc_html( $theme_name ) ); ?></h1>

        <?php /* translators: 1: Theme user name. 2: Theme name */ ?>
        <p><?php printf( esc_html__( 'Hi %1$s, thank you for installing %2$s!', 'minimalist-blog' ), esc_html( $theme_user->display_name ), esc_html( $theme_name ) ); ?> <?php echo esc_html( $theme_description ); ?></p>

        <div class="six columns clearfix">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="Theme Screenshot" />
        </div><!-- /.six columns -->

        <div class="six columns">
            <h3><a href="https://www.crafthemes.com/docs/<?php echo esc_attr( $theme_slug ); ?>-documentation/" target="_blank"><?php esc_html_e( 'Theme Documentation', 'minimalist-blog' ); ?></a></h3>
            <p>
                <?php esc_html_e( 'Read about all of the theme settings, and find out about its features.', 'minimalist-blog' ); ?>
            </p>

            <h3><a href="https://www.crafthemes-demo.com/<?php echo esc_attr( $theme_slug ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'minimalist-blog' ); ?></a></h3>
            <p>
                <?php esc_html_e( 'Checkout the live demo of Minimalist Blog.', 'minimalist-blog' ); ?>
            </p>

            <h3><a href="<?php echo esc_url( 'https://www.crafthemes.com/docs/minimalist-blog-documentation/demo-content-installation/' ); ?>" target="_blank"><?php esc_html_e( 'Import Demo Content', 'minimalist-blog' ); ?></a></h3>
            <p>
                <?php esc_html_e( 'Tutorial on how to import demo data to look your website same as the demo website.', 'minimalist-blog' ); ?>
            </p>
        </div><!-- /.six columns -->
    </div><!-- /.row -->
</div><!-- /.container about-writer -->

<?php
}
endif;
