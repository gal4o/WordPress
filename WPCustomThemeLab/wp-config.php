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
define( 'DB_NAME', 'WPCustomTheme' );

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
define( 'AUTH_KEY',         'kEMXak1N/R}}udG&Wr+0C6O2/OtYbd^3AzykOjB|:-$j}7@5RfiA?vV^beuU^jw5' );
define( 'SECURE_AUTH_KEY',  'MGpk:vGK>gR[[4x:a+-8F8*jl+0o|)&x5*zZ[TJQDuD>uIzdk<vWWT}C  3%wt=S' );
define( 'LOGGED_IN_KEY',    'xDqFgY+d{r9^_~x_7 aN,5dFah|$k7qNXS*E_rCVUuHtB)ioz?pHq!6eys}J?N#r' );
define( 'NONCE_KEY',        'Y*Ge8Vac~<)Wn3n[Y+6537ag>|d<!Si^1CbXEv.K;ZGiylFE_[^Y_(m[[u9Or D2' );
define( 'AUTH_SALT',        'v!?:V@@&nFyhh58?ftt=udv:< k*0UWMqH74rx{w-.uLtDEh:CAn*SK|eI0z3HLV' );
define( 'SECURE_AUTH_SALT', 'qke(vxLmIh/+]ZM1O`|-q@}Slqd6.UapMlI#DdcP(#tITMHJv4Bva<GU>t4Y2wg,' );
define( 'LOGGED_IN_SALT',   'I&4TrlfJ=KF:23fZaVKW4V06poS6`T^EP[?8B.-~Fv`bQ.N)t%Q7M]{skZ0R1|0A' );
define( 'NONCE_SALT',       '2m!:!/>B:Q~)Q1jK$!+ldmDDVRz}2_+cBB:`1HOVfnLbKN0{.[4Ki(; )1.YdfPy' );

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
