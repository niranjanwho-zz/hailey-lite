<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hailey Lite
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="theiaStickySidebar">
		
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			the_post_navigation( array(
			    'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'hailey-lite' ) . '</span> ' .
			        '<div class="navigation-post" style="background-image: url(' . get_the_post_thumbnail_url(get_previous_post()->ID,'large') . ');"><i class="fa fa-angle-left" aria-hidden="true"></i><h5 class="post-title">%title</h5></div>',
			    'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'hailey-lite' ) . '</span> ' .
			        '<div class="navigation-post" style="background-image: url(' . get_the_post_thumbnail_url(get_next_post()->ID,'large') . ');"><h5 class="post-title">%title</h5><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
			) );

		endwhile; // End of the loop.
		?>

		</div><!-- .theiaStickySidebar -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
