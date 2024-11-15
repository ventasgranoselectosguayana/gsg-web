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
define( 'DB_NAME', 'gsg_wp' );

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
define( 'AUTH_KEY',         'P,UaR,yY$,>lY^?K$DCKI#j|1{Xk[`O.s?6j+^M4BJ,wd#9,Dk[(qWHM%6iS>sCE' );
define( 'SECURE_AUTH_KEY',  '5;n4fnYi^tQV~;014u<buNCrT_n^K_Rc>/zh0@>9sxs{^!sO2R< FIZ?_Qf_9/fC' );
define( 'LOGGED_IN_KEY',    '6kgGeA@;/5K.d/k0#,pU{zGAR8IxHEQH]aom~<d5c(CX)d&71{4^=kr:#xX%B}N#' );
define( 'NONCE_KEY',        '_J{n*lC?^8]:J4rufFzw#k0yJ,LucKtEQM{FOGonx+2qn@@&E_[Or2/Qbdo@QhmL' );
define( 'AUTH_SALT',        'GXt;H(jHPS*079NZG_OA4MYnum3=WSBu}=d3.`EsaD$$-[DRY?48ItF=t9}:646F' );
define( 'SECURE_AUTH_SALT', '7ZSv$v0*=TIO[p;ZKX:H3FPCT>E!%%?n~FYn[<!5(LK@=kr#&GqQz_xAN#7>EUkx' );
define( 'LOGGED_IN_SALT',   '[AG9E3WTz(YH|K@oTZW_ p;o66!eyAK4@= wb#f!Ec-<ux=q}5ixu{tp`t!qJ9G,' );
define( 'NONCE_SALT',       '{DRm5K`Bv *2RXr+>/- X>R;uc))z&ChyXspw+H,8`>#!fpA`7m)rSY7tvuH=O+l' );

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
