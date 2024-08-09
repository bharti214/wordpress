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
define( 'DB_NAME', 'demotest' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'ntf12345' );

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
define( 'AUTH_KEY',         'jgKY$M>H=fHM.pzcXL.t8|z1XA7q5N:DXE]Tc7F]b=tiW9Rkn9^J6pIQ%-MIu#3~' );
define( 'SECURE_AUTH_KEY',  'n|Sh3:(.6jkvmm%_x?ScMmayv@]`-l::rHlvx|x/}|W4y-|#M$9yha*Q{G`>!!20' );
define( 'LOGGED_IN_KEY',    'K+:|gH#|2nshah9L6dS@U{`ULoUD%JS$i%dzvFJ)M_@DxeTGt@vP.bZg+]V3/}3/' );
define( 'NONCE_KEY',        'X^l;,MLl%(~P+_|[btI w)U:G&{4Kbhmpv$-JUCxa!vo]*JI65.9ncvQu{A(Dp[v' );
define( 'AUTH_SALT',        '`t @PyY*g8&&tn[]E<_+9Wh,1{W~JHAx$0A1[v8*#(_0,HI=q1%-Kd9s@FP3J,f5' );
define( 'SECURE_AUTH_SALT', '-2f=#STW-+67VZ.v]jbWz%5k1%,N`^MS6Br%nCtJoULe;qM.MKZzQ(%rAZ@Tx qc' );
define( 'LOGGED_IN_SALT',   ')L<X*{y?8!2nr_Wr?se)Ayfib*C(mnu)PssAXB).{*9j!y5MgcdN)~pd(lIu#6N.' );
define( 'NONCE_SALT',       ' }DlM]J:[h5|6y.$JgAyw<%4trX%s0Mc&TumY!Ai, 5gWt:V1YWqNtZaiANhDU`c' );

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
