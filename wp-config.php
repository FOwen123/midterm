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
define( 'DB_NAME', 'daolingo' );

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
define( 'AUTH_KEY',         'Q #7g(e/&u~y[,4ocaEFgbURANPT,3])HU3ktvm.#0U%u(Qn{)N.Q`7nS4sTz1Qk' );
define( 'SECURE_AUTH_KEY',  'mZ.>S5C903Q46k~Dt:R(+m)V*(yKvq2gXFZa <:NROk8cg?wn6mAG$u5VB!})g%d' );
define( 'LOGGED_IN_KEY',    '([Pid}#^w(do$gv}GHawo->(sG>RRIxa8a(Um!84T%hgxGT:/tgwYqpB_P^n5H.D' );
define( 'NONCE_KEY',        '{:2]&v[N=W,Pmj5iIe@T(,I;K#=;F-Mr<bRiO5=)o{K)SEljRw!oU(jTS+?~W$nC' );
define( 'AUTH_SALT',        '6+aGj`<|6>|@8*&HYmKl  Gi<Z =y/#V?/pKrBtmAzpO,Jx6+{-Xe>@S`i9u$C#o' );
define( 'SECURE_AUTH_SALT', '<!gQgVNE;:R;rN6-4aA+H02`)h++|Fax_oq/`_Cd[G|IVGCL`kg&N3o1X,z%-_@.' );
define( 'LOGGED_IN_SALT',   '8%U2Oh@O!`F-*`@3m[9@Cn&zD;gQUC5eK|`xjP9K|1Ii.gGj2ns-MZV)`?,TadvL' );
define( 'NONCE_SALT',       '7DiDu|-DLeI%_Ta%?rPqDL<DGV-sM@a$<1q$7s1q7 16swzdVBc?jn>q{rgC#gbz' );

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
