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
define('DB_NAME', 'wordpress_stone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Yw$08WA-+^H?&cmZUPw4,qpGPea{/dsP;k=-,=WvThpB>APbGp;|lw8Y5y?!)}2D');
define('SECURE_AUTH_KEY',  '1NKGwHxLZ%?Pp,G-H#lD<`,3_Lz&9h9N6c=,*#[UEVJ`<lz(8[FyEmnv3x</1@{%');
define('LOGGED_IN_KEY',    '@QbqArg.-%U60iSzhBb[?i#*0:SQW!Y7y[p^T)0@eshk;0frNJ=Kfdo._EFGwLNc');
define('NONCE_KEY',        'MME}eh+=oo_yUh7 Z_(l:2,pj+e*YYAtAIp-iil7!4}Xcz{Zc^x7Dqezso06tdV@');
define('AUTH_SALT',        '<U#q^MYN%/gR{V+`knhYZ_4Hw-[A}~-+Fju<9N-vt_@DSr*E2qS5^L)ywhPF({wB');
define('SECURE_AUTH_SALT', 'K>Z5Fp6CjX59+yDOo|E^jFt;DMf+f:A=|@Q3KDfrM}}(oT#7x&#I/{vf^w5iqaC@');
define('LOGGED_IN_SALT',   'lK#y(zA|-{G1{eULX5e4*t?r$YILh03n+uk/;kR5T,:K2NsoX<S<j=UwGj}bIhoh');
define('NONCE_SALT',       '+.|3&2GWH7mAci8UPTh7([P/1flUj9p:%J{IDy1^wT2r^#7e<j})5y_dAa4{gaR<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
