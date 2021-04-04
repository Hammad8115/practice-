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
define( 'DB_NAME', 'practicedb' );

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
define( 'AUTH_KEY',         'Wjpw)B{ZPTVl(Nkx8ETyp){HBRdLBROuX-SQvR%)`3Z50*S_LdTVvlbr%*#(2;Gc' );
define( 'SECURE_AUTH_KEY',  'OhKK_Ggu79bTaF-2p6+~Hyrw&n>v_$ UB-?LT092LZ[aE0d$r+k&kxHTc?#*=;nI' );
define( 'LOGGED_IN_KEY',    ')(pfo*yBGi?WeF6n-RIZ!!@4%uX]PrB=FVkcaQKZ?5}2>:0o!$F%miP%]Rb/Q]+/' );
define( 'NONCE_KEY',        '&r7:G@(lWSO]~>wxc]AqctCK;z|r@[;~@=X0+P@E5(y&[5_6Qgt<SsjfLpS4^,4r' );
define( 'AUTH_SALT',        '!h#Yokx<Gtk@?X?49oc?)$bx(Sl$>JcV8eQ49v h,20[t*tKcE0/%?!)(@TB#J@L' );
define( 'SECURE_AUTH_SALT', 'cW@.iAj7SB^ZvO{yg>45]LxhDv=YtRhC_GtSJ(8;@Qfr/?lf;?$hbAoQ>5|v[x/8' );
define( 'LOGGED_IN_SALT',   'sQ37,;#v`@UFGIDugCcb2+Tkg)P?m{E&qOUE]bUPy&iF`P;ej$I$Gs.IE@3|/$LK' );
define( 'NONCE_SALT',       'Fh_1iah*RUxDu% b6A0/eZu3C@nj34|KH[]lz3P&FHWyGC5n#7K&V$oc8]x]Hc>x' );

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
