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
define( 'DB_NAME', 'wpbd' );

/** Database username */
define( 'DB_USER', 'wpbd_kevindiaz' );

/** Database password */
define( 'DB_PASSWORD', 'laaldea18tomate' );

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
define( 'AUTH_KEY',         'V=4[N,A[e+ hP:T/i21P[mR#sQ5yo&yhOpA{a^ecYavHD|YhNwDvC<TXH,se:EoH' );
define( 'SECURE_AUTH_KEY',  'PG.jx;6(sVAX:;URBs BG} flWftR3Y>I#4rhmGE=*TyB/#l:R}@fkZ]mAy_Z]l/' );
define( 'LOGGED_IN_KEY',    'ynz?..w&UEYhl1g9WpQ9h_7r9Ojl%Xffnqy;Cx$|O(_Z;v8*T4cVA2>CLY$?sTZf' );
define( 'NONCE_KEY',        '+cD=#R&P*y78?~g_:b[:f_$)g&UhhwN(7r~,j+U6Qv#r61v(vM0wjd&|*]-{SR$l' );
define( 'AUTH_SALT',        ',o4DDkxWp*G#]l+3S26};t-d+2eC;S#mkpYUaR5/P&PXx[8b96kmm}~zBT-_ICOd' );
define( 'SECURE_AUTH_SALT', '5qiGHs+XTvoBgaiwO^1;aG9q:TkQfd0pwV`3]8VD3}Z-DYl&|;M<wzW;)PKl?f-6' );
define( 'LOGGED_IN_SALT',   '.H7de[B!X)Ncx)~kA.aBw!RH|(X&;&h,n<E;94u0},hPysD.Kyc-0tlPxMC=kWj3' );
define( 'NONCE_SALT',       '/}a::ZU3Uv+HD^ZMw?}]t7~J(3w[qM{bIhambNTln_H:_S7ybdC!$QjRd/}` wAs' );

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
