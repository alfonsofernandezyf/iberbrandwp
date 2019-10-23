<style>

#content {
<<<<<<< HEAD
    background: url(<?php echo get_template_directory_uri(); ?>/img/Fondo_Papeles.png);
=======
    background: url(wp-content/themes/iberbrandwp/img/Fondo_Papeles.png);
>>>>>>> 4bbbbd137f4d129d8f7c470258806c1afb83998d
    min-height: 100vh;
    background-size: cover;
}
.site-header {
    margin-bottom: 0;
}


.about-us-item h2 {
    color: #a22035;
}

.about-us-item h2::after {
    border-bottom: solid 3px #a22035;
    content: ' ';
    display: block;
    width: 2em;
    height: 1em;
    margin-bottom: 1em;
}

.wp-block-column {
    flex-basis: calc(50% - 16px);
    flex-grow: 0;
    align-self: center;
    margin: 5em 0;
}

@media (max-width: 698px){

    .about-us-item.philosophy {
    flex-flow: column-reverse;
}


}


</style>

<?php
/**
 * Template Name: About
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package materialwp
 */

get_header(); ?>




	<div class="container">
		<div class="row">
			<div id="primary" class="content-area-full">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'about' );

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
