<?php
/**
 * The template for displaying search forms in Industrial Manufacturing
 * @package Industrial Manufacturing
 */
?>
<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'industrial-manufacturing' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('industrial_manufacturing_search_placeholder', __('Search', 'industrial-manufacturing')) ); ?>" value="<?php the_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'industrial-manufacturing' ); ?>">
</form>