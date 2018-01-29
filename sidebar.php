<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hailey Lite
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
<div class="theiaStickySidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- .theiaStickySidebar -->
</aside><!-- #secondary -->
