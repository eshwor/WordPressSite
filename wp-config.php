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
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@F4}SWWC|$!b&K|Z0hX@p`l o(Ru^%/8rtL[[(bq>yO]GN(>u!ULHjS8I8PLHc4?');
define('SECURE_AUTH_KEY',  'Kmjp@c*DSrW;2FuEga%J/`N:q%e)]dHp7:HZICgIs:$_IJRpt$/xajO4cT7;uhJ&');
define('LOGGED_IN_KEY',    'iH)0p8h((=5oBG*rtA~f(2=0e3xxjW%prAR}{-,p;y6g(+:~7_wLY&v5[]hAwb|}');
define('NONCE_KEY',        '0QXx!PI[+!UFO-!b0T>KBmaMyXVQiiY)PFKlO~WZ9G/6,V gmR7fgtyv<L/i4j~w');
define('AUTH_SALT',        'H61 Uz390~qE )_ns6mu0aoYn+F|G~V`]9U:l<b7|^V<xrgo]Y-8=}OK`&v,g8nQ');
define('SECURE_AUTH_SALT', 'yygFp`n> ]ymJBJ} Z?I(h,EQAt!~!8ZU!b<4>pt~>jTff}h_#oWOU}T?XTXt.HE');
define('LOGGED_IN_SALT',   'nx_P6P@_0Qo<Vbt&=E!.3.VcrP9Y)F>8^q}*Fv2)F&NI%&i?b>vu*LiB2tT5r2`d');
define('NONCE_SALT',       'r:BCLZt|tn1+.fv,mI;Ep/yQ]lR+D!K[AT(*r;<3_}e^hW53nWrW_d;^EN6BJ;ra');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
