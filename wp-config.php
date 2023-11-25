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
define( 'DB_NAME', 'SwiftWorld' );

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
define( 'AUTH_KEY',         'Ep;5?yK?5_u6_3U yZ@-s 43f7%k?kn8-}O28iyfGdE,o,|uiZo#Ht[Lj7vDNu9x' );
define( 'SECURE_AUTH_KEY',  '[DL[zY[w^Aic5>Mg~haJ]m$30kaW>[9cWX@Mwkv <:eNDa%u%Rwe5fV*pK0$&&Jl' );
define( 'LOGGED_IN_KEY',    '*Za:05aR:71SktG@Zj,d;:=Be9kY@cXx&&LeVN>IvbjnQUR0&J#PhfO|>p!I,3<d' );
define( 'NONCE_KEY',        'HE]7oAXI^>?D=/mkFoY1pqu}k6^zz7`_8+z/4IRIhm!UR~fs C<()9b-D}npP{/R' );
define( 'AUTH_SALT',        ' {:l|o5*4`(,/~6n%hu8dk,tk}>44RtY$?h$<8pjfj5ecwN3lDutwlEV%<8)2)[~' );
define( 'SECURE_AUTH_SALT', 'f#3SDMALJT}>M)QQ5Ug}!s,N#$8s4WXBs JgJ9C+1|hxw&ey%y{Q W l/w5%!+Pb' );
define( 'LOGGED_IN_SALT',   'R9 0*3&7]f?W5_KG;/(i$e)*x@J9A)7dcZ+H.ofi<yq?Y)Aspee<[N|Ca4>*2f=$' );
define( 'NONCE_SALT',       'oga9N=9?v$YKN8b&q>UM&#}%+^-kx<i6nwsaNl &$7rn75BHIf.Z$;1,7RJEZagP' );

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
