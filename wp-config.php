<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u667606436_qDkyg' );

/** Database username */
define( 'DB_USER', 'u667606436_TkH9L' );

/** Database password */
define( 'DB_PASSWORD', 'jbrGvKEydn' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'G<&=J;TH 1t,&4EG:Cf4wKqP]71{X_7jIm6E#TeR+$@W^#Y+QjFrs`w;^IJrIjCo' );
define( 'SECURE_AUTH_KEY',   '-o4MsO}+f[L!+V+gO-WyMnw3Y5* W1uG&.?q~ujzj6S4=>+$Lh|!Rqy<2  8Q4!<' );
define( 'LOGGED_IN_KEY',     ':l[tS0aQ1@t>h|otIno@ej`MMHYgar,+CoNw%vg9wmy11cCea]d M?S8l*JX3nDa' );
define( 'NONCE_KEY',         'sQD+3<+W:[<a_&cwZK:0H[7o~k]R+FRhYfx5#>DIy?Em)<1;(hZ7,_s%{vyK>%;~' );
define( 'AUTH_SALT',         ']>8*Dn_OR<nm3oaNxLMuBs@L:a@Ujf$ja`[+5g#Pd8Ic_CgW$d`]r*5e=7ZwWN1n' );
define( 'SECURE_AUTH_SALT',  '<Pj~21eOn<BtBoWC,;v)2M0T&LMt#5t<*xm^faY9O<yC@GL</k3:D?LkUH:oy:$ ' );
define( 'LOGGED_IN_SALT',    '{Q= L a]hewES``P;}CBOz3@s~ue{Z@DqkH1,Fp>Slj!J|}a`#?-oBT@m)nJ.q6T' );
define( 'NONCE_SALT',        'fTybT@3R):)_=KEz646Pt%C_o2q@imHR_C.}Gea7F{Lg[x)|<r3w0@_h3jGEK2fv' );
define( 'WP_CACHE_KEY_SALT', 't8b)&tfP/U$orx])]{EXwnVoss8oB:>Yy$+,k6=S,gPHq,z(5%sXfWtP>U5M_},o' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '883af142c8311c1e90ac778abf56be3a' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
