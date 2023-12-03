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
define( 'DB_NAME', 'my_portfolio' );

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
define( 'AUTH_KEY',         ':c:/[iU9TO){aneJ|%&0qQyQ6cz}geGg{7OyLTO5MuhOSnNBXJ13Sj-SZ ga :T_' );
define( 'SECURE_AUTH_KEY',  'lRE(^9Mvy<Le8.?rN~x$=s/lG,OStuCN}M!62}mhc7$toOt]M&I~u?P5N6).yDon' );
define( 'LOGGED_IN_KEY',    '23 G%#ck?bc lQ[OwYkj{^b`.bxZ)unDDtM8y,W}i3X,C_~B5H8xL9Qadd&<jXld' );
define( 'NONCE_KEY',        'f<SqMwOehPU3,#jZ^p:GxWL/oi_ (_H*/rsl l}:_67KeUD[^.u/[fU~T&GRc E<' );
define( 'AUTH_SALT',        'O--7j68#_p]{{~>`NZHY)}*}zC+hH*d`{gQ%Y8#vRL4[{fh%*p0p3ziUTVc`Gg?_' );
define( 'SECURE_AUTH_SALT', 'rk[:eHd1{u <8*!f.sHk ?qm;YuN]J,L~?R9J(6V(hql(>2lEM+4P!Jh-j~dM`&<' );
define( 'LOGGED_IN_SALT',   '!BB@Moe{T<zMdZZA|M >:f$$G<[ !`NH=uLwyOcpj2G1(!_+@hgr`FwS]e704*6e' );
define( 'NONCE_SALT',       'dS|?eB9g9edKyqRmZ4;p[q[xMByuuO)].*21(u;.U;Vt9AZg[kY+*1{(*pMs<3M6' );

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
