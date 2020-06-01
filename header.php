<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elamentor_eCommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'elementor-commerce' ); ?></a>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="site-wrap">

					<header id="masthead" class="site-header">
						<div class="header-top">
							<div class="row">
								<div class="col">
									<i class="fa fa-home">1992 Welcome to site</i>								
								</div>	
								<div class="col col-auto top-menu">
									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'top-menu',
												'menu_class'	 => 'top-menu'
											)
										);
									?>
									
								</div>			
							</div>
						</div>

						<div class="main-header">
							<div class="col">
								<div class="col-lg-2 d-flex justify-content-between">
									<div class="site-branding">
										<?php

										$custom_logo_id = get_theme_mod( 'custom_logo' );
										the_custom_logo();
										if(!empty($custom_logo_id )): else: the_custom_logo(); ?>
											<h4><?php echo bloginfo('name');?></h4>
										<?php endif; ?>									
								</div>
								<div class="main-menu ">
									<div class="col-lg-8 ">
										<?php
											wp_nav_menu(
												array(
													'theme_location' => 'menu-1',
													'menu_class'	 =>'main-menu d-flex'
												)
											);
										?>										
									</div>
								</div>
								<div class="col-lg-2 text-right">
									<div class="header-right-icons">
										<span class="serach-tigger"><i class="fa fa-search"></i></span>
										<a href="" class="cart-icon"> <i class="fa fa-shopping-cart"></i></a>			
									</div>										
								</div>
							</div>								
						</div>
