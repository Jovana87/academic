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
define('DB_NAME', 'academic-bend-db');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1TGn=J=.hNMesHun19#~O0(xg-/ V[N!g+]+oC6lJ-uayq&_bP~]hRQ1*<`p;%u=');
define('SECURE_AUTH_KEY',  'LzG@.tOP,D/46|7tgA)^%ug:C@b6X3-Q6Y#V9;NO)8,r 6g_j.pa<<P6K_R@t=lB');
define('LOGGED_IN_KEY',    'Nm;rM=y@+.o1#hg1/]`Npg.vn^b<,K~bP6>z3y2Cz?g1c`IZ>SiUl1Ky-0r!twR0');
define('NONCE_KEY',        'pSeXRZ.Dq$VI-$Z+@kxoh`hX9e90[OIg]:-G{[M:2$5eZ3;t~:UoKSN_Wyw1M0VE');
define('AUTH_SALT',        '<9;:$Vn;mE[N:So]wr2~tE(k0FL-}w(itlkA;~fM~:tR=iO6(vY.s[C1t3[<D*5:');
define('SECURE_AUTH_SALT', 'U^r_mccrBM+O@D.>TRPlamPwh;1kpQ%1n*BYg_ M| g{Q+|n0`.VYf@$q? N~6QL');
define('LOGGED_IN_SALT',   'F6]7#~6>1cA^V7_SlM$2Hc|X(~knf#*],|jvQvW~9G28;~.]#pin;tQc)&sYZ?{M');
define('NONCE_SALT',       '7O.&ex}s]-*!`YojKNsNQS8wjuG0tB9pN()^MHa}+ XS:mF~=|kh,Z_E]r(<=c?u');

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
