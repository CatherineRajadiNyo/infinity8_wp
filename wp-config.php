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
define( 'DB_NAME', 'infinity8' );

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
define( 'AUTH_KEY',         'np-2e}A!])Ba9]L/J#wOI4BQM~[1$IBRK qsMXfps#~`<m O$&6K[}1X~Dwh4ueQ' );
define( 'SECURE_AUTH_KEY',  'G^DyqKhaJ@,J{e3m/[9B*/W|6RDN!2Vj}=V;>=BE}{eCoT{aYMB1X*F^&D%w P8a' );
define( 'LOGGED_IN_KEY',    '#u0k;<<reHo05<RJa w5GdwZ3J{ZLdu:NTGB8;;k>;v$`GC*+kk/RJ=#%-K&=<Ph' );
define( 'NONCE_KEY',        '? 1!mWa<AqjOAx.GO1pSRD34J(SHlt1~3#,ARv!q]{2Cr)VN8J@:Oe[*RX]#TzMm' );
define( 'AUTH_SALT',        'fYxlF@tT:]24[X8O)O}Y7W[AK| ilF[O0.%`) :O^66JKQ/_m1o4rA;k}GxFqq2y' );
define( 'SECURE_AUTH_SALT', 'wo.m{A`N+q7lltD4Wep5Ic*<WLDWN:p6]>n@iT(7Q`~<>gH^tYv>&q@%Wq.3>H{C' );
define( 'LOGGED_IN_SALT',   '<@5Cft/@0S;x8|t5bs*nTI*}2[xN+@b0_>Vd%L(AG+l^4}CNb}dc=Q@<%>KCQ7s!' );
define( 'NONCE_SALT',       ' {vOSu;Mt1A`L[`q<Fvkj-5xY1pG7hv)dP+%ZiEND<:Xx?ClYFIsX<x<cL.ae_:r' );

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
