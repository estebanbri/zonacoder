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
define( 'AUTH_KEY',         ',2Pp;m?L#t K[?;Q:&oS#~@8WY2UzbBH=kN<&#t{Ky3B4NS{?<7RQ:7a:lv~H,/u' );
define( 'SECURE_AUTH_KEY',  'hKiKz08,5G#IS~.ObD*BKzh:HVo^jm.}iV8P59&S` RE:_[]iZQ~-},w7-7$MZ>Z' );
define( 'LOGGED_IN_KEY',    'I`%Qwao?jAf%!)Fq|[#dqa|C|<H9p-,XfpOHs2[VebPt$-XZ9MsnXAks)$J:/V*Z' );
define( 'NONCE_KEY',        '8Qa03uO96p-U|zgJXv`ln5L48{[tx~N%h0z*z&IT(])_#DV]WacdldHp_XX#i@;y' );
define( 'AUTH_SALT',        '{ni[Kf1K12=YkH Aq1+T9J4k{P8d0/zu,F,EzfDin9a shr:M(0S$xNVED4shtBi' );
define( 'SECURE_AUTH_SALT', 'X3;=C#35{k5N.^G7J:*s>5bwxtw|ag#;aLcN#v-Aqg+*d6%Z1%6g8e]Du,iHjr_j' );
define( 'LOGGED_IN_SALT',   'Taudv;Xj6m8Kj$~bdMb~jB{TF tj3eK(fa)(hV>|Y(P6UoQTy<c<nfsSmcTf6POC' );
define( 'NONCE_SALT',       'uq7+^[7+S/I=XywJsN4e#ug+dYWtf3T lZ?/D_9~_LdDh^mq)XkW18<bwJak.dU~' );

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
