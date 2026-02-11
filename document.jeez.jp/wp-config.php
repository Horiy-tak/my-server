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
define( 'DB_NAME', "azurellama84_transfer" );

/** Database username */
define( 'DB_USER', "azurellama84" );

/** Database password */
define( 'DB_PASSWORD', "cWG_xWZLu-3OP7G" );

/** Database hostname */
define( 'DB_HOST', "mysql655.db.sakura.ne.jp" );

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
define( 'AUTH_KEY',         ';<3J%N~l0f46DR/Q#O#b+a_,*,-NT:oN+TA$c+633l@mSrA-24)>EO*R[hqP={?s' );
define( 'SECURE_AUTH_KEY',  'JFv7D>)([fA`{ yxU;3K`1VP(L1r{?jb^7:HF|SYb[Ce,-EcK9Jp#I<W?V@UEUf2' );
define( 'LOGGED_IN_KEY',    'R]n|iTki/qG8:CY|pOA#A+J63?5~::v,TP|4<d<b1NR<|{K}z[BU #[oKcE.Q^|w' );
define( 'NONCE_KEY',        'ZRo[[(}fK:k$A1P`mzCUX*[ C;qxcI48_B?]2/Mv&CcJo}U)cf1AZLC0gspLdk$R' );
define( 'AUTH_SALT',        'Y%3IsI14kS{D{h7_!acapTq&MBG*zvcePiRX,*HMMy<])(T2gcegP!JE(YYwPok ' );
define( 'SECURE_AUTH_SALT', '^*ACQ>jd*E0(>K#,mTAT]_|aWRK[6cK5U@{!7tKU<:KWt3wco?<FY0e{8[:/+LH<' );
define( 'LOGGED_IN_SALT',   'UNo7O)]a_fA`*MNa1BY;zEl|1mduybU9C=q{ZtNfBv!D>QkoIYV[U?:b3:46sB>a' );
define( 'NONCE_SALT',       '{*n:V4 ohT(:EQp2mt-RQZB<r<AC;i^ZhtSlxFAFz;(H6uT1dMv1_JK(%]jOZtJn' );

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
