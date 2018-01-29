<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hailey Lite
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
<div id="page" class="site <?php if( !is_active_sidebar( 'sidebar-1' ) ): ?>no-sidebar<?php else: ?>sidebar-right<?php endif; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hailey-lite' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<?php the_custom_logo(); ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="menu-toggle-icon"></span><span><?php esc_html_e( 'Menu', 'hailey-lite' ); ?></span></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary-menu',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->

	    <button class="site-search-modal-toggle"><span class="screen-reader-text"><?php esc_html_e( 'Search', 'hailey-lite' ); ?></span></button><!-- .site-search-toggle -->

	</header><!-- #masthead -->

	<div class="site-search-modal hide">
		<div class="wrap">
			<h2><?php esc_html_e( 'Enter Keyword here..', 'hailey-lite' ); ?></h2>
			<?php echo get_search_form(); ?>
			<p><?php esc_html_e( 'And press enter', 'hailey-lite' ); ?></p>
		</div><!-- .wrap -->
	</div><!-- .site-search-modal -->

	<?php if ( ( is_single() || is_page() ) && has_post_thumbnail() ): ?>
    <div class="site-featured-image animsition">
        <?php echo get_the_post_thumbnail($post->ID, 'hailey_lite_1920', array('class' => 'img-center')); ?>
    </div><!-- .site-featured-image -->
    <?php endif; ?>

	<div id="content" class="site-content animsition">
