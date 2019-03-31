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
define( 'DB_NAME', 'busineswebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nSV?yz_ISZN!6](2;eF/rY[nDy-*>VOIM}j^K|1J[3[gwBjV[m`(,_|/Gs@12z2<' );
define( 'SECURE_AUTH_KEY',  '4+FN?|0=e$S4Mz1WM8O2)Rke8Sa3 HGy}x7F:#LFo1v<;:Vz|a+h?X B3DWqMq2X' );
define( 'LOGGED_IN_KEY',    'JWi&]KK45(Px&V9|ym:jc30K2Da4thz]JRvAsM)Jt?&hajyhn%}MB`(_4X9Eq[y2' );
define( 'NONCE_KEY',        'G>7Y9sp]P,.kOkN6u#$<V3KB`pX;BKTS <qmytZ<BgX E#~S1K%8kQizRdE&E4il' );
define( 'AUTH_SALT',        'YWnj]55q/#qhZseQcV_EH@xn`u%5+p5z/XdyrpGr4<c@U)|^;lXp3&=LVsq<&lze' );
define( 'SECURE_AUTH_SALT', '7ehcj:>*VKBbu[S5Npp&W3nnO9u|>t5gLuvlX#[FYWmN^j.>F8*?x@&<cK]#N!2h' );
define( 'LOGGED_IN_SALT',   'JbgTR_5/b:?1(fd]zn _;tvkaHT,z{16|`TXZ]mX7rj-b_bK?V/nS=gTMA^kLA;y' );
define( 'NONCE_SALT',       '!Ht{~-W|Qo^TlbxeN2wRqx`01{<i4EZj-(f?NJ?P 8rb8kLnT2x7*UQ7)>0;t3P>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
