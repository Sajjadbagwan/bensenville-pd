<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bensenville-pd
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-md-5 header-left">
						<div class="toggle-menu">
							<div class="toggle-line">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<span class="text">Menu</span>
						</div>
						<div class="main-navigation">
							<div class="menu-inner">
								<?php
								wp_nav_menu( array(
									'menu'        => 'Main_Menu_left',
								) );
								?>
								<div class="mobile-menu">
									<?php
									wp_nav_menu( array(
										'menu'        => 'Main_Menu_right',
									) );
									?>
								</div>
							</div>
						</div><!-- .main-navigation -->
					</div>

					<div class="col-md-2 logo-column">
						<a class="logo menu-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="svg" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" />
						</a>
					</div>

					<div class="col-md-5 header-right">
						<div class="main-navigation">
							<?php
							wp_nav_menu( array(
								'menu'        => 'Main_Menu_right',
							) );
							?>
						</div><!-- .main-navigation -->
						<div class="social-search">
							<div class="social">
								<a target="_blank" href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a>

								<a target="_blank" href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>

								<a target="_blank" href="<?php echo $twitter; ?>"><i class="fa fa-youtube"></i></a>

								<a target="_blank" href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a>



							</div>
							<div class="search-box">
								<input type="text" name="" class="form-control">
								<i class="fa fa-search"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>
		<div id="content" class="site-content">