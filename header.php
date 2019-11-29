<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaterialWP
 */


$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lightslider.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightslider.min.js"></script>  

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?> data-spy="scroll" data-target="#scrollspy" >
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	    <nav class="navbar navbar-expand-lg navbar-trans bg-trans"> <!-- NAV -->
				
				<div class="header-grid container"> <!-- HEADER GRID -->
				
					<div class="logo-div"> <!-- LOGO DIV -->
						<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php 
								echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
								// bloginfo( 'name' ); 
							?>
						</a>
					</div> <!-- END LOGO DIV -->
					
					<div class="chat-menu "> <!-- LOGO DIV -->
						<a class="chat-icon" href="https://meetings.iberbrand.com/" rel="home" target="_blank">
								<img src='<?php echo get_template_directory_uri(); ?>/img/chat.svg'/>
						</a>
						<a class="chat-icon" href="#" rel="home">
							<img src='<?php echo get_template_directory_uri(); ?>/img/corazón.svg'/>
						</a>
					</div> <!-- END LOGO DIV -->


					<?php languages_list_header(); ?> 
				
					<div class="social-menu d-none d-md-block"> <!-- SOCIAL MENU -->
						<ul>
							<li>
								<a class="social-icon" href="https://m.facebook.com/iberbrand/?locale2=es_LA" rel="home" target="_blank">
									<img src='<?php echo get_template_directory_uri(); ?>/img/facebook.svg'/>
								</a>
							</li>
							<li>
								<a class="social-icon" href="https://mx.linkedin.com/company/iberbrand-s--c" rel="home" target="_blank">
									<img src='<?php echo get_template_directory_uri(); ?>/img/linkedin.svg'/>
								</a>
							</li>
							<li>
								<a class="social-icon" href="https://twitter.com/iberbrand?lang=es" rel="home" target="_blank">
									<img src='<?php echo get_template_directory_uri(); ?>/img/twitter.svg'/>
								</a>
							</li>
							<li>
								<a class="social-icon" href="https://instagram.com/iberbrand_ip_law_firm?igshid=1jgajx21idki" rel="home" target="_blank">
									<img src='<?php echo get_template_directory_uri(); ?>/img/instagram.svg'/>
								</a>
							</li>
						</ul>
					</div> <!-- END social menu -->

				
					<button 			
						class="navbar-toggler navbar-toggler-right menu-button" 
						type="button" data-toggle="modal" 
						data-target="#navbarModal" aria-controls="navbarModal" 
						aria-expanded="false" 
						aria-label="Toggle navigation">
						<span class="menu-trigger"><i class="material-icons">bar_chart</i></span>
					</button>    <!-- MENU-BUTTON -->



					<div class="collapse navbar-collapse main-menu">
						<div class="collapse navbar-collapse" id="navbarNav">
							<?php
								$args = array(
								'theme_location' => 'primary',
								'depth'      => 2,
								'container'  => true,
								'menu_class'     => 'navbar-nav',
								'walker'     => new Bootstrap_Walker_Nav_Menu()
								);
								if (has_nav_menu('primary')) {
								wp_nav_menu($args);
								}
							?>

					</div>	 		<!-- END navbarNav -->
				</div>	<!-- END header grid --> 
		</nav> <!-- NAV END -->
	<!-- Mobile menu modal -->
		<?php get_template_part( 'template-parts/mobilemenu', 'modal' );?>
	<!-- Mobile menu modal END-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
