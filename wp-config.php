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
define( 'AUTH_KEY',          ':4%4!ocB-EX$^#k7];[{0mfuxq8QuaG1e4<`YN;[Ia6VFu!@io/bFwSlW6peFFMJ' );
define( 'SECURE_AUTH_KEY',   '6iUvda-*wv`p+/t`_I8ur6TK8-[>SeY1WsY7b;5E/2Jk]ing5vPH{2nk<G+7TLh8' );
define( 'LOGGED_IN_KEY',     'D5Z0%G}yZ~p^5[=fZl&Y<CZ34h?*P|34Ey~CMO7qUzdV( {qqLmF8Y$e/7smda;J' );
define( 'NONCE_KEY',         '0co*X0tLm:*TS/Dw,6q,Kv?HpjtZX-=Rd2gT^Xlad!^)QQ $RMfYdCMz@gIKU:RG' );
define( 'AUTH_SALT',         '.jnHiB*?uYA^SdlnH`Xfn{&#QO8ru-SG^6+}QXrPB!RO$?P)$DOu> ;!(tW^VL8l' );
define( 'SECURE_AUTH_SALT',  '0&{:oV~}%0i(S3ypiJ-/]KT7Bs&ru%TK1RXW]]fTWA=PqfI#_#qVOJNmuV1931f?' );
define( 'LOGGED_IN_SALT',    'a~.06y>nG^|6m)v<C.ue!;[eApW!;;(;XA|3 *SYMDm`eIxS6QGiF;$=w2SXgXsA' );
define( 'NONCE_SALT',        'SpT|Cg%RsC5n,~zvu8jf{}]Ik@2gdQ]?&*FsZ~h!P:vpP*hI,5tqqaZ-uWT {)>C' );
define( 'WP_CACHE_KEY_SALT', 'jA3X+pq._ fp(xSr)e)dwGT^xSZ*1K@>zW!K%ime~oc{+cUeNIB*PYnF&tj0&0u]' );


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
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
