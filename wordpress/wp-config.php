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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         's:!0w0k0vN:4<tO,Z:c@z?|U1l[G#2Jk|:<.F{c)=W`h~R6G{4V|/1+PKqaTq`7D' );
define( 'SECURE_AUTH_KEY',  'oS}(0mXUNwMd6E.F|A,P$f]hWt<WPLS82I7Py7[lwxI3(WNZ?<mJk0%4]Kq~*UG|' );
define( 'LOGGED_IN_KEY',    'X Zf^$T{oLsqyna-X{y(B[C:BGQNtF+<S+S%MAHy<j3]FypDBAmX$[|u0}[bN5W_' );
define( 'NONCE_KEY',        '=VFI>9*2Hjc7,/O<?_ >+P[5(Y,z{eBQq!9L[Xv>3SmYpm3s/jEvQ&58b1Dk.wPA' );
define( 'AUTH_SALT',        '9LI.nFH!y,:RUl~r-4y(M6;@9XXy0@=,A5$5MlW&/a,FEH]$K-kVu$bcVjolhO30' );
define( 'SECURE_AUTH_SALT', '&rK^o4b,Fu{T{-O*CiBN8ri-!q:^7jm}85+`_k1(Sk<[/@uSpnd}vA@TP)y:#t^C' );
define( 'LOGGED_IN_SALT',   'KB=D%XnOqm!&.o#q?|Jt@#@+AR+0=a3%V~?J.wj%s2[0-*C*yAxdT1:v:~-??@#~' );
define( 'NONCE_SALT',       '@`kKKNa7bwxHGk$8JrGmsX:I3rk[?$_v``e?K^+J:xcFvaP/=S@R)etM}]5`FPtd' );

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
