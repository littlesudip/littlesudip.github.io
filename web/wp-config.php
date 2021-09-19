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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'binnxjin_lsme' );

/** MySQL database username */
define( 'DB_USER', 'binnxjin_lsme' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p)d8f!S76v' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rt4kdefonarwced4ne57sn7cwhhtgjekt23uuyjvpclnnx3iilafckdhq9047pw8' );
define( 'SECURE_AUTH_KEY',  'fctfqxl5gzyev3lldurl54y4lpdb36dg0io7zaiivwjsb3qcjddgwa8umqjepr81' );
define( 'LOGGED_IN_KEY',    'otltgud4davrcurt51vdorlpnhhxorsx8jwo0zgl0bep8f805m9txyh9ltypz0hk' );
define( 'NONCE_KEY',        'opc5am5djtywni5ae63otemsifd2plfkstakkf6zsl9q2ujynzpkyhurtfyrb9v9' );
define( 'AUTH_SALT',        '7jkfov7axkeozlamho4qoibdmfrljgaiks0u18ornxzw6uqpv4etqysanvloxbol' );
define( 'SECURE_AUTH_SALT', 'r4zpajtove6wpezc0bk9s3tlketwpnho2gc92nfvrdy6fqfaguugmmbkx26zyrg7' );
define( 'LOGGED_IN_SALT',   'wykj7adox2pkb6tjq6wyzljp5eso8t7rcwteh1hravv0fskw5thzhevtbnzbrd2o' );
define( 'NONCE_SALT',       '3op2sf8byrckrxlhwkagayh8cgqyn7g9ahqghsxqsrinf9nd1yjpe49rbnagsjx4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptr_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
