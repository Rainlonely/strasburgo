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
define('DB_NAME', 'sb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+XdUyPz=Py@)D i}qp9lUUTaGxy6PGN+(Y2Yn#os=i,t6Vg~a)yr]wL)T~b5EKTB');
define('SECURE_AUTH_KEY',  'Xm&Pd^C*%+^#2`,~&(LNCGB7z<1PKw]c?]lj~9Iui7,$_*oy<+O=|`A9.jvIQV4 ');
define('LOGGED_IN_KEY',    'BM-kTOG<-d08Ec7/cgO9j21-gOjA]|py@d-ctb5?UitNrMRI4lJ/& @qNBWnmBFP');
define('NONCE_KEY',        '[]-<v2rE$wF|^#f`j!4C=0j9)/6!qrtRve|%Y4e>To-x}}uHC+NaQC1ZdBM<G8:a');
define('AUTH_SALT',        '%l:J0Hi-`d{a2<`j(Dfs+K||:HB/ojzG9wKzl|L!m+f+4~&3A1<Axpp~0%UF7yGQ');
define('SECURE_AUTH_SALT', '3<S&85:52uFN>{eubI#$k d#H2^{=DCNf&xhch4gM6_AIhgAMAI5LjIf6$-Nfj4=');
define('LOGGED_IN_SALT',   'T/}0Dy?zG>}8-7U6wZ?s)_Arpt#hE_>Et?4Dx,u0Gxq>ty OFD@p|Oeq|ymkwIlA');
define('NONCE_SALT',       'zl|v=us]e6T;-R]I(_.t;Jl{7/n<,o,sQ{5icS^XS1!M`k:Gn0W0+{[FG7iWa~``');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sb_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
