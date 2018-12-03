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
define('AUTH_KEY',         '+BU/66tRX0dKXeuCGeBuDMWz7ZLjZoMU1AT5klwj46s7Y6AUcOOMtzYdwchNLHApFBDC3KMkzplpoh01ej2qWw==');
define('SECURE_AUTH_KEY',  'BiYtJphGbSjVBJdw+8wrBcfuhL2OzGQ4BS8fIytqW4ZqRPx2yByTFrvxdQ3RePw2XLRC3ReSKmeP8pruEefYvA==');
define('LOGGED_IN_KEY',    'x23MCD3baGjgkaDeuTizEEH10vL+pwyePGwhv256NafAWqQZwFxGY/XHcQeGM5SFrDvGF8Qru5V4Sx2myiOKoQ==');
define('NONCE_KEY',        'ILT1b21y9EYSrrleO/pl2a4W/0DXlpGuLfqz6A0jq9yfn4tlvTRKIplbXW2GmDZcc3xe3kNpHHJs/qYQ27mSZA==');
define('AUTH_SALT',        'R5ZN6TKft+950hMEG3kbn3Bl5im/KeJzkmEjdFH+PQuHkC+R44dPqmS6ZIjlabgZAKCb9S87J3W283zuMoQFkw==');
define('SECURE_AUTH_SALT', 'QGOLC2m2ZKtG5lq/9NyyMtW14R9IzCJhhIU+hVTQYPk5//RRfgTUxsGkHEfRk1BK1NwFTUQuoAAWxn32yhUXGQ==');
define('LOGGED_IN_SALT',   'z20GOVKvRWa/gqonuRD4A95C5Z/px9JCmmVhinYT9iCMhdGpnLXUxDzUt5SqHLtjcgthmhh+xUtwVR35CKMcQg==');
define('NONCE_SALT',       'TrFkQ3M/wGDyRXIA+yC9qD91uV+w+mPLuoAoCHpJ1t1gI1QdKEA/5BUQ2ws/FOEfwEBclUfy5LSwR/FgfzPNWQ==');

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
