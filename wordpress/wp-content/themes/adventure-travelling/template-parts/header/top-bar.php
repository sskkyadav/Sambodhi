<?php 
/*
* Display Top Bar
*/
?>

<div class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 align-self-center">
        <div class="timebox">
          <?php if( get_theme_mod( 'adventure_travelling_location') != '') { ?>
            <i class="fas fa-map-marker-alt"></i><span class="phone"><?php echo esc_html( get_theme_mod('adventure_travelling_location','')); ?></span>
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center">
        <div class="timebox">
          <?php if( get_theme_mod( 'adventure_travelling_timming') != '') { ?>
            <i class="far fa-clock"></i><span class="phone"><?php echo esc_html( get_theme_mod('adventure_travelling_timming','')); ?></span>
           <?php } ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center">
        <div class="social-media">
          <?php if( get_theme_mod( 'adventure_travelling_facebook_url' ) != '') { ?>
            <span><?php esc_html_e('FOLLOW US:','adventure-travelling'); ?></span>          
            <a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'adventure_travelling_twitter_url' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'adventure_travelling_instagram_url' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'adventure_travelling_youtube_url' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'adventure_travelling_pint_url' ) != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'adventure_travelling_pint_url','' ) ); ?>"><i class="fab fa-pinterest"></i></a>
          <?php } ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>