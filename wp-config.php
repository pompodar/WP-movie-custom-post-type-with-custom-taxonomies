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
define( 'DB_NAME', 'movies-test' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'S,7RyV2}WyUqgLm!dQ98^pADd2j}Bx0_&wu7B)5YqDc5t;!s0Iw;N%3G0P}N,+Z4' );
define( 'SECURE_AUTH_KEY',  't0=&z@^ ~N/geK]Cj45ql_$uNk:26mW,ll|&}]_qdkD%IW*F7R| 6L]@#@U[}8@3' );
define( 'LOGGED_IN_KEY',    'U~`^2S,4Bu1(]x&N;,y}#1/)iJ[Y]r4ri^kLUhU#/`j%@%ta1 IN3`NQL1uCY2&q' );
define( 'NONCE_KEY',        ';eeiM!H3UZ8U@n_#}&37_Ggz-|:,GkjjzRJ9?g0nniaEf;}4Zs!L&@Q3-RG(2i$-' );
define( 'AUTH_SALT',        'a]phPd+,?Y0oUXnT^*V0}lEWm1Y&5>$#qs&s/sEbk>_jPDDO+R8OYm/j2<%q{YJ7' );
define( 'SECURE_AUTH_SALT', 'f7M51$`!JctG0MMh?0.^LJH_,{u)x&(4jcVJFIe89g-}y/g5>x3@v)Pf]dg284YY' );
define( 'LOGGED_IN_SALT',   '1S(Xgut%{m@zvg=-VhT_AG2#9-k)I/#eCsq]~)UfIVToWUO$ZECZ]L$SUP)j^kY@' );
define( 'NONCE_SALT',       '^7aKY!3NKIo}9c,)u(F19}aWw:KY/z)(kO>p^.Y?WAeH#:(Wn@[lcG:RAk;QZ6 N' );

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
