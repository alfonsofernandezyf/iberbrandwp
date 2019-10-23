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

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	    <nav class="navbar navbar-expand-lg navbar-trans bg-trans"> <!-- NAV -->
				<div class="header-grid"> <!-- HEADER GRID -->
				
					<div class="logo-div"> <!-- LOGO DIV -->
						<a class="logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php 
								echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
								// bloginfo( 'name' ); 
							?>
						</a>
					</div> <!-- END LOGO DIV -->
					
					<div class="chat-menu "> <!-- LOGO DIV -->
						<a class="chat-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src='/wp-content/themes/iberbrandwp/img/chat.svg'/>
						</a>
						<a class="chat-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src='/wp-content/themes/iberbrandwp/img/corazón.svg'/>
						</a>
					</div> <!-- END LOGO DIV -->


					<?php languages_list_header(); ?> 
				
					<div class="social-menu d-none d-md-block"> <!-- SOCIAL MENU -->
						<ul>
							<li>
								<a class="social-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src='/wp-content/themes/iberbrandwp/img/facebook.svg'/>
								</a>
							</li>
							<li>
								<a class="social-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src='/wp-content/themes/iberbrandwp/img/linkedin.svg'/>
								</a>
							</li>
							<li>
								<a class="social-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src='/wp-content/themes/iberbrandwp/img/twitter.svg'/>
								</a>
							</li>
							<li>
								<a class="social-icon" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src='/wp-content/themes/iberbrandwp/img/instagram.svg'/>
								</a>
							</li>
						</ul>
					</div> <!-- END social menu -->

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
