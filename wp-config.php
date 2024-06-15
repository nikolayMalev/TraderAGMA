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
define( 'DB_NAME', 'trader' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '5yg$f1^@;k}ITZ#?%.HzYb-`9^r@B1K>@ nfYLh.mXdD|^MykJkK#pE}{74Y&53x' );
define( 'SECURE_AUTH_KEY',   'O`@*7v,WCILl,d<@Dkso#?(>hS?EQ8dg&4qh 8Axc}<k$5zZGz()>v[eQE=yI?]|' );
define( 'LOGGED_IN_KEY',     '[y2KZhOr6d:*}DF<k!W%nIR4rG7<N#y}f<:;Z2+0_8&VYc1B*Ch+Tmx-)WRy>/J3' );
define( 'NONCE_KEY',         '_f;:TJK>hegz_A9mOqH>YxTF=|Uhq:=b]TKnqhcTt}qw%Q`+k&~rvhlqU1z?6&Tw' );
define( 'AUTH_SALT',         'SByp&w76iiQ(/`e/K{nDK`jo~wiJi,FQYQoY8tzH`<$a[uH$odp|EGhCz?W}`rhD' );
define( 'SECURE_AUTH_SALT',  ',<}h8Dwz@%rh]so:L1Q<rWuN0$Bu{G!ku|C_C]Mb:+.E]4``UbcxW:3@@P`fni/C' );
define( 'LOGGED_IN_SALT',    'joS99%GY8PMIC>f++`=[| Aiu.7mkU5g;T/$;5~SQLfq`/08V51U7`Typ9V;?Wab' );
define( 'NONCE_SALT',        'v<m]2SEU:x?v.y7Du46*6ePJGa@&]tT&Bg!ybabPo-&8mrbnluM~kAIkhjhMQC5N' );
define( 'WP_CACHE_KEY_SALT', 'CX7bJ#J[HqS{W?(dz>EBP_^iS:aI%EcLz(%$!1*P;X5ayAwI4UQvts]nLNV#M8ue' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
