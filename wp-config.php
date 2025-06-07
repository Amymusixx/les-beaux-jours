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
define( 'DB_NAME', 'u763185919_amyxdesign' );

/** Database username */
define( 'DB_USER', 'u763185919_amyxdesign' );

/** Database password */
define( 'DB_PASSWORD', 'Minou130800!' );

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
define( 'AUTH_KEY',         't`}FAE1a!+&bv%uxEGYRkIhW /lxUZMJoi2Www4j5z,47WLEP7VCZ% G+*0prkYE' );
define( 'SECURE_AUTH_KEY',  'A97s8Ug.@~Bv#dq#Z!!0VxQu&q&nqnrj*l>R^4#W<,/fYi=6*WC?:)1WJ+iL)v~]' );
define( 'LOGGED_IN_KEY',    'T}hhAF$$`fgV=?eT$~t9P}m77i7a=g7E[9So^_;W(.T(3=;}IG.F$<)EpBiF9uSi' );
define( 'NONCE_KEY',        '=4$])Q6t+A3#GA};%~W%RPi(zJHLo] Qz/!8DfhTy?ZU`c@q5/}xZd&gNvA]T9Vu' );
define( 'AUTH_SALT',        ',=O$]Nq|oHqy%,l?eA%{c(fpgQC(6Yg~+V}:A@s#3$~bONY%b6=sz&3mO`{sK8GG' );
define( 'SECURE_AUTH_SALT', '0{D#.]oGf}qrb3/qU,F|GytGO-Q(y!uRNj)S^}0}>4YL,8di!8[Ph)qn/R`+W@I7' );
define( 'LOGGED_IN_SALT',   'j_k!h^AmS74~>Nwg@&9Nv.:kCc&o(xefy%^_NO/5I^Aduwb>igv%y(~/y3wh!bx1' );
define( 'NONCE_SALT',       '+wXgM:mPh|WO_K~mT1{FSf2nXXSMZ*NL!_Z73JOqb~ cyx|TGvZufRB2r{<)3M#U' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
