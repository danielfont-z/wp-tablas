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
define( 'DB_NAME', 'wordpress_tablas' );

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
define( 'AUTH_KEY',         'zw-yYfb?qvlba#F9N,8o&_@xYtA,cRelH[BM.`xhE?4ZFc-w2|EIS(mjs[_Lo;Hq' );
define( 'SECURE_AUTH_KEY',  'Cc4]kSG:!8.?!D_ti%bDA{tkE=)BiRePLV.P}bl8BW6u-LM*dOAv4?`PT7[8T.jm' );
define( 'LOGGED_IN_KEY',    'mD,a]`>[P*QheawXr5(07tVT&guTIca4NUuE~$9XI&4=`c#wTL:R[@u/iui`G4U>' );
define( 'NONCE_KEY',        'WaiPtme0(iucJJuy9J#n;,:3z=hT`,4[aOF]-?vA)JQpSG%ZWWSml3-}w>K{p)ie' );
define( 'AUTH_SALT',        'HXgA*/^]p[cw2{0.QAEhCc[@f6`[QnFaj780V4xJn3gGAh52o0aw-mIO-6T-g0t:' );
define( 'SECURE_AUTH_SALT', 'e5Bw!FZa/b=J-ZQaO:FhPz/OyzcHtLYr#ztnU&??c2A|`#|Q7&JzeOoRlmX<)LnT' );
define( 'LOGGED_IN_SALT',   'b]#$rN-vMN02xH7RY]*,H<N?s? t-?;Vke+6GZDBHHGi8=d|$e]9*+(enh!&1=P#' );
define( 'NONCE_SALT',       'b7Z,1Iki0c`)t0~_3W{aKUk`4k~rKp[n9?xkysC-U|b7NpUD8uP$vUxiP&4o*V.f' );

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
