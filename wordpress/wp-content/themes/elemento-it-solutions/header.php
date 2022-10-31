<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elemento IT Solutions
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<?php if(get_theme_mod('elemento_it_solutions_preloader_hide','')){ ?>
	<div class="loader">
		<div class="preloader">
	    <div class="diamond">
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
		</div>
	</div>
<?php } ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elemento-it-solutions' ); ?></a>

<div class="topheader">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
				<?php if ( get_theme_mod('elemento_it_solutions_header_hiring_head') || get_theme_mod('elemento_it_solutions_header_hiring') || get_theme_mod('elemento_it_solutions_header_hiring') || get_theme_mod('elemento_it_solutions_header_hiring_url') || get_theme_mod('elemento_it_solutions_header_hiring_text') ) : ?>
					<p class="mb-0 text-center text-md-left hiring-text"><span><?php echo esc_html( get_theme_mod('elemento_it_solutions_header_hiring_head' ) ); ?></span> <?php echo esc_html( get_theme_mod('elemento_it_solutions_header_hiring' ) ); ?> <a href="<?php echo esc_url( get_theme_mod('elemento_it_solutions_header_hiring_url' ) ); ?>"><?php echo esc_html( get_theme_mod('elemento_it_solutions_header_hiring_text' ) ); ?></a></p>
				<?php endif; ?>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 text-md-right text-center align-self-center">
				<?php if ( get_theme_mod('elemento_it_solutions_header_location') ) : ?>
					<span class="mr-4"><i class="fas fa-map-marker-alt mr-2"></i><?php echo esc_html( get_theme_mod('elemento_it_solutions_header_location' ) ); ?></span>
				<?php endif; ?>
				<?php if ( get_theme_mod('elemento_it_solutions_header_email') ) : ?>
					<span ><i class="fas fa-paper-plane mr-2"></i><?php echo esc_html( get_theme_mod('elemento_it_solutions_header_email' ) ); ?></span>
				<?php endif; ?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 align-self-center">
				<?php $elemento_it_solutions_settings = get_theme_mod( 'elemento_it_solutions_social_links_settings' ); ?>
				<div class="social-links text-center text-md-right">
					<?php if ( is_array($elemento_it_solutions_settings) || is_object($elemento_it_solutions_settings) ){ ?>
				    	<?php foreach( $elemento_it_solutions_settings as $elemento_it_solutions_setting ) { ?>
					        <a href="<?php echo esc_url( $elemento_it_solutions_setting['link_url'] ); ?>">
					            <i class="<?php echo esc_attr( $elemento_it_solutions_setting['link_text'] ); ?>"></i>
					        </a>
				    	<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 align-self-center">
				<div class="logo">
		    		<div class="logo-image">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
						<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('elemento_it_solutions_display_header_title', true) == true ) :
				      			echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
				      			echo esc_attr(get_bloginfo('name'));
				      			echo '</a>';
			      		 	endif;
			      		 	if ( get_theme_mod('elemento_it_solutions_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
					    ?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-6 col-md-6 col-sm-4 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-3 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'elemento-it-solutions' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 align-self-center">
				<?php if ( get_theme_mod('elemento_it_solutions_header_phone_number') || get_theme_mod('elemento_it_solutions_header_phone_number_text') ) : ?>
					<div class="row phone-card">
						<div class="col-lg-3 col-md-3 col-sm-3">
							<i class="fas fa-headphones"></i>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9">
							<p class="mb-0"><?php echo esc_html( get_theme_mod('elemento_it_solutions_header_phone_number_text' ) ); ?></p>
							<span><?php echo esc_html( get_theme_mod('elemento_it_solutions_header_phone_number' ) ); ?></span>
						</div>
					</div>
				<?php endif; ?>
			</div>
	   	</div>
	</div>
</header>
