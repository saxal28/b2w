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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'alansax');

/** MySQL database password */
define('DB_PASSWORD', 'gatorade2');

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
define('AUTH_KEY',         '!n`faVPpAF}_%6s|9O{Slv%zm&Dd>) 7o@F-+p,@L3L6GDrci4#-xtW#jLx&xYG0');
define('SECURE_AUTH_KEY',  '-i6b3-c9t2[$U[AC+3zk%Wk.VRupvZ+$e4jRB7B8V+0cOy;Mf0(.;,`R~+.o$L#m');
define('LOGGED_IN_KEY',    'I.rPw,5991$5s^/7)HPD iOTLR,o[[r,6%}M(e+_:vF|{|)k]oS+2xs(l(}@a(5k');
define('NONCE_KEY',        ';}>s|IB_I+1D3+%~?v[P>wVJz@+nda(&O[]|$ye1vI|.-:4jk3(D+av{*XBdn/k)');
define('AUTH_SALT',        '&$a$HPQEiwrY<7&6+i h5Cx|A%K-Iz/k1kTP~h&E.MRMv%,&4cGfKS(W_;;&K+OX');
define('SECURE_AUTH_SALT', 'G4&aPz}Q^@j?_gLoYEF@ A|T.=$sh-tG8X[nYfR@i}CX5IcbS+22!e9(Q?T4ZUp>');
define('LOGGED_IN_SALT',   '(3!JY3fA8bBPb%i!+(q~m6EI^`vJYU`2adP:V=_W4N-X>_wg*]Z}6STSDhRXs_[Y');
define('NONCE_SALT',       'zBO9Za8o-@=:?MWs%|A(SmJF4.Bga@Dp`iFa+vY8FG5VB:2[w#p]VF*:+,s5DYlB');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
