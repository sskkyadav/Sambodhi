<?php
/**
 * Testimonial section
 *
 * This is the template for the content of testimonial section
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */
if ( ! function_exists( 'bloghill_add_testimonial_section' ) ) :
    /**
    * Add testimonial section
    *
    *@since Bloghill 1.0.0
    */
    function bloghill_add_testimonial_section() {
        $options = bloghill_get_theme_options();
        // Check if testimonial is enabled on frontpage
        $testimonial_enable = apply_filters( 'bloghill_section_status', true, 'testimonial_section_enable' );

        if ( true !== $testimonial_enable ) {
            return false;
        }
        // Get testimonial section details
        $section_details = array();
        $section_details = apply_filters( 'bloghill_filter_testimonial_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render testimonial section now.
        bloghill_render_testimonial_section( $section_details );
    }
endif;

if ( ! function_exists( 'bloghill_get_testimonial_section_details' ) ) :
    /**
    * testimonial section details.
    *
    * @since Bloghill 1.0.0
    * @param array $input testimonial section details.
    */
    function bloghill_get_testimonial_section_details( $input ) {
        $options = bloghill_get_theme_options();

        $testimonial_count = ! empty( $options['testimonial_count'] ) ? $options['testimonial_count'] : 3;

        $content = array();

        $page_ids = array();

        for ( $i = 1; $i <= $testimonial_count; $i++ ) {
            if ( ! empty( $options['testimonial_content_page_' . $i] ) ) :
                $page_ids[] = $options['testimonial_content_page_' . $i];
            endif;
        }
        
        $args = array(
            'post_type'         => 'page',
            'post__in'          => ( array ) $page_ids,
            'posts_per_page'    => absint( $testimonial_count ),
            'orderby'           => 'post__in',
            );   
     
        // Run The Loop.
        $query = new WP_Query( $args );
        $i = 0;
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = bloghill_trim_content( $options['testimonial_excerpt_length'] );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';

                // Push to the main array.
                array_push( $content, $page_post );
                $i++;
            endwhile;
        endif;
        wp_reset_postdata();
        
            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// testimonial section content details.
add_filter( 'bloghill_filter_testimonial_section_details', 'bloghill_get_testimonial_section_details' );


if ( ! function_exists( 'bloghill_render_testimonial_section' ) ) :
  /**
   * Start testimonial section
   *
   * @return string testimonial content
   * @since Bloghill 1.0.0
   *
   */
   function bloghill_render_testimonial_section( $content_details = array() ) {
        $options = bloghill_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>
        <div id="bloghill_testimonial_section" class="relative page-section testimonial">
            <?php if ( is_customize_preview()):
                bloghill_section_tooltip( 'testimonial-class' );
            endif; ?>
            <div class="wrapper">
                 
                <div class="section-header">
                    <?php if ( !empty( $options['testimonial_sub_title'] ) ): ?>
                        <p class="section-subtitle"><?php echo esc_html( $options['testimonial_sub_title'] ); ?></p>
                    <?php endif ?>
                    <?php if ( !empty( $options['testimonial_title'] ) ): ?>
                        <h2 class="section-title"><?php echo esc_html( $options['testimonial_title'] ); ?></h2>
                    <?php endif ?>                    
                </div><!-- .section-header -->

                <div class="testimonial-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":false, "autoplay": false, "draggable": true, "fade": false }'>
                    <?php $i=1; foreach ($content_details as $content ): ?>
                    <article>
                        <div class="testimonial-item">
                            <div class="entry-container clear">
                                <div class="featured-image">
                                    <a href="<?php echo esc_url( $content['url'] ); ?>"><img src="<?php echo esc_url( $content['image'] ); ?>" alt="testimonial"></a>
                                </div><!-- .featured-image -->

                            
                                <header class="entry-header">
                                    <h2 class="entry-title"><?php echo esc_html( $content['title'] ); ?></h2>
                                    <?php if( !empty( $options['testimonial_position_' . $i] ) ): ?>
                                        <span class="testimonial-position"><?php echo esc_html( $options['testimonial_position_' . $i] ); ?></span>
                                    <?php endif; ?>
                                </header>
                            </div><!-- .entry-container -->
                            <div class="entry-content">
                                <p>‘‘<?php echo esc_html( $content['excerpt'] ); ?>’’</p>
                            </div><!-- .entry-content -->
                        </div><!-- .testimonial-item -->
                    </article>
                    <?php $i++; endforeach; ?>
                </div><!-- .section-content -->
            </div><!-- .wrapper -->
        </div><!-- #testimonial-section -->
     
    <?php }
endif;