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
define( 'DB_NAME', 'password' );

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
define( 'AUTH_KEY',         '/i~(+bxEomY?.5#</b~I37og1}G(lnW:]f|ni9uc*zw@*)X9P9c)ENdIDJStdDi[' );
define( 'SECURE_AUTH_KEY',  'ZGGx7(Gp$+brj%1R5V,Lb|Te&XQuK.R#f$;qo1rT.Xj?NRf3I!I)BljAZP9dISfz' );
define( 'LOGGED_IN_KEY',    '2*mTWJ*fW,W]K})[@xm,Vq1N<EKiZ9pJs^%=f# Nb}S@w(C`=UGjC[ISeyc8MsFe' );
define( 'NONCE_KEY',        'H_gj*Q|Z$ O:T:b m;}wJMZ3ZQ84I P|]3?$JzQB5+819IIt}yi|Ptz2/in$UIRW' );
define( 'AUTH_SALT',        '}eEX84rokn`.XRB^;ub<wIcvHW+87,(3B(e6FXDW><>E7-mWiad=`qD4+Tr/#IWA' );
define( 'SECURE_AUTH_SALT', '-1,IP`U0V5#55Fm$<yA{qjr)goBaGBSP|Zf;&1l5/!~qID(fQ9XqVl&z6XWD4I}`' );
define( 'LOGGED_IN_SALT',   'pcbTja%z?qU=_F?{lNxHLBE>9ru)MA1j#e8]{IR#m!eYgnGt1rc1{X?HITy7Y+!V' );
define( 'NONCE_SALT',       'wd7iVu$?D5?6-nc>dvG{c.}l*#X)kmUJGqLpO0yUgc>gC6yJV+>SjIacG`E&9He;' );

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
