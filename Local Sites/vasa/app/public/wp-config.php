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
define('AUTH_KEY',         'vpwwFztELhAt+qtVNSTpC5aJNZ9CQV0FF6OgbiFYq9lYhzhKTgBH06stXmwMIE9fGhJvY6E8NGaruje6OgmAUg==');
define('SECURE_AUTH_KEY',  '1AvS1svAiglVNOReVioMB/heuqNgJGZ4kloO3PNYlutCCfMOH9GcEHUADnp+JahSSTqRVq+dKoMldFpXZtD1PQ==');
define('LOGGED_IN_KEY',    'ILbYGAcM07QmVyVw1F1BunDhCE4ZoN0/Ppy2Y3T+bV6KhsCM+wBsvi4DZz4Dd7M5YWeVyvyo8kyZ2xOHsCV8Xg==');
define('NONCE_KEY',        'BTFGaih58QlUEQeqw9V7P8df9kHSiprC+WYjZiFJ6Iw7ZIgmyqejCyQP9bg23PWQuPjnI5n5mP01YPbhuk0jlw==');
define('AUTH_SALT',        'P7u9ZyAt4Kr8kUEWUjkCcd5iN0z/acCIDG1pxWsVpaHiwZiyEEC/5BvwGNdN3HYu1TnZ5fFVSUHfgwTgdrp0ow==');
define('SECURE_AUTH_SALT', '9lf6uMHVof7oXz/N8NMim85MhBLupztxsAlG4fXkl1KWhu+ikzO5NKiiE885y63chPfDimL/O0rKQo/X4EMa6A==');
define('LOGGED_IN_SALT',   '2xjr2uFuI17HnzSqVRkSUIRPrYRNUgpYb5UFS9RPvh+rbV30AISDOMiy+Ad/sBoqlX/gEgzfpVffFk3khobluw==');
define('NONCE_SALT',       'eIumSdQBRgtBAks9pvwsnWUWCu2V88kgVCjeNBjuh/3gEeyfs6BBfXob1YpOiEpSdoPxOurWK7tTo487Zh8aZQ==');

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
