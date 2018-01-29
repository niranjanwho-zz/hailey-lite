<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hailey Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php if ( is_home() && is_sticky() || is_front_page() && is_sticky() ) : ?>
			<span class="sticky-post"><span class="fa fa-tag"></span><?php echo esc_attr('Featured','hailey-lite');?></span>
			<?php endif; ?>
			<?php hailey_lite_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif;

		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>
	</header><!-- .entry-header -->

	<?php if ( !is_single() && has_post_thumbnail() ): ?>
    <div class="post-featured-image">
        <?php echo get_the_post_thumbnail($post->ID, 'hailey_lite_1920', array('class' => 'img-center'));?>
    </div><!-- .post-featured-image -->
    <?php endif; ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Read More<span class="screen-reader-text"> "%s"</span>', 'hailey-lite' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hailey-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php hailey_lite_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<ul class="share-this">
		<li><?php echo esc_attr('Share :', 'hailey-lite') ?></li>
		<li><a target="_blank" rel="nofollow" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink() ;?>"><i class="fa fa-facebook"></i></a></li>
		<li><a target="_blank" rel="nofollow" href="https://twitter.com/share?text=<?php echo get_the_title();?>&amp;url=<?php echo get_permalink() ;?>"><i class="fa fa-twitter"></i></a></li>
		<li><a target="_blank" rel="nofollow" href="https://pinterest.com/pin/create/bookmarklet/?media=<?php the_post_thumbnail_url(); ?>&amp;url=<?php echo get_permalink() ;?>"><i class="fa fa-pinterest"></i></a></li>
	</ul><!-- .share-this -->

	<?php if( is_single() && get_the_author_meta('description') != '' ): ?>
	<div class="entry-author author vcard">
		<?php echo get_avatar( get_the_author_meta('email'), '100', null, false, array('class' => '') ); ?>
		<h5 class="author-name font-family-inherit"><?php the_author_posts_link(); ?></h5>
		<p><?php the_author_meta('description'); ?></p>
	</div><!-- .entry-auther-->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
