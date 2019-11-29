<?php
/**
 * Template Name: Credentials
 *
 * Displays a full width page without a sidebar.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

get_header(); ?>



			<div id="primary" class="">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'credentials' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>


			</div><!-- #primary -->

<?php
get_footer();
