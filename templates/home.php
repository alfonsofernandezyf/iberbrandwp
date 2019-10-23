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
/*    top: -27px; */
}

.navbar {
	/* border-bottom: solid 1px #0000002e; */
	
}


.dropdown-menu .dropdown-item {background:#4646468c;}


.menu-trigger i {
    background: url(/wp-content/themes/iberbrandwp/img/navbar-toggler.svg);
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


}

@media screen and (min-width: 992px) and (max-width: 2584px) {
	.site-content {
		position:relative; 
		top: -27px;
	}
	.navbar-toggler{
		display: none;
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

		<h2><b>CREATIVE</b> AND <br/> <b>INNOVATIVE</b>, LIKE <br/> OUR <b>CLIENTS.<sup>®</sup></b></h2>
		
		<div class="home-paragraph">
		<div>
		<p>
		IBERBRAND ® is a specialized in-<br/>
		tellectual property firm that com-<br/>
		bines a remarkable background<br/>
		and experience with a fresh ap-<br/>
		proach to the IP law practice in<br/>
		Mexico and Latin America, dealing<br/>
		with both Industrial and Intellectu-<br/>
		al property matters.<br/>
		</p>
		<p>
		Based in Mexico City, we provide <br/>
		strategic advice for protecting,</p>
		</div>
		<div>		
		maintaining and enforcing your IP<br/>
		Rights in Mexico, Latin America<br/>
		and the Caribbean.<br/>
		</p>
		<p>
		We are specialists in advising how<br/>
		to register a trademark. Our expe-<br/>
		rience will help you to successfully<br/>
		register your trademark, obtain<br/>
		your patent or copyright in Mexico,<br/>
		Latin America and the Caribbean<br/>
		as well.<br/>
		</p>
</div>
		</div>


	</div>
</div>
 

<?php get_template_part( 'template-parts/slider', 'services' ); ?>
  
  


<?php get_footer(); ?>
