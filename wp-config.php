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
define('DB_NAME', 'patszone');

/** MySQL database username */
define('DB_USER', 'patszone1');

/** MySQL database password */
define('DB_PASSWORD', 'li7q4ch624735ch');

/** MySQL hostname */
define('DB_HOST', 'db4free.net');

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
define('AUTH_KEY',         '1l|`b.@6^1e=7+J17[BJJQy30bB?iLK)0It)TvPx<=?EFi3ZqJS~e4~=(n2p&;Mx');
define('SECURE_AUTH_KEY',  'N<p!mpt46oWiR9KmE5%n>kv(rS[}&@sn}PWyDNQj8}Al5]SL[3ehYB`ylA%1daJ<');
define('LOGGED_IN_KEY',    'P{xpgy.=3(1qt;}4:[>cx+rVf4,T[9]CUc^>_LX}~9vPL&cqp~l|E/I#**URx>![');
define('NONCE_KEY',        'tGv z+E$yY$!ydWVDz+s_.?GBPodhegp_bNi)U5?~V?O1s*od_r|~;RLy-nF!21U');
define('AUTH_SALT',        'Mn(qN>3Dxki Y_LZthTIf1qVqJ@$%P]qdi?h{1oy]CJXM}TY8Wb*JU;,8ZkZFh~W');
define('SECURE_AUTH_SALT', '+gW7PiUhqEd,S]n1Az}:M~w=Y(Bv)EzFE7hGm#`iOHMyvb ?=&RPJP[uw$cd,zEH');
define('LOGGED_IN_SALT',   'Z-PyQOV59:/?y.Qt? T^X{L]_Jv^@IE~?5ns0*|.I*d#Kf>0o%ADeJh}]`dhMlMh');
define('NONCE_SALT',       'gY_]w=@F->!&mD#W-p;g5#fZKtY@U/[LMLkpvh>?1hzaafwg<(u,!:Baf[,(meZ$');

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
