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
define( 'DB_NAME', 'projeto-car' );

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
define( 'AUTH_KEY',         ')pyR?qj`PqSLhlbXa$2.S%b@8BmJO>M#z)+*=w<x-1. 9YzJ)nR3jkd]/c;)7ii{' );
define( 'SECURE_AUTH_KEY',  '?:j%TBJwY3hXeN`<[qH3~DK;joyz:[h+KUv$#u[S: DG%]MD!b*tz:kvq>]_wxfe' );
define( 'LOGGED_IN_KEY',    '9v[33czNsxxtx46j1{TVkvS?LBD!wg{Ww*hwB<s2,C,3b;NROHHlN`5X,W[dT)a$' );
define( 'NONCE_KEY',        'BK0y%[X^6s2W=xQ*5=ONl>~]W:Gx8rhIJ(i!U5euDt0%h[~o_$VQC*i*^SsEgk6D' );
define( 'AUTH_SALT',        '~0RoiPH8ah@!wYfhYDhZ]9 ST?IIucQ8e6c`&!$*QG(AT+dCZQ`h~MIQ_[(TXn2Y' );
define( 'SECURE_AUTH_SALT', 'qHMWudYAv44ULBPS!6FHaj7|CAu[QX|i>yE[>c#=g2.aRhfol?Sv;`zJcQt+0e<g' );
define( 'LOGGED_IN_SALT',   '9h)DMKko`V+~Y.ua(~h9s36hoD:QVp4(8yGb[aJQjQ*w0(2kg6=s^TJY#=y4i|>_' );
define( 'NONCE_SALT',       '}O>6+iLBXzT~IaUA6p`nLy8BUM ?MpC,xV3~kIpz>GZk?q]U!$=!!:@5lmO]|O#g' );

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
