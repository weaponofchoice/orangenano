<?php
// ===================================================
// Activating multisite
// ===================================================
define( 'WP_ALLOW_MULTISITE', true );

// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else { // Server settings
	define( 'DB_NAME', 'YOUR_DATABASE' );
	define( 'DB_USER', 'YOUR_DATABASE_USER' );
	define( 'DB_PASSWORD', 'YOUR_DATABASE_PASSWORD' );
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
}

// ================================================
// Custom Content Directory
// ================================================
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// Custom Uploads Directory
// ================================================
define( 'UPLOADS', '/media/uploads' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// Be sure to change these to your own
// ==============================================================
define('AUTH_KEY',         'VvsV1*Z38zz}Ae+T|SGUE!S|Eo2Ekj#;}7yx]&2nEupK|-u-dx-xJN*fue-~Zu;@');
define('SECURE_AUTH_KEY',  '`b: 4F pUQ9cmI+N4j~x$|R^LiDrY!VH?7/l6.BE4)J#]0~xhH%`5+o+e8Qc-*r^');
define('LOGGED_IN_KEY',    'aXKt^CCj@mazD71q(b!FDat5n~klZ;XNk>m0aQnarN|_N,Tf=n|/f<od?`p7F^%h');
define('NONCE_KEY',        'E&q!cx@mGe4PvZ:>v5]w6^Y!f}s<(n eERcgn)[[#FbHg3iLucFy,+9>45[3g~#h');
define('AUTH_SALT',        ',_Ny^<GmT/OJg:B*:h`Q4A#S3mg/Uh+wt:S!AaEZ{b/ccldqa|*B A$+dVcw],yx');
define('SECURE_AUTH_SALT', ']`^^-d;NXW _c|%J@Jd^f5*E9>@3%M?ydly-jC8-yr p4~iHq+Q5;M.IW<8(%Q}v');
define('LOGGED_IN_SALT',   '~YaIE8zGrii6JjIR)S;C%r#|-U$MSGT_Z@VI-OwfPRa36vOL4M iz7d[Re<|R3e~');
define('NONCE_SALT',       'DJhcu+6.;yOl sK%IhTY5&5CT=<21;P*U#sk]Mv-As.wdHjeq5^[Z;x_R0-kRm5z');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ==============================================================
// Force site urls for 'easy' dbdumping
// Don't forget to add local settings in local-config.php
// ==============================================================

define( 'WP_HOME' , 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL' , 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress' );

// ================================
// Language
// Remove this for the default: American English
// Add language files to content/languages
// ================================
define( 'WPLANG', 'nl_NL' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Serversided debugging? Enable these.
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
require_once( ABSPATH . 'wp-settings.php' );
