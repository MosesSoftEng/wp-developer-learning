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
define( 'DB_NAME', 'learning-wordpress' );

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
define( 'AUTH_KEY',         '-;M,0!0q$}%gAAPywW05JRfPxA&3x/Eg~TX)1)fROE/[jAQH=zCsY_j<Iz(ep.M?' );
define( 'SECURE_AUTH_KEY',  '3,TYBc}wYab4nB|^qC|gT|o:O>zK{JvUFO}`aEO<2-kba%(KhaKGd/^yl-m)E{W:' );
define( 'LOGGED_IN_KEY',    'N /R}6>%--2Iw9(#m,71+]J7RMezd]]Egd(=#cNdiSi2g?y-BKtf-P;IcJUJCPL_' );
define( 'NONCE_KEY',        'W$G+zHX>=bdjI&e 9G41*p*PXb!!~L!JwiRT>3k/iuq;xlN_Ql0(A=_m`6H8U~}M' );
define( 'AUTH_SALT',        '[.G*I84 y]%7J*&KQAGEO-5fM{Hd  sU1]3H*;e:b`&XH4WlYyu(5FB2mD}i_6``' );
define( 'SECURE_AUTH_SALT', 'yV} --d%I}sz68zsn%-6izM->ad&}|}FU.pAPsgyNy5)SJ&-SO_DfR5CT/%x*o8N' );
define( 'LOGGED_IN_SALT',   '<j}:[sPaj~_PBozHar1YY!v1:}`-W+Zh(TqvgJt8jMss2,_}z#:KrMR@gQ8q}h|J' );
define( 'NONCE_SALT',       '.RXg!uSn%{+z&]%c^F.38[hK@|pH$ &npw>^(3j;Y/n6pC[o=ZZ.!_I2=tAzPuLH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lwp_';

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
