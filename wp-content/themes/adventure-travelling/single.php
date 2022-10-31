<?php
/**
 * The template for displaying all single posts
 *
 * @package Adventure Travelling
 * @subpackage adventure_travelling
 */

get_header(); ?>

<div class="container">
	<main id="tp_content" role="main">
		<div id="primary" class="content-area">
			<?php
	        $adventure_travelling_sidebar_layout = get_theme_mod( 'adventure_travelling_sidebar_post_layout','right');
	        if($adventure_travelling_sidebar_layout == 'left'){ ?>
		        <div class="row">
		          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
		          	<div class="col-lg-8 col-md-8">
		           		<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post');	?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  	'prev_text'          => __( 'Previous page', 'adventure-travelling' ),
						                  	'next_text'          => __( 'Next page', 'adventure-travelling' ),
						                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'adventure-travelling' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
		        </div>
		        <div class="clearfix"></div>
		    <?php }else if($adventure_travelling_sidebar_layout == 'right'){ ?>
		        <div class="row">
		          	<div class="col-lg-8 col-md-8">	           
			            <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post'); ?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  	'prev_text'          => __( 'Previous page', 'adventure-travelling' ),
						                  	'next_text'          => __( 'Next page', 'adventure-travelling' ),
						                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'adventure-travelling' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
		          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
		        </div>
		    <?php }else if($adventure_travelling_sidebar_layout == 'full'){ ?>
		        <div class="full">
		           <?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/single-post'); ?>

							<div class="navigation">
					          	<?php
					              	// Previous/next page navigation.
					              	the_posts_pagination( array(
					                  	'prev_text'          => __( 'Previous page', 'adventure-travelling' ),
					                  	'next_text'          => __( 'Next page', 'adventure-travelling' ),
					                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'adventure-travelling' ) . ' </span>',
					              	) );
					          	?>
					        </div>

						<?php endwhile; // End of the loop.
					?>
	          	</div>
		    <?php }else if($adventure_travelling_sidebar_layout == 'three-column'){ ?>
		        <div class="row">
		          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
		          	<div class="col-lg-6 col-md-6">	           
			            <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post'); ?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  	'prev_text'          => __( 'Previous page', 'adventure-travelling' ),
						                  	'next_text'          => __( 'Next page', 'adventure-travelling' ),
						                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'adventure-travelling' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
		          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
		        </div>
		    <?php }else if($adventure_travelling_sidebar_layout == 'four-column'){ ?>
		        <div class="row">
		          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
		          	<div class="col-lg-3 col-md-3">	           
			            <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post'); ?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  	'prev_text'          => __( 'Previous page', 'adventure-travelling' ),
						                  	'next_text'          => __( 'Next page', 'adventure-travelling' ),
						                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'adventure-travelling' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
		          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
		          	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
		        </div>
		    <?php }else if($adventure_travelling_sidebar_layout == 'grid'){ ?>
		        <div class="row">
		          	<div class="col-lg-9 col-md-9">	           
			            <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post'); ?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  'prev_text'          => __( 'Previous page', 'adventure-travelling' ),
						                  'next_text'          => __( 'Next page', 'adventure-travelling' ),
						                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'adventure-travelling' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
		        	<div class="col-lg-3 col-md-3" id="theme-sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
		        </div>
		    <?php }else {?>
		    	<div class="row">
		          	<div class="col-lg-8 col-md-8">	           
			            <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post'); ?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  	'prev_text'          => __( 'Previous page', 'adventure-travelling' ),
						                  	'next_text'          => __( 'Next page', 'adventure-travelling' ),
						                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'adventure-travelling' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
		          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
		        </div>
		    <?php } ?>
		</div>
	</main>
</div>

<?php get_footer();
