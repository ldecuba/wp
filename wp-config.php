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
define( 'AUTH_KEY',          'DL<~qJ;+FS4XUS;8L^I%~]-fDrW{u46feke:N;hfcZPH;yFK<Rc${@M^:5C%m+}!' );
define( 'SECURE_AUTH_KEY',   'NfN2hy#Wzw<^h,^G<}VM#p/8gz.=z}|t|~FKw;-pV5ej@cmC3;$&70)~8)88KmI/' );
define( 'LOGGED_IN_KEY',     '%zo^L{I.!bR)G-QXf5FW[<a,!sV; J*LO)hgGDn|Dw8kJNd(B9~Q`xGF<gqrN%B4' );
define( 'NONCE_KEY',         'vp3GDw0rT_/h;;Ow;Bz$ALE2$@+&=H8v@{DNR`UAf}>1eN5z/TdxS4&j`}~!*7/0' );
define( 'AUTH_SALT',         '^hNeN82<n-o,D1f8]b&EZuJoT.hCmVLH-!Eb^I or[f$s/w=W6B;|5%U|seKX}lf' );
define( 'SECURE_AUTH_SALT',  'QQJtZ)7vL{744<%GfP5Um^uj&mJ}Q_RR>H50>Y=jdb#D^j;[5:!xJf`j L`f1*Q/' );
define( 'LOGGED_IN_SALT',    'wkG=uFT^lL@#v4;G~I@L#C+EDKP@7R 6>r+)X&FO`*vaxKxD8Z9RFA$IAa|aMfv^' );
define( 'NONCE_SALT',        'Pgc*MEZKEz<9EonCywtj8Wq<-Nw)t ]<o`G/gV4zaPjgu1Qd:8#5nbs[U:*(/S-{' );
define( 'WP_CACHE_KEY_SALT', 'X;{3gOP|i;*/tnqr9*7nw!FQ+:LY_HqCn,f~sT^RSPA_,!@pN@Wbx[cLKnq}L{//' );


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
