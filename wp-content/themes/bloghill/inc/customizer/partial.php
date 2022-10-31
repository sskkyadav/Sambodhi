<?php
/**
* Partial functions
*
* @package Theme Palace
* @subpackage Bloghill
* @since Bloghill 1.0.0
*/



// hero banner Section

if ( ! function_exists( 'bloghill_hero_banner_section_sub_title_partial' ) ) :

    function bloghill_hero_banner_section_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['hero_banner_sub_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_hero_banner_section_btn_text_partial' ) ) :

    function bloghill_hero_banner_section_btn_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['hero_banner_btn_text'] );
    }
endif;

if ( ! function_exists( 'bloghill_hero_banner_section_alt_btn_text_partial' ) ) :

    function bloghill_hero_banner_section_alt_btn_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['hero_banner_alt_btn_text'] );
    }
endif;

// project

if ( ! function_exists( 'bloghill_project_section_cat_title_partial' ) ) :

    function bloghill_project_section_cat_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['project_cat_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_project_section_title_partial' ) ) :

    function bloghill_project_section_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['project_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_project_section_about_title_partial' ) ) :

    function bloghill_project_section_about_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['project_about_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_project_section_about_content_partial' ) ) :

    function bloghill_project_section_about_content_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['project_about_content'] );
    }
endif;

// cta section

if ( ! function_exists( 'bloghill_cta_section_sub_title_partial' ) ) :
    function bloghill_cta_section_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['cta_sub_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_cta_section_btn_text_partial' ) ) :
    function bloghill_cta_section_btn_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['cta_btn_text'] );
    }
endif;

// testimonial

if ( ! function_exists( 'bloghill_testimonial_title_partial' ) ) :
    function bloghill_testimonial_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['testimonial_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_testimonial_sub_title_partial' ) ) :
    function bloghill_testimonial_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['testimonial_sub_title'] );
    }
endif;

// blog-post 

if ( ! function_exists( 'bloghill_blog_post_title_partial' ) ) :
    function bloghill_blog_post_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['blog_post_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_blog_post_btn_title_partial' ) ) :
    function bloghill_blog_post_btn_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['blog_post_btn_title'] );
    }
endif;

// slider 

if ( ! function_exists( 'bloghill_slider_btn_text_partial' ) ) :
    function bloghill_slider_btn_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['slider_btn_text'] );
    }
endif;

if ( ! function_exists( 'bloghill_slider_alt_btn_text_partial' ) ) :
    function bloghill_slider_alt_btn_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['slider_alt_btn_text'] );
    }
endif;

// promotion 

if ( ! function_exists( 'bloghill_promotion_btn_text_partial' ) ) :
    function bloghill_promotion_btn_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['promotion_btn_text'] );
    }
endif;

// popular products 

if ( ! function_exists( 'bloghill_popular_products_section_sub_title_partial' ) ) :
    function bloghill_popular_products_section_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['popular_products_sub_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_popular_products_section_title_partial' ) ) :
    function bloghill_popular_products_section_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['popular_products_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_popular_products_section_btn_title_partial' ) ) :
    function bloghill_popular_products_section_btn_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['popular_products_btn_title'] );
    }
endif;


// recent products 

if ( ! function_exists( 'bloghill_recent_products_sub_title_partial' ) ) :
    function bloghill_recent_products_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['recent_products_sub_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_recent_products_title_partial' ) ) :
    function bloghill_recent_products_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['recent_products_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_recent_products_btn_title_partial' ) ) :
    function bloghill_recent_products_btn_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['recent_products_btn_title'] );
    }
endif;

// featured products 

if ( ! function_exists( 'bloghill_featured_products_section_btn_title_partial' ) ) :
    function bloghill_featured_products_section_btn_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['featured_products_btn_title'] );
    }
endif;

// most read

if ( ! function_exists( 'bloghill_most_read_title_partial' ) ) :
    function bloghill_most_read_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['most_read_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_most_read_sub_title_partial' ) ) :
    function bloghill_most_read_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['most_read_sub_title'] );
    }
endif;

// service

if ( ! function_exists( 'bloghill_service_title_partial' ) ) :
    function bloghill_service_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['service_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_service_sub_title_partial' ) ) :
    function bloghill_service_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['service_sub_title'] );
    }
endif;

// team

if ( ! function_exists( 'bloghill_team_title_partial' ) ) :
    function bloghill_team_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['team_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_team_sub_title_partial' ) ) :
    function bloghill_team_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['team_sub_title'] );
    }
endif;

// music_gallery

if ( ! function_exists( 'bloghill_music_gallery_title_partial' ) ) :
    function bloghill_music_gallery_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['music_gallery_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_music_gallery_sub_title_partial' ) ) :
    function bloghill_music_gallery_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['music_gallery_sub_title'] );
    }
endif;


// about

if ( ! function_exists( 'bloghill_about_sub_title_partial' ) ) :
    function bloghill_about_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['about_sub_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_about_btn_text_partial' ) ) :
    function bloghill_about_btn_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['about_btn_text'] );
    }
endif;

// playlist

if ( ! function_exists( 'bloghill_playlist_title_partial' ) ) :
    function bloghill_playlist_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['playlist_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_playlist_sub_title_partial' ) ) :
    function bloghill_playlist_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['playlist_sub_title'] );
    }
endif;

// event

if ( ! function_exists( 'bloghill_event_title_partial' ) ) :
    function bloghill_event_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['event_title'] );
    }
endif;

if ( ! function_exists( 'bloghill_event_sub_title_partial' ) ) :
    function bloghill_event_sub_title_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['event_sub_title'] );
    }
endif;



// Footer 

if ( ! function_exists( 'bloghill_copyright_text_partial' ) ) :
    // copyright_text
    function bloghill_copyright_text_partial() {
        $options = bloghill_get_theme_options();
        return esc_html( $options['copyright_text'] );
    }
endif;