<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Hailey Lite
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses hailey_lite_header_style()
 */
function hailey_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'hailey_lite_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '6f518a',
		'width'                  => 768,
		'height'                 => 768,
		'flex-height'            => true,
		'wp-head-callback'       => 'hailey_lite_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'hailey_lite_custom_header_setup' );

if ( ! function_exists( 'hailey_lite_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see hailey_lite_custom_header_setup().
	 */
	function hailey_lite_header_style() {
		$header_image = get_header_image();
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( empty( $header_image ) && get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( 'blank' === $header_text_color ) :
		?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php
		endif;

			// Has a Custom Header been added?
			if ( ! empty( $header_image ) ) :
		?>
			.site-header {
				/*
				 * No shorthand so the Customizer can override individual properties.
				 * @see https://core.trac.wordpress.org/ticket/31460
				 */
				background-image: url(<?php header_image(); ?>);
				background-repeat: no-repeat;
				background-position: center;
				background-size: cover;
				border: none !important;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
