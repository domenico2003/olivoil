<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[*I+`Q8ABk6~|sB?[3)[`;v-?dL4Cf>.J2=cRIfFw =4rtDw&kA4#w*>ZMCAS1_U' );
define( 'SECURE_AUTH_KEY',   '6>bYyd&F~nkTuB55lW1$Tdi^  E%WPl}P2(=x-r% iGa/Z;APxpvG;}Xc:tzF;by' );
define( 'LOGGED_IN_KEY',     'r(>vyG|RL<z%ZV`Li<{XS@~(-#9(7X$-u2Uwa2?_%=/]XD6c)?pTj3T&p_|GB(`F' );
define( 'NONCE_KEY',         '*_d@bQ[1Uj0L@__2ujxwv%EhC+^D>d%;^+yWECchTf ^#Kfg#Jo`qGGcc ywt#cr' );
define( 'AUTH_SALT',         'vDG=8 L[/02&G,6?G=_Q}k>),,hK/XKHD)QqTCXuf^pQ;VYtTD7yQ7@:DEIFKk}A' );
define( 'SECURE_AUTH_SALT',  'ujjD=g,.1.*KqB1RqMRLqp7+%Wtc~=kYiq?[ASp ]|+kV_r4^3;rgr2WR<dDF>,[' );
define( 'LOGGED_IN_SALT',    'p#qxhg5HL%vp!#a6-MlRU{AI|#w6Dx]-Kkib8HSI{mOw&|8Wh:*Hu.@|LaF3s1M[' );
define( 'NONCE_SALT',        '.Y| Q>FYoCp8N0rlt&8!#QH1:^lfQMu26eW.WlQ0i?H=m-xU:{YypP{1[gW,H_8i' );
define( 'WP_CACHE_KEY_SALT', 'bj Nd{*_?FvViP[funN+q.KP=%>*dTYm#cQ|bY+F#}y!H=~V$WjKn5K|,)PABQHK' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
