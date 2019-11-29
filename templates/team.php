<style>

#content {
    background: url(http://iberbrand.test/wp-content/themes/iberbrandwp/img/team_background.svg);
    min-height: 100vh;
    background-size: unset;
    background-repeat: no-repeat;
    background-clip: border-box;
    
}
.site-header {
    margin-bottom: 0 !important;
    background: white;
}

p{text-align:justify;
}

.page-template-team article {
    margin: 5em 0;
}

.page-template-team h2 {
    color: #821728;
}


.page-template-team h2::after {
    border-bottom: solid 2px #821728;
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


.partner-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-auto-flow: column;
    width: auto;
}

#partners {
    border-bottom: solid #a12338 6px;
}

#partner-654  {
    background-position: 25% center;
}
#partner-679 {
    background-position: 90% center;
}
#partner-697 {
    background-position: 90% center;
}
#partner-700 {
    background-position: 10% center;
}
#partner-703 {
    background-position: 85% center;
}

.partner-grid-item {
    box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.25);
    width: 100%;
    height: 400px;
    background: var(--image-url) top;
    background-size: cover;
    -webkit-clip-path: polygon(0 0, 0 100%, 100% 100%, 100% 0, 0 10%);
    clip-path: polygon(0 0, 0 100%, 100% 100%, 100% 0, 0 10%);
    padding: 2em;
    display: flex;
    flex-direction: column-reverse;
    color: white;
    transition: box-shadow .5s ease-out;
}
.partner-grid-item:nth-of-type(odd){
    -webkit-clip-path: polygon(0 0, 0 100%, 100% 100%, 100% 10%, 0 0); 
    clip-path: polygon(0 0, 0 100%, 100% 100%, 100% 10%, 0 0);
}

.partner-grid-item:hover {
	box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.1);
    color:#d81143;
}



span.position::after {
    content: '';
    background: url('<?php echo get_template_directory_uri(); ?>/img/Flecha_Blanca.svg');
    margin-left: auto;
    float: right;
    height: 2em;
    width: 2em;    
    transition: box-shadow .5s ease-out;

}

.partner-grid-item:hover .position::after {
    background: url('<?php echo get_template_directory_uri(); ?>/img/Flecha_Roja.svg');
}



.dotted-hr {

border-top: 1px dashed black;
margin: 3em 0 4em 0;

}

h2.secition-title {
    padding-bottom: 1em;
}


h2.secition-title::after {
    display: none;
}



.indicator-title a {color:black;}
.indicator-title a:hover {color:black; text-decoration:none;}

.carousel-indicators-professionals {
    text-align: center;
    justify-content: flex-start;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 0 0 3em 0;
    padding: 0;
}

.carousel-indicators-professionals li {
    display: flex;
    
}

.carousel-indicators-professionals li a:hover {
    color:#a12338;
    border-bottom: solid 1px #a12338;
    padding: 0 0 1em 0;
    
}

.carousel-indicators-professionals li:after{
    content:'•';
    display: block;
    padding: 0 1em;
}

.carousel-indicators-professionals li:last-child:after{
    content:'';
}

.carousel-item{
	background: var(--service-background), center center;
	background-position: center 80%;
	background-size: cover;
	min-height: 200px; 
	align-items: center;

}

.professionals-slide-grid{
    display: grid;
    grid-template-columns: 2fr 3fr;
    grid-gap: 3em;
}

.pro-col1{
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 3em 0;
}

.pro-pic{margin:0 auto; max-width:300px;}


@media (max-width: 992px){

    #content {
    background-position: top center;
    background-size: contain;
    background-repeat: no-repeat;
    }

    .secition-title {
    text-align: center;
    }

    .partner-grid {
    display: grid;
    grid-auto-flow: row;
    grid-template-columns: 1fr;
    width: auto;
    }

    .partner-grid-item, .partner-grid-item:nth-of-type(odd){
    -webkit-clip-path: unset; 
    clip-path: unset;
    height: 300px;
    background-position: top center !important;
    }

    .professionals-slide-grid{
        display: grid;
        grid-template-columns: 1fr;
    }

    .carousel-indicators-professionals {
    text-align: center;
    justify-content: center;

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

get_header(); 

?>

<nav id="scrollspy" class="navbar navbar-light" data-offset="60" >
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#team-intro"></a></li>
        <li class="nav-item"><a class="nav-link" href="#partners"></a></li>
        <li class="nav-item"><a class="nav-link" href="#professionals"></a></li>
        <li class="nav-item"><a class="nav-link" href="#team"></a></li>
    </ul>

</nav>

	<div id="team-intro" class="container">
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
	</div><!-- container -->
    <div id="partners" class="container-fluid full-width">
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
    <hr class="dotted-hr" />
    <div id="professionals" class="container-fluid full-width">

<?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/slider', 'professionals' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
?>
    
    </div><!-- #partners -->
    <hr class="dotted-hr" />
    <div id="team" class="container-fluid full-width">

<?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/slider', 'team' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
?>
        
    </div><!-- #partners -->

<script>
window.onscroll = function() {myFunction()};

var scrollspy = document.getElementById("scrollspy");
var sticky = scrollspy.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    scrollspy.classList.add("sticky")
  } else {
    scrollspy.classList.remove("sticky");
  }
}
</script>

<?php



get_footer();


