<?php
/**
 * Theme Palace options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

/**
 * List of pages for page choices.
 * @return Array Array of page ids and name.
 */
function bloghill_page_choices() {
    $pages = get_pages();
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'bloghill' );
    foreach ( $pages as $page ) {
        $choices[ $page->ID ] = $page->post_title;
    }
    return  $choices;
}

/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function bloghill_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'bloghill' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

 function bloghill_featured_products_section_content_type() {
        $bloghill_featured_products_section_content_type = array(
            'post'      => esc_html__( 'Post', 'bloghill' ),
        );

        if(class_exists('WooCommerce')){
            $bloghill_featured_products_section_content_type = array_merge($bloghill_featured_products_section_content_type, 
                array(
                    'product'            => esc_html__( 'Product', 'bloghill' ),
                    'product-category'   => esc_html__( 'Product Category', 'bloghill' ),
                )
            );
        }

        $output = apply_filters( 'bloghill_featured_products_section_content_type', $bloghill_featured_products_section_content_type );

        return $output;
    }

/**
 * List of products for post choices.
 * @return Array Array of post ids and name.
 */
function bloghill_product_choices() {
    $posts = get_posts( array( 'numberposts' => -1, 'post_type' => 'product' ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'bloghill' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}


function bloghill_product_category_choices() {
    $tax_args = array(
        'hierarchical' => 0,
        'taxonomy'     => 'product_cat',
    );
    $taxonomies = get_categories( $tax_args );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'bloghill' );
    foreach ( $taxonomies as $tax ) {
        $choices[ $tax->term_id ] = $tax->name;
    }
    return  $choices;
}

function bloghill_slider_content_type() {
    $bloghill_slider_content_type = array(
        'page'      => esc_html__( 'Page', 'bloghill' ),
        'post'      => esc_html__( 'Post', 'bloghill' ),
        'category'  => esc_html__( 'Category', 'bloghill' ),
    );

    if(class_exists('WooCommerce')){
        $bloghill_slider_content_type = array_merge($bloghill_slider_content_type, 
            array(
                'product'            => esc_html__( 'Product', 'bloghill' ),
                'product-category'   => esc_html__( 'Product Category', 'bloghill' ),
            )
        );
    }

    $output = apply_filters( 'bloghill_slider_content_type', $bloghill_slider_content_type );

    return $output;
}

/**
 * List of events for post choices.
 * @return Array Array of post ids and name.
 */
function bloghill_event_choices() {
$posts = get_posts( array( 'numberposts' => -1, 'post_type' => 'tp-event' ) );
$choices = array();
$choices[0] = esc_html__( '--Select--', 'bloghill' );
foreach ( $posts as $post ) {
$choices[ $post->ID ] = $post->post_title;
}
return  $choices;
}

/**
 * List of category for category choices.
 * @return Array Array of post ids and name.
 */
function bloghill_category_choices() {
    $tax_args = array(
        'hierarchical' => 0,
        'taxonomy'     => 'category',
    );
    $taxonomies = get_categories( $tax_args );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'bloghill' );
    foreach ( $taxonomies as $tax ) {
        $choices[ $tax->term_id ] = $tax->name;
    }
    return  $choices;
}



if ( ! function_exists( 'bloghill_selected_sidebar' ) ) :
    /**
     * Sidebars options
     * @return array Sidbar positions
     */
    function bloghill_selected_sidebar() {
        $bloghill_selected_sidebar = array(
            'sidebar-1'             => esc_html__( 'Default Sidebar', 'bloghill' ),
            'optional-sidebar'      => esc_html__( 'Optional Sidebar 1', 'bloghill' ),
            'optional-sidebar-2'    => esc_html__( 'Optional Sidebar 2', 'bloghill' ),
            'optional-sidebar-3'    => esc_html__( 'Optional Sidebar 3', 'bloghill' ),
            'optional-sidebar-4'    => esc_html__( 'Optional Sidebar 4', 'bloghill' ),
        );

        $output = apply_filters( 'bloghill_selected_sidebar', $bloghill_selected_sidebar );

        return $output;
    }
endif;

if ( ! function_exists( 'bloghill_site_layout' ) ) :
    /**
     * Site Layout
     * @return array site layout options
     */
    function bloghill_site_layout() {
        $bloghill_site_layout = array(
            'wide-layout'  => get_template_directory_uri() . '/assets/images/full.png',
            'boxed-layout' => get_template_directory_uri() . '/assets/images/boxed.png',
        );

        $output = apply_filters( 'bloghill_site_layout', $bloghill_site_layout );
        return $output;
    }
endif;


if ( ! function_exists( 'bloghill_global_sidebar_position' ) ) :
    /**
     * Global Sidebar position
     * @return array Global Sidebar positions
     */
    function bloghill_global_sidebar_position() {
        $bloghill_global_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'bloghill_global_sidebar_position', $bloghill_global_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'bloghill_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidbar positions
     */
    function bloghill_sidebar_position() {
        $bloghill_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/images/right.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/images/full.png',
        );

        $output = apply_filters( 'bloghill_sidebar_position', $bloghill_sidebar_position );

        return $output;
    }
endif;


if ( ! function_exists( 'bloghill_pagination_options' ) ) :
    /**
     * Pagination
     * @return array site pagination options
     */
    function bloghill_pagination_options() {
        $bloghill_pagination_options = array(
            'numeric'   => esc_html__( 'Numeric', 'bloghill' ),
            'default'   => esc_html__( 'Default(Older/Newer)', 'bloghill' ),
        );

        $output = apply_filters( 'bloghill_pagination_options', $bloghill_pagination_options );

        return $output;
    }
endif;


if ( ! function_exists( 'bloghill_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function bloghill_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'bloghill' ),
            'off'       => esc_html__( 'Disable', 'bloghill' )
        );
        return apply_filters( 'bloghill_switch_options', $arr );
    }
endif;

if ( ! function_exists( 'bloghill_hide_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function bloghill_hide_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'bloghill' ),
            'off'       => esc_html__( 'No', 'bloghill' )
        );
        return apply_filters( 'bloghill_hide_options', $arr );
    }
endif;

if ( ! function_exists( 'bloghill_sortable_sections' ) ) :
    /**
     * List of sections Control options
     * @return array List of Sections control options.
     */
    function bloghill_sortable_sections() {
        $sections = array();
        $sections = array(
            'hero_banner'     => esc_html__( 'Hero Banner Section', 'bloghill' ),
            'project'     => esc_html__( 'Project Section', 'bloghill' ),
            'cta'     => esc_html__( 'Cta Section', 'bloghill' ),
            'testimonial'     => esc_html__( 'Testimonial Section', 'bloghill' ),
            'blog_post'     => esc_html__( 'Blog Post Section', 'bloghill' ),
        );
        return apply_filters( 'bloghill_sortable_sections', $sections );
    }
endif;
