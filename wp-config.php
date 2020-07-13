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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Uzay?7*#2KE)Lc)/QR[Vk]-V~tv&+uCx*f:iI+W]V.ITLnj3R]~`~Qacm]RrU0q-' );
define( 'SECURE_AUTH_KEY',  '/1tn7v)T&*CBd=)cvid{?r?$bndLTHjHhcaTp`aNE]OKr,L??2t8<0(&hS>6nT~A' );
define( 'LOGGED_IN_KEY',    '<S&p%e?D[imtXN+xw>&6n~wBD/ K #xPdl*p(pYYA2}^0`7L)-~/e(wE]BwSK$K)' );
define( 'NONCE_KEY',        '+Jd3dtJq{K5H:kzWrPvCu1kv|&[M`!q1:Rl2dVa^_8!@ksdMYs0u0+ gTj19_b .' );
define( 'AUTH_SALT',        '$=y,{/wEh|_UjkD1gV?d2#$(Y<et~?lB-MdfkTPl.,t3A1D^{y.Ax*1shH*-+On,' );
define( 'SECURE_AUTH_SALT', 'D7NDO5shu[*!:fIH<YHpx&P(Kaf!8F 8&,PK^B;c[{1r1S@.&e;vXzF{#.2WeMLT' );
define( 'LOGGED_IN_SALT',   'Fhh&_7U?(#v>C)0v:#++rk[L`=.wvf_2=,$}Oe>@a$!^9!h)HuwR=dph|3+6Kjv3' );
define( 'NONCE_SALT',       '}sS cHm;oZ1OwjU;;:gA %O$!XE)Q?+-A&K_5ks[!zdl~7g9WM8K=2ZY836OI]}_' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
