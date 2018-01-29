<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hailey Lite
 */

get_header(); ?>

<div class="swiper-container swiper-slider">
	<div class="swiper-wrapper">
	    <?php
	    $args = array( 					
			'post_type' => 'post',
		    'posts_per_page' => '6',
		    'orderby' => 'date',
		    'order' => 'DESC',
		);
		query_posts($args);
		while ( have_posts() ) : the_post();
		if ( !is_sticky() ): ?>
		<div class="swiper-slide">
	    <?php get_template_part('template-parts/content', 'swiper' ); ?>
        </div>
		<?php endif; endwhile; ?>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
	<div class="swiper-button-prev swiper-button-white"></div>
</div>
<?php wp_reset_postdata(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="theiaStickySidebar">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
				</header>

			<?php
			endif;
			$args = array(
			    'post_type'   => 'post',
			    'orderby' => 'date',
			    'order' => 'DESC',
			    'paged' => $paged
			  );
    		query_posts($args); ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
        		get_template_part('template-parts/content',  get_post_format() );

			endwhile; ?>
			
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- .theiaStickySidebar -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
