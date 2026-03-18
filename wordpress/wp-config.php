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
define( 'DB_NAME', getenv('DB_NAME') );

/** Database username */
define( 'DB_USER', getenv('DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', 'http://jerichoresume.xyz');
define('WP_SITEURL', 'http://jerichoresume.xyz');

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
define( 'AUTH_KEY',         'NyF%v[IdhIs~4;|p2WkUe3^vb7dz~+Vhkv7q[VNfjV v:sW$JB3b9vomf0[FPTho' );
define( 'SECURE_AUTH_KEY',  'a?XMQd40ofK8H8}4hwSd;vcc>wzNOw6gCG|5*#:Nf{DWz{G);;*fX6zci2 k/hYi' );
define( 'LOGGED_IN_KEY',    'Mg!r^dv1;|Px9Dy%1J,dR|*T/fN%|}M2${}$6].?+%$mo 0<kfR{47 xL=-7(Ds3' );
define( 'NONCE_KEY',        'IqJ:RG@O06#{Fk!10hp.^oMGOs`)Yq:SGBrm).kYnGE3eRFsl4,nS.P>t9-z7Y6z' );
define( 'AUTH_SALT',        '4:XDnDcy*5RGhcm~ot_$raVQuIZv$.sS>w(C&oci46=f7n5%ZL,C]#ff@~|v&rj~' );
define( 'SECURE_AUTH_SALT', '=7v&(6(o6nkyTaLYv:7#=2Oe<P<-&x;Z?~,[3hRc30j=^4m[qE5s1jCT2FnU;rMx' );
define( 'LOGGED_IN_SALT',   'XT9.aMx5qz,FVD#]wS?7I@6$BBC6(!&zq+dhNd)!$KTRTbTgH)ZwTW54/{a%w[5;' );
define( 'NONCE_SALT',       'k%,NPl`wBE4v4X}g&<V~^RF}j2 np.!+LOsux`($O5i&*?gGfVL3uvej~|pTe!j?' );

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
