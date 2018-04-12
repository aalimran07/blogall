<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogall
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blogall' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-right">
					<div class="site-branding">
						<?php if (class_exists('Redux')): ?>
							<img src="" alt="">
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-4 text-right">
					<div class="social-link-top">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-google-plus"></a>
						<a href="#" class="fa fa-pinterest"></a>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-12 text-center">
					<nav class="navbararea">
						<div id='cssmenu'>
							<?php
							wp_nav_menu( array(
								'theme_location'  => 'menu-1',
								'container'	=>	'ul'
							) );
							 ?>
						</div>
						<div class="searchbox">
							<form action="<?php echo esc_url(home_url('/'));?>" method="get">
								<button type="submit" class="fa fa-search"></button>
								<input type="text" name="s" value="<?php echo get_search_query();?>">
							</form>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
