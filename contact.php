<style>

.contact-name input{ 
    background: url(<?php echo get_template_directory_uri(); ?>/img/Name.svg) no-repeat scroll 10px 6px !important;
    background-repeat: no-repeat;
    background-size: 1.5em !important;
}


.contact-email input{ 
    background: url(<?php echo get_template_directory_uri(); ?>/img/Email.svg) no-repeat scroll 10px 12px !important;
    background-repeat: no-repeat;
    background-size: 1.5em !important;
}

.contact-message textarea{ 
    background: url(<?php echo get_template_directory_uri(); ?>/img/Message.svg) no-repeat scroll 10px 13px !important;
    background-repeat: no-repeat;
    background-size: 1.5em !important;
}



</style>

<?php
/**
 * Template Name: Contact
 *
 * Displays a full width page without a sidebar.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" class="content-area-full content-contact">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- row -->
	</div><!-- container -->

<?php
get_footer();
