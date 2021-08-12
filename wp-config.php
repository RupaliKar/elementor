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
define( 'DB_NAME', 'elementor' );

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
define( 'AUTH_KEY',         '9B36q-/],hMi9QT:*[c8<e8:tDzWu3z>_@0LzYT:9dS3]l?5?GTy<!FE82<-t/qL' );
define( 'SECURE_AUTH_KEY',  'kP`t$6uypt3`9:;h#:1w@7cW){@ yEQ?K]I:2_7IYKZIX@m4r^:W(~ Q2l(bP1F[' );
define( 'LOGGED_IN_KEY',    'kJxT8;Fig}19|-sfMhmQ&`g4NF*y)0/wM.)h._=z5X4gx;<}pvXttxwUcQt{wH9o' );
define( 'NONCE_KEY',        'Pp>C!%7&hh%d`;LOE:p9}#nW9|sCYKU#>KwJk=Vr,7TLfCtRuF~c@igfG#hJ69ai' );
define( 'AUTH_SALT',        '>xR`1})A>M5l=HRs$*TYf:NX5H:+~A@I/QI`vO(d8{l!ZaiH|@lVKy[p&sOh=kx`' );
define( 'SECURE_AUTH_SALT', 'f$?yh)6-^K9sdgq^_O;Usq~2]#NjWqG3#$RXY D]%zGm//f~>d2J!,_%7gOlUE7{' );
define( 'LOGGED_IN_SALT',   'XL%>mQ;1k.<hTJA1A$j&/:=uy-uDbR&1<+FGuWrNYRRWAG&NE>9U4!v!eyCCkg5T' );
define( 'NONCE_SALT',       'gK!6EU26RZzCr]4|=i2&f;lR$S?5}Nz=s&ocJ+Qc|R*EKJbkS7oXNc1ik}*5OKq#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_elementor';

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
