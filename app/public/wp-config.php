<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'vnOmPGtC4C+YL4SBnQ36L8NVWXR6z7AXOqV22zOLu1g5u6Orpl9DyZPJy0tmLJBuQZ7IiXrmBe1EkbjrGi89xg==');
define('SECURE_AUTH_KEY',  'HGFbQ2+8AILR5oM02Sox9FHeY9f+it91x7Vq3SEEV5dKLDDdS0icoRk5miJfron/nvdpklYWkIhGmz9LgxEqQw==');
define('LOGGED_IN_KEY',    '8jHhAPiu3xvSqbww/lnB8TLKZkhcsrtOQrW8fd+6oSMy4iAYkAlBG/5vM7Ppqij37KUCB+zwi63XFfLom7S+Kw==');
define('NONCE_KEY',        'c8k3su0BwObnWQcanwhxdo+lZoKpcfpDrvIXxsmSQQiMIxhJJFMaXYqvhdqdKKzlIfkcBrtfyu3fDDv8GDtu7w==');
define('AUTH_SALT',        'yUSDdU+NjgEqYiDcAY5tSR9/tzA6Ko5LoeyGhLBg14BSygfSNBDNYZbvq+vQuHswOzCbU2PsQNC84eK2b+L8Ng==');
define('SECURE_AUTH_SALT', 'RhZ0kM3JD1HlNWqUG9C5qS6+iST1YbkPAkC+MCYQGb1pA3ma9aIWDZTW0D11q3YGzkIhlEQhax3fV6jrUeMj1A==');
define('LOGGED_IN_SALT',   '6r+TUbrEfqkmxnl8U3+tZz0hvZcnUNtyLAGK/KAEJYtCYFTpPqPP0dAUbWFffdmaFxb0ddbUxIEDtG08hv9Phg==');
define('NONCE_SALT',       'hVHpQ2FLRDGRfyFFENJXyo9ITecw6tBBdKtulLTy/Oy7sOTZIvlErMzc3+1Y0Z3mSnlQimiJNi28AwIWzUUuRQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
