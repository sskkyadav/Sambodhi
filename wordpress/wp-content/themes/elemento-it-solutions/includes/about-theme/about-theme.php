<?php
/**
 * Elemento IT Solutions Theme page
 *
 * @package Elemento IT Solutions
 */

if ( ! defined( 'ELEMENTO_IT_SOLUTIONS_DOCS' ) ) {
	define( 'ELEMENTO_IT_SOLUTIONS_DOCS', 'http://www.wpelemento.com/theme-documentation/elemento-it-solutions/' );
}
if ( ! defined( 'ELEMENTO_IT_SOLUTIONS_SUPPORT' ) ) {
	define( 'ELEMENTO_IT_SOLUTIONS_SUPPORT', 'https://wordpress.org/support/theme/elemento-it-solutions/' );
}
if ( ! defined( 'ELEMENTO_IT_SOLUTIONS_REVIEW' ) ) {
	define( 'ELEMENTO_IT_SOLUTIONS_REVIEW', 'https://wordpress.org/support/theme/elemento-it-solutions/reviews/#new-post' );
}
if ( ! defined( 'ELEMENTO_IT_SOLUTIONS_LIVE_DEMO' ) ) {
	define( 'ELEMENTO_IT_SOLUTIONS_LIVE_DEMO', 'https://www.wpelemento.com/demo/elemento-it-solutions/' );
}
if ( ! defined( 'ELEMENTO_IT_SOLUTIONS_BUY_NOW' ) ) {
	define( 'ELEMENTO_IT_SOLUTIONS_BUY_NOW', 'https://www.wpelemento.com/elementor/it-solutions-wordpress-theme/' );
}

//Admin Enqueue for Admin
function elemento_it_solutions_admin_enqueue_scripts(){
	wp_enqueue_style('elemento-it-solutions-admin-style', esc_url( get_template_directory_uri() ) . '/includes/about-theme/css/admin.css');
}
add_action( 'admin_enqueue_scripts', 'elemento_it_solutions_admin_enqueue_scripts' );

/**
 * Add theme page
 */
function elemento_it_solutions_menu() {
	add_theme_page( esc_html__( 'About Theme', 'elemento-it-solutions' ), esc_html__( 'About Theme', 'elemento-it-solutions' ), 'edit_theme_options', 'elemento-it-solutions-about', 'elemento_it_solutions_about_display' );
}
add_action( 'admin_menu', 'elemento_it_solutions_menu' );

/**
 * Display About page
 */
function elemento_it_solutions_about_display() {
	$theme = wp_get_theme(); ?>
	<div class="wrap about-wrap full-width-layout">
		<div class="about-theme">
			<h1><?php echo esc_html( $theme ); ?></h1>
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$description = explode( '. ', $theme->get( 'Description' ) );

					array_pop( $description );

					$description = implode( '. ', $description );

					echo esc_html( $description . '.' );
				?></p>
				<p class="import-text"><?php esc_html_e( 'To import homepage data install recommended plugins.', 'elemento-it-solutions' ); ?></p>
			</div>
		</div>

		<?php
			elemento_it_solutions_main_screen();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'elemento-it-solutions' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'elemento-it-solutions' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'elemento-it-solutions' ) : esc_html_e( 'Go to Dashboard', 'elemento-it-solutions' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function elemento_it_solutions_main_screen() {
	$theme = wp_get_theme(); ?>
	<div class="feature-section">
		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'elemento-it-solutions' ); ?></h2>
			<p><?php esc_html_e( 'Easy Customization options are available on custumizer screen.', 'elemento-it-solutions' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Customize', 'elemento-it-solutions' ); ?></a></p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Documentation', 'elemento-it-solutions' ); ?></h2>
			<p><?php esc_html_e( 'Here is our step by step documentation to help you out in create your website using our theme.', 'elemento-it-solutions' ) ?></p>
			<p><a href="<?php echo esc_url( ELEMENTO_IT_SOLUTIONS_DOCS ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Documentation', 'elemento-it-solutions' ); ?></a></p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Support', 'elemento-it-solutions' ); ?></h2>
			<p><?php esc_html_e( 'Get quick support from genuine people who deliver tailored solutions to your questions.', 'elemento-it-solutions' ) ?></p>
			<p><a href="<?php echo esc_url( ELEMENTO_IT_SOLUTIONS_SUPPORT ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Support', 'elemento-it-solutions' ); ?></a></p>
		</div>

		<div class="card">
			<h2 class="title"><?php esc_html_e( 'Review', 'elemento-it-solutions' ); ?></h2>
			<p><?php esc_html_e( 'Show us support by reveiwing our theme. Click here to leave your reveiw.', 'elemento-it-solutions' ) ?></p>
			<p><a href="<?php echo esc_url( ELEMENTO_IT_SOLUTIONS_REVIEW ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Review', 'elemento-it-solutions' ); ?></a></p>
		</div>
	</div>
	<div class="pro-feature-section">
		<h2 class="title"><?php esc_html_e( 'Elemento IT Solutions Pro', 'elemento-it-solutions' ); ?></h2>
		<div class="pro-buttons">
			<a href="<?php echo esc_url( ELEMENTO_IT_SOLUTIONS_LIVE_DEMO ); ?>" class="button button-primary live-preview" target="_blank"><?php esc_html_e( 'Live Preview', 'elemento-it-solutions' ); ?></a>
			<a href="<?php echo esc_url( ELEMENTO_IT_SOLUTIONS_BUY_NOW ); ?>" class="button button-primary buy-nw" target="_blank"><?php esc_html_e( 'Buy Now', 'elemento-it-solutions' ); ?></a>
		</div>
		<img src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
	</div>
	<?php
}
