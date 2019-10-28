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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'OLj2U46vFbZGGO0cfFXYuhe5MzZWCKgusQfNl0QIMACfaCvr18HSfppHVzPe/Q2OnJzxb6GU3kZ1LnXyGpJ/6w==');
define('SECURE_AUTH_KEY',  'rjEfpHeQqU7oEbnoF7Pbd5UY5BGcKidbaF+HMcLWkFR7WB+9+Zwlzk8efQ3kWX4NjVz/rGfZ8/gzvJUR9rcD7g==');
define('LOGGED_IN_KEY',    '1Y1gWFnM3gBLj6DgNkedUrOBABdTqsz1Q89HyVyHoU/TjgbNA3GmMg9uNLzfqt6QvBX+qFD5QrykZaPSJKBfrw==');
define('NONCE_KEY',        'HfIf2gNbyHoqhhpphdHybXCf9Qr6HGqPjyP15nkJdUBTW4hbvZYJLNF/i2g7gJ3qigeMUhXC0q5N2QEwHEvz7Q==');
define('AUTH_SALT',        'do1KnjDD59IoDWoWTBKwncEbiQMeC3s/DL2Bqarl5CasxOo5i731+7n2oftF9weEFgDKfZEhlGpfJz2THphnuQ==');
define('SECURE_AUTH_SALT', 'bPX4wHmzbIPqn5g6grG+ZitOmgEa1X99HLRS4YiBeg6nyi41jE0bhL6ruac+vBkALzbgyS5exl0BfJDo+/Tj8A==');
define('LOGGED_IN_SALT',   'jUIfY/zAVMIkhndFHHB2n/Ioq5Vcn7ZNq3YoXs0rVLu36ckrjGyOdhDR3l/zIwEd1IUcRSY1rqp/lMfWKaKsJg==');
define('NONCE_SALT',       'HG1ndQGvkS/z665RNJPgIBwQwj9tl4Qn752JDTlUJyFbD5penXog8rKxfx0sZboaSd/c7I4d75jNVk8gPtz5Jg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
