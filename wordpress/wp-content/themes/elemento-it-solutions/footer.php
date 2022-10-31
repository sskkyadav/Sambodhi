<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elemento IT Solutions
 */

?>

<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('elemento-it-solutions-footer-sidebar')) {
        echo '<div class="row footer-area">';
          dynamic_sidebar('elemento-it-solutions-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-lg-6 col-md-6 align-self-center">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('elemento_it_solutions_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.wpelemento.com/elementor/free-it-solutions-wordpress-theme/', 'elemento-it-solutions' )); ?>" target="_blank">
                <?php esc_html_e('IT Solutions WordPress Theme','elemento-it-solutions'); ?>
              </a>
            <?php } else {
              echo esc_html(get_theme_mod('elemento_it_solutions_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('elemento_it_solutions_copyright_enable', true) == true ) : ?>
          <?php
            /* translators: %s: WP Elemento */
            printf( esc_html__( ' By %s', 'elemento-it-solutions' ), 'WP Elemento' ); ?>
          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg-6 col-md-6 align-self-center text-center text-md-right">
        <?php if ( get_theme_mod('elemento_it_solutions_copyright_enable', true) == true ) : ?>
          <a href="<?php echo esc_url(__('https://wordpress.org', 'elemento-it-solutions' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */ printf( esc_html__( 'Proudly powered by %s', 'elemento-it-solutions' ), 'WordPress' ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
