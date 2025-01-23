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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'StrongP@ssw0rd!' );

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
define( 'AUTH_KEY',         '_QIupev+t+y;1N&#oXKs*j_2;Pe;U_h#QiK?Bc|G[~SL&l%03%wG/Uw?~gDO__kq' );
define( 'SECURE_AUTH_KEY',  'YsSgZ!cbg-)kme,Siwne12B~9[W~(}&]#v^BD!lS6?9E4M,i4gdC-EB iF)eD| t' );
define( 'LOGGED_IN_KEY',    'f*;`x&jR[Q$o}&~Q S:=9D#r(v8A2>5PLBm_v0-nx,7Niihn8N5]b0l!lomhwv$q' );
define( 'NONCE_KEY',        'yW%[w]ht`-fb%CphV>%}NI!;#vXb.wJz9#b*~>9},nw0DM4)Vl}%rs]jIwga4L?A' );
define( 'AUTH_SALT',        'c{>H.P|qj:wJ|GS&F8Op(+;{f]o#`2a^Jw6a|u~~/w-~Ffnmxzm5]<iW*$m8)Wb)' );
define( 'SECURE_AUTH_SALT', '|%py=;Y;xUx/Txqj(#9/;BWh%_Y`Ecs-e$A3sP^cxQ3&Zw6RdZrBsVx|%SOmal_[' );
define( 'LOGGED_IN_SALT',   'W3^>l(:a5Rjyd[##%:4Z3O&OZUM#R28Z|=A6KpN&LQmKv?!S[_=Jqugn*klQ:pi_' );
define( 'NONCE_SALT',       'x%/;6AKyn:yAeF|5r=;+CVW|w }f<56G1V3(=6`yon}9cTrF(G0dG9{ _OV!v/)R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
