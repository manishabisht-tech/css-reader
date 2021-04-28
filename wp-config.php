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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'css reader' );

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
define( 'AUTH_KEY',         'uxif:nwxZY?^Gb&SQ*6x~#Y^E<tl2sq7lV egytu^Zl[KNWCx&+|Wdj.}2.2?Lw<' );
define( 'SECURE_AUTH_KEY',  's(kxZD_P* }An@DvS;]Y[/{pS*+M.Im~a:8@Y*C,x]-(Gux6Y oL#fWcDjhy~v-K' );
define( 'LOGGED_IN_KEY',    '~w-p%`qClZ&3a?Rk}5nEmvb8JZ8RUTr=-<h^N+pQaT0(dN7G`YBbO0t<PR=NT3cm' );
define( 'NONCE_KEY',        'm@1Eo;2!UfU;>}2Twx|vcG|Lqb(L}0sNevG1/UmUNR_^YUWPX_bJ$(sqs5`fopYh' );
define( 'AUTH_SALT',        '!1$H(w=uy@5bhBbhvC+*# ]%bE G=WP=O^6h)ap68~vj-R;Nl?TyDv)gl/MU#0=r' );
define( 'SECURE_AUTH_SALT', 'z,}]KCIYL:)&xg!v(zMgaJHB+Db%x[QLD2vn2ri>hB%hW6UmryAHl}lBK0(e_v[]' );
define( 'LOGGED_IN_SALT',   'ZNWh]IS_2@2kGd8u]RmsKbUY@$T<!*bDrE0eFmB8Zd4,k[Zxd9~~(H$t;ex )q6>' );
define( 'NONCE_SALT',       'DK1il-a&)2`&rV:RUpXL8k{RCgnKVRd>y;r[C-rP2D4EKBx_F[?CPaT%62w8*jZp' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
