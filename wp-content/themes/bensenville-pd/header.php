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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fevicon.png" type="image/icon" />


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
								
								<i></i>
								
								<!-- <i class="fa fa-bars"></i>
								<i class="fa fa-close"></i> -->
							</div>
							<!--							<span class="text">Menu</span>-->
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
							<img class="svg" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" />
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

						<?php

						$facebook_link = get_field('facebook_link','option');
						$twitter_link = get_field('twitter_link','option');
						$youtube_link = get_field('youtube_link','option');
						$instagram_link = get_field('instagram_link','option');
						?>
						<div class="social-search">

							<div class="mobile-search">
								<i class="fa fa-search"></i>
							</div>
							<div class="social">
								<?php if(!empty($facebook_link)){?><a target="_blank" href="<?php echo $facebook_link; ?>"><i class="fa fa-facebook"></i></a><?php } ?>

								<?php if(!empty($twitter_link)){?><a target="_blank" href="<?php echo $twitter_link; ?>"><i class="fa fa-twitter"></i></a><?php } ?>

								<?php if(!empty($youtube_link)){?><a target="_blank" href="<?php echo $youtube_link; ?>"><i class="fa fa-youtube"></i></a><?php } ?>

								<?php if(!empty($instagram_link)){?><a target="_blank" href="<?php echo $instagram_link; ?>"><i class="fab fa-instagram"></i></a><?php } ?>
							</div>
							<div class="search-box">
								<form class="search" method="" action="<?php echo home_url( '/' ); ?>">
									<input type="text" name="s" class="form-control">
									<input type="submit" name="" value="" class="search-btn">
									<!-- <input type="submit" name="" value="" class="search-btn mobile-search-btn"> -->
									<!--									<i class="fa fa-search"></i>-->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>
		<div id="content" class="site-content">
