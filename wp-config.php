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
define( 'DB_NAME', 'hcilecommerce_db' );

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
define( 'AUTH_KEY',         '25+*)rb@s<D$PR_ylAYb~bC8NG9/ M_I(%U|+RS*XlSU>W@h_U>{O3Gldyz^uvMW' );
define( 'SECURE_AUTH_KEY',  'VC{VdEWRpqVlpZ?XVS~qp,[l!qpZV)+}Z*F0b2rMg+ai K3-f@3hr3#M7Q!6hWXK' );
define( 'LOGGED_IN_KEY',    'y/1!cKBX~x_p#k-mJ5Oh]-*OrdeqEp7cR]4/vg1:=}[cND[ }&?/Y#?a3?TeId-f' );
define( 'NONCE_KEY',        '[,s;}S,[3A`M*FrX{58~+_I%f 547ad!,ab+ECj;$}M{tLl YtQpVa2/2N#+s--u' );
define( 'AUTH_SALT',        '%t`R8F{G-vH*4:@bUM]!G*}3;.9(}PP#G%r*iS,OAt^wEpdC{)et~.=x2)0,8]m+' );
define( 'SECURE_AUTH_SALT', '^4.L`hRlOo5^8ligD6=*g&AN4e=<b2j|xc(8qy5{fw|)4!0qL=s5;+x6_X66X%I)' );
define( 'LOGGED_IN_SALT',   '&lTnqUEohGx[b<=O<Q=}>B.V97);2Dsp;V=eB^EKZpM+q_zME_bE7PU%(G$Bm/)>' );
define( 'NONCE_SALT',       ':CVZt>9mGfI!;mvK/)#nJ/jf}fDAH:zx}s:Ql8$sKCs3lj3T3Lv5/Z>2~(@bOWUs' );

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
