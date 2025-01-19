<?php
define( 'WP_CACHE', true );
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
define( 'AUTH_KEY',         'PfB<8S`-{ Sn!_}.Y-e#(w9-M%z8~NXq04)m*t%2]ri*a<<vzAC&#ulI27%@4/fa' );
define( 'SECURE_AUTH_KEY',  '^ m agkx3I(a>Pd=TIJFn rI]oK09Q5(N&CtU/u<l=>l;EyhOdr`9muQ/qa9b`@h' );
define( 'LOGGED_IN_KEY',    'uO:b,{>OTp.SmOa#q7Q!1$XF()1)Fh#/8;cN|q`;;gLVF,*D=4*a%r<mfhGMsJ!Z' );
define( 'NONCE_KEY',        'YWWJTE#^ kQ-43ea7&pToyc/qK+B=!!^=5qL!RUq, @E#q6/W`jD6@ +%E R<zSD' );
define( 'AUTH_SALT',        'wIeal_Nk!ot;:$jvg3+IkP>jx~xxgcM/gK0Iu<0?PkyXTwa8pIT}S%J<lHX%X$R.' );
define( 'SECURE_AUTH_SALT', '1lRVvk5bh>%sW?cuJ}VJfF*3kYzAU>S^6D-%z5[@Rf_4<sC_nj6[Y8jh}FV=.PXQ' );
define( 'LOGGED_IN_SALT',   '&7i*K7;sc0Sn7G#h;xy;BJ_dB]LH`#nJ$53+0W]Y}u2>/KbcXyLZ&&D#$.P83<)4' );
define( 'NONCE_SALT',       '9~c}h$3wXe1L$dZSY5I7b@PO4njrSEPdC8@ hhu~G$RZxy7Iq~o^ZYg,oXC]w7tx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
