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
define('AUTH_KEY',         'SoxmyReab0Gh9jxHZ2bINy5cG57cXmAlsuZo+K7cWhYEJmgiTFnGmN5tXTWy6zNjS6tkoVoQn7ZjmQAD8dBb3w==');
define('SECURE_AUTH_KEY',  'fP3r2s5vfSQgCcEriLGbIMumdIAWOTz5OFTXDQN6Y6APetaNLH0KQQ3fJ/DqpVmvq7VjBhIKLixH2baSewx1yA==');
define('LOGGED_IN_KEY',    '2wf3BvKyi99abSbutRnd6MwpdSG7F1A6pVqZaJSar8V12gRscH0xe5F1doEOvZif411ZqvrIX5OAe93wT+J5wQ==');
define('NONCE_KEY',        'tzS+ao9sGi7+JrmX6y53uWjmIlJqkydcrLY4mGG3JMBRsHJzYl+sQjUQb7WVPllKRt/uMZt2b9tUI8JkWGrrtA==');
define('AUTH_SALT',        'Jj1vOF9FTWWqGHxz7h92Kc3fMoaVS0HNCNxDd6GU16/PRR3Di7ft8C2pxr+lLEigfRwVau7tEiAeu6MbJ2gyFQ==');
define('SECURE_AUTH_SALT', 'XPMF7TJyM1kZXgqqFKZCbLOzvqPbOaALpH2Z69GRQhxvAuV2fDO+kJORtxQEl+MjSfFkWlzcbpRd0jHre+cHPA==');
define('LOGGED_IN_SALT',   'ztZHnppNXqo+77PB5zv6cBxdXiqNjuHpPoy7ZCmj0g74Pk00OE6YHVnEIZoEAiKGjEgqXo99rZzn2yYm8xy8AA==');
define('NONCE_SALT',       'TEPKfksvT5DrMo12LnjUuXBoINOgcYY9+ziZly2wCHvBDs3WLTvHPlIbscuJyFjKPBJ1D2NJOUqnL/gc74gKcg==');

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
