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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'EcHMJ4aKutB7PF1SZmGp57FcJ1AKvbodT8FvJiJ2OQyIlOz7+74g5YGOK/TQkFhHglFjPU6Leny1p9SDBaSRSg==');
define('SECURE_AUTH_KEY',  'B0Sok9IlbogLvQoNhWFkD/05f4lztugm+8of6FlBOv62pOGFg/6uH3sgx4c5uDnIrAHR2yUMVWi7rOpK16ZhcA==');
define('LOGGED_IN_KEY',    'Q2qxMISoZGKNG7pCZJMe/9Af7cwrGOMK49EKHcdPEMwWFa6WuZ0fcpXtygjZyDM4LKks0Kl12Wvi6ZooC8lRaQ==');
define('NONCE_KEY',        'v9aBpd6ZFf90JrLB/htedBdSIi5V+cXXCPN/GYoGMu8Ic6Y02JlT4I26SbNgaARzT5+B07n6xNmWIc23G8/exQ==');
define('AUTH_SALT',        'uIS88zKi3pcTrNox+QB2MjoTlgrBecwlZYrtJYS0ByROEd4+fCv6lmZlQHmIzo1tWhN80JcTNHLfiMaeZor8wQ==');
define('SECURE_AUTH_SALT', 'Z8NhnSsgbOZ6x6Na12ArSUtz8+wbzWWsdr1zY/muYc6HOWogyHRjx6deDfTiogufsbq/CT1jpTJuQni2+teJtQ==');
define('LOGGED_IN_SALT',   '0yo1iphXDAddcGCRIdBJzOA4MGT2F0xyYzMBkdlllrzkz9DlwtZzUsUe84bR5bBvgAzR7RFGc+YN5yU+4Y0LZg==');
define('NONCE_SALT',       'tNAbliJz/JNpF89snM/GhC/xvPHGcXTTP7XAMfFYz43UhW4nYh97KG+VDlkGIjyQF/taCA/i114maXmDBqrxfg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
