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
define( 'DB_NAME', 'wptask' );

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
define( 'AUTH_KEY',         'FPDwl5C7,8X]n4E94v5rl?q sOQK57_{0XxW,T.#K_0yLkW7aiVXNSN2Zu%<[AZd' );
define( 'SECURE_AUTH_KEY',  'DR~/BQboliLl`/6FWpyS3Zd6$m9e]3yC4*6+Nqari-(o!X.(q.mD@NtY.t=k`Bdp' );
define( 'LOGGED_IN_KEY',    '8f6oMQ<Tz~+_w;tu W`R>VSkt&o_$SZv&2(S!D(UKVnJuHx/:t+ y|O)4sI:_<iY' );
define( 'NONCE_KEY',        '.UlH%30#( |wzn+P~iWnOfg1J$~ >Ly+{}+~H@s~ &Rl]{5)5%57A=kA>ieIXTpZ' );
define( 'AUTH_SALT',        'JK|/,m+a(`bv_)rC8vWd*s5j54a:X]0aOl[jN~-VrGWr2vljiIe({QI-N,#BG^y(' );
define( 'SECURE_AUTH_SALT', 'eRop=9sS]lgFO2ONM~SP&)j]P(. X&7cm*&.d$H0RW{0 :/BckM[AB^-(x5c7>[w' );
define( 'LOGGED_IN_SALT',   '}|^~=P6d|$HD~>.cb7R;gkcP%mOQANrgvFWZ:A,~]U8scMZqS}puhi=}-B>,rsH!' );
define( 'NONCE_SALT',       '50:GgrBNdPCGpVeu%A;By9c_Gp?Nt(VpFEsE|]XDto$>3L6TbrY/?z[E9.P<z:]k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_task';

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
