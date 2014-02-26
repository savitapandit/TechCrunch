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
define('DB_NAME', 'TechCrunch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'yWJ!tNiMcDm3Kn4h+?$G*v<{g$0IC;N<1J6|[7W!q(PgiF|wKS4-xQ]9s_d8W)qe');
define('SECURE_AUTH_KEY',  'sR-kh%es+OH;fc!8?-%D#GQ=(,;pp%cr?7vh{=;Bl=n2*{s<Jrm`KH`I.Pvxo-R&');
define('LOGGED_IN_KEY',    '|VUayzK{z]`D)O~^e|?uA:c@4[Uece+))MbwqGo=(I^~*$8*<H2qMtk~]HN@2}38');
define('NONCE_KEY',        '@kTyc)Dt)|gWKX;+y3rH6HExfh#R_cL&LAr-,O?{P@*Im3JgmcYni+DT8eaZck.+');
define('AUTH_SALT',        '~y12!&TeoXYd &}>|i^}xL]R.ge,1.ipaT!V,~90pI/=^+D;%$J+b~|E9rL4yGHl');
define('SECURE_AUTH_SALT', 'P_sR5-t*$;%4/^C>DUo/Dtk3YT.x`3+oYt0GuQFOp+pLlJ0hiR!.b.9_o3$=ojAa');
define('LOGGED_IN_SALT',   'klZu++(/oJ|h)j{sTy6|fkTHIzL,35k/siz/fhHD+,Qk7p%YK@2pW4|CB|8rkT5{');
define('NONCE_SALT',       'pV`LmD8~f]*ThZ&4DTT#AQ7v_yT-R*rCJ69h[nU4&Z|x-FOr.d3,L~(q:g1TX9]o');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
