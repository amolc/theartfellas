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
define('DB_NAME', 'theartfe_wp');


/** MySQL database username */
define('DB_USER', 'theartfe_wp');


/** MySQL database password */
define('WP_MEMORY_LIMIT', '64M');
define('DB_PASSWORD', '9cXWOqeaf');


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
define('AUTH_KEY',         ' cKay6U9:2mnQ>&: &k;y:s<!=?0sMh#:FZw2@-=.V>abb J`Xlq2hIU{=pFpI-9');

define('SECURE_AUTH_KEY',  'e?J#6s(1zr}7+f]O{OGp-#+#VpvwdO]5J1MSRa$eTjJr*?t9TODAO 5;[? ZO}FA');

define('LOGGED_IN_KEY',    'D!XGd}%:/)9L4/-F|1f &0%Kgy}P:ec,$O1{`I9POSH+/85}XY7>:gQ?|WO40agm');

define('NONCE_KEY',        ';@-i4MS{F?t`4%4p@r?Gw}h<vpy&v0b}aP++#PJ_?gkR,aO=-V|tgCUcr.^>qn|W');

define('AUTH_SALT',        '7,++hYPT?Nn0zc>&p@Hcv4$-~wUjg7av.Qkx.}bKB|[|LC_wZZae8L$I{k-i{HH3');

define('SECURE_AUTH_SALT', 'xOKtA;-:&uMR.[u+vdocOlw?Xo^cP3=sopBm7ao35]IYk0<XE+a5cb#x]?u=:*-+');

define('LOGGED_IN_SALT',   'o}srWWcF/+FBA,JgcErH|9$8?&`pA^|z,F&l%X3$njY,jh bQz{6v+l`+;Ht0&be');

define('NONCE_SALT',       '{;v|1VG<9LS:{9e+p d-zOo8@Y#08gV@x6wM68)xa%hZ8kk|&@z5as;K/tgkfEK7');


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
