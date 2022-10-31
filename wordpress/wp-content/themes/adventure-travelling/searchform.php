<?php
/**
 * Template for displaying search forms in Adventure Travelling
 *
 * @package Adventure Travelling
 * @subpackage adventure_travelling
 */

?>

<?php $adventure_travelling_unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo esc_attr( $adventure_travelling_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'adventure-travelling' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'adventure-travelling' ); ?></button>
</form>