<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Metro_News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	

<!-- sdfgfs -->
	<?php wp_head(); ?>

<style>
	.site-header{background:#282828 url(<?php echo get_header_image(); ?>);}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'metro-news' ); ?></a>
	<div class="top-bar">
	<div class="row">
	<div class="medium-12 columns">

<nav  data-topbar role="navigation" data-options="is_hover: false">
				<button class="trigger"><i class="fa fa-bars "></i> <span><?php esc_html_e( 'MENU', 'metro-news' ); ?></span></button>
		<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
		
		
		<!-- <div class="top-bar" id="main-menu">
<ul class="menu vertical medium-horizontal expanded medium-text-center dropdown" data-responsive-menu="drilldown medium-dropdown" role="menubar" >

</ul>
</div>-->
		</div>

  </div>
</div>

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="site-branding medium-4 small-12 columns">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<div class="medium-8 small-12 header-banner columns">
				<?php if ( is_active_sidebar( 'header-banner' )  ) : ?>
					<?php dynamic_sidebar( 'header-banner' ); ?>
				<?php endif; ?>
			</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content row">
