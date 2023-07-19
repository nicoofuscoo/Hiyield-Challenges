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
define( 'AUTH_KEY',         's+;to7nrTV[]R`36woS^;}5B4dt,Gz`g;<nR4tR; WkAY5AeFvj;YFAC-DVHgC_V' );
define( 'SECURE_AUTH_KEY',  'p.;81g.:$N!0</@8]Qb,,e9Srei%Z1>05G `:(nX):hM&l2,,J]/]!X@kVa+)+I#' );
define( 'LOGGED_IN_KEY',    ':<6%C4)#z(7xWP.:X)F&L+<L#1orI,zjJPw= 9pS^T/.cptz;l;t/;v|B|j]}gr?' );
define( 'NONCE_KEY',        'N=wKUr,w=UpxOu_J_:d}i-@}P[IN!JoFv9Zr*!:2R}v<kcd-.y]HJ`[s`_(6DL@`' );
define( 'AUTH_SALT',        'S3-Xmg7[{rHYy7rPa+!z&4/n[$SBwWB%w&lF(nbXP=_oJbf_exc^%uQA3i1_]_B ' );
define( 'SECURE_AUTH_SALT', '}2~@J#Y%p8U_57/:gHq38e(>[VT6}F#EL~bN%qPy?fe_.PkGd85h.]b$9OsN#:NM' );
define( 'LOGGED_IN_SALT',   'Tw=W .KWk5~Hg~sUq/=}K>8OiCw.zo(nj(P^-AinUSj{n`c@L^*34Q:ruKg<:C|w' );
define( 'NONCE_SALT',       'F|v^4!g8E~ijFWP%*;x#/_X1=L;>|_}R:_16T4} ~fRq^tWQ~^7W @3+8U]kop]&' );

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
