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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\WPShop\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'WPShop' );

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
define( 'AUTH_KEY',         'Gop86`,*4s/n*+Q@Y-Uw~Ip;m2u|}/l2UFjbkSZsXY8B3&0wq~tl_6?eurCUebC$' );
define( 'SECURE_AUTH_KEY',  'wgA2oFA9PaxlDX.ka+2z#q QxiSP{Q0HFMb]hDSP;9wnP<%SF}Z*ze^A4ID[PbyM' );
define( 'LOGGED_IN_KEY',    'ff_M&TG.rN@$_Sf{dyLPq]z>*9AxV3GU]){QKrqX*`xF/8X?KVCkm Ak$x4lbk6k' );
define( 'NONCE_KEY',        'Bew_UvLA!`XgPMo%+SGCeo,#=7]^hoykKs#QPhT|}!+M@];^Y!!4L%65eCMc;{qt' );
define( 'AUTH_SALT',        '_C(~b).f>40%qd#`+pN=6|,#$D18rqFT06(4]]a)kyr{zvTCAt@hGLuj${`Tqdb>' );
define( 'SECURE_AUTH_SALT', '*,U0EFLta64z!R|j^WeF*R<x<0eY#&XFX$E[?SX4ku?kfDefnm,7)TLVo0}@yl{5' );
define( 'LOGGED_IN_SALT',   '^|w9k[W-8TA*Z^+/gb%:^$Jn:Dy#/=?y(m7[Yy5-uK;Z|keM6KPhSO,W0)zT*@mv' );
define( 'NONCE_SALT',       '%LUb[.Nl<HHE03n+@/f*O5@l2o4aAd5<?F::%4y,rFSusVuh7L5,t?k@18~Tqks)' );

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
