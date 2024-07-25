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
define( 'DB_NAME', 'eirerobics-one' );

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
define( 'AUTH_KEY',         'g&5*upb6o%e.j?)H,Vjr/R*MM)Xd)OD`eFH?82<9`@QLkShB@UCl3+/,@4!dmbLC' );
define( 'SECURE_AUTH_KEY',  '@8 zBc6xe3w+/->=0 swx8l}4|empiv*}-&>Uj-cGo~e<R?xY<7l[K3lkTE+VU*N' );
define( 'LOGGED_IN_KEY',    'Yx#:@kraBZ8h~%mm_5`_WZVfY[r3y2{FP;}^_D}eUm07u5Jy:|_TzL(K^DR$q)2(' );
define( 'NONCE_KEY',        ' d,OR<g;NN?kZ_/El*z)5w.,s+ZR`vY#bw:Mvi[YrKG<rN?C`4MMx5)~i<.`@5b4' );
define( 'AUTH_SALT',        '{Go_QjHep;[`ijYdn_7k5zxv05f3L3V&S*TceiLx^&ePN03{n4HE?qR;xmT@8u25' );
define( 'SECURE_AUTH_SALT', '}dw|[+@K<292zvxJ<pRw UK6+bc7^a:r39ZK6Ch}@=%OXupg8E&Eu>`YkMLE=1r^' );
define( 'LOGGED_IN_SALT',   '4F#J?ngYq92@=;X|HqnKfXGc+1`tP.W;dude?<IQ1-HJ/zxjOjSU:1W6o.eOHoGE' );
define( 'NONCE_SALT',       '-<]?yi[YV4Dxm]uZT9)c3G6z;L`QnH5e3:r}?uN3F*s#Phe~hmSz`!}-;O3zdqmc' );

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
