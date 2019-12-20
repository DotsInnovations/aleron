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
define('DB_NAME', 'aleron');

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
define('AUTH_KEY',         'qsUDiZi<P[FEQ}t59@h N8AUnraR,rbDq<#hGv&>*bQ)R/c`Kwe!pj@Y6.QGZ*rN');
define('SECURE_AUTH_KEY',  'Di;VQUSz+ftgclfR|e|.+hB&zs_(#$^<qzy@cIs2H3cF;BJ(hsZZTue Bv$^?@z/');
define('LOGGED_IN_KEY',    '0M@Ee5.U`@]<gCO~^umA+>G4oQ<T=zq;`pyM`8*EHyca-{sqWy{wFNzD,=3&2y[^');
define('NONCE_KEY',        'K}{nZxcN<JX%GJv.Fla*,@[;lHL-sm}vQtge#@R.1XU[]1f>LCqVO^V@&*s3wEE<');
define('AUTH_SALT',        'R<iRDzO~p~,ocu8KK4%hPf+IR6xQa;f[F|XrbHr0{.M=_8Yg;YqM0!e,IFS2AN0A');
define('SECURE_AUTH_SALT', 'c+&ZqU<JjAtB-dS7bTRF2ZcZn$9CW;da=6|ULKrd}3)b7kCPbD}H(=^8I::2WK*L');
define('LOGGED_IN_SALT',   'q-6;|~R6b]b-;GB9jwRKbWs[wSGoI}B#=8$mkh.J~U:_vPI^ &wZ!7F9O6TS{10h');
define('NONCE_SALT',       'T{Y],D/rL($m6-l2_DJ>t$rcy)y~t E)nrvr| CxI<#|W3^F[{.@zs@2x%<Cl$#<');

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
