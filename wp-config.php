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
define( 'DB_NAME', 'tropicaltreats' );

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
define( 'AUTH_KEY',         ')Oc-3!(=A3?I29j{Co{p_y[8@ht72YYrEphEFPUugot&@0|RdMf&b.<RlC^cVT8a' );
define( 'SECURE_AUTH_KEY',  'dWI<-,y%t@nSYSz~YunAeu=g`,$nmPIq(t^.GarS@gl5ykkWQ/?vM^4/7hQkwGT=' );
define( 'LOGGED_IN_KEY',    'r2Jk+t#LnWa:sqSdBR@Y)i_vx6*6G]$*9rv`2@LMt,]w:IdjC5Z;:e]i]/PYk?:a' );
define( 'NONCE_KEY',        'Y|x*~LU}Z]NYuh%M)`>#l<`j1C~;/ vnG:pOq pZ6 `1IC VVf;dY(H;+Xv@:{`s' );
define( 'AUTH_SALT',        '&wPakpOa._usq9x9B>Z.kV0Zo&Z0X%KTiH.>8m7=|PC[`*XULLh c=)J6c>/1.]5' );
define( 'SECURE_AUTH_SALT', '+bc,QFBigu{  ?+P,)VnRzn24Hf>7HEIEbdOAHXzI#vHMp)5hw[I+FGR;Z_D5]cy' );
define( 'LOGGED_IN_SALT',   'sp=}6&6yha|_JM60)WV?r1J[yB!_r={4NNmqh.E=Iir0Si_D%<o:8p+{p.er0sD+' );
define( 'NONCE_SALT',       '/)^~g!QrW(g_HgZ;dWQhR;a&ao]B1,zNo^lR[!^S|B..Tc~#seAVSTQjL74~Ywiw' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
