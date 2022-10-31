<?php
/**
 * Most Read section
 *
 * This is the template for the content of blog_post section
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */
if ( ! function_exists( 'bloghill_add_blog_post_section' ) ) :
    /**
    * Add blog_post section
    *
    *@since Bloghill 1.0.0
    */
    function bloghill_add_blog_post_section() {
    	$options = bloghill_get_theme_options();
        // Check if blog_post is enabled on frontpage
        $blog_post_enable = apply_filters( 'bloghill_section_status', true, 'blog_post_section_enable' );

        if ( true !== $blog_post_enable ) {
            return false;
        }
        // Get blog_post section details
        $section_details = array();
        $section_details = apply_filters( 'bloghill_filter_blog_post_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        bloghill_render_blog_post_section( $section_details );
    

    }
endif;

if ( ! function_exists( 'bloghill_get_blog_post_section_details' ) ) :
    /**
    * blog_post section details.
    *
    * @since Bloghill 1.0.0
    * @param array $input blog_post section details.
    */
    function bloghill_get_blog_post_section_details( $input ) {
        $options = bloghill_get_theme_options();

        $blog_post_count = ! empty( $options['blog_post_count'] ) ? $options['blog_post_count'] : 5;
        
        $content = array();

        $post_ids = array();

        for ( $i = 1; $i <= $blog_post_count; $i++ ) {
            if ( ! empty( $options['blog_post_content_post_' . $i] ) )
                $post_ids[] = $options['blog_post_content_post_' . $i];
        }
        $args = array(
            'post_type'         => 'post',
            'post__in'          => ( array ) $post_ids,
            'posts_per_page'    => absint( $blog_post_count ),
            'orderby'           => 'post__in',
            'ignore_sticky_posts'   => true,
            );      
        

        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['id']        = get_the_id();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = bloghill_trim_content( $options['blog_post_excerpt_length'] );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// blog_post section content details.
add_filter( 'bloghill_filter_blog_post_section_details', 'bloghill_get_blog_post_section_details' );


if ( ! function_exists( 'bloghill_render_blog_post_section' ) ) :
  /**
   * Start blog_post section
   *
   * @return string blog_post content
   * @since Bloghill 1.0.0
   *
   */
   function bloghill_render_blog_post_section( $content_details = array() ) {
        $options = bloghill_get_theme_options();
        $blog_post_title = !empty( $options['blog_post_title'] ) ? $options['blog_post_title'] : '';

        if ( empty( $content_details ) ) {
            return;
        } ?>
         <div id="bloghill_blog_post_section" class="page-section relative blog-post">
                <?php if ( is_customize_preview()):
                        bloghill_section_tooltip( 'blog-post-class' );
                endif; ?>
                <div class="wrapper">
                    
                    <?php if ( is_active_sidebar( 'blog-post-left-sidebar' ) ) { ?>
                        <aside id="left-sidebar" class="widget-area left-sidebar" role="complementary">
                            <?php
                                dynamic_sidebar( 'blog-post-left-sidebar' );
                            ?>
                        </aside>
                    <?php } ?>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                            <div id="bloghill_latest_blog" class="relative">
                                <?php if ( !empty( $blog_post_title ) ): ?>
                                    <div class="section-header clear">
                                        <h2 class="section-title"><?php echo esc_html( $blog_post_title ); ?></h2>
                                        <div class="icon-container">
                                            <svg viewBox="0 0 448 512"><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM339.8 211.8C350.7 200.9 350.7 183.1 339.8 172.2C328.9 161.3 311.1 161.3 300.2 172.2L192 280.4L147.8 236.2C136.9 225.3 119.1 225.3 108.2 236.2C97.27 247.1 97.27 264.9 108.2 275.8L172.2 339.8C183.1 350.7 200.9 350.7 211.8 339.8L339.8 211.8z"></path></svg>
                                        </div>
                                    </div><!-- .section-header -->
                                <?php endif ?>
                                <div class="archive-blog-wrapper">
                                    <?php foreach ($content_details as $content): ?>
                                    <article class="has-post-thumbnail">
                                        <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                                        </div><!-- .featured-image -->
                                        <div class="entry-container">
                                            <div class="entry-meta">
                                                <?php bloghill_posted_on( $content['id'] ); ?>

                                                <span class="cat-links">
                                                        <?php the_category( '', '', $content['id'] ); ?>
                                                </span><!-- .cat-links -->
                                            </div><!-- .entry-meta -->

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                            </header>

                                            <div class="entry-content">
                                                <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                                            </div>

                                            <?php if ( !empty( $options['blog_post_btn_title'] ) ): ?>
                                                <div class="read-more clear">
                                                    <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn"><?php echo esc_html( $options['blog_post_btn_title'] ); ?></a>
                                                </div>
                                            <?php endif ?>
                                            
                                        </div><!-- .entry-container -->
                                    </article>                     
                                    <?php endforeach ?>                            

                                </div>
                            </div><!-- #reading -->
                        </main><!-- #main -->
                    </div><!-- #primary -->

                     <?php if ( is_active_sidebar( 'blog-post-right-sidebar' ) ) { ?>
                        <aside id="right-sidebar" class="widget-area right-sidebar" role="complementary">
                            <?php
                                dynamic_sidebar( 'blog-post-right-sidebar' );
                            ?>
                        </aside>
                    <?php } ?>
                </div>
            </div>
    <?php }
endif;