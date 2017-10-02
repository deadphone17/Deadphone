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
define('DB_NAME', 'deadphone_theroyals_com_au');

/** MySQL database username */
define('DB_USER', 'deadphone');

/** MySQL database password */
define('DB_PASSWORD', '!y41v3vb@!kAnJGx');

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
define('AUTH_KEY',         '@)vA84uH4%KMv^)MoDPTd*^v(<?:~)Vz=VngY`T{0puA/,PJnTQ2Y>1@etLUYAiK');
define('SECURE_AUTH_KEY',  'rF./z|9W~!*0P_?W_T;9)FMXWtfMgi|[IGDNIw N9sx&aGgZ(.U8^z]!Gzi7#iRO');
define('LOGGED_IN_KEY',    'i^^IO7U4:MZw^H%@=!WLZE7#CYFflsL3Kfj.yxBiu&7!Y*X;gq^39)}:keW>kyL*');
define('NONCE_KEY',        'Uvp3K1%W! 5=on73#.fOak(MDd~$0oLD&{RkpA<:IN,~Tyb8Og:#(IAJ-LR~](|R');
define('AUTH_SALT',        'E$%maWaz1;49;L9^Iy;jeZC1Tbj nT}irm[:AmbBDC$d?%+*?T}32ZH4>Q&M(Tb9');
define('SECURE_AUTH_SALT', ')MN|y}TJZoWJpU1gtqpMJ2c~YGwz:B}t-!;cP$#1OyHV!$jfxnZ7|GQ#A<-|s@YJ');
define('LOGGED_IN_SALT',   '?k}ZXjnyA)P|Fi:Y1Yw8Mw:U8tijBw@OGmfE)@ReBSMGZSj:5E{M63Fa[Y_Wb]?8');
define('NONCE_SALT',       '<M7#*`R~YTM<=B$MxC>VD4K9Qm2oeDmk]0sS7(m%dm`#aG;/K_Z+&`p7dRm@a.Qs');

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

