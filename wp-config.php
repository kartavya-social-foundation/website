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
define('DB_NAME', 'kvsite');

/** MySQL database username */
define('DB_USER', 'kvsite');

/** MySQL database password */
define('DB_PASSWORD', 'Gctcd14d2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'bf]cHyhdjXE;(aS%j|E|Kcu-NZNa?!HmC8BA#5Z0oC+8zPj]LLaPm%5NDY(8-p.v');
define('SECURE_AUTH_KEY',  'e|R#5NE2W0_@j#6A:nD]sYQ/7@f81_{/]LmYwJPG/.v,K|=_*YV%U|yL%[gE9,SL');
define('LOGGED_IN_KEY',    'XE)6q7{Zr[iR.:OGEmxWDKXPDB@pj dLpf1h=r@W<=utr1xj_DH0qC9TKJ&&]a&|');
define('NONCE_KEY',        'V2l@PabRAM;$I`/.u:rP$I8lIbaCY2]Hw{$mwUME/Zui0jf]I&y`-^N:4]QSCfNo');
define('AUTH_SALT',        '7`8DB+8z:P>:kebGg~OR4^e/JCyqBx=AGh8GBxOeu,#F3`<S.kE+b`?e^wT^cH|z');
define('SECURE_AUTH_SALT', 'B..Ei=YsS_ cSNF&WUL4T`T:Q=x@o[:I{(n~Xba27A*E@#qFIr$G&:#>H3YYcab0');
define('LOGGED_IN_SALT',   '9`}/i/]eKB4g3zeR9e?W+F]4P=C3I73~8+^j9,Kd`l#[thZujaVF4-b&fKJd2v.&');
define('NONCE_SALT',       '9IIpI{JIA?tlkH!V?ZGvK@mIz+r,8r#JM6.F)f6XF/DT>#bmg,#]6&$xZ:nVsg9s');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
