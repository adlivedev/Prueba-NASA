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
define( 'DB_NAME', 'u917278240_gradi' );

/** MySQL database username */
define( 'DB_USER', 'u917278240_gradi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sD5M!^!ih6[' );

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
define( 'AUTH_KEY',         'Zg/NVQdQ2!w(uix *4/bcPz[FP<F*o3q~n<_@MZ#B NzaonX1j)!Qp?wIE._aI=S' );
define( 'SECURE_AUTH_KEY',  '1/hz;Ie?{5E9J!Wj(Tp9|>GIfx1.a qRiTZ<TUA|-!CN24YA&[<wG8 ?%_E#m,c`' );
define( 'LOGGED_IN_KEY',    'V42cu?1 JB`&.O6RQm<iu[4= s9%W(Gpo O<NNE*Ju`xXktmSc6hp#NZFiKfsZ7X' );
define( 'NONCE_KEY',        'Ix%_z!q%[NU!/ [uI}E9v[YI^F10pPg@4q+PDGL3U*hv2!etnh@q,+3}t1d.o7fZ' );
define( 'AUTH_SALT',        'f.kl>CM+.W)4K;+zJTZB.-IZ)NgPAA^$<(*$[eUsQF]o;byH+S47xNJWQ;8&AP.>' );
define( 'SECURE_AUTH_SALT', 'I-^JYrl;Yk@<n.tuBaqRoRuVEZ)H.-,/lkPK$BAK;39ktpi!ai#@o7Ewy7u^irZB' );
define( 'LOGGED_IN_SALT',   'BK*)}a]QGT]&&V2?;}?ye[!!Z:,iFV4e|pK+s7,Ee>~WJAYAl{|Z_g<3/~^|_1dF' );
define( 'NONCE_SALT',       'Zz4C2U#ST7eKGt6BVTxDn/XMN|+]_,SO<1%B1W+5`2c~:7d),2NTsYi6*FNo/CZ8' );

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
