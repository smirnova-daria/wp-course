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
define( 'DB_NAME', 'wp_dev' );

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
define( 'AUTH_KEY',         'aJL$=.Kdm3pw%h%IXm{&pb6@JZvJl>o8|c<1g`Zd-q#D&a,fxXo%k4xk1r)iHi:2' );
define( 'SECURE_AUTH_KEY',  'ly2(>y%)0RKX (ix}C-856j 8~7xR8KE;nu|s;CYL%R{w&)ux~`Nd5*JNZyQCBr:' );
define( 'LOGGED_IN_KEY',    'D{G`Oj?RGs,EuMgV+Q5pv|zChfZ^d8i$>Y,or9fq/QCXC,>M:Ri`DXbr_+asdO_j' );
define( 'NONCE_KEY',        'IJq>kZUT.=$Gq9zNw24;j6ILC^319-x%Zn &@RB|TSIp29Jd1,lL;T.X=tcxp4vn' );
define( 'AUTH_SALT',        ']*&(8k1TCWBs1F|QBQv{S*stOK%~q/L8c$+N]M~:}F+cZv^vE?i:sJ[]N~38nT|#' );
define( 'SECURE_AUTH_SALT', 'sONiY? +c#i{O7(aY(d]*~|wu,? Nzj}qQw)/k.Wx?L@CmG15:iMz:L01i;1Zk8=' );
define( 'LOGGED_IN_SALT',   'f$a(0w^^!W,aD;I(HX0j]P9?;M|gOek(6`19!hUOHY~#)W7]i2IMlg`ulBGsAFLb' );
define( 'NONCE_SALT',       'm3H`=j7#RaR8p5mhr04x 5wA`C/EG;=doFWpky0hYhm[V4~KpCp&ukVHlUYt.O%9' );

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
