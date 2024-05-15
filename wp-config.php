<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websit19_wp226' );

/** Database username */
define( 'DB_USER', 'websit19_wp226' );

/** Database password */
define( 'DB_PASSWORD', '5-SH7@0Zp4' );

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
define( 'AUTH_KEY',         'sam3vpy8fcxjyeugaxv9pcajjkpxqiupvflhspmprqeganza36bebyxltddkbwdk' );
define( 'SECURE_AUTH_KEY',  'kixedyn9urqoljpftzdzpohrpqom1kzmrywy6dzyo2knts6cegce5yzpdhn5anmd' );
define( 'LOGGED_IN_KEY',    'nbrfrc95eyynpq1mtlel73v1dlt0rn4a7c2oqsjyw8nfhmmkbdjh7crnipcmq0iv' );
define( 'NONCE_KEY',        'amxtqvb97elin8wxasahzuix66n2ilj6v3bw8gzdcvzdrjklljiqa2ajyej3zz3s' );
define( 'AUTH_SALT',        'dqqjmeum6dty8ibpbtmk8aflnfgbzfpqbqaqflf0i3wbqkjzhn70uqbupxzgbnqs' );
define( 'SECURE_AUTH_SALT', '1l7tkubsk9skyb0wvnzyxusmiow9uprfkysshitowpfuwski6jnwarsry0teh3qt' );
define( 'LOGGED_IN_SALT',   'jpvsoifxnhdqv2fz8yy8ixetehigpmcqeexot5fsqhsgoj7fbvik2o8goffsdzay' );
define( 'NONCE_SALT',       'umy67tqgmhetnseaoxhmukwreoxt2veelgq6t5jtfutpxu96kpxg7fzqyncvkw12' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyn_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
