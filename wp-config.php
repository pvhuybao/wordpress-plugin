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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',t(@jylL~Jz>(gNxC,a]0D9i4WszDzwC 7P8~V4y}ewR{qBq|;!1h3xwU3deL0lj' );
define( 'SECURE_AUTH_KEY',  ';*-+_;KMu.)On Gg_/jVCIsPe/?J?FsqZt(=Sd@I;{J{gVN_:;Gjt_6Bm]UysxNZ' );
define( 'LOGGED_IN_KEY',    'aTjN$BX%@&+=f!5M#>l|-J&NKFgWe^iu`hOvp8`?uD[/&ajB3=w,b$/?~RBvbUdb' );
define( 'NONCE_KEY',        '@m|l]q-v.C9G.L?(D!8I;Q_!|MwFY.f)!:k:w!+,}JV;`YWMdiF#q3wxBw+O#3!l' );
define( 'AUTH_SALT',        '/R$6h-5GqRn~bXS/6.1D_`jZ3>xc3FVg5(xe}IRNCz`4myD[4:}JIciu:!*bjh[w' );
define( 'SECURE_AUTH_SALT', 'Qfb2-mF~%w|u}7MO6q4xOj?V$~2:>jMmUXpX)N2I<<95iMJHEjU).ilx=06~ukst' );
define( 'LOGGED_IN_SALT',   '[9.8k9Q7|e?=yfYYrDp]0jbZpB/A3col%u&qCiwL-TPm_u$jY|+b-:@XV~qMER{=' );
define( 'NONCE_SALT',       ']mYScmH__.7:RALt`L[cX3vg%4h8+!x8DhsJ#WTo-Zk7`mI&XN|@R$3l4usDVU2$' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
