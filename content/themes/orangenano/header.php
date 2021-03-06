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

<body <?php body_class(get_the_title()); ?> id="<?echo get_the_title(); ?>">
	
	<?php
	global $post;
	
	if ( is_page( 'reseller' ) ||  $post->post_parent ) {
	?>
	<header class="<?php echo $page_id; ?> top reseller">
		<div class="menu row">
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-small.png" /></a></div>
			<li><p><?php echo the_title(); ?></p></li>
			<li><a href="<?php echo home_url(); ?>">Bezoek de Orange Nano website</a></li>
		</div>
	</header>
	<?php
	} else {
	?>
	<header class="<?php echo $page_id; ?> top">
		<div class="menu row">
			<div class="wrapper_button">
				<a id="scrolldown" class="scrollbtn"> 
					<span></span>
				</a>
			</div>
			
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-small.png" /></a></div>
			<?php wp_nav_menu( 'main_menu' ); ?>
		
			<ul class="menu menu_small">
				<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo-small.png" /></a></div>
				<li class="hamburger"><a></a></li>
			</ul>
		</div>
	</header>

	<div class="menu-small-nav">
		<?php wp_nav_menu( 'main_menu' ); ?>
	</div>
	<?php } ?>
	
	<div id="container">