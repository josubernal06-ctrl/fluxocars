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
define( 'DB_NAME', 'u724444284_d7t6V' );

/** Database username */
define( 'DB_USER', 'u724444284_AsyAn' );

/** Database password */
define( 'DB_PASSWORD', 'MA5xRuRexm' );

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
define( 'AUTH_KEY',          'OAEi5:9 (ro;z;jmuy^L+$jrvS<+0Qf,`]v<B%:9DiY|Q@_m]Uw*rnITUH!LAzfu' );
define( 'SECURE_AUTH_KEY',   'geNWK?y@*yB~R-=~DR^zmAANLJ?>zPS|d?>D3dGEAM,)bOBEUBE}^zgwME:i[&^<' );
define( 'LOGGED_IN_KEY',     'M71Kb=f62CS<?YW7miPe7dHfi&w`fbJ*`hkr,zf4.F_cU4R9sm6,rk#81P$~^Z4;' );
define( 'NONCE_KEY',         'dPGjm],JFrw&dSZ]-.xOxjP2l?wi~OL2+BXRNUR|qm8G$+1:pYtf=IeT2qmfZ[|J' );
define( 'AUTH_SALT',         'nWe!V6Lb^7g#-!m{9}x$*@>F[.8CKz<mI,*[_3nZv$.#-S*.1V|-9&Gc/@9s9HD}' );
define( 'SECURE_AUTH_SALT',  'aC uN[jOC87L6}+Y9R_$P*X^de7iF]A`UmUnR`l~d{poE|%1Q:f@GWB2&9/,TK_)' );
define( 'LOGGED_IN_SALT',    '56Ig_)3]@QWltBUyL{C!3<&q{SH1jAZKt{X)J#m7o%2S@`a(Zeu-GnqRH{1z1~mX' );
define( 'NONCE_SALT',        'Dl}%w[u>^;%8B1xKVVL6*vr6_;jMMD.^RFl o>!K)hZzA~LXm f;$x[3)LUU,rbV' );
define( 'WP_CACHE_KEY_SALT', '7|L]?5EYFJbCl/7Lil{HTT6,@(E/>H7evOKx0T6%`gMg*uMmoG67w)2@i%w246xY' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '323a7a8e4497a72398a11847161fd28e' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
