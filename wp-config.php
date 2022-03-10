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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bitnami_wordpress' );

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
define( 'AUTH_KEY',         '$=-kxEY7odk%&*;vrMNj&6F53G}_yObjMq&8Z=F &y,>rNRb>SL*mQN,Q*-UX0/1' );
define( 'SECURE_AUTH_KEY',  '@Hn+<5qm*8P=V+(`V,~Hn8yDH -JG=ivC}$Q[e4Vw,Jz&4_@i#WzKh}GQzm[}PX_' );
define( 'LOGGED_IN_KEY',    '[H*fR1Eg+<T1;H(r/&R#A+r)-_vf1,rmuTDMcFaEL +Jd,UGeW[J-d+u08H 2L9V' );
define( 'NONCE_KEY',        '<`;~0kD?)+7h}vXwx3y@<k9V)V#r-1Z.EM?@SE7s4_EzHO)V4NX%eOBwuy-/X;/ ' );
define( 'AUTH_SALT',        'zisXz2*[5{Xr+=ZHL(<j-t7tqdW-zU=JLh,zSY9DIY~CZrfSa:?`avS6mHN[YUIH' );
define( 'SECURE_AUTH_SALT', 'd8=/`OpP:y|YEl/nP.;|t9>As(h0d`N_Gs^<9R^2ns5G7I$tqG$/qGg|{gHRk{`x' );
define( 'LOGGED_IN_SALT',   '@NN9?ChNv7jyQ&Ik^-T#oM=VySCEo`^h>-!9$1!MKr3.9k/*:[<REDXEam!<Z~8p' );
define( 'NONCE_SALT',       '!A;f6:wxn[qGVrbG]b@ZESVIjP9B*agO^m_&HA10tf{+zN94!WCzTmzhFvZ+y4An' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
