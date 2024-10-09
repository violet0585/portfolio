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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ugN>isDp}*GE?s bI*S-vUe@<*:{NQ@B?~YIPR68WWB&Zc?GNapw(>a7)1s*B^xV' );
define( 'SECURE_AUTH_KEY',  'KIHzrp#uQXV#s@mu]=@QXc?fG48d;Y/=-E:7(Y>5>{i-M#qcV`x3!D6oR[?h37w)' );
define( 'LOGGED_IN_KEY',    '#&d.l$Ekq*d$FFqq1=`d@HS[}qjv}R| ;vbF@<$>X^QZn|Gdi,f%:kL,6YV><7^v' );
define( 'NONCE_KEY',        '4V:jrR$FeUmC.`)J5hGzL^@2/5^`[qY7~Yzn,,KnV >Tq)6]M*G)vhPZe% Cs78t' );
define( 'AUTH_SALT',        'IL_L-U^]1;UlY gGkHa/$>71+l#H,He/ Ac%wK=U|10;cdiK*tRs~+oG_Nhv-Psu' );
define( 'SECURE_AUTH_SALT', '+I,Lh<coK#-aZa|Z:.Bc(TB](^0Xh2Wt`4cQC~*;>mfvHT}sjKwt5$pj#Mk$HbuH' );
define( 'LOGGED_IN_SALT',   'Y?.wPjd3s$(<;*EC7sDm-hEg1%dn7S5kOTr{+-$kV!FL[]8|>-HOxL{Zxe:]Nq^!' );
define( 'NONCE_SALT',       '6x~$CgfFUq2HPGl[Y*Bn <UcwO@$PF#J!QzAEw^!?/u%*]lPR61Q>p [1BUH9 lM' );

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
