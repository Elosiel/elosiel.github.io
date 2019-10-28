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
define('AUTH_KEY',         'o83PH7POmVQcdV0HW+/X5WNjTR0ILGQoV8hk8RW5gSD2WLAnW0eNAnpB4yUofqECr0EA3/rWw3fP0uM3TFDQcg==');
define('SECURE_AUTH_KEY',  'v6xzD9K8lLXlTNI4dS1DlZHsk2FTAOC2H2gDwmVrM9keGZlaUMWGM2kz+ifk4nH5o2kQH1dyXsfTYk06qxx5yQ==');
define('LOGGED_IN_KEY',    'uKIHyk2LQQlDm3T1AW5w1g28v9EEXRgYsxFgHNnfi9KzTrKQMrUa9zlflI+ZWCC/8v885oeTJe02Pf8frBLaEA==');
define('NONCE_KEY',        'che5WW1tDnfmDYwW+z/aeCkgq+ZR6qQRWcMF/iei5b6PFGNV4wA65Hpz4TUecPJKERZpr1IbdCSzn18rzWqJig==');
define('AUTH_SALT',        'Dyu/hDvBJ/kXM0JEy5quxY+Ibh/Qak/EKzKBSkHEtNOQA1H2scIVvHjDp2iihPTE3qQRtvMann+6dhdRCIuIAg==');
define('SECURE_AUTH_SALT', 'y9XN1bXuQu4N+1TszYO4an3gr4El+Lq3y19qI4ytCgV9nUhXQqVkxfh9igEf8JXjhPSDc6JrM7cpkTjHBYvQCw==');
define('LOGGED_IN_SALT',   'ZH8MaJVLgWi+18bwcAr9DvrEnItfM8zu949mui8yWU/m0o33Va1UpHeAHNKvm2UCPzvj3LZky50xpxoCde2djA==');
define('NONCE_SALT',       'fiUJrRqvgRm1jEkQZM7z0a0NiQROOQwUvOnTX3+dlmKo9ahJixgyLXOq7mU1+ZvjlH5ChHpX+Vazdr+qHKOBpA==');

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
