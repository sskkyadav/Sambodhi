<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('industrial_manufacturing_above_slider_section'); ?>
  
  <?php if(get_theme_mod('industrial_manufacturing_show_slider') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"> 
        <?php $industrial_manufacturing_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'industrial_manufacturing_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $industrial_manufacturing_content_pages[] = $mod;
            }
          }
          if( !empty($industrial_manufacturing_content_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $industrial_manufacturing_content_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption">
                <div class="inner_carousel">
                  <?php if ( get_theme_mod('industrial_manufacturing_slider_title',true) != '' ) {?>
                    <h1><?php the_title(); ?></h1> 
                  <?php }?>
                  <?php if ( get_theme_mod('industrial_manufacturing_slider_content',true) != '' ) {?>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( industrial_manufacturing_string_limit_words( $excerpt,15) ); ?></p>
                  <?php }?>
                  <?php for ($j=1; $j <= 3; $j++) { ?>
                    <?php if( get_theme_mod('industrial_manufacturing_slider_list_text'.$j) != '' ){?>
                      <span class="d-block mb-2"><i class="fas fa-check me-3"></i><?php echo esc_html(get_theme_mod('industrial_manufacturing_slider_list_text'.$j)); ?></span>
                    <?php }?>
                  <?php }?>
                  <?php if ( get_theme_mod('industrial_manufacturing_slider_button_label','Read More') != '' && get_theme_mod('industrial_manufacturing_slider_button',true) != '') {?>
                    <div class ="read-more mt-md-4 mt-0">
                      <a href="<?php the_permalink(); ?>"><i class="fas fa-share me-2"></i><?php echo esc_html( get_theme_mod('industrial_manufacturing_slider_button_label',__('Read More','industrial-manufacturing')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('industrial_manufacturing_slider_button_label',__('Read More','industrial-manufacturing')) ); ?></span></a>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
            <span class="screen-reader-text"><?php esc_html_e('Previous','industrial-manufacturing'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
            <span class="screen-reader-text"><?php esc_html_e('Next','industrial-manufacturing'); ?></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('industrial_manufacturing_below_banner_section'); ?>

  <section id="about-section" class="py-5">
    <div class="container">
      <?php $industrial_manufacturing_about_page = array();    
      $mod = absint( get_theme_mod( 'industrial_manufacturing_about_page' ));
      if ( 'page-none-selected' != $mod ) {
        $industrial_manufacturing_about_page[] = $mod;
      }
      if( !empty($industrial_manufacturing_about_page) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $industrial_manufacturing_about_page,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $count = 0;
          while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="row box-image">
              <div class="<?php if(has_post_thumbnail()) {?>col-lg-7 col-md-12 <?php }?> align-self-center">
                <div class="about-content">
                  <?php if( get_theme_mod('industrial_manufacturing_small_title') != ''){ ?>
                    <strong class="d-block"><?php echo esc_html(get_theme_mod('industrial_manufacturing_small_title')); ?></strong>
                  <?php }?>
                  <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
                  <div class="row">
                    <div class="col-lg-4 col-md-12 align-self-center">
                      <div class ="about-btn">
                        <a href="<?php the_permalink(); ?>"><i class="fas fa-share me-2"></i><?php echo esc_html( 'Learn More','industrial-manufacturing' ); ?><span class="screen-reader-text"><?php echo esc_html( 'Learn More','industrial-manufacturing' ); ?></span></a>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-12 align-self-center">
                      
                    </div>
                  </div>
                </div>
              </div>
              <?php if(has_post_thumbnail()) {?>
                <div class="col-lg-5 col-md-12 align-self-center">
                  <div class="about-img">
                    <?php the_post_thumbnail(); ?>
                    <?php if(get_theme_mod('industrial_manufacturing_experince_text') != ''){?>
                      <span class="experience-text"><?php echo esc_html(get_theme_mod('industrial_manufacturing_experince_text')); ?></span>
                    <?php }?>
                  </div>
                </div>
              <?php }?>
            </div>
          <?php $count++; endwhile; 
          wp_reset_postdata(); ?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;?>
    </div>
  </section>

  <?php do_action('industrial_manufacturing_after_service_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>