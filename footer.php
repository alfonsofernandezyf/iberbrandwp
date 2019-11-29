<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaterialWP
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<span>&copy; <?php echo date("Y"); ?> IBERBRAND<sup>®</sup>All Rights Reserved | <a href="<?php get_the_privacy_policy_link(); ?>">Pirvacy policy</a> </span>
				<span>CREATIVE AND INIOVATIVE LIKE OUR CLIENTS <sup>®</sup></span>
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
