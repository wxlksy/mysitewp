<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '`E[dW%nO~QSnS&/+TZ+4TXc$h>aBBeLgiLj`rGFUfu?>N,LM>t&f0c_/>`*7Gn#1' );
define( 'SECURE_AUTH_KEY',  '$X?7cg;{UR#q|&Fqpc<v)3-kJq=s9bUnML.0O FJeJ%0J|p-K)!s^z;haX2X#?t3' );
define( 'LOGGED_IN_KEY',    'pNjErF?1>S+4L>!_5ZD(fiz d<(T^[}cp?BZLUV0zDbE+ircl*OINTz/_Y#k$!Zv' );
define( 'NONCE_KEY',        'N}8&n{iC8$9m%Sb`#g6;vQmp-;{cY=eLJ5>]>Dl7!=Z<=6W.Cyi~dcx)v:7(v<K@' );
define( 'AUTH_SALT',        '%=@1GQwm`+9QYoLBQsz2xaJN5m`/zKA.;Aq6zE^[1U7&jEGX&`?:_jE1W0PQTnKr' );
define( 'SECURE_AUTH_SALT', ':pV^3LkU]V py>T,Kdl(pHV^:DHEP0lZYR(zk`m]s|gN45F%otF7M,#*A |UzB(6' );
define( 'LOGGED_IN_SALT',   '79K_[@a[OJ];+oUhOOyx9.[_R`)ZPXqQB.jlJq1uF#p<XN~Ro8&!^//HwU;k)5{w' );
define( 'NONCE_SALT',       '~quXvP|u~B)`_?.0^)W0Z*aHej,-kkI=YvUSlTM@k5x %6%mBJ<^.0JF1:Sv)d H' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
