<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rapidwashexpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'QbwA<*u@E_Bq.m[85EOT+GVBg{3r<4t_N>03UgTry6,^if]XzYSzR5D`5Bv%RolQ');
define('SECURE_AUTH_KEY',  'Mmm.Y DFew:^[:1T{BzXwoigmd@dUEs&ucs,n;vxe6DTtl.a6uTL?iHQw+eEhXZ)');
define('LOGGED_IN_KEY',    '<Wu#CBvgsUvFEN*$4PZ4KzEmuIjFIs*DbTZlC:^YN`/ccBm6MXX%.<~(XmE^b~r_');
define('NONCE_KEY',        'i+eFU(BSBnt`q|B+a&}3@rKC]nBelcj%zi8Ni`X0=D R(`]HU&6ehu3gU/h~MEGy');
define('AUTH_SALT',        'l6/qa0S5XogpX;AA9}1tFRl!4jkshM8E/S|A5^nWk2xM~btEzqN~yA1lA]x0u62U');
define('SECURE_AUTH_SALT', ',bRBJgv&-3w&l%<${D^bE3MJXr$p,f#E6cp9q+1(H/pa=jqN3#QkkKsvW&:ju|H+');
define('LOGGED_IN_SALT',   'udY[;/&mdjOD2GcYIHiiz%Q:UABfD;bx$=>umTx]v8SK5rd1$kEwax4b8x$zS( )');
define('NONCE_SALT',       '7HGq1Fy>XW{7K9sz7zm[V5N(nq^d?<Yf}6oBFmGXxY4<)tRPECSLptfYh~>G#qkl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
