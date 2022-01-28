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
define( 'AUTH_KEY',         'isO%*(E,QL{;SH@upL$g[IictD^)<GI~}V)%:%}z?B[q^`fLY%#knm3`,NEf@yg-' );
define( 'SECURE_AUTH_KEY',  'lE`,5HyZ E}be>rWY3tULD,vK9rMymI9Ou/Glc)D{Pe .^txBr|ES.(_Kb%X2_!N' );
define( 'LOGGED_IN_KEY',    'Trm*.X8Y9F3c+t2>F<={%dL1ELp~)%,Een1~:WzL+{gs,l iQ[iGS82R0nwrQo>R' );
define( 'NONCE_KEY',        'o0hOl>RZUzW?C;mUsM9-r} P<XubP@ =-Y(X@:?+Jho>zmXa~3hsI@14Cp,QS/pG' );
define( 'AUTH_SALT',        '0Z!KfSnpQCG[_cZDgzmG%Z0u6c7/;d?d0Or/20)2>({M_OoaB-wC+GfEJb}iz7G@' );
define( 'SECURE_AUTH_SALT', 'q_qh*Y#fys!w-zb| 1cY67CO``=Pa;Xg&+11!rrA=]l^ddmTrJmv+aN[1s-qO!5i' );
define( 'LOGGED_IN_SALT',   'ZruK6O*-.ExB=<TsK5##?)/8A)Z[kMx$C%|?QMt!}(ZXQlGtp*|?%KaZf~3/EyZX' );
define( 'NONCE_SALT',       '7L]hB,+r%-eRkidGieyT;C_l8JJ7.ZH({)(-1lYGKH+.E) d ydPpJK|=YaEX<f`' );

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
