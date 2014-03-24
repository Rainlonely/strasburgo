<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'strasburgoDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Lp| AjT+BL~+G>qvkmpK#B,Oj(va$B |6/+`?X#ukd>:8M:D3n|Tv0hX=oWl|pkv');
define('SECURE_AUTH_KEY',  '?KmV!8LTF+k|+cE)}QYz&TKfbH7@,:&*oa!0B^OJv?-D+H*Hz_|Z@Ts]u6hMrA77');
define('LOGGED_IN_KEY',    'nP+VRCFJGce1~?C4_Y/H-=<=<b?,b2Ge`a,uoklqr*^^O`IRkVGfa!|bO^KZ*|1l');
define('NONCE_KEY',        '$q$f%NUd83KUtCAt &-pDO|s7{K5cjDCXdq`<)S_YR;1|<|-T])iN!Yml*?+u_r}');
define('AUTH_SALT',        '%XeazB_@Vs~sBflMI5wN7W420A|Z.LPdhP@@<<b[cA%:[.|:rapVSi/SNjGfzfky');
define('SECURE_AUTH_SALT', '{+/752WC2@C;->A1(SjGi%FlT1ZT _@-S)YO6am+(5iE)]RgxM^$&3|Tr3zHN&25');
define('LOGGED_IN_SALT',   'GF:$Y+--<hY}1c[Bap8I:znFC%A.+hl|AD*CoUshlJF/*T:4d.EYcMRLT- 8krhN');
define('NONCE_SALT',       '`.g|7L-7yPgsQEuY1Ljm>e3y(;X1@_P>M^V3-}|M]Q.-$x?A6``(cj|-PT+GM!BP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'zh_CN');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
