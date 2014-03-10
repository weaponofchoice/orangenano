<?php
/**
 * The Header for orangenano
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package orangenano-theme
 */
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
 	<title><?php wp_title(); ?></title>
 
    <!-- META TAGS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Keywords">
    <meta name="author" content="Name">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!-- LINK TAGS -->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
	
	<!-- Typekit fonts: 'Proxima Nova' -->
	<script type="text/javascript" src="//use.typekit.net/iqd5tvm.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 
    <!-- TITLE -->  
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
     
    <!-- WP_HEAD() -->
    <?php wp_head(); ?>
      
</head>

<body <?php body_class(); ?>>	
	<header id="top">
		<div id="menu" class="row">
			<div id="wrapper_button">
				<a id="scrollbtn"> 
					<span></span>
				</a>
			</div>
			
			<div id="logo"><a href="<?php echo home_url(); ?>"><img src="content/themes/orangenano/img/logo-small.svg" /></a></div>
			<?php wp_nav_menu( 'main_menu' ); ?>
		
			<ul id="menu-small" class="menu">
				<div id="logo"><a href="<?php echo home_url(); ?>"><img src="content/themes/orangenano/img/logo-small.svg" /></a></div>
				<li id="icon-menu"><a></a></li>
			</ul>
		</div>
	</header>

	<div id="menu-small-nav">
		<?php wp_nav_menu( 'main_menu' ); ?>
	</div>
	
	<div id="container">