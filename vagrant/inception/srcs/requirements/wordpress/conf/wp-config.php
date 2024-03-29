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
define( 'DB_NAME', getenv('MARIADB_DB'));

/** MySQL database username */
define( 'DB_USER', getenv('MARIADB_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MARIADB_USER_PASSWORD'));

/** MySQL hostname */
define( 'DB_HOST', getenv('MARIADB_HOST'));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'm6R/|=U=6Yn$(Sr8[W!1:S]~?6t]VcDJ}V!Nz;b16O|9Ls-l|Ye# c^!%x2Lzpz`');
define('SECURE_AUTH_KEY',  '~y;&r4Q*.4SYr+/uq6{~bo_|aoQY0H!PK5W`,m+DTAqF(7?IOA)_p#~^QeNDv,CP');
define('LOGGED_IN_KEY',    'X5h[WlxE2N~#40y0hJJk~&:/{:&*wKzD#,yZ6y]>U/i*zbcVqBr-B-(X [D$RvJ|');
define('NONCE_KEY',        '{&;DAp7M59&9&:noi5+I!mFI:3b+-7f!>k(>7PH0Y0m^s2r.^Q{+:,o%1T%>!(rr');
define('AUTH_SALT',        '6 qJ1$lY1pi)L&_W(_LoQ psqe1C.UPo~+Wms%0Zn;^x-,Tstn^K[B8$$AUPa*Rn');
define('SECURE_AUTH_SALT', 'MVlQQ,#[T0BH!(y&JlIjm_G#*M5[G*IZd`}M9%]Qv7?K[U9?Nw+~|c-wQ=|^3MLy');
define('LOGGED_IN_SALT',   ',dY5[%JfZ]oS1(*iZH+N)K]aK~z, AunTH7y [Fzh3~sheOSQ^v~8idx[<FpFS4<');
define('NONCE_SALT',       'T;s2~-&y!]C3mM^#Ekazb4vrDItj?v6:,up_IDmsic~c;w*r<$#wq78n_1-zzVxl');

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
