<?php
/**
 * Customizer active callbacks
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

if ( ! function_exists( 'bloghill_is_loader_enable' ) ) :
	/**
	 * Check if loader is enabled.
	 *
	 * @since Bloghill 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function bloghill_is_loader_enable( $control ) {
		return $control->manager->get_setting( 'bloghill_theme_options[loader_enable]' )->value();
	}
endif;

if ( ! function_exists( 'bloghill_is_breadcrumb_enable' ) ) :
	/**
	 * Check if breadcrumb is enabled.
	 *
	 * @since Bloghill 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function bloghill_is_breadcrumb_enable( $control ) {
		return $control->manager->get_setting( 'bloghill_theme_options[breadcrumb_enable]' )->value();
	}
endif;

if ( ! function_exists( 'bloghill_is_pagination_enable' ) ) :
	/**
	 * Check if pagination is enabled.
	 *
	 * @since Bloghill 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function bloghill_is_pagination_enable( $control ) {
		return $control->manager->get_setting( 'bloghill_theme_options[pagination_enable]' )->value();
	}
endif;

if ( ! function_exists( 'bloghill_is_static_homepage_enable' ) ) :
	/**
	 * Check if static homepage is enabled.
	 *
	 * @since Bloghill 1.0.0
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function bloghill_is_static_homepage_enable( $control ) {
		return ( 'page' == $control->manager->get_setting( 'show_on_front' )->value() );
	}
endif;

/**
 * Front Page Active Callbacks
 */


/*=======================hero_banner=====================*/
/**
 * Check if hero_banner section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_hero_banner_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[hero_banner_section_enable]' )->value() );
}

/**
 * Check if hero_banner section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_hero_banner_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[hero_banner_content_type]' )->value();
	return bloghill_is_hero_banner_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if hero_banner section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_hero_banner_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[hero_banner_content_type]' )->value();
	return bloghill_is_hero_banner_section_enable( $control ) && ( 'post' == $content_type );
}

/*========================project====================*/

/**
 * Check if project section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_project_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[project_section_enable]' )->value() ;
}

/*=======================cta=====================*/
/**
 * Check if cta section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_cta_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[cta_section_enable]' )->value() );
}

/**
 * Check if cta section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_cta_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[cta_content_type]' )->value();
	return bloghill_is_cta_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if cta section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_cta_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[cta_content_type]' )->value();
	return bloghill_is_cta_section_enable( $control ) && ( 'post' == $content_type );
}

/*========================blog_post====================*/

/**
 * Check if blog_post section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_blog_post_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[blog_post_section_enable]' )->value() ;
}

/**
 * Check if blog_post section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_blog_post_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[blog_post_content_type]' )->value();
	return bloghill_is_blog_post_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if blog_post section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_blog_post_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[blog_post_content_type]' )->value();
	return bloghill_is_blog_post_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if blog_post section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_blog_post_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[blog_post_content_type]' )->value();
	return bloghill_is_blog_post_section_enable( $control ) && ( 'post' == $content_type );
}

/*========================slider====================*/

/**
 * Check if slider section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_slider_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[slider_section_enable]' )->value() ;
}

/**
 * Check if slider section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_slider_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[slider_content_type]' )->value();
	return bloghill_is_slider_section_enable( $control ) && ( 'category' == $content_type );
}

function bloghill_is_slider_section_content_product_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[slider_content_type]' )->value();
	return bloghill_is_slider_section_enable( $control ) && ( 'prouct-category' == $content_type );
}

function bloghill_is_slider_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[slider_content_type]' )->value();
	return bloghill_is_slider_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if slider section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_slider_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[slider_content_type]' )->value();
	return bloghill_is_slider_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if slider section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_slider_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[slider_content_type]' )->value();
	return bloghill_is_slider_section_enable( $control ) && ( 'post' == $content_type );
}

/*========================latest_product====================*/

