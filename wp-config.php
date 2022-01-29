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
define( 'DB_NAME', 'child' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
 define('AUTH_KEY',         'iNp)D*|`a{A-*aLTNk5xOvMY#-|DZ:!6(g?bj$8jcm+*$$Gd`.NP/ dUK3-LgVmH');
 define('SECURE_AUTH_KEY',  '7==4T!8xu3c5+=M4#?DKk5q6)@+CR(d?XD1O#{+NPN4YrBA~a_rFN]8fRRVu*MG~');
 define('LOGGED_IN_KEY',    'Og :UTgd;=@rFsuD=4Y8OCWk QYnMi~|!$YTW7>+@b|pjo30o9KaI- ZhZ!5!w,Q');
 define('NONCE_KEY',        'kABoJ0 Jm8l|H&=0q_W|J_=fO`>2kc8%&F/pzF9p!d1NX:yk$]s-;qw@m?vJu#>y');
 define('AUTH_SALT',        'bT|+u{3nuzPCzE:85ARk7l>Dto}E9sk(6Wc``$^Ini`m.xG/Jo+:Oc[4P%;H5UxN');
 define('SECURE_AUTH_SALT', 'JXA;!OU:Obt1J3-G86o?;*-_Q|OdP//qsD=+y6l1++}[DL.@+3|@-xyl1~!O2^}D');
 define('LOGGED_IN_SALT',   '=UMKv24B1?@=^`R_>^)*-k[`Rlz+ZU guOX;.v`--c0]=xGz4UAW3}vcKGKT#4t2');
 define('NONCE_SALT',       'r^?&mHbr#-mMp-L|j+R2|/K]`QsT4&oWc+u?Xvc2FN?{+ceSUrIO:Y5O%`d4RQX&');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
