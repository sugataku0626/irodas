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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6Jf3y1boCPUWyNJhieVKjevqW6E2i8ovVjyXdqLHU6as12M7Ln8rDpUU6/wa1w0Wx+gPZVKaipa9uoNht1tTKQ==');
define('SECURE_AUTH_KEY',  'J+kduJQSJvIdZb21KL4/gBdf0w8cKk03ytIKKlANiwfvqfGP/Sj2d1NUs9AsdVUUz9v/5F5ZqqnZalvnJhAkkA==');
define('LOGGED_IN_KEY',    'E6/4ROSsRsjLF0tpIyPGeorhtqU5xAm8MQz8B2qCnyEwgH91ohqHUsj6wCK8N00gwZ1wPFtWvZ+KrzuCxMHWow==');
define('NONCE_KEY',        's6JGuyOKCcIPMhihBlhBwkMf9OXGQ26xoLPsQjyzPayY14RusHdVM1wsrXewJC06fY898rCbFRq3fmcgeQeOPQ==');
define('AUTH_SALT',        'PjSiMfFlKbyscVCVikx6y7qn8S2/V0KnaJaHa+Y2kWOTNY8ciEdyGn4JLVuMqBy6vbDHpdgAZilb22E8hHVgUA==');
define('SECURE_AUTH_SALT', 'Ec/1rSEpYhd1UwiRBuHM0vg7WPLKYHWgX52XV47urkZZlbZsdCVMvdZl/8J/q7zYj5j86zDq9upprVhH0f2/ww==');
define('LOGGED_IN_SALT',   'ha8VRX08X5HwqFQ78aR+HHfD+Lu76POmOQeB1qXCzRPXAvIm+ce1ZCbonI6CZ4uNG935Xi+NdccblsI8yxnq7Q==');
define('NONCE_SALT',       'n1S97qM6VPd9Dl+1oPDeju/PGxv79MGb15AjnHm0nGkE4NhX4SIdv4XdSSPKx1uXqTb+1q83qkbe5o9Jw8rkvQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
