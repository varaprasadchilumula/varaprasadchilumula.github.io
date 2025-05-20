<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'varaprasadchilumula' );

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
define( 'AUTH_KEY',         '>Q|;Vdn(:>>`./:5;{Ym w3zv_<#,Q!=d2m112~j0.L GTKeVp3jNLiHy#aT`(W~' );
define( 'SECURE_AUTH_KEY',  'zCkaI= [~|rY&B[51lF2du=&Rv``#?Y3R)}A-IQ|}BrY41+[!(Mo8~qBf4x?)Y80' );
define( 'LOGGED_IN_KEY',    '~Z/9lV.}LKC|ZfoJOAC(UOu4gT{[TEY^ODYg^QZF yPB8[o+2mBla]0ps{b8e~ob' );
define( 'NONCE_KEY',        'Dt#W1*<rJ+|<gS3lY>tr{l|bxgsa|B2 R_9R4%%N_^+0|1:z~.9r]j{,xz`$Nkag' );
define( 'AUTH_SALT',        'H[v<W}8?dIVv8j+98Q|)@0@DZv-?v:OJvvQH=@$:||2<T[HH**]{U}^i0+~LK@h`' );
define( 'SECURE_AUTH_SALT', '&{.JXl|.Z;.@+c9nNMR>k3G5,0bsjRFH/U+pwx1W:7EJgj3VsdC:XS=EkUYi9=HC' );
define( 'LOGGED_IN_SALT',   'g+M^R{8D4LBxDoLXK78ngG]ayd<pkrZ#KAv(XV0.lbR./V..P+aJ^oB3@OK:ucrl' );
define( 'NONCE_SALT',       'yLX)Zj<Ij/:%_/eF{=T7C[PeTl=X^9^# AJYw(;7bWou$}`VjBg__kJ-dby]W( M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
