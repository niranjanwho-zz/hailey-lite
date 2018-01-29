<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hailey Lite
 */

?>

	</div><!-- #content -->

	<a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

	<footer id="colophon" class="site-footer">
		<div class="wrap">
			<div class="site-info">
		        <div class="site-copyright">
	            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hailey-lite' ) ); ?>" class="site-copyright"><?php printf( esc_html__( 'Proudly powered by %s', 'hailey-lite' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'hailey-lite' ), 'Hailey Lite', 'ThemingBad' ); ?>
				</div>
			</div><!-- .site-info -->
		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
