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
define('DB_NAME', 'bradley_wp');

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
define('AUTH_KEY',         '#0aJe!9*c.-wMHB:n[/ZW`{<_s&YCRs-[J^nnsYZ&~_Ij)kT*CuQM`D&lP}CP5i{');
define('SECURE_AUTH_KEY',  'J}[`KBW3,^FMT`.IFQq(n~VzsO Ev/`]L$aU7>B!{u38>6b7HO8)!96e<d8u<Df6');
define('LOGGED_IN_KEY',    '7m+%Wd1YH;G<fa!{wU}o{VU(Ci0|cLcm)blt%@(T868 {n4du5M)M`SN?]Qag{%.');
define('NONCE_KEY',        '2:!{IPXB[r-> /JTIW}Bt^qFw{P&SNxhK?^P4R55e04Vw@kD1_O%9CXps_;pg[P>');
define('AUTH_SALT',        'cI;~[iR7grI?2A:- c}dpA#*@~Q)H@JbBaqmeQ3! :p<tjJ`Bxlc?|VWFRn(E/s^');
define('SECURE_AUTH_SALT', 'Qef`!&$lf]3vTpb-+hAWgT4I![d?]W>S%C+NTVti^8ZHx!<bkNs_& r.&0>Vq%[9');
define('LOGGED_IN_SALT',   'Xc;)nva0>8D)H#$e}?W~dSZRe1z`qrG_5m6|$1_X^|PEP_V)$%+(Vt.&FZ9SS]hs');
define('NONCE_SALT',       '6y]u}8MN/[ukv%J$C%yZV%i.`i8= ^zM37N(hT5=[d|Lq3bX,%FIFVn]tFp%.^[>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_23432adsfadsfLKASJFj_';

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