/**
 * Check if latest_product section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_latest_product_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[latest_product_section_enable]' )->value() ;
}


/*========================popular_product====================*/
/**
 * Check if popular_product section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_popular_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[popular_products_section_enable]' )->value() );
}

/**
 * Check if popular_product section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_popular_products_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[popular_products_content_type]' )->value();
	return bloghill_is_popular_products_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if popular_product section content type is product-category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_popular_products_section_content_product_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[popular_products_content_type]' )->value();
	return bloghill_is_popular_products_section_enable( $control ) && ( 'product-category' == $content_type );
}


/**
 * Check if popular_product section separator is enabled.
 *
 * @since  Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_popular_products_section_separator_enable( $control ) {
    $content_type = $control->manager->get_setting( 'bloghill_theme_options[popular_products_content_type]' )->value();
    return bloghill_is_popular_products_section_enable( $control ) && !( 'product-category' == $content_type );
}


/*========================recent_product====================*/
/**
 * Check if recent_product section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_recent_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[recent_products_section_enable]' )->value() );
}

/**
 * Check if recent_product section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_recent_products_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[recent_products_content_type]' )->value();
	return bloghill_is_recent_products_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if recent_product section content type is product-category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_recent_products_section_content_product_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[recent_products_content_type]' )->value();
	return bloghill_is_recent_products_section_enable( $control ) && ( 'product-category' == $content_type );
}


/**
 * Check if recent_product section separator is enabled.
 *
 * @since  Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_recent_products_section_separator_enable( $control ) {
    $content_type = $control->manager->get_setting( 'bloghill_theme_options[recent_products_content_type]' )->value();
    return bloghill_is_recent_products_section_enable( $control ) && !( 'product-category' == $content_type );
}

/*=======================promotion=====================*/
/**
 * Check if promotion section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_promotion_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[promotion_section_enable]' )->value() );
}

/**
 * Check if promotion section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_promotion_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[promotion_content_type]' )->value();
	return bloghill_is_promotion_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if promotion section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_promotion_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[promotion_content_type]' )->value();
	return bloghill_is_promotion_section_enable( $control ) && ( 'post' == $content_type );
}

/*=======================featured products=====================*/

/**
 * Check if featured_products section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_featured_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[featured_products_section_enable]' )->value() );
}

/**
 * Check if featured_products section content type is product.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_featured_products_section_content_product_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[featured_products_content_type]' )->value();
	return bloghill_is_featured_products_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if featured_products section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_featured_products_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[featured_products_content_type]' )->value();
	return bloghill_is_featured_products_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if featured_products section content type is product-category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_featured_products_section_content_product_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[featured_products_content_type]' )->value();
	return bloghill_is_featured_products_section_enable( $control ) && ( 'product-category' == $content_type );
}

/*========================trending product====================*/


/**
 * Check if trending_products section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[trending_products_section_enable]' )->value() );
}

/**
 * Check if trending_products section content type is product.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_content_product_enable_1( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[trending_products_content_type_1]' )->value();
	return bloghill_is_trending_products_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if trending_products section content type is product-category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_content_product_category_enable_1( $control ) {
	
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[trending_products_content_type_1]' )->value();
	return bloghill_is_trending_products_section_enable( $control ) && ( 'product-category' == $content_type );
}

/**
 * Check if trending_products section content type is product.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_content_product_enable_2( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[trending_products_content_type_2]' )->value();
	return bloghill_is_trending_products_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if trending_products section content type is product-category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_content_product_category_enable_2( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[trending_products_content_type_2]' )->value();
	return bloghill_is_trending_products_section_enable( $control ) && ( 'product-category' == $content_type );
}

/**
 * Check if trending_products section content type is product.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_content_product_enable_3( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[trending_products_content_type_3]' )->value();
	return bloghill_is_trending_products_section_enable( $control ) && ( 'product' == $content_type );
}

/**
 * Check if trending_products section content type is product-category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_content_product_category_enable_3( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[trending_products_content_type_3]' )->value();
	return bloghill_is_trending_products_section_enable( $control ) && ( 'product-category' == $content_type );
}

/**
 * Check if trending_products section separator is enabled.
 *
 * @since  Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_trending_products_section_separator_enable( $control ) {
    $content_type = $control->manager->get_setting( 'bloghill_theme_options[trending_products_content_type]' )->value();
    return bloghill_is_trending_products_section_enable( $control ) && !( 'product-category' == $content_type );
}


/*========================most_read====================*/

/**
 * Check if most_read section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_most_read_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[most_read_section_enable]' )->value() ;
}

/**
 * Check if most_read section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_most_read_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[most_read_content_type]' )->value();
	return bloghill_is_most_read_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if most_read section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_most_read_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[most_read_content_type]' )->value();
	return bloghill_is_most_read_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if most_read section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_most_read_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[most_read_content_type]' )->value();
	return bloghill_is_most_read_section_enable( $control ) && ( 'post' == $content_type );
}

/*=======================subscription=========================*/

function bloghill_is_subscription_section_enable( $control ) {
	return $control->manager->get_setting( 'bloghill_theme_options[subscription_section_enable]' )->value();
}

/*=======================instagram=========================*/

function bloghill_is_instagram_section_enable( $control ) {
	return $control->manager->get_setting( 'bloghill_theme_options[instagram_section_enable]' )->value();
}





/**
 * Check if service section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_playlist_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[playlist_section_enable]' )->value() ;
}

/*===========================upcomming event==================*/

