<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Template part for displaying swiper posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hailey Lite
 */

?>

<div <?php post_class('swiper-item clear'); ?> <?php $post_thumbnail_id = get_post_thumbnail_id($post->ID);$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );if ( has_post_thumbnail() ) : ?>style="background-image: url(<?php echo esc_url( $post_thumbnail_url ); ?>);"<?php endif; ?>>
	<div class="swiper-content">
		<header class="entry-header" data-swiper-parallax="-200">
			<div class="swiper-entry-cat">
				<?php hailey_lite_entry_footer(); ?>
			</div>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header><!-- .entry-header --> 

		<footer class="entry-footer" data-swiper-parallax="-300">
			<a href="<?php echo get_permalink(); ?>" class="more-link"><?php echo __( 'Read More', 'hailey-lite' ) ?></a>
		</footer><!-- .entry-footer -->
	</div>
</div>