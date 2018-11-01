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
define('DB_NAME', 'kingfisher');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qwkN!*C~8pl~[dtcs|_H_fs>Ayl~h!fXWVSNy[tE__uSM~}..j#@sxUwd3&N(#pu');
define('SECURE_AUTH_KEY',  '9fn@[T?@uWFU6^j(s21?/-Wcc9~+6A()FZ@g/Zuudr13|F64DN*.zg@oMN3Pev^`');
define('LOGGED_IN_KEY',    '^.[>!ANmb4-d$0]GCZEM*zVYlfOs~`X>6mbXif|Ns){n[#tKA_KtAU5$GUC% zrw');
define('NONCE_KEY',        'ca0VLyl:tAKMy-,h#Zeh0sr.u>(!+uH;>DZ+Y$o=#Ym6=_ B VJ21_j_Co6!U/df');
define('AUTH_SALT',        ')&hB<q:=atQ1*FWLsz$%BDW@C]<wR @ay{Du0|hNk=<.,ql/GxpLgRmra,n}EqMK');
define('SECURE_AUTH_SALT', '}H.,Z{3M]c3^.}V[d[j5lr,Lhu0.lv>{Tl<{b7I!HidHk%@:*B;7s8$F<Wemk,iX');
define('LOGGED_IN_SALT',   ',i)<x|eWPB^2gS>1?;*8MC#HqSm;dMn0SL9B41f<CEZb(wttR$DhAk&:|O{k@EZP');
define('NONCE_SALT',       'F jmhV|I #4N^ M|X}! :)f-ae?wH-=M[stJUDyZ{w?@pvS,KwJdI_*C Cd?=xDS');

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
