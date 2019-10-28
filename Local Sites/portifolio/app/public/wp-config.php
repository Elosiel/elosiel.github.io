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
define('AUTH_KEY',         'DAFxFNUBtvt1mQI2orJfVKysJtsJ0+zOFvArXbTOJoSbMorQ9DLLwHpt4O37yqXgypLa+/+H6ekfQ8gORGwzPA==');
define('SECURE_AUTH_KEY',  '0oRr8D6qQlBAdk1pTu/1I7UGsl0ZpcE9YXKAVk9/azIG/miXlhrYtqMUnecosISD45RrnAGmogyd0WsDrDMMuQ==');
define('LOGGED_IN_KEY',    'uPqqgNnakPUJQ+zLllfeWGO8AZDg2CbKgd/MSsHILsefenkTPJGxCaeZl6e39iGD8+sdA/eqGIFPVFFRLIIO5Q==');
define('NONCE_KEY',        'QyOc4sO2INHahC+5GYNQNyfpBf8RvRc2ne6Ep50NJTC8Yv9YS67Yqe/Xq8tGlaozXR96On74TOYhkNyEv3gTbA==');
define('AUTH_SALT',        'CcSukrrTk3xgDZvmNDDBrqSwB1xZPkzg1caSBufst/Sct0L70L/pyLrLohsRDuBhyc/NRX13UNMA9pNlFaCdWQ==');
define('SECURE_AUTH_SALT', 'Ff5g5LbyL78BkiCRjQCNS1N7bkAJJSIBNeYKKhjCN7q12pnoYjCt8VvxU1r+I5zJRv48k8dtt7Yh81lF1ToGbA==');
define('LOGGED_IN_SALT',   'JyalxmVCLSRqZ5F0o/00z76d5CP3AteFjxhWc+IhGTQpiLMNBiTgFWOFwZsTLzkTraxOpra/tkBXUGilxHyBSg==');
define('NONCE_SALT',       'LyOXiv1Va4SJt+w8XHXVqAo8Cqz//wk8EoHzdLqFRqYzedttUZ9jwNlUecw2cRLjLcprxkrgSl5rcYtvH1VLvw==');

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
