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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'uTt> rS+uS%6Y=?N&*lK69  .]_ulb51fRi.<T2ta_g3wEqzMt~36DKIB#qE~hQy' );
define( 'SECURE_AUTH_KEY',   'F*q] ,$.%*iKJ(SOD,z2u!wktg]E#Z)xM9ii[XHuM%%R-0i_-t-&9!0i`>]7+&)>' );
define( 'LOGGED_IN_KEY',     'Vwj.X:h$:k ;X*yk9@d;!whQq-NmU^9S[@B*jS@{kFd/?)cBx1D`I%FZ5m8).A9>' );
define( 'NONCE_KEY',         'BNuyLe{(V1 ^mq:`zT+t! lws_X4&%ncz)2yovmu|JGa;b13&&(/76XMQV2 903X' );
define( 'AUTH_SALT',         'H(?aoEQo}34bn}3XOc_OG8lr~3&A>%ZA5?/y4KF1`};z;,VvIpqU$: vhjMCOd?z' );
define( 'SECURE_AUTH_SALT',  'Z7uu;96ISA=9% -TRkSL-/S5~L=VkMG@]0.)rFdf8#M!O4kzS&qIsQJZ<:Q5I=m~' );
define( 'LOGGED_IN_SALT',    '6:tZN|5rzOpT&ez450b 9iH)j$xRsh3fJr_i[cD(lWO5=U<v5}yUz,Zhu]CA.y&!' );
define( 'NONCE_SALT',        'z`X<dj`~nDk}ttmrYk1ehU k6Lamfm!j^e&9!,s}OvfQYJ,sZt_RQ:PV-wg|<jF$' );
define( 'WP_CACHE_KEY_SALT', '/&5Tlk5OX.Ej&T,!5i 9wm]91|]*G`PkqK#9i}s6On<6Z*X$fcO;e&V?5F{_6V+r' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
