<?php
/**
 * Template Name: Home
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

get_header('home'); ?>

<style>




button.navbar-toggler.navbar-toggler-right.menu-button {
    float: right;
}



#masthead{
	background:white;}



.navbar-expand-lg .navbar-nav .nav-link{
    	border-right: solid 1px white;
}

.navbar-expand-lg .navbar-nav .nav-link, 
.navbar-expand-lg .navbar-nav .dropdown-item {
	color: white;

}

.site-content {
    top: initial; 
}

.navbar {
	border-bottom: solid 1px #ffffff2e; 
}


.dropdown-menu .dropdown-item {background:#4646468c;}


.menu-trigger i {
    background: url(<?php echo get_template_directory_uri(); ?>/img/navbar-toggler.svg);
    background-repeat: round;
    /* position: relative; */
    /* top: 70px; */
}

.home-paragraph {
    display: grid;
    grid-auto-flow: column;
    max-width: 550px;
	
}

.menu-trigger {
	color:white;
}

.site-content {
    position: relative;
}

.header-grid {
    width: 90vw;
	margin:0 auto;
    display: grid;
    align-items: center;
    justify-content: right;
	
	grid-template-columns: 1fr auto;
	}

.site-footer {
	position: relative;
	top: -110px;
}




	
	


@media screen and (min-width: 1px) and (max-width: 992px) {
	.site-content {top: none;}
	
	ol.carousel-indicators li img {
    display: none;
	}

	ol.carousel-indicators {
		position: relative;
		top: -100px;
		margin: 0 2em;
		flex-wrap: wrap;
	}

	.services-slide-grid {
    grid-template-columns: 1fr;
    align-items: flex-start;
    grid-gap: 3em;
	}
	.services-carrousel-control {
    float: left;
	}

	.carousel-item {
		min-height:75vh;
	}
}

@media screen and (min-width: 992px){
	.site-content {
		position:relative; 
		top: -27px !important;
	}
	.navbar-toggler{
		display: none !important;
	}
		
	.navbar {
    border-bottom: solid 1px #ffffff2e;
	}	

}


/*
@media only screen and (max-width: 1592px) and (min-width: 1292px){
	
	.header-grid{
	grid-template-areas: 
		'a b c d' ;
	}
	.navbar-toggler {
	display: none;
	grid-area: unset;
	}
}





@media only screen and (max-width: 992px) and (min-width: 768px) {
	.header-grid {	
		grid-template-areas: 
		'a b c d';
	}
	.site-content {
	}
	
}

@media only screen and (max-width: 768px){
	.header-grid {	
		grid-template-areas: 
		'a a get_header('home'); ?>
b c';
	}
	.site-content {
	}
	
}
*/


</style>



<div class="home-hero">
	<div class="container">
		<button 			
			class="navbar-toggler navbar-toggler-right menu-button" 
			type="button" data-toggle="modal" 
			data-target="#navbarModal" aria-controls="navbarModal" 
			aria-expanded="false" 
			aria-label="Toggle navigation">
			<span class="menu-trigger"><i class="material-icons">bar_chart</i></span>
		</button>  
		<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
		?>
	</div>

</div>
 

<?php get_template_part( 'template-parts/slider', 'services' ); ?>
  
  


<?php get_footer(); ?>
