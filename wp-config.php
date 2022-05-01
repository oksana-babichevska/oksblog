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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oksblog' );

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
define( 'AUTH_KEY',         '%:1{%7eBxt|2g[y;z-djq`/m[n?|s*]jT]%x`.P#v-Ly9d (^+>e4#Py>8!b<Q$Q' );
define( 'SECURE_AUTH_KEY',  '^)B{huVelFZ=x&FIyir6fIKYd|E?BY0FLUK_)TpWu`s4<M7f[YdXIRV(?MY/0:M9' );
define( 'LOGGED_IN_KEY',    'Tt=*% ]lxJIVQ{uJySyw,Q7-aNi~]s&0[/phW]viQ}Z&s_9>22lO^4UYLs=eDK.H' );
define( 'NONCE_KEY',        'B%O3:9;u95x!KeXW[aDxpa$2Lc7W3lN9VOo68 fo_:itV(9aBtfC@j QOA I}(?$' );
define( 'AUTH_SALT',        '.~5kFDJ9uC?<#9~wid)JUj5:R,HesF/>gM@2|zS&-D*|{^Nf]HCNG62gU@w*KCL-' );
define( 'SECURE_AUTH_SALT', 'r(y84d$&fe>#} p+BH*EH3oob,ROTqqc`Y.;Tz2`^Gae66qows%18U3J#6}&`K3G' );
define( 'LOGGED_IN_SALT',   'tI-^{?!qUD{X~CyxgdnvIN>75J,j293}*&?}Xh<aGoSHjwKAx:c%N&|Zz?0;iNiT' );
define( 'NONCE_SALT',       'M^`)t7igD%>r`Hs4Jh!gv(B4FpW#,Qy(zbe-GW@2|fID>c0C^=~#rU[t3~N70`sh' );

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
