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
define('AUTH_KEY',         'aMVXJXPQ*6ba0TNEEBO/CvBc{%[X~DS51t%!JYZ~ss{3P^G:8Xd;[S5~4L|390G.');
define('SECURE_AUTH_KEY',  'B]CS#*@d{j>pD<SY+@6zyc >|X 1pX3!jjB<ID}slRp~o4wgjS9i@<>K`kPB-xsi');
define('LOGGED_IN_KEY',    '3+^ctj.gF}FV-$%`ugI3%P^$L#z/$^ToBS1G5m^{(vsu^},R&/f>jn$IsBs9F8:l');
define('NONCE_KEY',        'd{zc&viw%i]qR(xu>AzFJ4@B~RMQVoqR>:`fx-H:R]:|;Hvw:d=J%/ggQ1,mg9sm');
define('AUTH_SALT',        'b|]_s~aa76>4?9*tcL2:HZgzrg;w^.:J yD`*jL=nKU-hH#6TWm^IW5$1:P7><xR');
define('SECURE_AUTH_SALT', 'VzkRx?>,SA~lDoTHcl6FR3H3mD0>TD&B%54wtXx=%qtU]3/:?/YKabmZYc $tDUn');
define('LOGGED_IN_SALT',   'Vk,/+Gm@{0s* u442;Rdo-3OEk!P!~2 (hd}Plk}_k|-1~#}SBs&dA_2sGS|Sq/J');
define('NONCE_SALT',       ':|NFM$%k>x nD2GQzS;reQmPb+(IG;eYAylL?)BI|9?S_<./fR|H.+r-}]P}|sI(');

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
