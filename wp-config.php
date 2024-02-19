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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '{V+}-D=,vq[7D0-Qf$1mn# feMi=hhq;Fb}yRN$~?Uq6qk;JK_sZX9|%J/!|8:<o');
define('SECURE_AUTH_KEY',  'yxxX8;oXp|<8&=%-7-O#V(y-;u6c{s;/cqdPiXti!:c#n^,>HsJa./sg#N]0OT3k');
define('LOGGED_IN_KEY',    'B{[sc5>[~[hc<+|1[4`u#}k;L[R/8>GOkIK|V,[,#?9L]hrdWcFQ-h}b`dsd+ c|');
define('NONCE_KEY',        'Y.3^Cq4xHhE.:xoaG660Hx;on|/T=*p0WqJ9h)b-)G@-,.L;d|Uq32eVq#pXg@2+');
define('AUTH_SALT',        'z_X$Kn<t zfjz?&)I9|5%7+sEE~Y-X/A&U9+`J-C0TRQap#J|{2Hk0xY*-NHEXV$');
define('SECURE_AUTH_SALT', 'ZLdEjW7J0-N{}YPPv!1=.?P+uzR*MAs9%3956@O?4Sq-+{Uegz;YU XAo56($^(S');
define('LOGGED_IN_SALT',   '6isV+HFm4~4%=}G|?H_cq].Dvh7#aD=7gs`*=Nwc?|HO7-6[F F3&7Wf6{8/:0>K');
define('NONCE_SALT',       '&EE$1V}V5ePwIi>5hMOGPDF+a1-qq=ege*VKYQS|1+29_--|[0}4f=!sU.oRe6+u');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
