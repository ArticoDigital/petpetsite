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
define('DB_NAME', 'petpet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'P5mb5lsCX#>S4;xyUd6tp);;JoGkPL};#X!*7a]6BX-_Z5#M?(9d;Ytg;xBJ0[%d');
define('SECURE_AUTH_KEY',  'TA>Vx9_#PCL,ijs:<~|wg+-n6<mnCU&A8:4hOV&7JtNCG]$z]u,`/Yx@f]I!Jzg}');
define('LOGGED_IN_KEY',    'bDoUvXkE~E0<XO k$%52XuDDh:X+gt,Uc3D}RKc&dpuN_u2(_*zY!qd~9$qrJ~5>');
define('NONCE_KEY',        'mP2yKw_/As46JKu`aHpv,_!Ra}+aVb=aJr246t?k}Iz_8nKvKK~/*0y*B(L}ATt`');
define('AUTH_SALT',        'uw3Fb1=86u@g>$10w5NJudM*w0tCK7jA8Gk8S_`u8c#35#D<ZC!JF8~vZuYg#AH/');
define('SECURE_AUTH_SALT', 'p(j]Z0%Immf8`YdlJp?_E Y{Ew|nG]`Tp%mUIa,?xkYiZ7EI7q0sxyBU WEoih7{');
define('LOGGED_IN_SALT',   'GO<ljxYnz7kBd)7%9>{TY<O(+jPK&[veeMU^4y$+U56n8@@?^Tt$zik!ZkR0wzd#');
define('NONCE_SALT',       '+QdB[k;qzZ.{l7~[9%Iu|x42#iziF?z@7sLN^{JUWTbu{}[%P?m2YKQp-|#Jt,5.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'petpet_';

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
