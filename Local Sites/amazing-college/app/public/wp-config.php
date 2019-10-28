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
define('AUTH_KEY',         'cVQYrxwgLjm9gqkOkQ0qnZa3e+v985QRo4wzq15yhR1GiETBCXS5lcBqk0J5NUT3CJvCanVBMzLowjzfTDv8OQ==');
define('SECURE_AUTH_KEY',  '0ILReQfpr/X7BwhtBlgQ5XNxpXiLP2STx99pNiLsgwLWInrPqCpsuUsuQOS4wDXLN8zIF1MVtceFz9i5FuGqzQ==');
define('LOGGED_IN_KEY',    'j/S/PYP/sllJ+MKTWXs35LBuFzTNFq3T8+gTJZS0jSCcOIhHUd/dUsiVz51zvlEuxIKzq/qgrzO97ZQo7zONJg==');
define('NONCE_KEY',        'u5C8RnpRb5cg94of2W3hhS1E8jIfs6jauRAy8ISlhTt6wyJ4i+x2vhzN2yOlnBU91izH08o3oOUx+Id1NWVgVw==');
define('AUTH_SALT',        'B8KhfF5ttKoUuwSPeKRrY8AXHCn5h6YBD+0g76UoXbPYfzKLpCTnMB+kdN0pZc9PGab1H5L7N9Rdy99ebyBv7w==');
define('SECURE_AUTH_SALT', 'EHnTzctwLIrNtGB9z7ZDaXg0PojfG4tiE1GKBdELFIhRh9NAUiv3WHZ/HI2eFpxWy+Lf3NxNpaKUiBG7cJjBkg==');
define('LOGGED_IN_SALT',   '4c9e3uq6ew3wcEk0+Xkp2SuBTXvzvNvY6Cs7MzthTIIbdHLBFHuiAQiMj4kOM+K/vA9LmFctkHF7d7f760YupA==');
define('NONCE_SALT',       'EOIjqA55TtsC0r3GkfXpZktLvRdjvgaRQC/BbmKSk9U01SPAXk/jc5uGRLqLnrx14no67jv8JgGqk69oBs2Z2w==');

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
