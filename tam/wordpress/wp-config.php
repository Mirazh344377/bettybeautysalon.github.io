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
define( 'DB_NAME', 'db_personal' );

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
define( 'AUTH_KEY',         'gI|w.Sm}^[je%N)&F! @.SS_sYJo?Re6/.J:T4~wrk4>n4JK@1j.a)E7l:.sy_@1' );
define( 'SECURE_AUTH_KEY',  'X!Y=r1aO3u@#B)h,U.H}Gd(.bm;V}@<*Ofazv_+oJoKe*;!HxAowj:to!lwy]$6T' );
define( 'LOGGED_IN_KEY',    'qRSBqEii78vHiF`gzSu9h21/GH9J](JN8w^Guz#W^04G& Bj]vh#hRmcYhSI(%DX' );
define( 'NONCE_KEY',        '<>Nr`94w?Ljy+S,$p^uo5Q0p!h0a q>}rCjCL0T `k:L*VszoNtteU:-KRGv5Acr' );
define( 'AUTH_SALT',        '<Q$*AcHlMtBIv+l!(c0>Eh0n[8jA~ff+zV,HWtAycsHM&/Bic@oVL X[o<IzuYs7' );
define( 'SECURE_AUTH_SALT', 'L8E[z&kFj3adP{>|6c@pO(5eZ9B8/juE-&6c#aQq*ycgUI+,AW.~!<.$/+#m4Z6J' );
define( 'LOGGED_IN_SALT',   '=8slSN{cp(lt.aMmj)n{*)`RV1=QuOIH7tHG7b?e3F!Nc>Gd=EaB|[J&NAV5&fVN' );
define( 'NONCE_SALT',       't^^V^?RA|` VSrEr4/O6O4Xv.BE6){mvIm+xVdc&FWX1v!)=04rV0[wN6o3&!Z`<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tbl_';

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
