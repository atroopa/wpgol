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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'henry' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'dv1yZLNttbzjt0T5' );

/** Database hostname */
define( 'DB_HOST', 'services.irn4.chabokan.net:4614' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'your_unique_phrase_here' );
define( 'SECURE_AUTH_KEY',  'your_unique_phrase_here' );
define( 'LOGGED_IN_KEY',    'your_unique_phrase_here' );
define( 'NONCE_KEY',        'your_unique_phrase_here' );
define( 'AUTH_SALT',        'your_unique_phrase_here' );
define( 'SECURE_AUTH_SALT', 'your_unique_phrase_here' );
define( 'LOGGED_IN_SALT',   'your_unique_phrase_here' );
define( 'NONCE_SALT',       'your_unique_phrase_here' );

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

/** Define WP_HOME and WP_SITEURL */
<<<<<<< HEAD
//define( 'WP_HOME', 'https://golafrooz.co/' );
//define( 'WP_SITEURL', 'https://golafrooz.co/' );
=======
define( 'WP_HOME', 'http://localhost/wplearn/' );
define( 'WP_SITEURL', 'http://localhost/wplearn/' );
>>>>>>> f4f19860d2774a5a606603cbf1b892f16e2492a2

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
