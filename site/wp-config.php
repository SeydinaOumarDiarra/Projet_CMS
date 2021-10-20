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
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         ';O*(,NA8aB|}A~&nO-by7%6-T^;=RleR_u~HKu26b,3%V@jIFmYJpeDPz.F_%|R^' );
define( 'SECURE_AUTH_KEY',  'FT=ra>o`fq.*>~V.[U:%Z;VW.xz3bY{u;*3h$s(!D)C9S FZ?SoXX.;zzcA ~$DN' );
define( 'LOGGED_IN_KEY',    '/lCM5b<:Oxt~e-*4Bk[#v,fNX;.N%2fG(Fh*l[/VnB$`BuU4C!(U&!~n B7qfcsi' );
define( 'NONCE_KEY',        'jgYQpm80;_Xy-e/p<y-K_F#8Ht@J{EsF0KDdyl&N2:U#OAOD,5QO9[J=<{@u2Ux,' );
define( 'AUTH_SALT',        'o_S0JVPki[.oPY27rl6Ewb6xl5u l,<p4a7BkIV8tW`F0Li;^I-c`g=TxyJ>!G&o' );
define( 'SECURE_AUTH_SALT', 'e~-sa-*,_{Pbh9u>=c-#%mL~eMc#&aSL:dX+~vAn&r51<slo>zdMc<=[YSp(tjFi' );
define( 'LOGGED_IN_SALT',   'Ga*2Y:djVGrr}Dp^30VkA-H3$k7=o6;jHH7wU5.c1d)/TA=PNa(Euf@zFca>w5a:' );
define( 'NONCE_SALT',       'lK-J6e&rj&QN?YYk*:tfu}Hf!}jb>q9s)<+#;Z7EBR0YY[fOz&%0fn&HGFhGq|}0' );

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
