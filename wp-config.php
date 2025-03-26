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
define( 'DB_NAME', 'thrieveearth' );

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
define( 'AUTH_KEY',         'Hw<kG)_AQT/IO>g8K$6cV~{r(?}A({O{r.00%]0QSB~kZzkSdIXwKZliLyCS(kd}' );
define( 'SECURE_AUTH_KEY',  '}2T+9u>iet)@L34*0}6/9)CG7[)]/i|!8EdY/9fK7_;Hd^V]GX5DJC!*`(a13k!@' );
define( 'LOGGED_IN_KEY',    'exfqAQ=CP@!yMj3=1|DCNkb{Z>C/HIHy/0w}j(]_UgZPn3=Te!sC%kSLkv}}r]i-' );
define( 'NONCE_KEY',        '~pl|jPoG@l- BJnLwH$(gS j7z!,#g^u-5 -@pY6TWSYaN (Y+k#;3?C}}ac.U+$' );
define( 'AUTH_SALT',        '*)Y.j6?iNo76SOqC5mD%rAZ@fJx_Mb`lCdNVW^*r9)*? d3YL9BOGi!awzdSGy@d' );
define( 'SECURE_AUTH_SALT', 'O9djk=LZdF*Fvt4b#&,4iCwRl7YjP!=Q9E,vzxh1/_G%N~d%t$x;_eU&2LMhfaFk' );
define( 'LOGGED_IN_SALT',   'L(_Feyns1vZ7:276UPHYWFmrg+^PH4|$|+~,8ry-x?V_-WaJ!:{-pc.sT%ih5ktT' );
define( 'NONCE_SALT',       'QahH(>v)R(jdd:ZjP ?f!Va`+%4k6gn{^!#sSAdSz.~F}iO#QY(.tnX(aW[fN:A/' );

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
