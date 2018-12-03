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
define('AUTH_KEY',         'QanZ33rJOxqnxChAVwd4ig1CnTb90S5UOLs1lU30nsuprAuZmg6fyIh7dvgtTV2aaVFjZukhKOjWEFsT440vSw==');
define('SECURE_AUTH_KEY',  'wPvF7fRePCcC2Lgi0fKGjGaik867vuSLfpJ8Kjrd5ib4NX9Ev8vv2YZq0ADGuKfMto4YOBFhED1pno8U7G6YnA==');
define('LOGGED_IN_KEY',    'FnhMyMSWhFeuesMg8mb75TPC5JVnhZ2wgg7b/Kmol1rirTj0gysRUIyFpkFTOe3oj1SuPVx3+BKeoaogxH+e3Q==');
define('NONCE_KEY',        'XyJYuUAZnviesL6dNrbhS+Uyr8zfLvmWHcR3ZmsUVRQixtdHHWx9JkGrSCoMtllJ7islTYtIDYHp2+W7X888BQ==');
define('AUTH_SALT',        'BBSeNAIqSQKumsWrxJ94GhhiPRjKztv/N7qgxskLZHZZ3ra+wjAc+4z168Wp90JteCSshYhL7DxGhxF9gftD6w==');
define('SECURE_AUTH_SALT', '8D3duLbMD2nlDXkqjD48yrtLwKg0GPWn8j9Ywqt7CR02oTDkKk5onTGbIvOnUJGTSPlG53hVzboU26Z1vhVknQ==');
define('LOGGED_IN_SALT',   '0DGL304xV3+bgPwfJe5I1vK2OFPlCkW4ifS8w2b9pc/BAnxnINt+M0HmcRxRg50vJt6WPA/DNknZ8BcT0Ay43w==');
define('NONCE_SALT',       'htV49ztoYYrWRT7a3MZ+joh7CcsCrNa2udEbOEQmopJVNvMhzOleeD/uZf4+r5HT/qAQOBjsWbEEZJ/gSDQPtA==');

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
