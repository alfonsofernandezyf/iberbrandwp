<?php
/**
 * The template for displaying all single services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MaterialWP
 */

get_header(); ?>

	<div class="service-single">
	<?php

		get_template_part( 'template-parts/content', 'services' ); 

	?>


<?php

get_footer();
