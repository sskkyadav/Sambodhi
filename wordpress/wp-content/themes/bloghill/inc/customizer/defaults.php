<?php
/**
* Customizer default options
*
* @package Theme Palace
* @subpackage Bloghill
* @since Bloghill 1.0.0
* @return array An array of default values
*/

function bloghill_get_default_theme_options() {
	$theme_data = wp_get_theme();
	$bloghill_default_options = array(
		// Color Options
		'header_title_color'			=> '#2c2d39',
		'header_tagline_color'			=> '#990f12',
		'header_txt_logo_extra'			=> 'show-all',

		// loader
		'loader_enable'         		=> (bool) false,
		'loader_icon'         			=> 'default',

		// breadcrumb
		'breadcrumb_enable'				=> (bool) true,
		'breadcrumb_separator'			=> '/',

		// layout 
		'site_layout'         			=> 'wide-layout',
		'sidebar_position'         		=> 'right-sidebar',
		'post_sidebar_position' 		=> 'right-sidebar',
		'page_sidebar_position' 		=> 'right-sidebar',
		'menu_sticky'					=> (bool) false,
		'menu_search'					=> (bool) false,
		'social_menu'					=> (bool) false,

		// pagination options
		'pagination_enable'         	=> (bool) true,
		'pagination_type'         		=> 'default',

		// footer options
		'copyright_text'           		=> sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'bloghill' ), '[the-year]', '[site-link]' ),
		'scroll_top_visible'        	=> (bool) true,
		'footer_menu'        			=> (bool) true,
		'footer_enable'        			=> (bool) true,

		// reset options
		'reset_options'      			=> (bool) false,

		// homepage options
		'enable_frontpage_content' 		=> (bool) false,

		// homepage sections sortable
		'all_sortable'	=> 'hero_banner,project,cta,testimonial,blog_post',

		'default_sortable'	=> 'hero_banner,project,cta,testimonial,blog_post',
		
		// blog/archive options
		'your_latest_posts_title' 		=> esc_html__( 'Blogs', 'bloghill' ),
		'hide_image'					=> (bool) false,
		'hide_category'					=> (bool) false,
		'hide_author'					=> (bool) false,
		'hide_title'					=> (bool) false,
		'hide_description'				=> (bool) false,

		// single post theme options
		'single_post_hide_date' 		=> (bool) false,
		'single_post_hide_author'		=> (bool) false,
		'single_post_hide_category'		=> (bool) false,
		'single_post_hide_tags'			=> (bool) false,
		'single_post_hide_image'		=> (bool) false,
		'single_post_hide_description'	=> (bool) false,

		/* Front Page */

		//hero_banner 
		'hero_banner_section_enable'	=> (bool) false,
		'hero_banner_excerpt_length'	=> 30,
		'hero_banner_content_type'		=> 'post',
		'hero_banner_sub_title'			=> esc_html__( 'MODERN BLOG THEME', 'bloghill' ),
		'hero_banner_btn_text'			=> esc_html__( 'Read More', 'bloghill' ),
		'hero_banner_alt_btn_text'		=> esc_html__( 'Read More', 'bloghill' ),


		// project
		'project_section_enable'		=> (bool) false,
		'project_title'					=> esc_html__( 'Project', 'bloghill' ),
		'project_cat_title'				=> esc_html__( 'Categories', 'bloghill' ),
		'project_about_title'			=> esc_html__( 'About Us', 'bloghill' ),
		'project_about_content'			=> esc_html__( 'A product has a core user experience, which is basically the reason the product exists. It fulfills a need or solves a problem people have. Hence, uncovering the problem and solutions.', 'bloghill' ),

		//cta 
		'cta_section_enable'	=> (bool) false,
		'cta_excerpt_length'	=> 30,
		'cta_content_type'		=> 'post',
		'cta_sub_title'			=> esc_html__( 'MODERN BLOG THEME', 'bloghill' ),
		'cta_btn_text'			=> esc_html__( 'Read More', 'bloghill' ),

		// testimonial
		'testimonial_section_enable'					=> (bool) false,
		'testimonial_section_autoplay_slider_enable'	=> (bool) false,
		'testimonial_content_type'						=> 'page',
		'testimonial_count'								=> 3,
		'testimonial_excerpt_length'					=> 45,
		'testimonial_sub_title'							=> esc_html__( 'TESTIMONIALS', 'bloghill' ),
		'testimonial_title'								=> esc_html__( 'Clients & Their Thoughts On Our Work', 'bloghill' ),


		// blog_post
		'blog_post_section_enable'			=> (bool) false,
		'blog_post_count'					=> 5,
		'blog_post_content_type'			=> 'post',
		'blog_post_title'					=> esc_html__( 'Latest Blog', 'bloghill' ),
		'blog_post_btn_title'					=> esc_html__( 'Read More', 'bloghill' ),
		'blog_post_excerpt_length'			=> 30,
		
		);

$output = apply_filters( 'bloghill_default_theme_options', $bloghill_default_options );

// Sort array in ascending order, according to the key:
if ( ! empty( $output ) ) {
	ksort( $output );
}

return $output;
}