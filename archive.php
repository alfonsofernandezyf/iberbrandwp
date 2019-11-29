<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

get_header(); ?>


	<div id="" class="content-area ">
		<main id="main" class="site-main container" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
				get_template_part( 'template-parts/slider-archive', get_post_format() );


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 
		?>

		<div class="sidebar-bottom container">
		<?php get_sidebar(); ?>
		</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php


get_footer();
