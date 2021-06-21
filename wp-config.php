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
define( 'DB_NAME', 'wp_master' );

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
define( 'AUTH_KEY',         '&yVZ!A}Dz8~uQn@Q#>O6UYuZ,vU6;`?DVt>V2E3LUqp6bCT,C:6`t&A)1TW*G~fc' );
define( 'SECURE_AUTH_KEY',  '9ZUX&2jXJ=VoK2|Td1`Oi0{00Cx[.vM)A!#a|NGxr:y3s*_`9m-=j>2I*qu*aXeV' );
define( 'LOGGED_IN_KEY',    '!cbgBi7jo@@vV2Py6AL%?@]Jf aMm3F_OS_o4Y=3Fc#8ZU7?(yV{Pg#1fTx/PV3m' );
define( 'NONCE_KEY',        'F<<T=b.Ze`2krb:csh6BJ%LILByc<:}FfakOjpn_*p0wZf39lZV0y>>/{J+v+D/&' );
define( 'AUTH_SALT',        '@]A>(y:&9&o_k333GF4@]E<)<V9z@[:O!G]L,Fs[UE$D yZb_7g%Q9Bmnw)/J?w[' );
define( 'SECURE_AUTH_SALT', '#0e;bL/3Nph=];,0Nc=ZdCc%Z<ng_]%r UBE cm&dEZ?~0w~@jm9*zH5.k=zaM~F' );
define( 'LOGGED_IN_SALT',   'o@4q@?c<@QzTqwdB&g,|4o3-H>!//.TykLc}sqW~iq][W*Rw1CqP=kgc/_V+uqQ{' );
define( 'NONCE_SALT',       'P56/]bDsK6kjux&l5A2YSR~1b{/y7EP0E4JpH8Lj~igc`x$IL}6*jV?*KDg@6%iu' );

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
