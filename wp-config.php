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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'fIe3B@2+8KsW^x^CL/08nLWit^HF4d$|j<^NXa9cuD%hH?^a.3;D?gwSuEPSvt5r' );
define( 'SECURE_AUTH_KEY',  'gY[|Os F(2P2_aWZv3PcW2X`o]+%V[`}gNVtLx|w(L(OU{8~v[4v4^N}65@Yjzil' );
define( 'LOGGED_IN_KEY',    '-i#Mp0&Gv<u7*le9l[0(,WnkO/QfoJeI,7J%D94#w(gv`vNy/UN$y}h9Pf/:$FWk' );
define( 'NONCE_KEY',        '<+vXLnp%/+fGSMCX)11q0|X4%b5h 1C6n*$usT5]xFN|S>]ZaK}&jEMD=?l2f`fc' );
define( 'AUTH_SALT',        'kP_]{*5-Ild^6`uCOMcP{3XGHCErH1ckkO/Q?TMls12GWP&QV?@aVn88H.K<EpRu' );
define( 'SECURE_AUTH_SALT', '>PR?(*NsC0~SQKe~$z[Uebo:M+LG^4m,)|Sw+ijqdIIN^Aa[saG2Y}8% 36amHEF' );
define( 'LOGGED_IN_SALT',   'bZr@F~@sNU;E@c*23+.WhUw%c3%{9,B^@bSr +XvQ!cA(-<I@%AW*`%?(#,g}E9w' );
define( 'NONCE_SALT',       '6<{67a5=h|%6JPJOh?$.7;$j~5aM!*?rG*)NkWh&TKh&yPCQM(%/j*H:ciy*)#z;' );

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
