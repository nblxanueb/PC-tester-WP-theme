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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'AfFIl9AWpx8QDcZHFteWGWoV10VNAlg5ZWUvHKax1SEiMW+51N6qXtrzRDUItiW6B5R8cgMm7+YjyFa5hqcTyg==');
define('SECURE_AUTH_KEY',  'VUO3O1Nwp7kcpDDSyB/clHpmMzz45PkKfLV7FuQAMbWq8M1s868jeoCPfBUiyqgThGeHGsv1s+hv1171Xgd/zQ==');
define('LOGGED_IN_KEY',    'H80k1lYvH44S1xH1jmDsNHJRz0BqKZKz6Lpd8nSz/byUXSYY19pNTu5mAS4pdnVjlF15kSTuTyzmLieY8f3Ssg==');
define('NONCE_KEY',        '/F5vrXcvK/SqM530lUakhGh8vPIp87pkzvYWo0l/8VMGoEjp7Nq27Gm9WQMfnJUJUfVghkThso4n6O+eK0dyVw==');
define('AUTH_SALT',        'iOjID1wB8cfIjq6P4daoQKHjsLp2r9skyIRRC7faI1SKmI+qwEKtE19pT0pwlQ40arYQ0cwuRMlyLbiSKZFQ1g==');
define('SECURE_AUTH_SALT', 'CWsMQLkszM3WH2qXglaAEQRQN39RTBwqxEZ6Zfba34bh9VRig4/Em+NOYJ/C7x7zxcIeuIWhun/kd57liBM4AQ==');
define('LOGGED_IN_SALT',   'bTojlegmcisxPOqVi+2KNWB9lwbM5TLsuA5UfZgJjwLJUeqAIXG4ecpgvVO7l441zT1OL45h3OXkLb1w1CT8Eg==');
define('NONCE_SALT',       'KGC+dUgc9XKnVEb04b1XY4XQKhRR/mOy2CMxX+fQWITmefIxiZyLJzuO6fvE5p7mu/Q4JUEYQqOsFmvarJjXFg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
