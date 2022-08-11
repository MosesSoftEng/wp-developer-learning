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
define( 'DB_NAME', 'bets-tickets-wp' );

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
define( 'AUTH_KEY',         '9A<AaF13QFFuZHo18wGT}GPg8c?;@b`BuGZ$vTr]E#s@EWGAU3i`mXP}WFdQVET;' );
define( 'SECURE_AUTH_KEY',  'S}!7ASW6>wb3v=GqIY.xjWT?<leND>xcAtC &nDl^~a{Z*Vk,`&DH}rSfG(.{rjK' );
define( 'LOGGED_IN_KEY',    'MzX?Nn@KQnX=oI[g?t;-#+U{dE3C1oH-=YQ9$K.A*WEH4$+# %<gwEmpH^_NQYsy' );
define( 'NONCE_KEY',        'mKOSM~D@kfPeGn&mn/qa9>z]5[dLUSQsVY5~MJWRgR}ic${5yc njTYeJZufl7es' );
define( 'AUTH_SALT',        '4E|qJM^Wx)t)<D1cdHjRBU<!+1<3v-Y|6K$;2*W*xrXcDxnbGzKmm]bzc]Icjn>z' );
define( 'SECURE_AUTH_SALT', 'NsdNebMgF3{ba_Q(}~Dubn~Ra7Iuc|F_>x1DBNVU:b*Vp0LGpNxa9y^ypy&Y KD!' );
define( 'LOGGED_IN_SALT',   'g}E@H0fn-[-^OYv$os1+ANJ|Vny~%Q/(LtO30w$-Slnn(1VfeamvvG0+%q*,l0mb' );
define( 'NONCE_SALT',       'TzOzoQDe1bP>*j$oC@E%V(OEMHFPYe(6M!>OVs3xO5 *?p;%Z#!N.G~}lZ0aZORh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bt_';

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
