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
define( 'DB_NAME', 'Rambo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'P.NzV@tVIQ`B}qM);0.kuHYEYN@)XIhW/U&+>_{7bk+wJTwup`#)Dv lNx~J.e8y' );
define( 'SECURE_AUTH_KEY',  'uts#%;y{B&1TC;3A.6-[+_+a4k{Q)Fi{$T~]Drz^oM7J1FRM@+z{2s{k,8Q*b=6]' );
define( 'LOGGED_IN_KEY',    '>0RLeoa|U_o~-bkb(p%xvrg*nb=b77MT3vucH0j`OpKr=}e7s`?ufbQ/aPDi$621' );
define( 'NONCE_KEY',        'n)%]?8qF[?*5&x#ZPoAWmdM*#/gu@wvl(u5ImR>b{tc~^P}#VJGkFPV~zZeef zm' );
define( 'AUTH_SALT',        'J2R<oG}$i^{LPDM$^X2:.Tq9lFIEwUMc`N<-@r_IR7wp=/yhbV_g47S?c_l0fTT~' );
define( 'SECURE_AUTH_SALT', '?5QdSFFI~Y}yhY/#UB<ue1T[.b/[_2[Xd?1HJ0TpU7sxpX=])kv5!CrV+v2egzt ' );
define( 'LOGGED_IN_SALT',   '<{-~Cvu[b>iY!2eJ0_G??<1=*/?eLJmD7_L~s:D!S8Rk81v:Z9P&E={^RHm;Mt;2' );
define( 'NONCE_SALT',       'q4zPdy{[1(#&1G<Fg=4p7z`HEgx+2{xydEVk0U1RPU~=^aPO1g2BNy^R`U?O0|zZ' );

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
