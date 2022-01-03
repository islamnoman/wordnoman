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
define( 'DB_NAME', 'worddb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'TuFoh0+,/.De8/i.Z/;K:zI6F33tjpJ@87vTiVt-{UN=/[U3wvIVT`E&92Ka-?T<' );
define( 'SECURE_AUTH_KEY',  'ik+-jcN^Q)!Cen),_P_o r:`eOQD*S`ie,#4)<0TOS>e`Cj*Mu<sQj}H?<VZ(jo^' );
define( 'LOGGED_IN_KEY',    '?BI</9M%?10Ee~]C9H=}nOdUpgvQ)u;3ZvCxt2K ;b*#1*R?M}(fVF DM<l]003M' );
define( 'NONCE_KEY',        'OEkL0w<R|yxaTAPZ-/tWFD_CJkQyt$R>,{zg{<] !Mn_/RSy:xTT]lt)@|%lt6gY' );
define( 'AUTH_SALT',        'I3~C&mf;&4d]%>,d.0P`3Q%q8x>+fYxJ.X/5Ba1_.!CJvpNAs{=i<Vb27JL0?sC#' );
define( 'SECURE_AUTH_SALT', '>/$P-u&w6bADe&ok(NJF?igY9c7T@gzB7~Z&hC+`.bB3CZl$c|cF+fW*gcV[bS:=' );
define( 'LOGGED_IN_SALT',   'AT!?kky+[XiHCYbQ>LeKb-I}j0.I35pvcyaY1<,.m/?5=Nb}E!C7?l g{/^Gbq]M' );
define( 'NONCE_SALT',       'Tau>EuQp=CG}K?W.s(qV|7Ll(XFbV,rU7q*`mpbBeqN@g|ZYrRveOSyn7z:YxN]q' );

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
