<?php
/**
 * Displays footer site info
 *
 * @package Adventure Travelling
 * @subpackage adventure_travelling
 */

?>
<div class="site-info">
	<div class="container">
		<p><?php adventure_travelling_credit(); ?> <?php echo esc_html(get_theme_mod('adventure_travelling_footer_text',__('By Themespride','adventure-travelling'))); ?> </p>
	</div>
</div>