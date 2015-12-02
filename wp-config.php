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
define('DB_NAME', 'dairyuser');

/** MySQL database username */
define('DB_USER', 'dairyuser');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'j7V+JB;qh2;MSPi@=8vDzQstY,<r($5hk#urA;z }w347M+ROp9]I^D;H$CH H(t');
define('SECURE_AUTH_KEY',  '-g9&^2ySQEY:ka|K?s|z1au+-)&)+!q:!)l-{.?L:JD/m2{_{KOEodN+1/,n?]jB');
define('LOGGED_IN_KEY',    '(3C0[A*J=|Z*EbR:fg<U;v<C0Qc@n9J993Y4`WB9wpO Mij-b5iXiO2Q-6QUNIEW');
define('NONCE_KEY',        'ePxcQFDA;#EOR?7Q.SA4>_u-La8$Wz06@rLqda!y;:WmWBub,[`_HdctIDT5<#;n');
define('AUTH_SALT',        '5|3gylwu8FKY6&jQDL-m#u5|@K {0BFFt{P9?>%eiI+rfGe-l(lA741Ml1%-;2}F');
define('SECURE_AUTH_SALT', ':_`Fov#>AafjYwW|Mj#NOs5k#f|^y][q`s[xlan]c cp)O-|=<F+|5n&W@p&XIQ#');
define('LOGGED_IN_SALT',   '/s4?NMq1p(Fb~NYvRo[{.s&3^e,##uA|j(4bW0.-U7m6|sB94A:x$$)}nSNRmu!w');
define('NONCE_SALT',       'JT_;M2o2t{HfSg&!IA=o>~Rv=Ec/CXR$56K-*z6LmniC&<-F9lC4;|R]_bxC3)-{');

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
