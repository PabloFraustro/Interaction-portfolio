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
define( 'AUTH_KEY',          'K N={r)M#ucn#h5~|N)YDaic@0$]P>|u~HJ]9zGlM,.Ni9J-bFzu;d#LAW>cS54W' );
define( 'SECURE_AUTH_KEY',   '81yXrL?57K<$@2,hfUs=hAE}nR!b+j($(t,ZUf-6PFn?6D(B!|x)XjZhn1lt`-H_' );
define( 'LOGGED_IN_KEY',     'AxvtWh=EF:rji*NS[-fA+gIB=fVAuB=0~[yAjs`,9vW4Ld0xX~Le*V53:lwPmcGe' );
define( 'NONCE_KEY',         'qk244>,n]KQs`9Pei;6>eUZg(qf?Qfw~`Zj0Pu=TGA9N:M6GL6avw4Sf_]=nR2KE' );
define( 'AUTH_SALT',         'IuC{}&Z8$77qG<SN?oO}-*m8%%0X}a^uWRQG`l0`~Rn6{rW+Fy{^TN/CyK2Z!G/C' );
define( 'SECURE_AUTH_SALT',  'c)UW*g~Dbj;xo1n;yL3z=U3O8Ef%8|GM)&P{G7(.#-:WT9[5F,x&WuBvybK[Cd=p' );
define( 'LOGGED_IN_SALT',    '+H!(jhWaqIz|Ka1U$QIv2Ei%KLvA4V*qRU85u Rj)k*D.0Rg7]mc7/P//)#wX&p{' );
define( 'NONCE_SALT',        '=6SG}pi=$NFZMm)1^ZQkFIceE= b~#F&L>AaF54 JT@UyPc|zv65jIkf`;IY_E?Y' );
define( 'WP_CACHE_KEY_SALT', 'R80ymAPS!ty?QG*Zd^p^DAr*XAs:KL&<]%K7okO7osF<FbWxcSU!1D.54KI`X!w}' );


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
