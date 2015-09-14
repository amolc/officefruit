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
define('DB_NAME', 'officefruit');

/** MySQL database username */
define('DB_USER', 'ftdev');

/** MySQL database password */
define('DB_PASSWORD', '10gXWOqeaf');

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
define('AUTH_KEY',         'S>g:Bf-L/Sa+|*H.5cN h@harV@|et:Ho*%o+LA-|<d,gm<C!%9m%sfg)% ZgBzx');
define('SECURE_AUTH_KEY',  '!s=6K1vD2T-M9(ne _GKS# f^|zB$s7b}?V6edn-c$C,T^d`~?c8iB6SH( +TWa#');
define('LOGGED_IN_KEY',    'nuc4F|)-s?{hrz(gSR4=-pq0#g)CW[_^TCuj^{N<5Dx50l6J5*NeY:|H4SYX)q<_');
define('NONCE_KEY',        '<]Vp~2tr%(@oVf$^y&2J/A*cI6Tp}Ngo]>g?Ylwuwc.jJ)}Xs_fVZjG$j,znab}v');
define('AUTH_SALT',        'BZJCEJAC$<&(Kw9!,tGb~unQdx*ml7<mBlmh x^twOYX.9/I1ylnE59;f!Jb?o%}');
define('SECURE_AUTH_SALT', 'JuG^dAlAY%U% qkg5R~d!g`fjQ--m2usVR!_D+*<WX,&]|=y(l xm{50`+*(Ul7J');
define('LOGGED_IN_SALT',   'L4+KB8u!+=1U@}EXm8gai|Lu+aCp(XKJjF,-F: P+ohHv;+.00+x+hpkei13G>II');
define('NONCE_SALT',       '}j!SVQk}:n/aQyo?X}r^[qX!ijrU7G|&1M&a3MCj` -}b54t,,U$jN8;gO!e}.|h');

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
