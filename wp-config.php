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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0-!OjP!&Bu:=,}KU4iZ#|ch5`[IqD3UPM)=;%.BN<HUU7[>}qqINJu$NjUbP?9a4' );
define( 'SECURE_AUTH_KEY',  'I!HZ6n@~FmptpMY!Fz^yvz[G%;StiGSM~BV1K(:|$Sk?.HIM6(rnKAUjWTU>g4k]' );
define( 'LOGGED_IN_KEY',    'IaO_9t[GIcA8:yb%4+gogyC#&!>>GL+]-s`0tZ<,If1j{(I2idq#nfVa*q/y:?Wf' );
define( 'NONCE_KEY',        'F_*Ye.m:=l~WG|iqLqXnCD+5u5Wy7IjbNXk)bC.P7 +/LTZX&Zrk,V;*;,GBcB[4' );
define( 'AUTH_SALT',        'p2kCBsz<z2id784DI;ruN{@WbD+m2pi=2f+_g<juF9sK/xV-{T~m$2+gwT#8/1*&' );
define( 'SECURE_AUTH_SALT', '[H6IS{iS0v;HdNh}C=H7fF!enN6bi#K4i}vuK&O.v<9/G0T/l#<Z(jZUDrx6_fW$' );
define( 'LOGGED_IN_SALT',   '@wc%|4M!aGWH7Y&WJ}g~tq~27)YA{?c:m#FE#nQ:_11}E% iRH_+tx.+[4YEfB_c' );
define( 'NONCE_SALT',       ':XZgNk?f#Z[:U%)-T:Ru-|[H{DE)|dh|K-IS1s3]t(j%yMM|Ca0k_Wn455DrU$ud' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
