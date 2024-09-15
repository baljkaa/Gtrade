<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gtrade' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Baljkaa#123' );

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
define( 'AUTH_KEY',         '8El?WfLd~%s&yCH$g`.ul~Dnf+q|&H;ghphQ;.0/C!X@i7P4-.>MtyVT4uH<?= W' );
define( 'SECURE_AUTH_KEY',  'Jod(#ctT-}^?!.IO^PqrjNUWsMIs&w^khRqEH4IzAx &y6JYD]~<qb?Y1_A$<`a_' );
define( 'LOGGED_IN_KEY',    '?$]$5rjphhn|D k9CGCC)wZBm~87eT}`v&G^}rwMk;Q_;|`]7jUk;50MH#OBB5V3' );
define( 'NONCE_KEY',        'vmx#j?`I6i*z,Bw>@~ oz~/!s(s^x}$SuI}rn`CP!_H_9DYR&ogv*nTET82Sa|9s' );
define( 'AUTH_SALT',        'h-;<Ky^;`&VWx]z_b~h,TnI+OsurKNJ(h:ljqbC>NWNCGUl#%E[{Gir<+ys<QjrV' );
define( 'SECURE_AUTH_SALT', 'M O70{WyITL0-GjUz-)DFcDK$}S(:<nA7:sXw!)V!9~W?Yi<b$SP}twD+w2-ZurX' );
define( 'LOGGED_IN_SALT',   'fGk(bcl>]xclLo_[{)CabTb`WtGCTgE)-742 6WO=9A ON2Rf-,iQ:z.i]g@z60-' );
define( 'NONCE_SALT',       's @4DH08aryVbLA7L.*n-6#w;WXW`P m]n<z4MX0(MI@dNd{/1%=v}lH)7Pkz^w{' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
