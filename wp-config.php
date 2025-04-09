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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Irmxo*y0rSd(<a/~LN]{6,:DCCWbj!c*xn>/<H]v:Y3uH5lVg1WqTBqtS*9([5-i' );
define( 'SECURE_AUTH_KEY',   'R!WXPK[+p:KJI{*m=_-Bw&{Ozz3oy1EZLX^LlUjd) !]BP<Xmwo.}Pg*Faf{-|bp' );
define( 'LOGGED_IN_KEY',     '?TCr4*=Ak6 F[scAdkg9<?2D4<3eQ!YsyT)+8a8h2=0M9r}m,s[E9)rHHE~f/J@u' );
define( 'NONCE_KEY',         ':m#NhH^}&a){!7b?4s^>[($fN>L/NCQV!HNiT),h)6%GoF=&a;f$i>UfK8ykH4$K' );
define( 'AUTH_SALT',         '@StE5mIh:=/uOQjy5zB!fP5_~ibu2 dv@-_z#BGpY@(e:zoK CHIYm8XD2@ee[tS' );
define( 'SECURE_AUTH_SALT',  'WY;LS( hzpoYKj&fJg;7rQvYx<;%Dg@<9&J>+~n!o:[1$R~W v%zN!,5QkscEh`_' );
define( 'LOGGED_IN_SALT',    '[I1{78W=z^$&sY!?Y!9sBzrgN:}%?vYY2~^Z#=q4g2pTgeil)&/sIoGiplpxQm5D' );
define( 'NONCE_SALT',        'o~:U&#ZEg/AE`44sqY-G6yog{w);hSq_(3y||1L90Hxbt<lL6w06Z]vFMh)9[Y4V' );
define( 'WP_CACHE_KEY_SALT', 'Sze?Tv<zp*y7$9Eh(9]uO<Nm^]?t_uTN~Y#[{BsonL%Q%;m.wK(Cby2|y.SyZ<cX' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
