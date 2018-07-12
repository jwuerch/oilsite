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
define('DB_NAME', 'callmeoil_db');

/** MySQL database username */
define('DB_USER', 'jason');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'P Cf-g.k*-]d^&0A!/=<[BS|ilC$P-4~HXa<3udaq}Px?j!~5voU(,+S*<3{MbCq');
define('SECURE_AUTH_KEY',  'h%,-ZS|6}s3wX(u4KWp1[4po}3/TE<=ac7^m$@Et{[DZ-T!3:Iy0l8<U|9v!pt5~');
define('LOGGED_IN_KEY',    '_6C9BdjV$`3}4GBa]GP&_vFgHO@%v59s$2aCog [#X~CCZg$CZ5KyiF6&9#E5Sgs');
define('NONCE_KEY',        ',P@=`+ =E<1XevR!]sH5@9M>]bd.Er/V8tJcZ_n%e^RdP1%|k/C%&W@-VU[@K!B{');
define('AUTH_SALT',        'S^hQ}ft!K l7r//zs_I_-r+xLv9sa>0n;30w-3+(>ct4.|)vl::]*h8ulfIfL?*@');
define('SECURE_AUTH_SALT', '3jFuO(XL^}q=9Zx{oq+0e@o^s{OZ!)1x>0V%81WGv)#>>EpwG23<sQB6}}[`]h&f');
define('LOGGED_IN_SALT',   ',b.k0B-/;3r8 3vVLWGNR p:dvXx#Nm]841%~@YCv/P!*~X#1&TES%8?Yo8A%Z&c');
define('NONCE_SALT',       '(TWl7qmS4,%84O;.Z(d;W>&,/O/0h{o9!?.[=r:jW{RRY4GB |=[.bOMfpc.LA=w');

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
