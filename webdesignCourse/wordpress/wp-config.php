<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@SZuH?)yFV{SJ*xe@Tf)1/%!L&Mdo%gEV?(9_h^`s_1zx=!@f`B_V;]Ei38@qOSt' );
define( 'SECURE_AUTH_KEY',  'q)+4^E+3pcVuBEZiaD&3(8(s|1bWXZf}UzO_#w`M[r>V~ YZo[R;/&y?]{nqG*2u' );
define( 'LOGGED_IN_KEY',    'vaF.Mv}(p6j_VO7kv.Mwu/$I%OxnCVRC>38k[taoAd&tl?&4,c|(nIu=4.]gFb,W' );
define( 'NONCE_KEY',        'c`@U.48&(e 1V-w6W;Z/X{6A c=KLpcm+(j;HvIwd#a3>Mxn.U3?}H$>,t_%9EPI' );
define( 'AUTH_SALT',        'Rg=sub:.N*8dYa<R_<h7Ib|u,IAZ9w -Jx0HTYQ+IX6u`+_Cf6?dSqv?E5UO=gqX' );
define( 'SECURE_AUTH_SALT', 'Ig`+xPy^HJ55!B<?W,P?}8-GkBi&Uw.GwFY=yQ$VC!{rp`!v$4<l=$xb;@fnGCky' );
define( 'LOGGED_IN_SALT',   '[hL(EI[utvZ9^xNBXI gm7oq7AUu2V@p!&.8?/0A|&MHZ`-(xFJfrQ]U*_,2;Rtb' );
define( 'NONCE_SALT',       'l,`H5yaLi6],8Ok:|DL>R=?}2+_N(S}iR*5gDW5[Fb[3Ic_kNdQ2L{Vd7#qC![iL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
