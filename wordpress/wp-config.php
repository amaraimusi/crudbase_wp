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
define( 'DB_NAME', 'crudbase_wp' );

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
define( 'AUTH_KEY',         '^>_y@>}ZKM3Du1Yl5+*L^-=QfEaj,}X4@!Dc 0p?}]Zj}3Kv^)%_0epVbnd:HS(h' );
define( 'SECURE_AUTH_KEY',  'ENfC*x 1!1a*fAVi_<BRB,--#},t+.3r&7]>DLku~F0r@0X[MUL4!19x26yk)$yv' );
define( 'LOGGED_IN_KEY',    'kk CD[V(Lcf|A ,QFp.qXv+Z4Z5FyhK+2k,]wSHQ)%u+5L:E5mlpz]1BN4MTo3L-' );
define( 'NONCE_KEY',        'x *:ZB0LxVirz^2USRT-)-jc6v&Z3D u2fUM1;^oE03U)]Zm&;0LqpHSt V38SMS' );
define( 'AUTH_SALT',        'd!_0m%e^4{~1(peT.%AubQfS-irj*FWnv,lwTZ/>6-9_%~LQl9I$OGA`. HRp3wQ' );
define( 'SECURE_AUTH_SALT', '8^|S7`,A8et<6;No8ic4Zg{h}v&;lDJrsj>Tr-|g[ zC/{tQx!P4I9Ke1Q$}1F^I' );
define( 'LOGGED_IN_SALT',   'D[WFd^`j}aN~m/t9`#J!G!8Rlar>-*k]1/.G8*-@s>n/,Ik0h%JAjHkp^K[r5/}1' );
define( 'NONCE_SALT',       'Q+z]Bf<~F;9v1SiD^8j ;wn2tm~RlZ;8I%sDfG/.-^`<sna3H~nyT/.a~@0Zp8Fa' );

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
