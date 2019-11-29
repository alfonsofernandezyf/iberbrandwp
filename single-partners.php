<style>




#masthead{
	background:white;
}

main#main {
    background-color: #ffffffdb;
}



.navbar-expand-lg .navbar-nav .nav-link{
    	border-right: solid 1px white;
}

.navbar-expand-lg .navbar-nav .nav-link, 
.navbar-expand-lg .navbar-nav .dropdown-item {
	color: white;
}

.navbar {
	border-bottom: none;
	
}


.dropdown-menu .dropdown-item {
    background: #0000009c;
}


.menu-trigger i {
    background: url(<?php echo get_template_directory_uri(); ?>/img/navbar-toggler.svg);
    background-repeat: round;
    /* position: relative; */
    /* top: 70px; */
}


.site-header {
     margin-bottom: 0 !important; 
}

.partners-title-mobile {
    color: #a22035;
    text-align: center;
	padding: 1em;
	display: none;
}

.partner-picture {
  box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.2);
  background: var(--image-url); background-position: 0 35%;;
  display:flex;
  min-height: 512px;
  background-size: cover;
  padding: 4em;
  flex-wrap: wrap;
  flex-flow: column;
  color: white;
  align-items: center;
  justify-content: center;
  transition: box-shadow .5s ease-out;
  border-bottom: solid 6px #a22035;
}
.partner-picture:hover {
	box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.1);
}


.container.partners-title-mobile {
    color: #a22035;
    text-align: center;
    padding: 1em;
}

.partner-picture
{

}
.partners-title{
	margin-bottom:auto;
	
}

.partners-title h2 {
    font-size: 2.5em;
}

  
.partner_quote {
padding: 0 !important;
}

.partner_quote_inner {
	display: grid;
	grid-template-columns: auto 512px 3em;
	align-items: center;
}

.partner_quote_inner hr {
	width: -webkit-fill-available;
	border: solid 1px white;
}

.partner_quote_inner_txt {
	padding:1em;
	font-weight: bold;
}


.partner-content {
    display: grid;
	grid-template-columns: 200px 2fr 1fr;
	grid-column-gap:2em;
	padding: 5em 0;
	max-width: 90%;
	margin: 0 auto;
}

h1.entry-title.partner-name {
    color: #a22035;
    font-size: 28pt;
    margin-bottom: 0.5em;
}

.partner-name::after {
border-bottom: solid 1px black;
width: 0.5em;
display:block;
content: ' ';
margin-top: 0.5em;
}

h4.partner-position {
    font-size: 1.2rem;
    margin-bottom: 2em;
    grid-column: 1;
}
.entry-content {
    border-right: solid 1px black;
    padding-right: 1em;
}

.side-info-content p {
    font-size: 10pt;
}

.side-info-content h4 {
    font-size: 12pt;
    color: #a22035;
}


@media only screen and (max-width: 900px){
	
	

	#masthead{
	background:transparent;
	
	}

	main#main {
    background: transparent;
	}




	
	
	.partners-title-mobile{
		display:block;
	}
	
	.partners-title h2 {
    	display:none;
	}

	.partner-picture {
	padding: 1em;
	min-height:256px;
	}

	

	
	.partner-content {
		grid-template-columns: 1fr;
	}

	.partner_quote_inner {
    display: grid;
    grid-template-columns: auto 80% auto;
    align-items: center;
	}
	
	header.partner-info {
    display: grid;
    grid-template-columns: 1fr 1fr;
	}

	a.partner-email {
    grid-row-start: 1;
    grid-row-end: 3;
    grid-column: 2;
    align-self: center;
    margin-left: auto;
}

	.entry-content {
    border-right: none;
 	}
}


</style>
<?php
/**
 * 
 * Template Post Type: post
 * The template for displaying all single partners
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MaterialWP
 */




get_header(); ?>

	<div class="partner-single">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-partners', get_post_format() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>



<?php
get_footer();
