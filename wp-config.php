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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_breaf' );

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
define( 'AUTH_KEY',         '[}di7nO2}fZ7T<+#aANhR=vNEXrwLhD<0Qvf|wkcGh9 1`Icx}Y%!i2bQ*zYf:<@' );
define( 'SECURE_AUTH_KEY',  'GGEY/pDaPi9=BKrIdTsk?|i7FvUo]9qb[VkM#su~Msq.3*B$0PT{?*r.;Y.7]}cg' );
define( 'LOGGED_IN_KEY',    '>B.656]p]#Y/TbB0t7=Q;D(O%h^ih~v+W?S34)i<2;55:E?)jG%HZ,D2v80.2|Y-' );
define( 'NONCE_KEY',        'KlF;o. 9R?=t>NS:ClaW[(duZ,1-7JO,(.-M[mvOM<zTvx=-ZAD?$W}Pry^~A8s3' );
define( 'AUTH_SALT',        'hI6,Tl_!($^+_bbQ76a!BcJSZSj#ugZ>d}qkLJD$(8HETuRN0}TJ::`e97_zsM7N' );
define( 'SECURE_AUTH_SALT', 'oiI>Fxaohmym:^yF8,^^`FCj QFrWMPL0-R*]VH|:[a}TEgFJeiw-i3>w[tyc&nd' );
define( 'LOGGED_IN_SALT',   'FTXnTe1ec)TUO<.P?nW4=/VLV]gB-vu2PZ@d|bK+^RM@ +o?:C,Ps>n+]<-bk5ek' );
define( 'NONCE_SALT',       '<;ZYhq1UQ/1kpB}lHIuTuuAd^VChZdnBIxu/EFJT;<?4F.xn(84P|Q>rilz0Wv04' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
