<?php
/**
 * Food Restro Pro Pro WooCoommerce compatibility hooks.
 *
 * This is the template that includes all WooCoommerce hooks to make the theme compatible with WooCommerce.
 *
 * @package Theme Palace
 * @subpackage Food Restro Pro
 * @since Food Restro Pro 1.0.0
 */

remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description' ,10 );
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description' ,10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb' ,20 );

function shopall_pro_before_main_content() {
	echo '<div id="inner-content-wrapper" class="wrapper page-section">';
}
add_action( 'woocommerce_before_main_content', 'shopall_pro_before_main_content', 5 );

function shopall_pro_after_main_content() {
	echo '</div>';
}
add_action( 'woocommerce_sidebar', 'shopall_pro_after_main_content', 20 );

// Change number or products per row to 3
add_filter('loop_shop_columns', 'shopall_pro_loop_columns');
if ( ! function_exists('shopall_pro_loop_columns')) {
	/**
	 * Shop Page no. of column
	 *
	 * @since Food Restro Pro 1.0
	 *
	 */
	function shopall_pro_loop_columns() {
		return 3; // 3 products per row
	}
}

// remove title
add_filter('woocommerce_show_page_title', 'shopall_pro_hide_title' );
function shopall_pro_hide_title() {
	return false;
}