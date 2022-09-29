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
define( 'DB_NAME', 'DNmusic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '$vRj;[I=_3u4Q|T5Bg*fS|U[x*Nh<D7HU7XhDT6+d?7!Wdin~0YAhVY >(w_+-O[');
define('SECURE_AUTH_KEY',  '5jaC4|!t8)]eREM,Tm8RQZc;dT$K41>E+A#yVIJy}J?sWaj_<:|HzlP3CpOc%-fF');
define('LOGGED_IN_KEY',    '_r1)U:#]$gR+-cWM4p%-*c2|IYN<7;!u!n9{RBY_`j/6[#9xI1Ix#Dhzj2nAB&e&');
define('NONCE_KEY',        ']/bE|qtZ1O8|^=! ,8#4);ap(=TvgQ`,q|jz._*/1b*46k$@hJ,N$hcl2;]- ;4t');
define('AUTH_SALT',        '`Np#]d.e!#[`pK6]Z{`_4|m?+^{<hTw<$|g>1rVD,S42b70i+6AVPhCClMqgsG0a');
define('SECURE_AUTH_SALT', '6o&,/m~[`-c/Yc8/cec2 ZDLent!nEW`a[A^;Y(m+qkGuAn=+ 7ovH9W!Q._tMU,');
define('LOGGED_IN_SALT',   'w,+ADk~(JX}5vMBe- VmjXM](6+ai(:3<jzuPKNew5J-M|s]4|NaE`0@ulcU|6;_');
define('NONCE_SALT',       '=NeR)1ULph-tS!y_]JbvsL+iUE<b*bva)rZ~WDtJ=|v%_[ )B.%cFSze:zNq.c|%');

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
