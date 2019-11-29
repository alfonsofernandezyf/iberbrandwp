<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

$category = get_the_category( );
$cat_id = $category->cat_ID;
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');


?>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && is_single() ) : ?>
		<div class="post-thumbnail container-fluid">
			<?php the_post_thumbnail('full', array('class' => 'card-img-top')); ?>
		</div><!--  .post-thumbnail -->
	<?php else : ?>
		<div class="post-archive-thumbnail">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('full', array('class' => 'card-img-top')); ?>
		</a>
	</div><!--  .post-thumbnail -->
	<?php endif; ?>

	<?php if ( is_single() ) : ?>
		<div class="container-fluid">
	<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
				?>
				<a class="post-cat" href="<?php  $cat_id = $category[0]->term_id; echo get_category_link( $cat_id ); ?>"><?php echo $category[0]->cat_name; ?> </a>
				<?php
				
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			?>
	</header><!-- .entry-header -->

	<div class="post-grid ">
		
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'materialwp' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'materialwp' ),
					'after'  => '</div>',
				) );
			?>
			<footer class="entry-footer">
				<?php 
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php materialwp_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
				endif; 
				
				materialwp_entry_footer(); ?>
			</footer><!-- .entry-footer -->

		</div><!-- .entry-content -->
		<div class="sidebar">

			<?php get_sidebar(); ?>

		</div>




	</div><!--  .post-grid -->
</div>
</article><!-- #post-## -->
		
	<?php else : ?>
		<div class="container-fluid">
	<header class="entry-">
			<?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>
	</header><!-- .entry-header -->

</div>
</article><!-- #post-## -->



	<?php endif; ?>


