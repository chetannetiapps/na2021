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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'netiapps' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'India123$$' );

/** MySQL hostname */
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
define('AUTH_KEY',         '8i*>!hqdSD)[Ru2o_Ig-+(6MQR4H1{-lo-`-Ov;s)nw*Ea`VtS,h4gZ/q-4*3M<|');
define('SECURE_AUTH_KEY',  'w}aqHhfCDAqk#w<S7!?!^U+93+kA>G ;k]}1Q=O.dJF;~4}qv7beHs+8,J3Ol/@n');
define('LOGGED_IN_KEY',    'Uq<C:,=5Jwtz2-;3BMetDpqiq+$3aVENudR6RQSFi9  }@q$q@1T.TA71m|E/e{+');
define('NONCE_KEY',        'O|7E^7k+(paD*MaSuKe.,ewDG)cpR Ud|!kSdMGe+l@Dd{q+?=0k2q),a7!+l-zy');
define('AUTH_SALT',        'Y?8`C>-6n7Rdd3Gp>4S)ux6mdnEed@tZkSdb_&RA|y+7<KBrcxf=~8omYl,a2^mI');
define('SECURE_AUTH_SALT', '1A8K;* [4j$V5^V07h/4^ZZ+9e0|6}[I$M]>U*+)Qh3+qS^.`q,b@_j4j50$OPub');
define('LOGGED_IN_SALT',   ')hwPV7SKl:u^5KS=FV#C804(%*u2)(yi|R|=E675Q4adEU1AQ{Tn|JvN)+TMBoEU');
define('NONCE_SALT',       '-%5D[@sK^WEu+UT{Uvtn,nD?AVrJ{}PT30yiw({Pn?jr2cxN>A+Z_9~)WLO#qJZG');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
