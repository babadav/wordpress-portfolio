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
define('DB_NAME', 'dev-portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'OG6?aGWFJ>h&6=R=irRXUF$`2/;!PPG8}}u4l:67Ba7SoX)3,*HFNT:utg!v%.T/');
define('SECURE_AUTH_KEY',  'K$fT>){OX1?{!m@h.HoTnLV5Swom|)CBPNyyjAn^GhHvIEuR)GWUY%z(p2-9ihUw');
define('LOGGED_IN_KEY',    'S6Cxd~O!M<T.joir,0fZ+3I(jnnI|jpMq1xJr):oM>h4>%^DPT,Avc4&;d.3Q8 .');
define('NONCE_KEY',        'qM 7sZA7/.>$Ah*KB&=K2w/WDdF~kZ<@>lTN?=I](!jKd0,Cxm}TC4N/[WdggCou');
define('AUTH_SALT',        'b}(Hy:#F$]~;CV:xz kqO~SHshgvV4w+OcnFj$T C8Wg*gw2n/jVQzET(I5P4X4D');
define('SECURE_AUTH_SALT', '>};^^WVk<YA?<7[VR;1%R_[S0Zch;nQ=qB2!Q]wd%gTYue*q}NpKuy~5qsNC jmG');
define('LOGGED_IN_SALT',   '$S$8,RE[KuC xX8qF7W;eu62JVYknbG.,r?BYYAn8@n<q;yEdNI/vP*vKV&ocFZ7');
define('NONCE_SALT',       '*;0hiLGc(t~9JB+JC?J~uTg-P&Kd/| } ?5 FSQ5>2NUD(ea]=ycSO[`uUQ%])<z');

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
