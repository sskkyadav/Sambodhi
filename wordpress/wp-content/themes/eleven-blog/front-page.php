<?php
/**
* The template for displaying home page.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package eleven_blog
*/

if ( 'posts' != get_option( 'show_on_front' ) ) { 

	get_header();

	$slider_posts_section_show   		= get_theme_mod( 'slider_posts_section_show', false );
	$specialities_posts_section_show   	= get_theme_mod( 'specialities_posts_section_show', false );
	$latest_posts_section_show   		= get_theme_mod( 'latest_posts_section_show', false );

	if ( $slider_posts_section_show == true ): ?>
		<section id="slider-posts-section">
			<div class="slider-posts" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": false, "speed": 800, "dots": true, "arrows": false, "autoplay": false, "fade": false }'>
				<?php
				$slider_posts_category = get_theme_mod( 'slider_posts_category', '0' );
				$slider_posts_count    = apply_filters( 'slider_posts_count', 20 );
				$slider_posts_args = array(
					'post_type' 		=> 'post',
	            	'post_status'	 	=> 'publish',
					'category__in' 		=> absint( $slider_posts_category ),
					'posts_per_page' 	=> absint( $slider_posts_count )
				);
			
				$query = new WP_Query( $slider_posts_args );
				if ( $query->have_posts() ) : 
					while ( $query->have_posts() ) : $query->the_post(); ?>  

						<article style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
							<div class="entry-container">
								<div class="entry-meta">
									<?php eleven_blog_entry_footer(); ?>
								</div><!-- .entry-meta -->

								<header class="entry-header">
									<h2 class="entry-title">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</h2>
						        </header>

						        <?php $excerpt = get_the_excerpt();
								if ( !empty($excerpt) ) { ?>
									<div class="entry-content">
										<?php the_excerpt(); ?>
									</div><!-- .entry-content -->
								<?php } ?>

								<?php
								$slider_posts_read_more_text = get_theme_mod('slider_posts_read_more_text', 'Read More');
								if ( ! empty( $slider_posts_read_more_text ) ) { ?>
									<div class="read-more">
										<a href="<?php the_permalink(); ?>" class="btn"><?php echo $slider_posts_read_more_text; ?></a>
									</div><!-- .section-title -->
								<?php } ?>
							</div><!-- .entry-container -->
						</article>  
		    		<?php endwhile;
	    		endif;
				wp_reset_postdata(); ?>
			</div><!-- .slider-posts -->
		</section>
	<?php endif;

	if ( $specialities_posts_section_show == true ): ?>
		<section id="specialities-posts-section">
			<div class="container">
				<?php
				$specialities_section_title       = get_theme_mod('specialities_section_title', 'Our Specialities');
				$specialities_section_description = get_theme_mod('specialities_section_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto doeiusmod tempor incidition ulla mco laboris nisi ut aliquip ex ea commo condorico consectetur adipiscing elitut aliquip.');

				if ( ! empty( $specialities_section_title ) || ! empty( $specialities_section_description ) ) { ?>
					<div class="section-header">
						<div class="section-title">
							<h2><?php echo $specialities_section_title; ?></h2>
						</div><!-- .section-title -->

						<div class="section-description">
							<p><?php echo $specialities_section_description; ?></p>
						</div><!-- .section-description -->
					</div><!-- .section-header -->
				<?php } ?>

				<div class="blog-archive columns-3 clear">
					<?php
					$specialities_posts_category = get_theme_mod( 'specialities_posts_category', '0' );
					$specialities_posts_count    = apply_filters( 'specialities_posts_count', 3 );
					$specialities_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $specialities_posts_category ),
						'posts_per_page' 	=> absint( $specialities_posts_count )
					);
				
					$query = new WP_Query( $specialities_posts_args );
					if ( $query->have_posts() ) : 
						while ( $query->have_posts() ) : $query->the_post(); ?>  

							<article>
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="featured-image">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
									</div><!-- .featured-image -->
								<?php endif; ?>

								<div class="entry-container">
									<header class="entry-header">
										<h2 class="entry-title">
											<a href="<?php the_permalink();?>"><?php the_title();?></a>
										</h2>
							        </header>
								</div><!-- .entry-container -->
							</article>  
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	if ( $latest_posts_section_show == true ): ?>
		<section id="latest-posts-section">
			<div class="container">
				<?php
				$latest_posts_section_title = get_theme_mod('latest_posts_section_title', 'Latest Posts');
				if ( ! empty( $latest_posts_section_title ) ) { ?>
					<div class="section-header">
						<div class="section-title">
							<h2><?php echo $latest_posts_section_title; ?></h2>
						</div><!-- .section-title -->
					</div><!-- .section-header -->
				<?php } ?>

				<div class="blog-archive grid columns-3 clear">
					<?php
					$latest_posts_category = get_theme_mod( 'latest_posts_category', '0' );
					$latest_posts_count    = apply_filters( 'latest_posts_count', 6 );
					$latest_posts_args = array(
						'post_type' 		=> 'post',
		            	'post_status'	 	=> 'publish',
						'category__in' 		=> absint( $latest_posts_category ),
						'posts_per_page' 	=> absint( $latest_posts_count )
					);
				
					$query = new WP_Query( $latest_posts_args );
					if ( $query->have_posts() ) : 
						while ( $query->have_posts() ) : $query->the_post(); ?>  

							<article class="grid-item">
								<div class="blog-post-item clear">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="featured-image">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
										</div><!-- .featured-image -->
									<?php endif; ?>

									<div class="entry-container">
										<div class="entry-meta">
											<?php eleven_blog_entry_footer(); ?>
											<?php eleven_blog_posted_on(); ?>
										</div><!-- .entry-meta -->

										<header class="entry-header">
											<h2 class="entry-title">
												<a href="<?php the_permalink();?>"><?php the_title();?></a>
											</h2>
								        </header>

								        <?php $excerpt = get_the_excerpt();
										if ( !empty($excerpt) ) { ?>
											<div class="entry-content">
												<?php the_excerpt(); ?>
											</div><!-- .entry-content -->
										<?php } ?>
									</div><!-- .entry-container -->
								</div><!-- .blog-post-item -->
							</article>  
			    		<?php endwhile;
		    		endif;
					wp_reset_postdata(); ?>
				</div><!-- .blog-archive -->
			</div><!-- .container -->
		</section>
	<?php endif;

	?>

    <?php if ( !empty( get_the_content() ) )
    	include( get_page_template() );
	
	get_footer(); 
}

elseif ('posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} 