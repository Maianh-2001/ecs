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
define( 'DB_NAME', 'ecs' );

/** Database username */
define( 'DB_USER', 'ecs' );

/** Database password */
define( 'DB_PASSWORD', '1' );

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
define( 'AUTH_KEY',         '8p>I8{4+|9i2kqfp7QJ<=i1x#N(Li/{dU=bLdwsQI>!rE%fIt}2bv3^&A[7u_& W' );
define( 'SECURE_AUTH_KEY',  '-BS^q:*MRXXX]-v`{pmIe)z`SVYM%9l-2$L2EB=[*= ID$K&[aplY9$&%~.w7::d' );
define( 'LOGGED_IN_KEY',    '$qedg,j,[!}N{IsSPg1vTz*77H[!>Vt7. ,(-!(PV`&Lc((2=ENfHac+gtm:mpm,' );
define( 'NONCE_KEY',        'dxCzx9Zs&`TuVF^~7}g:C`In_?pT7teDA#*|HyzlFd5FDv^{SZjabh5z9D6I;U0+' );
define( 'AUTH_SALT',        '65m2[]Bx>Od66nAR_uY{%P}yma`Tk9J<R)Cdhg7wGnqxpv1f]/rOFk^.BqJERK8.' );
define( 'SECURE_AUTH_SALT', 'aIj8,!h)>pmzY_Zr0%{`sJ}oV5?v+yV!(Vd}/Z;D_Xid<q[<IiV,Y(t<ChVIk!dZ' );
define( 'LOGGED_IN_SALT',   'K{_)QX!)Q<o%j^y$Mu0X`Po* 9}4<^jqrLRg+^65AR__qO1i-_>X{uyDQOs=^*k*' );
define( 'NONCE_SALT',       'n5PE(36sOxYi:W%j/#9lK7kZz_NVEdPV!7oBdH5/tI6K;J{I(A0Q|KN?6,1:9z% ' );

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
