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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk6/2782037/www/store.esport-auxilium.dx.am/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', '2782037_wpress0b561860');

/** MySQL database username */
define('DB_USER', '2782037_wpress0b561860');

/** MySQL database password */
define('DB_PASSWORD', 'sJU8GDoXoFamDjTGpSq_c6ahq3Ug3wPX');

/** MySQL hostname */
define('DB_HOST', 'fdb20.runhosting.com');

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
define('AUTH_KEY',         'CfclKYsNikM9r%12S_.63fXarY#YK7c*qL56wK(^rM |ffQ/u[}3@rsWd(>Y9.l`');
define('SECURE_AUTH_KEY',  '8v?w9jOITH`v!d!d@&g3[s* 51m)L=KHny<nHIlfp#9!-+t.]K+0}_0>!&5MgJ?B');
define('LOGGED_IN_KEY',    'WdYOyRQbi$VxQZ5kzW5$c@nC[5&<kk}zwb!F:]RQ_}hB*/B}Z|6HV=v@O 7T{x(t');
define('NONCE_KEY',        'eww+>,geT.*yf4.+G`?wbP@@!f^mo|zeO(t{Nt9_f~c[$P@IRDhp`-MRk+?_0h+j');
define('AUTH_SALT',        '>NYYQ19g{fN9h(}ToGG|Har=$DtGR >As-+ V9dEIstqvKU2u_m,KpO~<0}Zls`m');
define('SECURE_AUTH_SALT', ';PDqv|XLVt&A^XpMb,31Wh2eupkzUZ)RgK4i?t^4+UNVq=~Ez$<?60#<ckT>ZrFw');
define('LOGGED_IN_SALT',   'IwDn@IlN1}G:e c5pfro[YW-*7[w[ef&,pC.1U&PcMNpEB]M!Jol.5fIafu)&%r~');
define('NONCE_SALT',       '!`<X(;IdY:b}dGYV M3O(-~lW_mB#8t8w]E,@0PLYIJzkV%#TB*5X#?#*.[%w!Pf');

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
