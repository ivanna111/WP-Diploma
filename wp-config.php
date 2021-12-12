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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'mKK]S@ys9o#JCF$~n&qH[aZCZ[Qaj/68ClrBD=aW)G8sCrrf?x~2uW.Q/Zoq)Ja+' );
define( 'SECURE_AUTH_KEY',  '?tkg=`LKtBTp>m{^=rguGv3Tuxp_v1K&JI77]E8%f{)Q?Y^VXv$P|AB2>Y1FWaiC' );
define( 'LOGGED_IN_KEY',    '?Fu;<hJ-G@px9p8eyt{sRl_M$sE[b)]9VS1AH8T>g4d P-H(B xkBEu5Z]BAc-s8' );
define( 'NONCE_KEY',        'K}.kV.c/{Twl@ma6lX(|(vGLk[!k@r7r;+m~aO~F-jNfeXuhE%W+_WA744dk!VZa' );
define( 'AUTH_SALT',        '5/^Z4]6O^7_} HIFT,DAM(2VL_3@(/5c^MgA#OkiL,;phD6Yxvi802J#j}`x!g$L' );
define( 'SECURE_AUTH_SALT', 'kl~>oC7O[qS<.<V*iVq[VZ+*V)>I-=XxKq/V(Oh{)!epOwji5ykO4vy-7XZc3z,.' );
define( 'LOGGED_IN_SALT',   'Tr3kA&YBG/Bsoe}m#!4IzF1KD&1Z;|+d;:3KR+NJ@QU{PNZ6zx&Cg^dVdH##~1a=' );
define( 'NONCE_SALT',       '~uv_5~TN$-t[qnvoMNdRC-2}Vw7Xg#p?pzqZgjL*4LIl1(MhG7v)pDATI_b}U}H|' );

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
