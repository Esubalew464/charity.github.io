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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Col4xgjqhuwWN:>.1I:~j|i0w8WBeoahTo}w:?%+-,.]}tNX;ZIg*[hwA6?u/z-B' );
define( 'SECURE_AUTH_KEY',  '1c8{{|A^|W<Lln.5B}$55v9ji&HbaIsiqyG]2dg{junt.[#&+tg|exg*0 By=IuP' );
define( 'LOGGED_IN_KEY',    'U&SDaVd4uC1?zEG?j6/=HBaKQV&ZQ-7[^0x(foFC-oE]R=?cwj%q.,eqN~.:O1Pc' );
define( 'NONCE_KEY',        'XOb|3Pd;`fMy^=0`s]}.[wEO1^j#WOWN-DP#Sl&g:VrVT@![LUD^`z0!NnZ#`2l{' );
define( 'AUTH_SALT',        'm?UpDvxcJrECnFAX4Vi(}89Q`?|@x=|-N5tIH;Hetok}h@>+vBSr^()E10M%AJ,X' );
define( 'SECURE_AUTH_SALT', '0g*L|&d/hLtW*w|cE#/e7.Ubct6@ukiKrCY;`M8s:#r,O}!$(z^$g${ig}||PX/x' );
define( 'LOGGED_IN_SALT',   '~UzIYe*5bTZ>]kfGd9QV:>SO)42l``Lnd>%@I#h^Yj`]S>UJg,?0VkXC%$~<eg >' );
define( 'NONCE_SALT',       'RIsJDKt?q?x]beNRn<6~(o+[0fPXp.$21]!P$e3)uo5xC$<f)7rJk)}dTCU}nP5c' );

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
