<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package Quark
 * @since Quark 1.0
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta http-equiv="cleartype" content="on">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed site">

	<div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'quark' ); ?>"><?php esc_html_e( 'Skip to main content', 'quark' ); ?></a></div>
	<div id="site-socialmedia">
		<div class="site-header row">
			<div class="col grid_12_of_12">
				<ul class="redes_sociais_header">
					<li><a href="<?php echo esc_url( home_url( '/' ))."/sobre/"; ?>">Sobre a Hai Shop</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."/minha-conta/"; ?>">Minha Conta</a></li>
					<li><a href="<?php echo esc_url( home_url( '/' ))."/contato/"; ?>">Atendimento</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="headercontainer">
		<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<div class="col grid_4_of_12">
					<h1>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
							<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_haishop.png"; ?>" alt="" />
						</a>
					</h1>
				</div> <!-- /.col.grid_5_of_12 -->

				<div class="col grid_6_of_12" style="padding:15px 0">
					<?php get_search_form(); ?>
				</div> <!-- /.col.grid_7_of_12 -->
				<div class="col grid_2_of_12" style="padding:15px 0">
					<ul class="cart-item">
						<li>
							<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/botao_carrinho.png"; ?>" alt="" />
						</li>
						<li style="width:60%; padding-top:5px">
							<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> </a>
						</li>
					</ul>
				</div>
			</div>
		</header> <!-- /#masthead.site-header.row -->

	</div> <!-- /#headercontainer -->
	<div id="menucontainer">
		<div class="row site-header">
			<div class="col grid_12_of_12">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h3 class="menu-toggle assistive-text"><?php esc_html_e( 'Menu', 'quark' ); ?></h3>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'quark' ); ?>"><?php esc_html_e( 'Skip to content', 'quark' ); ?></a></div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav> <!-- /.site-navigation.main-navigation -->
			</div>
		</div>
	</div>
	<div id="maincontentcontainer">
		<?php	do_action( 'quark_before_woocommerce' ); ?>