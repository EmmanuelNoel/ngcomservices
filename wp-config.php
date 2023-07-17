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
define( 'DB_NAME', 'ftpscioes_160827' );

/** MySQL database username */
define( 'DB_USER', 'ftpscioes_160827' );

/** MySQL database password */
define( 'DB_PASSWORD', '4Africains2020' );

/** MySQL hostname */
define( 'DB_HOST', '10.30.54.119' );

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
define( 'AUTH_KEY',          '@P9/g+@H;?Aq#7q_Ri?Z3%cV~!C Tp>CV_-55D?jSXzO(U..YK2:WEU3Q[{x=@w-' );
define( 'SECURE_AUTH_KEY',   '/z8AUkl*%T94+-Fj38(i`SwwYX#X|WQ_xgC?+VD~ 94/$pkV@6!*)IbZU1Vi;4#Z' );
define( 'LOGGED_IN_KEY',     'OZ!!$OV4q<YhSEVNw&pBRT$`[4SD_Ec*mQgC/%R<e}]x9I:F;UhRMgAjkwSdDs50' );
define( 'NONCE_KEY',         'QvA!{WNwS@>3m,,[Yh^P>5WPkT.Fa|L3vjU0igcHA[oY.eil,5$/1ocud:FsXWe[' );
define( 'AUTH_SALT',         'NJ%|Q{&C9-KF&:^<*DC`ZH-nW*(h5Hy>~F6o(kiTq_9c*0_dz~~iXLwEg9Jb1c?j' );
define( 'SECURE_AUTH_SALT',  'zjumcX`K.7=wgjv:V/!ztnP/}d@rBJ~H?R5/,^vM3T]Le~JH^+(}873_@@M;1JI}' );
define( 'LOGGED_IN_SALT',    '@4sYnX@1%l7/irVy?]6jAG)U9U$p_:{v=7J_{*#2SW#wGx=B:#?7`*{Ub }|{lRv' );
define( 'NONCE_SALT',        '^oV`OS3nUA4{cRb~pFUV:z%+t#@-0y4>1Q[}E{OBTQg3+`H5M~Y~(^<pUbL(=7w~' );
define( 'WP_CACHE_KEY_SALT', 'M*o 1F~h_dR%@wMM[1H#Sb:ttYKW2qfQ]XKhXMnq0,)g}3{506a:`cB>COF%Q3Sj' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_AUTO_UPDATE_CORE', TRUE );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
