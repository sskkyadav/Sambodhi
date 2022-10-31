<?php
/**
 * Displays footer site info
 *
 * @subpackage Education Academy Coach
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">
    <p class="mb-0"><?php
        echo esc_html( get_theme_mod( 'education_insight_footer_text' ) );
        printf(
            /* translators: %s: Education WordPress Theme. */
            esc_html__( ' %s ', 'education-academy-coach' ),
            'Education WordPress Theme'
        );
    ?></p>
</div>