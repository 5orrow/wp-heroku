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
define( 'DB_NAME', 'cleardb-symmetrical-58093' );

/** Database username */
define( 'DB_USER', 'b7b8c0b6407af4' );

/** Database password */
define( 'DB_PASSWORD', 'f33133cf' );

/** Database hostname */
define( 'DB_HOST', 'mysql://b7b8c0b6407af4:f33133cf@us-cdbr-east-06.cleardb.net/heroku_3d9940f51911db8?reconnect=true' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'DD=f-5J+h?I=$+EC3QfsCF@gHN4UMSuu#>u3Rh}wq3@){3XDo!sWh!=x&Nll8/Eu');
define('SECURE_AUTH_KEY',  '#[`U([?N!L^=x+;lvc*N,=D!//jv;bB+4GJrHDQz<.tNmQcn_/X1;%Ftx*a+lKU:');
define('LOGGED_IN_KEY',    'g$WB@69f*=6s:2^9$wfo[@K]_V5G 7,3r]N7Gx}I0I6u1~nW]^xL9e7v9-<o7DBX');
define('NONCE_KEY',        'i!&3PDjyUFYb_yzzo{zh@E9 Fid )@u@KLOVI8<hj>m16/HUr GOh-k|P0} _igg');
define('AUTH_SALT',        'sfH-TrG-5+?Z:_>2`$s-9lAI[p.zz6`pP->xlDd(;X!yAx;Pt)9pLP|[y2^,OTv@');
define('SECURE_AUTH_SALT', 'O||4P7Z~yb,FH<>r[v=)#C#~fI#^;D].5>SG($k:laMR#wwHy%HVT:)pHu[t~Xm/');
define('LOGGED_IN_SALT',   'jo_q}-XXa;9|tEYqJI5>B]6pfFRb_L2O!?0rcWP} T,WE9n,TSz^qK{(CoJmm*@5');
define('NONCE_SALT',       'GLeXHBcO,@Gd5H)J0-RJ0r7nIIyC)riU.cjVhBOAT6{+K8&WeM^MK& 6a@%B|zjf');

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
