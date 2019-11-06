<?php
/**
 * Template part for displaying partners
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
$partner_quote = get_field('quote');
$partner_position = get_field('position');
$partner_email = get_field('email');
$partner_side_info = get_field('side_info');


?>

<div class="container partners-title-mobile"><h2>PARTNERS</h2></div>

<?php if ( has_post_thumbnail() && is_single() ) : ?>
		<div class="partner-picture container-fluid" style="--image-url: url(<?php echo($featured_img_url); ?>)">
			<div class="container partners-title">
				<h2 class="">PARTNERS</h2>			
			</div>
			<?php if ($partner_quote) : ?>
			
			<div class="container-fluid partner_quote">
				<div class="partner_quote_inner">
					<hr class="partner_quote_inner_left"/>
					<span class="partner_quote_inner_txt">"<?php echo($partner_quote); ?>"</span>
					<hr class="partner_quote_inner_right" />
				</div>
			</div>
			<?php else : ?>

			<?php endif; ?>
		</div><!--  .partner-picture -->
<?php endif; ?>

<div id="primary" class="content-partner">
<main id="main" class="site-main" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
			<div class="">
				<div class="partner-content">
					<header class="partner-info">
						<?php
							the_title( '<h1 class="entry-title partner-name">', '</h1>' );
							echo '<h4 class=partner-position>'.$partner_position.'</h4>';
							echo '<a class=partner-email href="mailto:'.$partner_email.'" ><span>'.$partner_email.'</span></a>';

						?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
							the_content( sprintf(
								/* translators: %s: Name of current post. */
								wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'materialwp' ), array( 'span' => array( 'class' => array() ) ) ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							) );

							
						?>
					</div><!-- .entry-content -->
					<div class="side-info-content">
						<?php
							echo $partner_side_info;
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
					
						<?php 
						
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'materialwp' ),
							'after'  => '</div>',
						) );
						
						materialwp_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</div>
			</div><!--  .container -->
		</article><!-- #post-## -->
	</main>
</div>
