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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         'z^LW6)UA{9QKT;Zu7a^[Ytd_M++xqK&xYk^kO=> I>ix.[B0.ZD~%RDzK+A3?NI.' );
define( 'SECURE_AUTH_KEY',  'Q*?,WRno1!.&WPJ*Cz-]Td%BjH<P]uXYxx})vT,j@[zVb$zDX-RV?{hV;1y|M!(<' );
define( 'LOGGED_IN_KEY',    '(|L0{v_[g,|1(<$`5aJuC4w=ierU@6OX^xPt<Ecg>[0a`0J*Kv]yYQu]|wjebp/:' );
define( 'NONCE_KEY',        'dS|?C`A|s/Vkk;3nvT{Ynoww?d^A)i:cwTW2Wcscxm%yRb+/rnY(<%(Z%*FDJMY3' );
define( 'AUTH_SALT',        'B?mz6pr9N8Kf#zt@?R6`[c^xFes9g7H~1 96r8rTvsV oJ0s4VvApLC)zK-@-Nua' );
define( 'SECURE_AUTH_SALT', '(n;M`Q#8cU>15M%1Mx0iyMx`GY_~j64zIRJU%%@#B;:]=D&$w7?yMx rbLXQFn`I' );
define( 'LOGGED_IN_SALT',   '*Y7Fpu7EXBo0,h?/PSxuFZ%)+|n~t-%NT@WH$2xO5^epddw(BZ#2N*&.Jphk|6dy' );
define( 'NONCE_SALT',       '27He91`nh{]2`TkoO][|IS){$<ye pLKOhvHCp,%&OmqS7G#:k[a=G>]0p6/u9Ej' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
