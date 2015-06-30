<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Devons Theme - Node
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'devons-theme' ); ?></a>
	<header id="masthead" class="site-header text-center" role="banner">
		<nav id="site-navigation" class="main-navigation main-nav-style" role="navigation">
			<button class="menu-toggle p-col-centered" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'devons-theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container-class' => 'text-center' ) ); ?>
		</nav><!-- #site-navigation -->

		<div style='background-image: url("<?php header_image(); ?>")' class='header-back'>
			<div class="site-branding">
				<h1 class="site-title"><label>{</label><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo get_bloginfo( 'name' ) ; ?></a><label>}</label></h1>
				<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
			</div><!-- .site-branding -->

			<?php 
				if ( is_active_sidebar( 'header-sidebar' ) ) {?>
					<div class="widget-area-header" role="complementary">
						<?php dynamic_sidebar( 'header-sidebar' ); ?>
					</div><!-- #secondary -->
				<?php }
			?>
		</div>


	</header><!-- #masthead -->
	<div id="content" class="site-content">

	<?php 
		if ( is_active_sidebar( 'upper-sidebar' ) ) {?>
			<div class="widget-area-header" role="complementary">
				<?php dynamic_sidebar( 'upper-sidebar' ); ?>
			</div><!-- #secondary -->
		<?php }
	?>