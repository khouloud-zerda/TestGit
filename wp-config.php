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
define( 'DB_NAME', 'testgit_bd' );

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
define( 'AUTH_KEY',         'f;-0s2|,$zp,*E@o=Ly4c#-ke-Zq6oWD@x _@fB/OawUDLNuwE(>^{>V8]^Zx)}(' );
define( 'SECURE_AUTH_KEY',  'LGLg2d6M{@qID?%GIKmH`nTXX!(3)hX0N?i*mfd-.>9hH,bMo;cjl;!@+*@/RJPp' );
define( 'LOGGED_IN_KEY',    'M`^MR=E_f~Jv3:iq*l*^7.}U&X!jlrL-biN:8,gZarz1x;fTP/W2|1E@8Kr^MIc2' );
define( 'NONCE_KEY',        '9b`ulhG~}?.#391EcjyV$JkL(Oqz@^DZ$k2{Gz0AD}W?z;Mlila>/N%<3M2KkI1^' );
define( 'AUTH_SALT',        '{5<B(L:Kf;&{$BSrD/93g<4qe4RGk[Xz16kT3e<CPs[?_AulE;jNksofkjU;fQpv' );
define( 'SECURE_AUTH_SALT', 'sBb,@!>z:<EXv@beIx6ChF*Xq?Kx$/u%Yk|SqO}Hw;<pYl:`8_<5Yu_sFHGd@ySI' );
define( 'LOGGED_IN_SALT',   '^|S@fBiN]V$t>=Dah6SlvF4LUK#JUnjz)w=<8H^h9>q?w:-2u>w*vYB)])UXr8`d' );
define( 'NONCE_SALT',       'dsij8fgp5Nh6jWMu)<6n9/+{$PG*Px)v.`)xc<s!j=g(xSQ:UAa{URm1/CYr{B:4' );

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
