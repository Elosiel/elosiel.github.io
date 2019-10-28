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
define('AUTH_KEY',         'yn8sMfzRQXt26pv88+4VWC+NTMbBj6+jEY3xIFk06Hd7FB4oQwfRWSSkCFfLvLStt16SLxjzPfJERp3+Yafjpg==');
define('SECURE_AUTH_KEY',  'PbzPw+3YFGhn0wGwMOjygdhbKWQgm7f2grJpD6BWGDA1vQl8zTOzfHTTN4s2fz8w2OXasnvHDVdNNmr2byvO/A==');
define('LOGGED_IN_KEY',    'CX2jUZL4HbuN3cb7OweZb12s1F1Mduft7x0WFQV/Wy5bThEIqP0LNlQ6AW2Mxdbzk8mn6B5QUfk81H7v8zDA2g==');
define('NONCE_KEY',        '94QOhR+7W7HWFGwo9hEiinCfpF8/ecXswnUtSThrfBn5bSxLM43G0OatEFes9v6QU6I2pWyjsynj+N8muhcpaw==');
define('AUTH_SALT',        'Lm/p1uyz3lqARA8PbCg//FbqXaTjz1JAAEFocoGyb23lcIRWZ7H1t5wl7spCYb69D02KTbc7gzCxdIiMWK6dow==');
define('SECURE_AUTH_SALT', 'Ni6ksIofuWbRHLbc/txevKg4hbrcepS+2MIsHYlfUhJHWlQ/5LEU5AiZmecTVYQkjLRSkn+xbjXlWneN20YOpg==');
define('LOGGED_IN_SALT',   'h/wAU4KQ7Mqba1XqMg0ng5kQ1Uq9nRLt6CUNfGdcv6XLG4tUcz0EEub3hLcdio4jjU160dzvAQIAY50w40AJOw==');
define('NONCE_SALT',       '2JHOR5G8dQByNublZZQUTtcUmJmB0LrCSkPzyJcW/bd1BNO55oRAHVhZcVY6khMLIb0beZWyU0MxA5pbro5RFA==');

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
