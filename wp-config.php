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
define( 'DB_NAME', 'dbfauzan' );

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
define( 'AUTH_KEY',         'frY@Pl6Xh9yr{/l0N3D&}U^o[`B1dPN#Qbc))Cw}*W8&I|xhS;Q>>N:Ncn<B>*0,' );
define( 'SECURE_AUTH_KEY',  'hgAB3z{-%AH*m (QD~?rSAbqUWm?Pfzlfw]|7_}24XvA3~+1!_=dc~lS?V2#HBG@' );
define( 'LOGGED_IN_KEY',    '+IM6?~wawqg8*DU ZSwKpYElxYecw1I({5o&7lYySSrb(Km++=UW-#h@QOG5`?no' );
define( 'NONCE_KEY',        'l=%uKKa f$(r)cNod8c[Px_Lv+MG.r,{b8;S>FgpOz33abQ58ZZ+l@(7*1|F1_L>' );
define( 'AUTH_SALT',        'M$t_HwkWcd&|qG!x)qV2uS$l4%/eNR,DxRHccPx>Q=q1{Si.~l/rr+53k.Q7@1kQ' );
define( 'SECURE_AUTH_SALT', 'i.ftOQG/wI: VuP9Tn[RZ5?*>PWkjPi}&v+f]!2}$* /Lh3jh_n^c.UL8%-s+Q:|' );
define( 'LOGGED_IN_SALT',   '?Q.<FudYpo7RF2<+4y{233}eo8qH@Dl4SGr!NuPhehL2?*urCu@tpGRoe]N{0dq)' );
define( 'NONCE_SALT',       'i^+(Rj):3Zz@#3Y,S3:B=q]SU$1M~!v7sYtZ8r9;*1Y/YM8:c+2lTY(BVomYfqfD' );

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
