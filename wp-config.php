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
define( 'DB_NAME', 'acic' );

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
define( 'AUTH_KEY',         '5M||;@q-Uz;p^z8X%`LGD)W-|g]TJW<sG~I>Uw5ZrFZDGx1#tQ2f0I=^)=T>&<i1' );
define( 'SECURE_AUTH_KEY',  'C%:NIL2hBWG3?qP[PdkO_ag6@+]I:Y=%kHW3gx3T:[Q*;z!T#.H+ A6AX,eYe)95' );
define( 'LOGGED_IN_KEY',    'z:m,rV0MJ:[o]uTU13lg*p$e~j@>Y[y,NHHEL?1j1[QL=%IN=3?k^r$_`vholZu>' );
define( 'NONCE_KEY',        '%-U>NhjlV8BLGk`SbHD}4VWjWFrEif^6ajp~GW@+bfY`Y&<$%=_.:Z|E6-cc/1%$' );
define( 'AUTH_SALT',        'oE**e$CSU0LffXI6%rt( Q1c4N ]%22b=L/p@o>zl8C391FAP_cwA12x&W-n?u~3' );
define( 'SECURE_AUTH_SALT', '7 eSr>ng{+d<3GA/v$yz.P2Jc7&4-U1S@Q%z0YFBTfF 248a{v!fFg_RztC?+-BZ' );
define( 'LOGGED_IN_SALT',   '&COty05E5a_LJ}DS%G<rDHhI#<Q_2c@m-49|N|y6k{t1[#S<jb>3f!={v3!r7PE=' );
define( 'NONCE_SALT',       'pNaSga-&_*?fFrC1X8i@m,Q=Qf4#wi_T(nEWGIF*+sjnp}n2`@b(9P[eSrm5jWgJ' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */


define( 'WP_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
