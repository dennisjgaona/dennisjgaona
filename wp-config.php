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
define( 'DB_NAME', 'wordpressportfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'LAYWzyz_l/-(*+v};!=<*S) 0KrQnk`VGJ{<[Wg_nO<{uS .#W,|U>/xs?H;.10.' );
define( 'SECURE_AUTH_KEY',  'BQsv c#dc^Zn!?;<c/8q#3%Fsg6PUp2iW)h],tJKg?K!g#G~8!j&3A(n9bN;lA8{' );
define( 'LOGGED_IN_KEY',    'oKe[cr=E9S[bqEkf;?Nl&XIKNwgb,:J| f:fc[@dIjzEOS}yRxowsQ%R7_-@}5 }' );
define( 'NONCE_KEY',        'XBP^e$/_CUQ{/EudWeok=`f3Z/NRW,*Q+xy?5R4{T4(!P3vL#@5GolXs5AOVNUIz' );
define( 'AUTH_SALT',        'E,giAuD~!r)C{r!XSi7Ltw2X7AU!U+mw(MS4,WM)750WfK[)=n6@W&rKkkcW(DL&' );
define( 'SECURE_AUTH_SALT', 'y,iv/Kj/bb)+&>PG_{4:|ZL}K=k4k07(S(2lnZSl^^6||{^*cj`e#};Fr|;*qQ(h' );
define( 'LOGGED_IN_SALT',   '%}#po=mrP]GyN7mAl;rSAp}Y@M+}Gz&s,t?L]lpNamI,^n[WNT`65LvH21xF~37Y' );
define( 'NONCE_SALT',       '<QtM:j<n%-0CLAe);^%76PpNpp.UQ192oS1u21/G;vP+c_/0QCd*{Z]L_o1P)@/l' );

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
