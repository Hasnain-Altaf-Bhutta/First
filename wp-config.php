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
define( 'DB_NAME', 'first_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'l^vidlkdu$nk8{0jN<MG#O6@o-}7G/P}qQ|!;N]#|6VQ9c?uCH,F/ahu%:P[UB?|' );
define( 'SECURE_AUTH_KEY',  'M&HMsel/2RsIs>!~s]D+_^N(1Il4J4oAsuVwne,V,ETz89K4pXlcp)TS_ZuUf~2<' );
define( 'LOGGED_IN_KEY',    'I,p,g<7N2k]*%:xwV/1fOD@4h(+J#:]Zn;L+p`uF7>WY-]sF4Fiel1kt5T[k<Qog' );
define( 'NONCE_KEY',        '~)biI%kanK#/(J)Ylb3rzN(AQ[v6f(UaHYMXbE$XF.-yAj`#/LT/.N2QUbPE++xm' );
define( 'AUTH_SALT',        'av3a6&4ugi5s@Se3DCEG`WTc8v8G.u9#%fnGB*)RW?aDm``08nV;?Mft&PsE#}x`' );
define( 'SECURE_AUTH_SALT', 'r]p)3QD.{78#`PfYM{VeGh)DpAV(DD+/9FTn7@?.0]W.Xhq2Rj(A<N2j@sRb+Jc;' );
define( 'LOGGED_IN_SALT',   '@13V@q;wY^AE3/eUcH@g)!V&4uaZLbdLe:1Xdy5=/ %,}m]Eoz4[3QdUyJkGz(9i' );
define( 'NONCE_SALT',       'ORYX!nC1fo!kCzyP}JB@TA,+lP*88:1!}y<@<&HBD*z`1h:AjLIE2 #d0<mg4,Em' );

/**#@-*/

/**
 * WordPress database table prefix.
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
