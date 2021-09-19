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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpressdb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpressdb' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpressdb1.cc7yxwd7osbv.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'Rx8omG)sY_3[C_1bYN:Q[Z5 9Cxp1q|=H~^dwXgsL]jy~?8 6L`*tmFoP3:`Bh}y' );
define( 'SECURE_AUTH_KEY',  'IWrt(vV<EJlc-Fl(c;j|?y9P~Jx_kRxB26&w8vj-R_xsApk++MQ$0;cF& Kv`VY1' );
define( 'LOGGED_IN_KEY',    'iH%P*vmZ^|^d9(.FnWg<Yn9SNbm0K^bq.~^,|9uEq1u_{.vcw{=MhC=L;Z1t&kLr' );
define( 'NONCE_KEY',        '[aDuqP$PG;m@VP+J]~o{l>|x0>|~r;mgl$Z*5zhd~VHgJt/${+,KgzZ<z{PEeh=r' );
define( 'AUTH_SALT',        'D/j9)VrI&Du=*H<V;sgH5:SM)_~Y5EvB^Ac_YR047IJWgG7<L2o(GEN0Mx4[+3XS' );
define( 'SECURE_AUTH_SALT', 'o#a;o~9&pnhHONRomEU*C9R}-%DpO8)ML@?dA0.6a;VPQX%XbxWPJ@:Z@x;xKGO6' );
define( 'LOGGED_IN_SALT',   '};[S@%o& 0neT |bY.Lm2Q6vs7rSVjDhM{yR{g3)G2l:1ZC_GLWul1rDWu0i?R-e' );
define( 'NONCE_SALT',       '[pIYls(]IeN/`|Ml,biDSp8Qs(nY{[Zs)H+BR;gln+_74Y=3&#YauJa=lgcvXj4t' );

define('WP_HOME','https://sheoranlb.squareops.co.in/');
define('WP_SITEURL','https://sheoranlb.squareops.co.in/');
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)   $_SERVER['HTTPS']='on';
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

