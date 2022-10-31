<?php if ( get_theme_mod('realestate_agent_your_properties_enable') ) : ?>

<?php $args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('realestate_agent_your_properties_category'),
  'posts_per_page' => get_theme_mod('realestate_agent_your_properties_number'),
); ?>

<div class="properties pt-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 col-md-8 col-sm-8 align-self-center text-center text-md-left">
        <?php if ( get_theme_mod('realestate_agent_section_title') ) : ?>
          <h3><?php echo esc_html( get_theme_mod('realestate_agent_section_title' ) ); ?></h3>
        <?php endif; ?>
        <?php if ( get_theme_mod('realestate_agent_section_text') ) : ?>
          <p class="mb-0"><?php echo esc_html( get_theme_mod('realestate_agent_section_text' ) ); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
        <?php if ( get_theme_mod('realestate_agent_section_btn_link') || get_theme_mod('realestate_agent_section_btn_text') ) : ?>
          <p class="mb-0 my-4 my-md-0 text-center text-md-right property-sec-btn"><a href="<?php echo esc_html( get_theme_mod('realestate_agent_section_btn_link' ) ); ?>"><?php echo esc_html( get_theme_mod('realestate_agent_section_btn_text' ) ); ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div class="owl-carousel">
      <?php $arr_posts = new WP_Query( $args );
      if ( $arr_posts->have_posts() ) :
        while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
          ?>
          <div class="property-main-box">
            <?php
              if ( has_post_thumbnail() ) :
                the_post_thumbnail();
              endif;
            ?>
            <div class="property-inner-box p-2">
              <h4 class="mb-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
              <?php if( get_post_meta($post->ID, 'realestate_agent_your_properties_count', true) ) {?>
                <p class="mb-0"><?php echo esc_html(get_post_meta($post->ID,'realestate_agent_your_properties_count',true)); ?> <?php esc_html_e('Properties','realestate-agent'); ?></p>
              <?php }?>
            </div>
          </div>
        <?php
      endwhile;
      wp_reset_postdata();
      endif; ?>
    </div>
  </div>
</div>

<?php endif; ?>