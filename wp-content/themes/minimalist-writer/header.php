<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimalist Writer
 */

?>
<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">

			<header id="masthead" class="sheader site-header clearfix">
				<div class="content-wrap">
					
					<?php if ( has_custom_logo() ) : ?>

						<div class="site-branding branding-logo">
							<?php the_custom_logo(); ?>
						</div><!-- .site-branding -->

					<?php else : ?>

						<div class="site-branding">

							<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;

						$description = esc_html( get_bloginfo( 'description', 'display' ) );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
						endif;
						?>

					</div><!-- .site-branding -->

					<?php
				endif;
				?>

			</div>
			<nav id="primary-site-navigation" class="primary-menu main-navigation clearfix">

				<a href="#" id="pull" class="smenu-hide toggle-mobile-menu menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'minimalistblogger' ); ?>
					
				</a>


				<div class="content-wrap text-center">
					<div class="center-main-menu">


						<?php
						wp_nav_menu( array(
							'theme_location'	=> 'menu-1',
							'menu_id'			=> 'primary-menu',
							'menu_class'		=> 'pmenu'
						) );
						?>
						
						
							<?php if ( get_theme_mod( 'show_wc_cart' ) == '1' ) : ?>
								<?php if ( class_exists( 'WooCommerce' ) ) : ?>
									<div class="cart-header cart-header-desktop">
										<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr( 'View your shopping cart' ); ?>">
											<svg aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"></path> <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"></path> </svg>
											<span class="cart-icon-number"><?php echo WC()->cart->get_cart_contents_count(); ?></span> 

											<div class="cart-preview">
												<?php
												global $woocommerce;
												$items = $woocommerce->cart->get_cart();

												foreach($items as $item => $values) { 
													$_product =  wc_get_product( $values['data']->get_id() );
													echo "<div class='cart-preview-tem'>";
													$getProductDetail = wc_get_product( $values['product_id'] );
													echo "<div class='thumb-container'>";
													echo $getProductDetail->get_image('thumb'); 
													echo "</div>";
													echo "".$values['quantity']. ' x '.$_product->get_title(); 
													$price = get_post_meta($values['product_id'] , '_price', true);
													echo "<span>";
													echo get_woocommerce_currency_symbol();
													echo "".$price."</span></div>";
												}
												?>
											</div>
										</a>
									</div>
								<?php endif; ?>
							<?php endif; ?>
					</div>
				</div>

			</nav><!-- #primary-site-navigation -->

			<div class="super-menu clearfix">
				<div class="super-menu-inner">
					<a href="#" id="pull" class="toggle-mobile-menu menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'minimalistblogger' ); ?></a>
					<?php if ( get_theme_mod( 'show_wc_cart' ) == '1' ) : ?>
						<?php if ( class_exists( 'WooCommerce' ) ) : ?>
							<div class="cart-header cart-header-mobile">
								<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr( 'View your shopping cart' ); ?>">
									<svg aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"></path> <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"></path> </svg>
									<span class="cart-icon-number"><?php echo WC()->cart->get_cart_contents_count(); ?></span> 

									<div class="cart-preview">
										<?php
										global $woocommerce;
										$items = $woocommerce->cart->get_cart();

										foreach($items as $item => $values) { 
											$_product =  wc_get_product( $values['data']->get_id() );
											echo "<div class='cart-preview-tem'>";
											$getProductDetail = wc_get_product( $values['product_id'] );
											echo "<div class='thumb-container'>";
											echo $getProductDetail->get_image('thumb'); 
											echo "</div>";
											echo "".$values['quantity']. ' x '.$_product->get_title(); 
											$price = get_post_meta($values['product_id'] , '_price', true);
											echo "<span>";
											echo get_woocommerce_currency_symbol();
											echo "".$price."</span></div>";
										}
										?>
									</div>
								</a>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>

			<div id="mobile-menu-overlay"></div>

		</header>


		<?php if ( get_theme_mod( 'imgbanner_frontpage_only' ) == '' ) : ?>
			<!-- Image banner -->
			<?php if ( get_theme_mod( 'banner_img_firsttext') || get_theme_mod( 'banner_img_thidtext') ||  get_theme_mod( 'banner_img_secondtext') ||  get_theme_mod( 'img_banner_bg_img') ) : ?>
			<div class="content-wrap">
				<div class="bottom-header-wrapper">
					<?php if (get_theme_mod('img_banner_bg_img') ) : ?><img src="<?php echo esc_url( get_theme_mod( 'img_banner_bg_img' ) ); ?>" alt="Header image"><?php endif; ?>
					<div class="header-txt-wrap">
						<?php if (get_theme_mod('img_banner_link') ) : ?>
							<a href="<?php echo esc_url(get_theme_mod('img_banner_link')) ?>">
							<?php endif; ?>

							<?php if (get_theme_mod('banner_img_firsttext') ) : ?>
								<span class="bottom-header-tagline">
									<?php echo esc_attr(get_theme_mod('banner_img_firsttext')) ?>
								</span>
							<?php endif; ?>

							<?php if (get_theme_mod('banner_img_secondtext') ) : ?>
								<span class="bottom-header-title">
									<?php echo esc_attr(get_theme_mod('banner_img_secondtext')) ?>
								</span>
							<?php endif; ?>


							<?php if (get_theme_mod('banner_img_thidtext') ) : ?>
								<span class="bottom-header-below-title">
									<?php echo esc_attr(get_theme_mod('banner_img_thidtext')) ?>
								</span>
							<?php endif; ?>

							<?php if (get_theme_mod('img_banner_link') ) : ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<!-- / Image banner -->

	<?php else : ?>
		<?php if ( is_front_page() ) : ?>
			<?php if ( get_theme_mod( 'banner_img_firsttext') || get_theme_mod( 'banner_img_thidtext') ||  get_theme_mod( 'banner_img_secondtext') ||  get_theme_mod( 'img_banner_bg_img') ) : ?>
			<div class="content-wrap">
				<div class="bottom-header-wrapper">
					<?php if (get_theme_mod('img_banner_bg_img') ) : ?><img src="<?php echo esc_url( get_theme_mod( 'img_banner_bg_img' ) ); ?>" alt="Header image"><?php endif; ?>
					<div class="header-txt-wrap">
						<?php if (get_theme_mod('img_banner_link') ) : ?>
							<a href="<?php echo esc_url(get_theme_mod('img_banner_link')) ?>">
							<?php endif; ?>

							<?php if (get_theme_mod('banner_img_firsttext') ) : ?>
								<span class="bottom-header-tagline">
									<?php echo esc_attr(get_theme_mod('banner_img_firsttext')) ?>
								</span>
							<?php endif; ?>

							<?php if (get_theme_mod('banner_img_secondtext') ) : ?>
								<span class="bottom-header-title">
									<?php echo esc_attr(get_theme_mod('banner_img_secondtext')) ?>
								</span>
							<?php endif; ?>


							<?php if (get_theme_mod('banner_img_thidtext') ) : ?>
								<span class="bottom-header-below-title">
									<?php echo esc_attr(get_theme_mod('banner_img_thidtext')) ?>
								</span>
							<?php endif; ?>

							<?php if (get_theme_mod('img_banner_link') ) : ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>



