<?php
/**
 * Stories section
 *
 * This is the template for the content of Stories section
 *
 * @package Theme Palace
 * @subpackage  Bloghill
 * @since  Bloghill 1.0.0
 */
if ( ! function_exists( 'bloghill_add_project_section' ) ) :
    /**
    * Add top stories section
    *
    *@since  Bloghill 1.0.0
    */
    function bloghill_add_project_section() {
        $options = bloghill_get_theme_options();
        // Check if top stories is enabled on frontpage
        $project_enable = apply_filters( 'bloghill_section_status', true, 'project_section_enable' );

        if ( true !== $project_enable ) {
            return false;
        }
        // Get top stories section details
        $section_details = array();
        $section_details = apply_filters( 'bloghill_filter_project_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }
        // Render top stories section now.
        bloghill_render_project_section( $section_details );
    }
endif;

if ( ! function_exists( 'bloghill_get_project_section_details' ) ) :
    /**
    * top stories section details.
    *
    * @since  Bloghill 1.0.0
    * @param array $input top stories section details.
    */
    function bloghill_get_project_section_details( $input ) {
        $options = bloghill_get_theme_options();

        $cat_ids = ! empty( $options['project_content_category'] ) ? $options['project_content_category'] : array();
        if ( empty( $cat_ids ) )
            return;
        $args = array();
        $content = array();
        foreach ( $cat_ids as $cat_id ) {

            $args = array(
                'post_type'             => 'post',
                'posts_per_page'        => absint( 6 ),
                'cat'                   => absint( $cat_id ),
                'ignore_sticky_posts'   => true,
            );                    

            // Run The Loop.
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : 
                $cat_posts['details'] = array();
                while ( $query->have_posts() ) : $query->the_post();
                    $page_post['id']        = get_the_id();
                    $page_post['title']     = get_the_title();
                    $page_post['url']       = get_the_permalink();
                    $page_post['excerpt']   = bloghill_trim_content( 10 );
                    $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'medium_large' ) : get_template_directory_uri() . '/assets/uploads/no-featured-image-600x450.jpg';
                    // Push to the main array.
                    array_push( $cat_posts['details'], $page_post );
                endwhile;
                $cat_posts['cat_id'] = $cat_id;
                array_push( $content, $cat_posts );
            endif;
            wp_reset_postdata();
        }

        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;

// top stories section content details.
add_filter( 'bloghill_filter_project_section_details', 'bloghill_get_project_section_details' );

if ( ! function_exists( 'bloghill_render_project_section' ) ) :
  /**
   * Start top stories section
   *
   * @return string top stories content
   * @since  Bloghill 1.0.0
   *
   */
   function bloghill_render_project_section( $content_details = array() ) {
        $options = bloghill_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>
            
            <div id="bloghill_project_section" class="page-section relative project">
                <?php if ( is_customize_preview()):
                    bloghill_section_tooltip( 'project-class' );
                endif; ?>
                <div class="wrapper">
                    
                    <div class="section-header-content">
                    
                        <?php if( !empty( $options['project_cat_title'] ) ): ?>

                            <div class="section-header">
                                <h2 class="section-title"><?php echo esc_html( $options['project_cat_title'] ); ?></h2>
                            </div><!-- .section-header -->

                        <?php endif; ?>

                        <ul class="tabs">
                            <?php $i=0; foreach ( $content_details as $i=>$content ):
                            $terms = get_term( $content['cat_id'] ); 
                            if(!is_wp_error( $terms ) && $terms): ?>
                               <li><a href="#" data-tab="<?php echo $terms->slug; ?>"  <?php if($i==0) echo 'class="active"'; ?> ><svg viewBox="0 0 448 512"><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM339.8 211.8C350.7 200.9 350.7 183.1 339.8 172.2C328.9 161.3 311.1 161.3 300.2 172.2L192 280.4L147.8 236.2C136.9 225.3 119.1 225.3 108.2 236.2C97.27 247.1 97.27 264.9 108.2 275.8L172.2 339.8C183.1 350.7 200.9 350.7 211.8 339.8L339.8 211.8z"/></svg><?php echo $terms->name; ?></a></li>

                           <?php 
                           endif;
                           $i++;
                           endforeach; ?>
                        </ul><!-- .tabs -->
                            
                        <div class="about-wrapper">
                            <?php if ( !empty( $options['project_about_title'] ) ): ?>
                                <div class="section-header">
                                    <h2 class="section-title"><?php echo esc_html(  $options['project_about_title'] ); ?></h2>
                                </div><!-- .section-header -->
                            <?php endif ?>
                            
                            <?php if ( !empty( $options['project_about_content'] ) ): ?>
                                <div class="entry-content">
                                    <p><?php echo esc_html( $options['project_about_content'] ); ?></p>
                                </div>
                            <?php endif ?>                            
                        </div>

                    </div>

                
                <div class="section-content">
                    <?php if( !empty( $options['project_title'] ) ): ?>

                        <div class="section-header clear">
                            <h2 class="section-title"><?php echo esc_html( $options['project_title'] ); ?></h2>
                             <div class="icon-container">
                                <svg viewBox="0 0 448 512"><path d="M384 32C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H384zM339.8 211.8C350.7 200.9 350.7 183.1 339.8 172.2C328.9 161.3 311.1 161.3 300.2 172.2L192 280.4L147.8 236.2C136.9 225.3 119.1 225.3 108.2 236.2C97.27 247.1 97.27 264.9 108.2 275.8L172.2 339.8C183.1 350.7 200.9 350.7 211.8 339.8L339.8 211.8z"/></svg>
                            </div>
                        </div><!-- .section-header -->

                    <?php endif; ?>

                    <div class="col-3">
                    <?php $i=0; foreach ( $content_details as $i=>$contents ){
                    $terms = get_term( $contents['cat_id'] ); ?>
                    

                    <div id="<?php echo $terms->slug; ?>" class="tab-content <?php if( $i==0 ) echo "active"; ?> clear">
                            
                        <?php  foreach ( $contents['details'] as $content ){
                            ?>

                            <article>
                                <div class="project-wrapper">   
                                    <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                                    </div><!-- .featured-image -->

                                    <div class="entry-container clear">
                                         <header class="entry-header">
                                            <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                        </header>

                                        <div class="entry-meta">    
                                            <span class="cat-links">
                                                <?php the_category( '', '', $content['id'] ); ?>
                                            </span><!-- .cat-links -->
                                        </div>
                                        <div class="entry-content">
                                            <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                                        </div><!-- .entry-content -->
                                        <div class="icon-container">
                                            <a href="#"><svg viewBox="0 0 512 512"><path d="M503.7 226.2l-176 151.1c-15.38 13.3-39.69 2.545-39.69-18.16V272.1C132.9 274.3 66.06 312.8 111.4 457.8c5.031 16.09-14.41 28.56-28.06 18.62C39.59 444.6 0 383.8 0 322.3c0-152.2 127.4-184.4 288-186.3V56.02c0-20.67 24.28-31.46 39.69-18.16l176 151.1C514.8 199.4 514.8 216.6 503.7 226.2z"/></svg></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </article>

                        <?php 
                         }; ?>
                    </div>
                    <?php $i++; }; ?>
                    </div>

                </div><!-- .section-content -->
                
                </div><!-- .wrapper -->
            </div>

    <?php }
endif;  ?>

