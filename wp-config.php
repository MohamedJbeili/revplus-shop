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
define( 'DB_NAME', 'revplus_db' );

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
define( 'AUTH_KEY',         'IR3sB:zP<eMiBI{PWw^z<u8r$Uhq/YjnBO,2]ta:rJiaj)yr,Qlo)+xZYbE].FP*' );
define( 'SECURE_AUTH_KEY',  'O]B+Tp&:LTT4C_L.dT6.}IZaR~bhqg8uB4c|8aIs*~*Tn#?%}0_Z[I]j{}Bx?]|t' );
define( 'LOGGED_IN_KEY',    '9WZUaA>-Vas# yRVl@0m.ZG{ERG-O[D}GDLCqh(krN_}&a+uPMZnU{8jq|E1lC&C' );
define( 'NONCE_KEY',        '&tRyHkvf97.kh%rQ.}3_Omy]_Dq>i1X9RO 8<Y6KX<$8J0/&[wjKh3uZ$sSTZV&c' );
define( 'AUTH_SALT',        '&Y5;uTgZ)GPJj5Ae3AIkY4J!.3:7MWzj (A&o4_Q9A6A0|2mfo;YaFv.#fggxd2]' );
define( 'SECURE_AUTH_SALT', '1-u2oo8e5@LQ7:7+A?zf!2/luA{_LA|<.ojj8phe9Phcvv[MqsRvo 39*|Y%Hhz7' );
define( 'LOGGED_IN_SALT',   'jz.I7&BlqI3evt1x-1[h?4iTLeWB!XW+~_Qo2j!Fc~!TESc/+UfJg1Z[i1^>YO|B' );
define( 'NONCE_SALT',       'xZ@fmGJ]d# VkpjI J!<g-q0~aP=#{*M&JVe%%$~Of_vA#*E8_@5eyn9{!abf}cv' );

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
