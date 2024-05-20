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
define( 'AUTH_KEY',         'cpMODKt8|ydEWx|.<T<iqOWb@?{Zz~&)y{=L(no=pBBe^~vNxhI[x@S5B5)hZ&e(' );
define( 'SECURE_AUTH_KEY',  '>s(j6$!Jo~hg9~g6hwlD8Wi3v;AyC-]Cz!w&kl5O[*?6}x1%XaxOYnBYI>%x!zv{' );
define( 'LOGGED_IN_KEY',    ':]~Hf)R6LZDS8(%9^$<{oHgmh0:x$t.?p/~ M_nX.DcZ+hR0UpFo{U$dY>K%vZJ@' );
define( 'NONCE_KEY',        'KJ]Cb`>)-LaV]W/=3w!I4zy>%2~%6&0og?@#U_tBcW8OGs2zY1=U{~HBn)AeEs!&' );
define( 'AUTH_SALT',        'F)<.<5MsMsE;SI1&T]SmU0Yg5{HWBXjM|C;>w57d{B`u~vWi}do}*J(~?ms@`[6N' );
define( 'SECURE_AUTH_SALT', 'O=4;$<&E>+?2H6eFq*(CYLBEfE;TP#h4{X}2 -p_sQz)jgiwE{0(LQn-^2~;B}S*' );
define( 'LOGGED_IN_SALT',   '.5@7>OB}X~*P|$k]r<La%@T}5c#Be p)Jw!d9`5}&8]`1E=ubn98&r6<W0O>26O`' );
define( 'NONCE_SALT',       'pPV:n?wfOYv^xkNr)?h--b2jd#_1R`!)zDV/5y1P{M~:DxE(XtJIKMPUu_,`}+=:' );

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
