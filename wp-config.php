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
define( 'DB_NAME', 'wp test' );

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
define( 'AUTH_KEY',         'N08|OTOz_*@N?V#*9}7?o|70J|c96r>/b7| *K8VPUx;`<:o<VI.{]9IdwM*i%)S' );
define( 'SECURE_AUTH_KEY',  'j8i aqA]+zaG|*VA!}iSiH^![+>^ud#BN GmRNE3&(_IohT}b,AC*X_p 8.Mym.d' );
define( 'LOGGED_IN_KEY',    'Vb9WR&K62GH%H0KnnQb(p-X#Yh)Uy#q,`|bm$~JD~AEnkto36XKe6/47D[R#4AVr' );
define( 'NONCE_KEY',        'w?@LW9>$%YF,sq]9(IuCh+qWw=z3uv^|27B2Z>L46~k2<+M6X,{>/6]97FgUck77' );
define( 'AUTH_SALT',        '+o$jug}_;=3,n8f}}@)@$8!MMI%gI_te?V&l$vm,VW(Q-M{=>eiMw,_P@0 3h=SI' );
define( 'SECURE_AUTH_SALT', '#1`(-nMdn[{q!}=.oz(*OCO.%t-<8d?!E}$F`r([++)$I{YR;:-mC5D93dT3n7y*' );
define( 'LOGGED_IN_SALT',   '87Yw:l%4*6lWCEJY`MUTVIou@ g-WQ4^bfJXK-%OCv$Xs`Y-_K^9>/6RZ0tc]q|B' );
define( 'NONCE_SALT',       'L!j}FgI7OpO}HE!a5fkHc3nTYo.}TTTT/ix[b]|H|Kv9W?LOk*?D7tk$owK:obow' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
