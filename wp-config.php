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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_usr' );

/** Database password */
define( 'DB_PASSWORD', 'YOgu@321' );

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
define('AUTH_KEY',         ')n90gTR%/|-vPn,+ys].K&,/3V,1kg^XlK#3QyuqyFErb^*qMC|-}{+JMB*X+A?6');
define('SECURE_AUTH_KEY',  '.Oc2G|NGf1-hUv)< zxlmqh(3DI|[Pu>EWX:KU3aM)I1c.>j(`MyCa!>5+&XiF#p');
define('LOGGED_IN_KEY',    'N95=B&EL_^(h|6s?uER|E?Tup`u|xOM30!SYJ,l_OfYb;+AH(r2:/;+dQA|h|+=`');
define('NONCE_KEY',        'zG%]j7Bs]~$f:{Yr&k]y4D?{Q=}Tb+5I{,/s5>)$GZM_H??f+e7zwmMs_AneW0bP');
define('AUTH_SALT',        'KTiv:tnipjX 0`~K9IK7a!aD5/I t+d)1.]$GzY/WnQ[UhuG4FU$$p9> pYLc{@1');
define('SECURE_AUTH_SALT', 'Dz!GaDn)@$-3So[;H.Xc154_EAyQ:}FU&m=`[PlG(Zy9 [|R8qpVVvA|Z+VwU3L{');
define('LOGGED_IN_SALT',   '^7*0WA?WJ9LuO?dY&,Nt8}n-$nK.,xHwPa:H5VMC~wSwSlLdDT=g-iQJ)m|:MQ?c');
define('NONCE_SALT',       '-(,,$Auf{(wkS8MFAJhP86~8$&oyrRt$a+BHp&m*a-IV#y.9*q`-.IpFCu9M:C7K');
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
