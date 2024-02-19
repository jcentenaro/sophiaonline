<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db6mo568u8lzwi' );

/** Database username */
define( 'DB_USER', 'uzlh0rrjjhuxg' );

/** Database password */
define( 'DB_PASSWORD', '9qmfdtagcaqp' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/MMeTU#&?NI|dML2Uq@%6mfJg8&JU?jF/LwXwuSP6OmqI^fiBT)u1ak0tL|WNbMx');
define('SECURE_AUTH_KEY', '?/ReGV1edR5^S@je;s:W*#q:?R"X#"K$^pIA%m7bc|_?32p^&PWD6h7hhB)A)xbB');
define('LOGGED_IN_KEY', 'CGNxC+o(lUIobP%~(JN%RUp*PooLQq|o6s#5;!;c`9cc~;DtHKrIsz@n5dOM@K+a');
define('NONCE_KEY', 'hkB(VaCa%Hq_vcX`B*+6t(oD8nAt;vEOXktCVVvK^Z9cm;9r:/W^wrHQSN+o;Cmi');
define('AUTH_SALT', '|@(bsJazZ&~0aH^uUcffT&v^/&r*l4P68KXnXB?u/"c|HD/09J8hI~$+x^(zgn($');
define('SECURE_AUTH_SALT', 'qLidBbrI:B)UL3S_fcXLVOlxQ2cjjNNP~E6(!Ilp7Jr?q;DxYJ9n/B49|K%;e1fP');
define('LOGGED_IN_SALT', '$g@Z&Nw%4tZvc1J|WGVObJv(Vd42RMa8&S*NE^MUvrW9+Y_&5f~h`r6+b|@0YdLY');
define('NONCE_SALT', 'kufFN$vx37IDq7*tFWUHTHy99hNY97L`@:gNmxYwye2Mjx@3q(uqHGv8g57Pp)&d');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ab78uf_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );


define('WP_HOME', 'http://carolinaa8.sg-host.com/');
define('WP_SITEURL', 'http://carolinaa8.sg-host.com/');

define('WP_POST_REVISIONS', 10);
/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
//@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
//@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
