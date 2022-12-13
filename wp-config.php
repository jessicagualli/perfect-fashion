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
define( 'DB_NAME', 'perfectfashion' );

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
define( 'AUTH_KEY',         'Kn29>K*^_; FHM9k,([I;CF9r^rx~yNFw4R4UmXmtxxxIcAFzGB-Xk:V@5P~r>[P' );
define( 'SECURE_AUTH_KEY',  'e(m$lyF@Z3`:U{%rB5Q!n1ys@~wLWa30LH)hR~ VvwY<=px.njOlPJ#8)q7v<#K5' );
define( 'LOGGED_IN_KEY',    'hZLJMb;NwDI,>>xn& %?_W>b%tjzo6]51 1Q*I9f8aVc8M#=5jI 8My.[_48hsUe' );
define( 'NONCE_KEY',        't@vs*3zb,b~(H-L@7 r{%AWvABPl]qUSGM]6E(.@dtV2*lk /&HSZQ|KMc])Yl-%' );
define( 'AUTH_SALT',        ']8EL(a=B[IN`V(ZUXvGO[biLo2eUV^CvBN~?2WMhJASU,Sqm/}0dyF_7_jR$E3$6' );
define( 'SECURE_AUTH_SALT', ';XJz46VYg}u>T-xB<=%bUFZ7]LFPNc&aP#l%R613_{l`DhXl]-QnQ|7VzAzNp-5>' );
define( 'LOGGED_IN_SALT',   'BmNX.nXDk4XcNk,c`Q*pT!9)O13Yx00{kkyDsHlGqj>OTtuUhPhc$:D1kKPh9rMC' );
define( 'NONCE_SALT',       'A^4{f+V$tE;cTUPX`y26W1pI6Jw-g [Y98Vz[uglW@hoOV0mtT2|4`C%bV~ebuIk' );

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
