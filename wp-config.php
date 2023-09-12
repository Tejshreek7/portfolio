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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'tejshreekambre' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         ',XgQ7y*@;rLaLbq33U`8gH[ q6 ceT@`6Ha^HC~qJHOvG+fb &7H%8-c`<ZWr7p&' );
define( 'SECURE_AUTH_KEY',  'GO6F1Z7Py]rhYbC$EIK*UAVjylZYi<M7y0MEA6TI^#JK!fn=:~X4T]l,g,s9G::A' );
define( 'LOGGED_IN_KEY',    'u[xI1:8&:DWsLDy3]V[U%Q3,h?(UKp=?U6%!xjsQgp)oLA^CFH^hsB&d*s6v~ZD*' );
define( 'NONCE_KEY',        'WT[XfcFZ}(uEiTOqxPbJ%l-Ms7oasqd5Df-re 3 q;=A1;l/Gal,/LK&?,O6nRB[' );
define( 'AUTH_SALT',        'JHGydE+~LXTH,th<}g#- XC[)UA=IfYs_qB4(2a26dq=;6!C-I2wxUY|(Y`_1rT+' );
define( 'SECURE_AUTH_SALT', 'V@~RnqCB^a^Mjv_2;jLbD7T.JC<?eFG/J)R!QWg(R()8wtJn;KBOC~+qP{3GIK6y' );
define( 'LOGGED_IN_SALT',   '10Rp=^a2Z;-.4n`^w(dbbeMNE(lnN]6R|y$07ED;hd6fB<v)CpQ>Tq6mAcQZk6%-' );
define( 'NONCE_SALT',       'km?^C|{&?Eo`)Jy5q8w.gMC<JxA6B/2-cfqHP^q1#AF>$<$$L5^B*_$Z2t;Da!IR' );

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
