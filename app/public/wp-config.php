<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
if (strstr($_SERVER['SERVER_NAME'], 'smartmarketing.local')) {
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	
}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZfayAL38eoEJQS97rC+YYknchKf0ViQcIJaymtf6Pb22J4F5iGnDizXbmt7pkzn8Ha1UP9JXpcuW5rwqTJHcWw==');
define('SECURE_AUTH_KEY',  '7AYD1yG8edrAU+Vybpnde2IMok4n6JcEaonfqx3oy6JGbD5PpYdKPkkX1eohw6ZPtLNdtS6tfvE2EF0VxoNoBQ==');
define('LOGGED_IN_KEY',    '6H90Ih3yn8cRw8Q1FcSHVp5BCnFAT6B3l1wkVkBMDRu3w+dXieKHSXZG1Clpg5BtT/AjoK4qhbEDZWO5cCPKyg==');
define('NONCE_KEY',        'C9nh722frWxNIfPa5SQV/qFPj/Ywcn8rJ5TKvfjMZh1/7Hn0mNKaF7eQXlo6DJf2Ffdy8obtFv07uYfSikkzAw==');
define('AUTH_SALT',        'gRIyHSJuVMJfMXs4Gc92spbaVPzi97MUhTN8JYtk1xNB2Jwbbib9sw2qgPjXnmFKri+/EO4Ox+XoFk3sPK6Z5w==');
define('SECURE_AUTH_SALT', '4I7Jp+e/ayn0TooXa82+Rcw0RUvXvAc6hRZFu55FeiThsc+um2prO3+p6HhHVb2TBpuy7PJ1Ub/Rj/hhhuA/Xw==');
define('LOGGED_IN_SALT',   '9EigMDJoFkn2IpGMnSNFP7qgILHZKXmZBidrYWxExc00xLfCVJtpUlsntDCkm4kVYKN9QdveXfSuaFWBMpjFYg==');
define('NONCE_SALT',       'WGF5uZtG396tBDyvGISpW69C7r1JOScrEr5MMkaZXg9tyDleJnI4i5pCrAFh2DcJomMPiccwkQuKCycEGcHpBw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
