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
define( 'DB_NAME', 'WPExample' );

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
define( 'AUTH_KEY',         'T[lG/e B.mfjR@D+f%uj/Fzpr2QM;SE9OJ9a$_e ywcD7nj:sOb=XpUWJt>n-C3F' );
define( 'SECURE_AUTH_KEY',  '6)}X*DO`~M?v]oM)b]]GYU08TKjAOJKBtvb-yi4#J:a|gnvKZeFXHoo)c_g2I)Tj' );
define( 'LOGGED_IN_KEY',    '41`BM/RW`6i4QJ4g}3;eEJ<fWk!8gh$n9j~_@u$*m~.SN[NVf^0#!uy5EeN*h`a^' );
define( 'NONCE_KEY',        'svkR ,U@aC~-;paON05_yYLj4.d.~]oVTIDjtt.blL,-=krd* 3zX?=+Hd()_k`n' );
define( 'AUTH_SALT',        'Z0^zMc^Ap|ET,A#x]3IAja:j5[nFVfFxuMnHxjx46M/6:h-6MSI:,tZ*,3y<VKih' );
define( 'SECURE_AUTH_SALT', 'DO)K(Ulw+}X+.J_@vN8G1y/+pLNIf7ODfY>XE+,daqw3Vfz$UBG[Y>%I4-[?5zFM' );
define( 'LOGGED_IN_SALT',   'hx,<=Ax!^/Vv4~gg(Sf8ShBwp1P#,rJ$=`$Irx`G_t^zc)<K/v%8}x7;x1 gP_}g' );
define( 'NONCE_SALT',       'Cnq$^QHs;yGXr1j;G#>dVsQ8Q<pP*Ic^@&u2{lA^MsF(+]x*2!LPR5tC`U rh#k?' );

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
