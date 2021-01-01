<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sunkisss_solar' );


/** MySQL database username */
define( 'DB_USER', 'root' );


/** MySQL database password */
define( 'DB_PASSWORD', 'root' );


/** MySQL hostname */
define( 'DB_HOST', 'localhost' );


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jmZ%|uPjo=W&2*bh;hr1?ASv6dg}t<pS?.@yVU;at)fp,^K!,80lU.vJe>=TR#vB' );

define( 'SECURE_AUTH_KEY',  'eoLSIJry+8QO.:Sx`ih@nbKqmJ?T;O?ImP8at&B9b#L #;O8x,ph6U%]+iW>4L/a' );

define( 'LOGGED_IN_KEY',    '#HIO>D6iWqPs^x:zE,9kP,=sui9r&a00Z%q-~|?e.r<aPm:+dRKN^j[_8-7S_Nm,' );

define( 'NONCE_KEY',        '2H/r`W[z (;3v[Q;Ca Y !(q t|/o}&Q=H~_P$64cLz_#VP.0jWAQ?=WZA9IK~I>' );

define( 'AUTH_SALT',        'c}CM=w#w!wlCn<E1pv/)nBJ~5% 4J/K8O_#!6p<,s2c&CljBfQ*w_PI|,XcrLe%,' );

define( 'SECURE_AUTH_SALT', '!t9uD<-k8^|c2@VRN8<c,=i-tXHw5O7o2-p!E=x@1N&WCy|67~m[~uKSpY<Aa4P(' );

define( 'LOGGED_IN_SALT',   '{[GWYVP9?&c;NqSU9 z`f5Y~Cbt?tYO+hU3v_h@*aWXW?wD!U/^zS,>c{axU*2%#' );

define( 'NONCE_SALT',       'DK3|qASVTe~fDQx@~7lXWcQzo +$k7F~XFrovFJ+w[3wmv.,Mg/x1I/{0|1=v j3' );


/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
