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
define( 'DB_NAME', 'db_taralia' );

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
define( 'AUTH_KEY',         '*<_!Mq2L.`jFk&Oi%)P)^uCZP)sEQt8<#d<;[JecO@9MRID1xW)qSkwPoRAvzd6w' );
define( 'SECURE_AUTH_KEY',  'caC~8KPH9PGfPopvO~=8Y),4DDfe-9<T=OW/S[+,<loV? wXs*Sg^92t@+7PEtJj' );
define( 'LOGGED_IN_KEY',    'WfRkr7y%Kmjr,->qE<$S3Q=%+i#uPS;EcERZK}n_VCS:,5bXw*+;#vkd%*E01Xxz' );
define( 'NONCE_KEY',        '^z{vJat9/-rbxkMn,o<?GXYyoGN>?MK!9.w$$9fJ{%^!UZ?Lg5/!2>dQO hfr&t`' );
define( 'AUTH_SALT',        'aXDBcD}Hl]c0HH6 >y/Xs%c%%1KMIv$^x2%$u4!(QzSjc@BFr;&)26it}6pxGs13' );
define( 'SECURE_AUTH_SALT', 'iHuzKjLm$8j/0>VfdyR}|+S+)l.lNC(:R@#M3 %q5X6VTY,Bq)LZ8OO{8>3)kSUM' );
define( 'LOGGED_IN_SALT',   'U.z.c#kYqw]4^J&Xi;/>$9<Hd@1H2?LT@QMJsDR/-DWJT1:!bp-ee<S)mK@e iC^' );
define( 'NONCE_SALT',       'D=lL`FTLtiBcpV}l=u~O}Wd1-x`|z$a~O5OWR`}51BhdJCB}fja8):7[(/P+S0<t' );

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
