<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if ( $_SERVER['HTTP_HOST'] === 'localhost:8000' ) {
    // 🖥️ Local development DB settings
    define( 'DB_NAME',     'wp_local' );
    define( 'DB_USER',     'root' );
    define( 'DB_PASSWORD', 'BullyYeezusPablo3!' );
    define( 'DB_HOST',     'localhost' );
} else {
    // 🌐 IONOS live server DB settings
    define( 'DB_NAME',     'dbs14012032' ); // Usually same as the DB user on IONOS
    define( 'DB_USER',     'dbu2755019' );
    define( 'DB_PASSWORD', '2025@!ABG' ); // Replace with real password
    define( 'DB_HOST',     'db5017467053.hosting-data.io' );
}

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
define('AUTH_KEY',         'x`}q&x<<B;+|mK{1F/)bgY@nC|+s|+BTO9W@H7*;b/.)/&.&;mO;+tUv{~+w6W/l');
define('SECURE_AUTH_KEY',  'Kto|)rVB+4+*#D+e-byf:Ru; uf+l1KFSvXXbZYpn,|i*EpehFAZ~(Ixng`ia*_4');
define('LOGGED_IN_KEY',    'o9o+jVK+G>W.WQia=Hl.SGOy@FNe]_]2_wS0xR$*9wXel,-9RU5]MsYqs%j:Qcm ');
define('NONCE_KEY',        'K9v8x@z4-|Jbh81Tm>]~J:u3hh+-x`GyPzB-y8b2UOd3pHdk7n_KC~Gxmx_TBPI.');
define('AUTH_SALT',        '5abi<e1~3j{g/#v1gG)#-il-Z2uw:+ZiuIJcIl>Ou(}(,p,Vf$G!17Rol1L%DLX]');
define('SECURE_AUTH_SALT', '$9nQ[Vfy4ZafZ}1p/uT!krE!Wc8Ejn-DZR+Fcw;TL76@ZczW_N^ESR}+xsf<Sd!U');
define('LOGGED_IN_SALT',   'JkgM$.Ff!*!xO<6T/1=oS@7|X:_C5AMHCd7@~+k<j&PA#>i|w7l:-O}3S[**KH:^');
define('NONCE_SALT',       '_TuD^r<F9QuH{|+Y/ N:-|OO 4e+(n (8%urJ.%&eAxE,U|4y+@rC|@S;6f7ulA>');
/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'yabz_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG',       true );
define( 'WP_DEBUG_LOG',   true );
define( 'SCRIPT_DEBUG',   true );

// Tell WordPress our local URL (including port) so it stops redirecting:
if ( $_SERVER['HTTP_HOST'] == 'localhost:8000' ) {
    define( 'WP_HOME', 'http://localhost:8000/test' );
    define( 'WP_SITEURL', 'http://localhost:8000/test' );
} else {
    define( 'WP_HOME', 'https://www.aetherbloom.co.uk/test' );
    define( 'WP_SITEURL', 'https://www.aetherbloom.co.uk/test' );
}




/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
