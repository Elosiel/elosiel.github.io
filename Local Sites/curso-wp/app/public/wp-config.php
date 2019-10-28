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
define('AUTH_KEY',         '6IIqnojbuV/Bym3alvjxPW5ocrWuHHDhAcDJOLkYdyqv+/4R1Va2BrucQIhrbEz/9urK+b5SboKgwZP+nZdpeg==');
define('SECURE_AUTH_KEY',  'rK9VfMS/ISsMO/08I+s0PMDxRR4IeoCL6S4oECCS8N4DgsQ10vNsSIF1bCV5YGLlHnCLmPznGq23QjD8weWMOg==');
define('LOGGED_IN_KEY',    'pa/wZt2zHSzsKoTeU7CBDfV0/RDQALX5QVYAAZGJS+BO8EqSvRIPfYbT0WJTB9yKIC03UuTUdRBKOxfkw5VCtw==');
define('NONCE_KEY',        'X3RL0IfbvgbJL00E0bZctXhsW/QENY0o8ejsWbPlb+esI6ICpbmnWNGjx7eXaBMZqedlJDxRSWS32zo3yf1dKw==');
define('AUTH_SALT',        'YQNAja4FK0cfoVdXUmXIjXp71aP5ycAXj5KNfrVvZtnGwOWXB3SFUoqu6ieN5aHTuA7mtVy+ehMt4Oaue9NGug==');
define('SECURE_AUTH_SALT', 'qNYb07GYijptUYu5V7Ogt6iNkCtuERIjIOSChXV0r6DENfLxYhO6hjH4B1PAWyNlJnNMO9TvMeNSZkP+pFUMAQ==');
define('LOGGED_IN_SALT',   'yvXt2X4H2a7vEWxw5VCG7IRl/w+M7s0O2jW6Shz3PToS7a3vI/dSeyql7/opiiYNzcWjkKlJHTldKUKnD7eEOg==');
define('NONCE_SALT',       'c3QLByF9lbKY2giSzCDWszYHKONjjOLYTK4fC3+DBILeHY0pkHKoYi6VxWOjAudIrReaFWdeg2uQxKRr1d82TA==');

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
