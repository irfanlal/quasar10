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
define( 'DB_NAME', "quasar-ba" );

/** Database username */
define( 'DB_USER', "quasar-ba" );

/** Database password */
define( 'DB_PASSWORD', "AdWAm969Yu04LhU" );

/** Database hostname */
define( 'DB_HOST', "127.0.0.1:3306" );

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
define( 'AUTH_KEY',         'h?F|dH]|/4#Vc+1jm0|?3i)TF0x5pSjW}z}&p.+RA]C< `uiBQ-22F|]N$y1!<=}' );
define( 'SECURE_AUTH_KEY',  'L75kC6_md/ni_Th.Oi&I}2R~RdJzutwDXDn3DBk37d&/L>r<ss%s!l1*9k,I8`mQ' );
define( 'LOGGED_IN_KEY',    '$W/q|[kpInEN!K/flj{LYZ$EA_XI _XUtrwZwOy-]U1 EPF5,( ]+)m}2t~GIR/4' );
define( 'NONCE_KEY',        '6Y!c*Ql.V>N7;$rQ>d%.4>#;T[AsF>[n@!mym=fp4KdA}QZdJk#%pt^%<.72ocjh' );
define( 'AUTH_SALT',        'he9FF_0,%I*_Ncv|AQA`pgrbP3EO+^X_=Rmgv_sTqlhGR[vKVnk5mQ^i<aD@xb9Q' );
define( 'SECURE_AUTH_SALT', ':MqEqR4&EM-k1I~-BkJhYx`$a>9@;ih8fe<X<zQL^0ED</[ |2jK;mfKQU1(dKXv' );
define( 'LOGGED_IN_SALT',   'b?cAaJSBn?3p>z*x^a$=tVU@)b6]*<R(Jy9+X$P(mx4p?~JK|/gqOic_&daSkV#&' );
define( 'NONCE_SALT',       '>lygu?d;zxW63$v:u:QOp:es$JX>CQSt,OJwgJabI#/USH|@}7TD;OintNCw^_[h' );

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



 define('WP_MEMORY_LIMIT', '512M');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
