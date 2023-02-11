<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u878142031_uen24' );

/** Database username */
define( 'DB_USER', 'u878142031_dqiKQ' );

/** Database password */
define( 'DB_PASSWORD', 'qKA6GzxMf2' );

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
define( 'AUTH_KEY',          'A-R$QgOl bIA1sAiJwp#yHP}ANwYHFb>O2zwM`YjYIA2`mzgD_2~1!F&xuyA(W,Z' );
define( 'SECURE_AUTH_KEY',   'wfhYNWP1@_f^p!cs_T A4~>6&^8IA?LZ4B|KI2fLyro:|kD=m2EPd/,q:-{R9wm~' );
define( 'LOGGED_IN_KEY',     ':2KlVS.J%_|9E.YN?kwDp5a/M(b7tao ~?D6{;FOgX-NKOAg>=lW[cV$Do[v.3g&' );
define( 'NONCE_KEY',         ',{U}cfJyhKEePJyWhIA9e)l1!a=+U!)x|=Tm!ivBu<{Gftema4,E+:faejHuuByu' );
define( 'AUTH_SALT',         'B!>aPuNp~W6vUBBVvvSn ;zRi,Xx@=(~@o eVl5<?q,JHR{8ErB)&zp%/1H+q`>1' );
define( 'SECURE_AUTH_SALT',  'w*sKZr:#^kn?@`uQ7 MrotuX23m~U9TOFi.XO _13P80]k89{q7x>ha$DoNS`VV_' );
define( 'LOGGED_IN_SALT',    '-xyLojcD>,g+&a,UTU3]|>*HKj18RYQ9M.]:rJ=n&u<w{%oYf6GSHWqp(~Rs.)~W' );
define( 'NONCE_SALT',        '%(N?NZo^Go*`b%4m`h0OOI8yF,!9W6!es&Q*Rc42Ju?:Gm5SctWZ@pcZzoeg!r[<' );
define( 'WP_CACHE_KEY_SALT', '8tLVpRDGS-cN)m{W7M,[ixHcc4zm`Q}d@^5=weiu:IwV|=AWhoUuONnQ~h^*--I>' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
