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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '##w_zD_e (bNLa_B$awnL[IXmJS:=o?G,3N8kysEodh t/#vT^u):BU6E@<n5sZ[' );
define( 'SECURE_AUTH_KEY',   'jHLMtZ{7}vLrc`rBXZ49/|a`Vu:<^V)-T>k5y^/o*X,d3b9J4Pefv_.){xy!y}+a' );
define( 'LOGGED_IN_KEY',     'QZ6:x,n/4`XEZHbIZ2mG,R_seg|.Y~_pb/#FA}!X)RkEg}<$-0c2.snUb:Jp{5oU' );
define( 'NONCE_KEY',         '9}GI+8}Lpkmi?TZ*k115*oWd)Dr< 3i0{F}z%bV&R3_V@pkL~Yr1t^]K-XSIK!I;' );
define( 'AUTH_SALT',         'bF{b!l&l,_i*j!fY=fKIjFju2Q8]$$fi)43^PQ#` J[g}p37yMnRyndSxx5{)n8E' );
define( 'SECURE_AUTH_SALT',  '/-+9%0hF+3Fep G}6~DPYN1:m)o[T9(d>Ul^<HetXC*c8+()xDjOMw}_Kx?[c-q}' );
define( 'LOGGED_IN_SALT',    'eu$rNdngdexxF6N:h5CR($txn|`YuhPcFaTE?s-Q<_v(>ZDXe$2VB?VXo/YpPc*U' );
define( 'NONCE_SALT',        'sDi[U&wj.N~pM7Jt^$TS^@pd&~y&YX5i?d=z;&=,0k_Sk5xS<=Xj,=iwr+?l_&.-' );
define( 'WP_CACHE_KEY_SALT', '%locC%<<.!|^u=ehNzbpF#L077hbmisUNL%|(={-]K6@m~v CmJP9!pQb|5Q1WP5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
