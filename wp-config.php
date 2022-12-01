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
define( 'DB_NAME', 'pengenngoding' );

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
define( 'AUTH_KEY',         'qR-q?Laab^hXnxQa[tpp|+u=vGV%|3M.8ZwOwp!NQZazR@:-]0.9@q7U)8 DPHx:' );
define( 'SECURE_AUTH_KEY',  'XN?Tr}@@uK(jRRF%ib#vh&Gt>?<qRTTD&$Z.[^{Ma;5j3Ev$H&}fR[.b!vhsx?$u' );
define( 'LOGGED_IN_KEY',    '(Ps8X-I`B2Y@4P$@/qO+sSdie ap&FJoydkvies.hje8iRlYN#IsXP`RE+y-ol_K' );
define( 'NONCE_KEY',        'yCc9xJ--[L&) Gb?4pv)f^jOIqW&-?#A+{TM<{=c*pOl..ci:bQ`d*!A-XvPR>>&' );
define( 'AUTH_SALT',        'cV=bOW_Xw=$XyL}f@xvf8w_%QpBX@1~ERI.3/kPEyu[7xG<y2=~z#OLGtu3n6n|>' );
define( 'SECURE_AUTH_SALT', 'h@rW8zH?A!>-.N]1[h&V>:wksQX1z^*F7hXts^tnb{5C;L4ucSEPc9E@%Y c@KD[' );
define( 'LOGGED_IN_SALT',   'vbvISOfm:+p*,^Tb%d+^D-uRqsY7js]W(:}!d@,^SV[s037^a(!foTsd>^wnp&Zb' );
define( 'NONCE_SALT',       'p;7v4&6CmO|3D7bATNDh^|<)Ox7x;C^X{BR3p[lofV,Y^PB UUSVokydLdLFTa:a' );

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
