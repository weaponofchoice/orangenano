<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */


/*
 * General theme configuration settings
 */

// Add support for post-thumbnails
add_theme_support( 'post-thumbnails' );

// Add support for automatic RSS feed links
add_theme_support( 'automatic-feed-links' );

/**
 * Remove unused items from Admin
 * Add as many items as you like to hide to the $restriced array
 */

function remove_menus () {
global $menu;
	$restricted = array( __('Links') );
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');

/**
 * Purge Custom Post-types from cache after update
 */
add_action( 'edit_post', 'w3_flush_page_custom', 10, 1 );

function w3_flush_page_custom( $post_id ) {
	if ( function_exists('w3tc_pgcache_flush' ) ):
		w3tc_pgcache_flush();
	endif;
}

/** 
 * Cleaner image captions
 */
add_filter( 'img_caption_shortcode', 'cleaner_caption', 10, 3 );

function cleaner_caption( $output, $attr, $content ) {

	/* We're not worried abut captions in feeds, so just return the output here. */
	if ( is_feed() )
		return $output;

	/* Set up the default arguments. */
	$defaults = array(
		'id' => '',
		'align' => 'alignnone',
		'width' => '',
		'caption' => ''
	);

	/* Merge the defaults with user input. */
	$attr = shortcode_atts( $defaults, $attr );

	/* If the width is less than 1 or there is no caption, return the content wrapped between the [caption]< tags. */
	if ( 1 > $attr['width'] || empty( $attr['caption'] ) )
		return $content;

	/* Set up the attributes for the caption <div>. */
	$attributes = ( !empty( $attr['id'] ) ? ' id="' . esc_attr( $attr['id'] ) . '"' : '' );
	$attributes .= ' class="wp-caption ' . esc_attr( $attr['align'] ) . '"';

	/* Open the caption <div>. */
	$output = '<div' . $attributes .'>';

	/* Allow shortcodes for the content the caption was created for. */
	$output .= do_shortcode( $content );

	/* Append the caption text. */
	$output .= '<p class="wp-caption-text">' . $attr['caption'] . '</p>';

	/* Close the caption </div>. */
	$output .= '</div>';

	/* Return the formatted, clean caption. */
	return $output;
}

/**
 *	Remove nasty p's around img tags
 */

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/**
 * Enable custom menu support
 * Customize to your needs
 */

if( function_exists('register_nav_menus') ):
  register_nav_menus( array(
		'main_menu' => 'The main menu',
		'sub_menu' => 'A submenu'
		));
endif;

/*
 * Hide password protected posts everywhere
 */

 // Filter to hide protected posts
function exclude_protected($where) {
	global $wpdb;
	return $where .= " AND {$wpdb->posts}.post_password = '' ";
}

// Decide where to display them
function exclude_protected_action($query) {
	if( !is_single() && !is_page() && !is_admin() ) {
		add_filter( 'posts_where', 'exclude_protected' );
	}
}

// Action to queue the filter at the right time
add_action('pre_get_posts', 'exclude_protected_action');

/**
 * Custom image sizes
 * add_image_size( $name, $width, $height, $crop )
 */

add_image_size( 'homepage_thumbnail', '', '150',  false);

/**
 * External scripts
 */

// Some custom settings for the_excerpt
// Adding Foundation classes
add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="medium-12 columns"', $excerpt);
}

// Controlling the length
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Creating the 'read more' link
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('...', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function enqueue_theme_scripts() {
  // Unregister standard jQuery and reregister as google code.
  wp_deregister_script('jquery');
  wp_register_script( 'jquery', 'http://code.jquery.com/jquery-latest.min.js', null, false, true );
	wp_enqueue_script( 'jquery' );
	
	if( WP_DEBUG ):
		// Plugins
		// For example:
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', 'jquery', false, true );
		wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/vendor/jquery-ui-1.10.4.custom.min.js', 'jquery', false, true );
		wp_enqueue_script( 'imagescroll', get_template_directory_uri() . '/js/vendor/jquery.imageScroll.min.js', 'jquery', false, true );
		wp_enqueue_script( 'royalslider', get_template_directory_uri() . '/js/vendor/jquery.royalslider.min.js', 'jquery', false, true );
		wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/vendor/waypoints.min.js', 'jquery', false, true );
		wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/js/vendor/gmaps.0.4.8.js', 'jquery', false, true );
		
		wp_enqueue_script( 'init-imagescroll', get_template_directory_uri() . '/js/init-imageScroll.js', 'imagescroll', false, true );
		wp_enqueue_script( 'init-royalslider', get_template_directory_uri() . '/js/init-royalSlider.js', 'royalslider', false, true );
		wp_enqueue_script( 'init-gmaps', get_template_directory_uri() . '/js/init-gmaps.js', 'gmaps', false, true );
		
		wp_enqueue_script( 'height', get_template_directory_uri() . '/js/height.js', 'jquery', false, true );
		wp_enqueue_script( 'accordionjs', get_template_directory_uri() . '/js/accordion.js', 'jquery-ui', false, true );
		wp_enqueue_script( 'scrollto', get_template_directory_uri() . '/js/scrollto.js', 'jquery', false, true );
		wp_enqueue_script( 'totop', get_template_directory_uri() . '/js/toTop.js', 'jquery', false, true );
		wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu-small-nav.js', 'jquery', false, true );
		wp_enqueue_script( 'touch', get_template_directory_uri() . '/js/touch.js', 'jquery', false, true );
		wp_enqueue_script( 'scrollbtn', get_template_directory_uri() . '/js/scrollbtn.js', 'jquery', false, true );
		wp_enqueue_script( 'init-waypoints', get_template_directory_uri() . '/js/init-waypoints.js', 'waypoints', false, true );
		
		// Classes
		// For example:
		// wp_enqueue_script( 'main-nav', get_template_directory_uri() . '/js/main-nav.js', array('jquery'), false, true );
		
		// Pages, Formats, Elements etc.
		// Scripts for pages, elements etc.
		// wp_enqueue_script( 'application', get_template_directory_uri() . '/js/application.js', array('jquery'), false, true	);
 	else:
		// All concatenated and compressed JS in one file:
		wp_enqueue_script( 'application', get_template_directory_uri() . '/js/app.min.js', array('jquery'), false, true	);
 	endif;
}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

?>