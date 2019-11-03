<style>

#content {
    background: url(<?php echo get_template_directory_uri(); ?>/img/team_background.svg);
    min-height: 100vh;
    background-size: unset;
    background-repeat: no-repeat;
    background-clip: border-box;
}
.site-header {
    margin-bottom: 0 !important;
    background: white;
}



.page-template-team article {
    margin: 5em;
}

.page-template-team h2 {
    color: #A12338;
}


.page-template-team h2::after {
    border-bottom: solid 2px #a22035;
    content: ' ';
    display: block;
    width: 1em;
    height: 1em;
    margin-bottom: 1em;
}

.wp-block-column {
    flex-basis: calc(50% - 16px);
    flex-grow: 0;
    align-self: auto;
    
}


figure.wp-block-image.tiw-logo {
    max-width: 250px;
}

@media (max-width: 992px){

    #content {
    background-position: left;
    background-size: cover;
    background-repeat: no-repeat;
    }

}

@media (min-width: 992px){

.wp-block-column {
flex-basis: calc(50% - 16px);
flex-grow: 0;
}

}



</style>

<?php
/**
 * Template Name: Team
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
			<div id="page-team" class="content-area-full">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'team' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #page-team -->
		</div><!-- row -->
        <div class="row">
            <div id="partners" class="content-area-full">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/slider', 'partners' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                </div><!-- #partners -->
		</div><!-- row -->
        
	</div><!-- container -->

<?php
get_footer();
