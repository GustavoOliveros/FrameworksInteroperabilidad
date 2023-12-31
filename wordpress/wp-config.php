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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '4}V[&jNp0Y:CxlxAK1PR1rKX87U4G]:J#i-k&48[5Tz|{:De_DZ?gYv9CUKR^$%9' );
define( 'SECURE_AUTH_KEY',  'c4U{1TIYP_aG5(#uS5VrM{x b;cmCJWZ,~SRp.,DKX?8rs<)1<9!k^#XLZ;E^ly#' );
define( 'LOGGED_IN_KEY',    '%XLGns`M8Qtr1C>5mrPSx6#,fRU6dX;?<+ HW[`=u,KIN`J8Z:W$h]W|K`1(>3d!' );
define( 'NONCE_KEY',        'B,IJF`<=Ag Tc.7:K5>@-`XC-vz&sxwMFJxuvxli)yJZnjbK@OPD<q{LiQ6*#]nS' );
define( 'AUTH_SALT',        '@copSIL7^WCJI/t3ry>Gga;EoA/$Kyb9$u=UkEX,Li<4:$9h{UxW`R&Z}<t4H2Db' );
define( 'SECURE_AUTH_SALT', 'C~[lHHDINC%9$DKdiwo9,11J6Aj4!%2nkMl5A,!OjGzQYrB>2rMr-DorR]W)U!UG' );
define( 'LOGGED_IN_SALT',   ';T1i!@;aIsM#Tb]/}X8n(Yw1i NAtQ,8]x+c_jHOz7q]d8pr?yk7q|wV:he/y$fA' );
define( 'NONCE_SALT',       'Tjp%t|e1I(_::_;km@ F_ZFc_@ajEDa%)pC;oXKyg13%2BI?<FMqQ:^1pR3`1/V{' );

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
