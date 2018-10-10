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
define('DB_NAME', 'petszone');

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
define('AUTH_KEY',         '>y3QbWbkQP%/sl9,J&@blr2/W-W{HAPOAeg+;N2`FH!U[:UN[8]pds74k.xTQ0Ha');
define('SECURE_AUTH_KEY',  'j@oBa)A8He56Sq8KUs1b^,4z,sNIJ,F>ECrih#64Ncw?:A%[WR80G[ezeU8VfH5P');
define('LOGGED_IN_KEY',    't:3WWZ5rlSbWnPnKa)9<yN]{@f2~x:83rkMC0 *ubWc;7h*G&S .f}vUM+Uyf^##');
define('NONCE_KEY',        'Y=-47ZO^857:Dgxpv+p.s{{rGN9R)aqW6-6m@.4qh+<*%-#g(n]ay_&(!81VX4,$');
define('AUTH_SALT',        'l@LPfvI7p%Wq [Y2{{lGt]`%mx<I7bj-6%w-4%x}MD[I<Iq%8!8TZ{9k0L.$[?K+');
define('SECURE_AUTH_SALT', 's*Kp>Y.ODKoxY6,_3MoiUpJYr[D 0BYqaqVjakA,MWb`ree][+ReH`v~h*}glXco');
define('LOGGED_IN_SALT',   'odS8x`Zc[O*z9ab,@uQk_VQ<xOifGy.g%=I4J@?6]TwLEp,p;4n:qN:cd>{R?jC$');
define('NONCE_SALT',       'f9[SJf7! FU(ttj,{/`Yr1[Fr//z<Jlg>x(#P1{vdx!xKXdVC8(ZH*=?1+DpRpwR');

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
