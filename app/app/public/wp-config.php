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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '_ItUGV_pb6SITE?fi@|a 8Cvz2<iKmgtAzVwBh7p@37u56iZj~YEK&YzS[gP9NRT' );
define( 'SECURE_AUTH_KEY',   '|pd:WV+1`8f}DXrXzk<pl8LV:-{L(.~fu`hJVu[(a@/Eu<m#fkpD+1V--_d}En)/' );
define( 'LOGGED_IN_KEY',     ':0N)+p-n uxh.(4%AjR=~*q__8pW2r2%8$y>DY6T9O>pn}v}}^.@-S?M<43HLNd)' );
define( 'NONCE_KEY',         'q=7$3Nt,<Z;Sn,AiOLH,.KHr~!n=L!ZPGkZ0CLWe?gMAg?dB#HYRL1zueXVbxyyw' );
define( 'AUTH_SALT',         '5LBr#M?BOyJQ!}rI.i-v`&oaDKmtxN!3A{VDoNY)ofqgXQI}dF+<2>q~]My7Lg!s' );
define( 'SECURE_AUTH_SALT',  'F}6>&L36ye[uX8X{c6wG,B6<jUh-Sa?CWtS<u#0V>/]#w>mm[:[l?Bc-W%qet^$b' );
define( 'LOGGED_IN_SALT',    'HgV;EJ0-&jkmFY[deNK6_`+6|z;.4OPH%ORIQQa3y]QN#tE}(Z[f2rxaZH_84d,~' );
define( 'NONCE_SALT',        'K?x0L^b]CH0MV$9g4rN{FK=5{$?^Xa(mBqv@2,hpXHo~DC#;pCon<Zt6FXn#<nT;' );
define( 'WP_CACHE_KEY_SALT', 'j9kexW. KU9,`GbBwB.pe}X V}uO~<^R6LA&v5#}Wpn!DmMz9+Wq@(0OiVxMBM:Q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
