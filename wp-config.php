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
define( 'AUTH_KEY',         '3nq8@2/|X$Fe!6JVS=|uQ DCaX}CkQw_Z(#3pL<1neKXzS*3tD(mec;dF-#H5&39' );
define( 'SECURE_AUTH_KEY',  '3hNQ&AU=>y| )F8Nop`7Zo>b#$A$-I*X=0v]E<YDqpn*oq(ZvUNX|kEAtuQf{oE7' );
define( 'LOGGED_IN_KEY',    'axWg*cy +g^HR)!?#LN*N5k{.9`$8*y1<km)`Q%w3yK33KX[@O|2M#SIk8lc|tVv' );
define( 'NONCE_KEY',        'Uphls-Q!xFM@q<S}I|.5YTV@0A1||=xqb{gN0kN:^#7M a{:&[~7xo5a`/%xmKmY' );
define( 'AUTH_SALT',        'P3*@A[3,[h`#DpEWweof]1aRtZKu%a47D5C `FkO*Zx$3R1D!1dZv+7pF71iGn 3' );
define( 'SECURE_AUTH_SALT', '|b~FCI T;|^*4uzx?-_;Vtf)O ~4?{6-BIr{`X@O/]mg]>aP[dkd*94x`55loh/4' );
define( 'LOGGED_IN_SALT',   'DCS>JuG7!^ Z?J`i<Lvj7mk)k&nK6<@f*CHGj=z>P_* P1*unQT9fl;$ i*u9;$L' );
define( 'NONCE_SALT',       '|?^R=SV&wUu#P< XVlXF]^L61>j;=okJ076kq&~gr7FB9pw9IYy?CrWN22XB$Ub{' );

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
