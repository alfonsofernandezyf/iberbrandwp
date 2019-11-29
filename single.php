<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MaterialWP
 */

get_header(); ?>

			<div class="content-area">
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );
				?>

				<div class="container">
				<?php
				the_post_navigation();
				endwhile; // End of the loop.
				?>
				</div>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_footer();