/**
 * Check if event section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_upcomming_events_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[upcomming_event_section_enable]' )->value() );
}

/**
 * Check if event section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_upcomming_event_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[upcomming_event_content_type]' )->value();
	return bloghill_is_upcomming_events_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if event section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_upcomming_event_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[upcomming_event_content_type]' )->value();
	return bloghill_is_upcomming_events_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if event section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_upcomming_event_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[upcomming_event_content_type]' )->value();
	return bloghill_is_upcomming_events_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if event section content type is event.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_upcomming_event_section_content_upcomming_event_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[upcomming_event_content_type]' )->value();
	return bloghill_is_upcomming_events_section_enable( $control ) && ( 'event' == $content_type );
}

/**
 * Check if event section content type is event category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_upcomming_event_section_content_upcomming_event_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[upcomming_event_content_type]' )->value();
	return bloghill_is_upcomming_events_section_enable( $control ) && ( 'event-category' == $content_type );
}

/*=======================team====================*/
/**
 * Check if team section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_team_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[team_section_enable]' )->value() );
}

/**
 * Check if team section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_team_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[team_content_type]' )->value();
	return bloghill_is_team_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if team section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_team_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[team_content_type]' )->value();
	return bloghill_is_team_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if team section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_team_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[team_content_type]' )->value();
	return bloghill_is_team_section_enable( $control ) && ( 'category' == $content_type );
}

/*========================music_gallery====================*/

/**
 * Check if music_gallery section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_music_gallery_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[music_gallery_section_enable]' )->value() ;
}

/**
 * Check if music_gallery section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_music_gallery_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[music_gallery_content_type]' )->value();
	return bloghill_is_music_gallery_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if music_gallery section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_music_gallery_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[music_gallery_content_type]' )->value();
	return bloghill_is_music_gallery_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if music_gallery section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_music_gallery_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[music_gallery_content_type]' )->value();
	return bloghill_is_music_gallery_section_enable( $control ) && ( 'post' == $content_type );
}

/*========================Counter====================*/

/**
 * Check if counter section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_counter_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[counter_section_enable]' )->value() ;
}

/*========================Sponsor====================*/

/**
 * Check if sponsor section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_sponsor_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[sponsor_section_enable]' )->value() ;
}


/*===========================service==================*/

/**
 * Check if service section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_service_section_enable( $control ) {

	return $control->manager->get_setting( 'bloghill_theme_options[service_section_enable]' )->value() ;
}

/**
 * Check if service section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_service_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[service_content_type]' )->value();
	return bloghill_is_service_section_enable( $control ) && ( 'category' == $content_type );
}

/**
 * Check if service section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_service_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[service_content_type]' )->value();
	return bloghill_is_service_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if service section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_service_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[service_content_type]' )->value();
	return bloghill_is_service_section_enable( $control ) && ( 'post' == $content_type );
}

/*=======================testimonial=========================*/
/**
 * Check if testimonial section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_testimonial_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[testimonial_section_enable]' )->value() );
}

/**
 * Check if testimonial section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_testimonial_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[testimonial_content_type]' )->value();
	return bloghill_is_testimonial_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if testimonial section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_testimonial_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[testimonial_content_type]' )->value();
	return bloghill_is_testimonial_section_enable( $control ) && ( 'post' == $content_type );
}

/**
 * Check if testimonial section content type is category.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_testimonial_section_content_category_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[testimonial_content_type]' )->value();
	return bloghill_is_testimonial_section_enable( $control ) && ( 'category' == $content_type );
}

/*=======================about=====================*/
/**
 * Check if about section is enabled.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_about_section_enable( $control ) {
	return ( $control->manager->get_setting( 'bloghill_theme_options[about_section_enable]' )->value() );
}

/**
 * Check if about section content type is page.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_about_section_content_page_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[about_content_type]' )->value();
	return bloghill_is_about_section_enable( $control ) && ( 'page' == $content_type );
}

/**
 * Check if about section content type is post.
 *
 * @since Bloghill 1.0.0
 * @param WP_Customize_Control $control WP_Customize_Control instance.
 * @return bool Whether the control is active to the current preview.
 */
function bloghill_is_about_section_content_post_enable( $control ) {
	$content_type = $control->manager->get_setting( 'bloghill_theme_options[about_content_type]' )->value();
	return bloghill_is_about_section_enable( $control ) && ( 'post' == $content_type );
}



/*====================sortable=================*/


//all layout 
function bloghill_is_all_layout( $control ) {
	$design = $control->manager->get_setting( 'bloghill_theme_options[home_layout]' )->value();
	return ( 'all-design' == $design );
}

//pro layout 
function bloghill_is_default_layout( $control ) {
	$design = $control->manager->get_setting( 'bloghill_theme_options[home_layout]' )->value();
	return ( 'default-design' == $design );
}

//second layout 
function bloghill_is_second_layout( $control ) {
	$design = $control->manager->get_setting( 'bloghill_theme_options[home_layout]' )->value();
	return ( 'second-design' == $design );
}

//third layout 
function bloghill_is_third_layout( $control ) {
	$design = $control->manager->get_setting( 'bloghill_theme_options[home_layout]' )->value();
	return ( 'third-design' == $design );
}

//fourth layout 
function bloghill_is_fourth_layout( $control ) {
	$design = $control->manager->get_setting( 'bloghill_theme_options[home_layout]' )->value();
	return ( 'fourth-design' == $design );
}