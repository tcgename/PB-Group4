<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JCU_Openhouse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jcu_openhouse' ); ?></a>

	<!-- Add search bar here -->
	<div class="search-bar">
		<?php get_search_form(); ?>
	</div>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
    		// Custom logo
    		$custom_logo_id = get_theme_mod('custom_logo');
    		$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

			if (has_custom_logo()) {
				?>
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<div class="custom-logo">
						<img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
					</div>
				</a>
				<?php
			}
			else {
				?>
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<div class="custom-logo">
						<img src="<?php echo get_template_directory_uri() . '/images/logo_main.png'; ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
					</div>
				</a>
				<?php
			}

			$jcu_openhouse_description = get_bloginfo( 'description', 'display' );
			if ( $jcu_openhouse_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $jcu_openhouse_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
    		<?php
    		wp_nav_menu(
        		array(
            		'theme_location' => 'primary', // use 'primary' if you changed it in functions.php
            		'menu_id'        => 'primary-menu',
        		)
    		);
    		?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