<div class="content-wrap">

	<?php if ( get_theme_mod( 'upperwidgets_frontpage_only' ) == '' ) : ?>

		<!-- Upper widgets -->
		<div class="header-widgets-wrapper">
			<?php if ( is_active_sidebar( 'headerwidget-1' ) ) : ?>
				<div class="header-widgets-three header-widgets-left">
					<?php dynamic_sidebar( 'headerwidget-1' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'headerwidget-2' ) ) : ?>
				<div class="header-widgets-three header-widgets-middle">
					<?php dynamic_sidebar( 'headerwidget-2' ); ?>
				</div>
			<?php endif; ?>

			<?php if ( is_active_sidebar( 'headerwidget-3' ) ) : ?>
				<div class="header-widgets-three header-widgets-right">
					<?php dynamic_sidebar( 'headerwidget-3' ); ?>				
				</div>
			<?php endif; ?>
		</div>
		<!-- / Upper widgets -->
	<?php else : ?>
		<?php if ( is_front_page() ) : ?>
			<!-- Upper widgets -->
			<div class="header-widgets-wrapper">
				<?php if ( is_active_sidebar( 'headerwidget-1' ) ) : ?>
					<div class="header-widgets-three header-widgets-left">
						<?php dynamic_sidebar( 'headerwidget-1' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'headerwidget-2' ) ) : ?>
					<div class="header-widgets-three header-widgets-middle">
						<?php dynamic_sidebar( 'headerwidget-2' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'headerwidget-3' ) ) : ?>
					<div class="header-widgets-three header-widgets-right">
						<?php dynamic_sidebar( 'headerwidget-3' ); ?>				
					</div>
				<?php endif; ?>
			</div>
			<!-- / Upper widgets -->
		<?php endif; ?>
	<?php endif; ?>

</div>

<div id="content" class="site-content clearfix">
	<div class="content-wrap">
