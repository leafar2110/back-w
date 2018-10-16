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
define('DB_NAME', 'eudemy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rafa2112');

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
define('AUTH_KEY',         '=]b{pb{sIAXR2b9CK*Cl8VW*M!_8JP<b067Dt:$@6#5z,bi/^Pv3F|?wt}lbyA;l');
define('SECURE_AUTH_KEY',  'g5WGn4b*XA&qa*,uV.SCoQ4l4zh[K*{ihD)oE*$``vLMSFC]0D`DbM;1WX4f>|H|');
define('LOGGED_IN_KEY',    'Cg_}sZUO%[xnAJ v#>?ah2K_E*nx25L+r[8Iae?QUx{v;S%dg&zrS[SJ?Y_cz;3a');
define('NONCE_KEY',        'LDoFVWVQt*lr=ee.^uy-P$chpPjpKJ;i3^#uR6^KI&>(t#~XvO_G}sw[o-5:(rmd');
define('AUTH_SALT',        '/b1*07g%B#b *ho7s0t,00<~7<~JI[KD4J%Ge<&>q4(U|EH3Jm+#yli@}r8gf)Ea');
define('SECURE_AUTH_SALT', 'x9a)5ZI#|!,Z1+4XFBo_s%ZCV`hXpd$^.Z)gP}wP+?RJZ9Osldx%&WWV/#/[z!Yz');
define('LOGGED_IN_SALT',   ';,uox-P{uOBCcKU^*>W0o<bqsDHlq~5LH*e3t}u78`>eFJ~C`x>-<=Pf/?SSNo.&');
define('NONCE_SALT',       '%ePfKB;r+I>1xigA|Pf-doxz:#~1H$@/!Ftg>h!we--;^g)qI%xI Jpm@}FRd]~o');

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
