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
define('AUTH_KEY',         'mkH1sGsYjfFMPlaqvvnVj+cMrLkk9SWNx8NH+K1MoY/CDg+4RnE6leJXii131Te5VWoqxSdwoZyalQBDRojLHw==');
define('SECURE_AUTH_KEY',  'L6SFMtgDl8RH/gjdGhkfFVa0dGHbd7rKTcHV08mOE695Woo1dymh8zCmhIWGQznebdU9S6sGAnDceRqQh/0zKA==');
define('LOGGED_IN_KEY',    'xBWOxIEmCJe+EkGrAEwjRTfh4JGUiQDWdF9kTWDqM5+DmU7edFe44XYXSgKJ/A7IERSrH+kUjCeB0tNK4KDcXg==');
define('NONCE_KEY',        'xx2HSbiKG5AfutZhAwBS2z5eRuFRedPQQSKG2rRP0tEIkwSsdDdgS3dMbfv/+obKy000/RbU6I/UC/cNvBud0A==');
define('AUTH_SALT',        'tWkRpKv1JRxAHTiUZ3y7itVvM5D0JGoGwILS7weU3fIX6GhZylJHS6jz3wWsgSwIKyedEkUwocGt4R2UBgCkjw==');
define('SECURE_AUTH_SALT', 'DC6xsuB//AAAX+us2oFtswmi6ykbIyhUse4XE4A7Affww22zocUQBCesDrcsPVrxMu1T6yiAHmuO+I3P2FOcwg==');
define('LOGGED_IN_SALT',   'K8hVzCCaSG860v+ONRS3ol4H9ZM8F6ZtIySd1qfV5oKmmlqNVEljujODFXro/4WV1XBpVmk/CF8MxYKo4aCoog==');
define('NONCE_SALT',       '+ifo4mohW+cvvI5ZOK1e2BZYIoFXDAkOMUYSAyB5PkcyhoGqVXEtEXI+RbNobzOcBSU8goUJGe/enPsDg3TLIg==');

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
