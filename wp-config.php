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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vanced' );

/** Database username */
define( 'DB_USER', 'vanced' );

/** Database password */
define( 'DB_PASSWORD', 'vanced' );

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
define( 'AUTH_KEY',         '9kVyo#,%<w~Mo_X7TUBH)P?het%!//grV~=692J=ezFTiF|t~Ye/w:Ff3v6&qmt^' );
define( 'SECURE_AUTH_KEY',  'ny@YN~XaM=QV  CT vTd$Wubn8&rJY]^T!)++2G2_&gk>;&&Tk?PD90g{*DWa^4g' );
define( 'LOGGED_IN_KEY',    ';dr8Q6M@IBr#_.S14B30OfgVIWlg6GIcQfY*nPe?IImW54PP[cj]A(n<|.H21P:k' );
define( 'NONCE_KEY',        '7A3o(mxK1CFrLXAorC+D5U_]YLN.|kHAyh-F=Fg.E`W*kxeu=O)2c~E^6M-P!ow,' );
define( 'AUTH_SALT',        'd7HPa&2WzIA4T:A?,!y-7Vqa4{!HOwqHz+=~ xK9yY;WE/5K@GK>U6rM1a-^LYJd' );
define( 'SECURE_AUTH_SALT', '6QjogNT5VQ$>s;mq]bK%.Q/=t?nVt&3nqx+:iNIRC|i{W8&1/1(Lpbx^.a@,|:%D' );
define( 'LOGGED_IN_SALT',   'E3#Yez<H{hqZ3:Kx1M#Hi@b!CAagSw.fGsMK6U)|J}YmT2;k!@&Tx)-2:9V5+-cg' );
define( 'NONCE_SALT',       'g)-L?pvd<cW{|uQ.>!)&b%fHL>37NLDW18`8IrHy%-V]?1qx$N1n@vF>_,44WD*y' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
