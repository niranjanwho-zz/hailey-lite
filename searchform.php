<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Template for displaying search forms in Hailey Lite
 *
 * @package Hailey Lite
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( uniqid( 'search-form-' )); ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'hailey-lite' ); ?></span>
	</label>
	<input type="search" id="<?php echo esc_attr( uniqid( 'search-form-' )); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'hailey-lite' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'hailey-lite' ); ?></span></button>
</form>
