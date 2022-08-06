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
define( 'DB_NAME', 'heroku_3d9940f51911db8' );

/** Database username */
define( 'DB_USER', 'b7b8c0b6407af4' );

/** Database password */
define( 'DB_PASSWORD', 'f33133cf' );

/** Database hostname */
define( 'DB_HOST', 'us-cdbr-east-06.cleardb.net' );

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
define( 'AUTH_KEY',         'igvWh%D-ngaqD*-Yf&q1Oep.ei47fwRcj/VIlI)2suv=@_!kqN{F@^|n5C$Ooa~>' );
define( 'SECURE_AUTH_KEY',  '#9|8Ky|QAKcU6CMxuiWDe@?p+QZ(zpYGPl4HN3p-nh+,UrBZ+Ty0`[--q)^:@@]!' );
define( 'LOGGED_IN_KEY',    '[6vW2D:0#qCv=s`gCsZ3s:D>!@7~10!~^THy(Me4n<qd%E7waJ,=7#[ ?$,63xUy' );
define( 'NONCE_KEY',        'mror:=-Sz1Pvi2{7JQdu8+aET@b(9C_=_l9lq=4lZ^vLm+<T2;-7bBOX]!58W}y(' );
define( 'AUTH_SALT',        'eJO#/h1s;EFQ7`15Aij~5x&piJJ[;<3r:]`(,^B8qz/n^VDL+<,l`;.xg0#6]S~V' );
define( 'SECURE_AUTH_SALT', '^tTE~HskyJN :MS^e7ZVYCRtdZX5W0bs/zJ.tmBj5@e/nPrQ:[QIt];16xm.z5*;' );
define( 'LOGGED_IN_SALT',   '/^TLEDXZ0%iP*G@LsQb)FKEG%aAtmft;<e&dcR]F#WCMOKvBc(mn5w6oZ[;;Yw4F' );
define( 'NONCE_SALT',       '>9fTx>IcS_{_.OsK+pjw6r}I[g+$x}~Y/XYWRe1Cdv[>+%mZ;_ qT&hY:<ijk0Bq' );

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
