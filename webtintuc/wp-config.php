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
define( 'DB_NAME', 'webtintuc' );

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
define( 'AUTH_KEY',         'lPo6i:y6D_p$po2>8BMz4}BI`THCr-E:-<.GP7&Lv[]=h-@DOG;pjz)yDN6/%ce^' );
define( 'SECURE_AUTH_KEY',  'Ag87^8^d?%KfvY4h<f+OxZO$w._^s//MBD:;yM6+_~%Y4>W#*`]4H`~;+]?DH,rm' );
define( 'LOGGED_IN_KEY',    '=U1/P% %J/Yp]u]IS2$Zw>2}p<-ts]7!7N=;c>zAk$v%@HiLs^H,oeAteY&^PWk.' );
define( 'NONCE_KEY',        '<>ch,>]7X0;OF.:Qf$YXFdJd`$7=F,g0|qEDg.P[cg+5l&;:e:952Q3O[6)_@*:[' );
define( 'AUTH_SALT',        'nl3Mo&2JPuH_30yY8h&EJF7qyj=D!7h V=(>Ht~MN/kj/k?8Rq%?[`:`bG^0g%=w' );
define( 'SECURE_AUTH_SALT', 'uRYZJI%WsK070XYlcubIsWRR?<YAL+4(HC,pO,SgwHG>VjWL]^9^jmU)Ubfo@Ku5' );
define( 'LOGGED_IN_SALT',   'S>[EQlfc.um?C@~Zv tW>5l&IpPpG)0F^r_nfG*mG[3<yj;17on>W!MY~.wIvgOn' );
define( 'NONCE_SALT',       '.TCwKtWU_x[cVqn9i,|t*MJ,Ar*WGsk`hU_/*uGX}WLVZo~Yo`qUR9Q*/5V;8384' );

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
