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
define('DB_NAME', 'beatrix');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+{JD^|eJ>ry^lj`{DnZqB$(jLIm|;z_C$k8U{wsn76&Z>m8-ZA-;bvY,%}xx)~t.');
define('SECURE_AUTH_KEY',  'QgWzo?O<I ]EtoMBGLAsE:u~h,J0 *Jo:iEznD$vQ(oJsc~xIR/Wa&#A1afo|O+}');
define('LOGGED_IN_KEY',    '-= 2PG&s_S Tw#?+J>`GI&^F:FBx[Ld0.A0`l;&bYAifSM}</)F$JVT!K_!3SAN5');
define('NONCE_KEY',        'la8/O_Z=L5e|!k=x`L?Wnq1_hC9icIY@[+`V6a !P{=}^DAguY-aw})1OP@([w|&');
define('AUTH_SALT',        'G}fl;CH)5ySEF3wua1%JEEJq_5}TQQEtey$2h4j6rE`v4[/~z&tc!hk9![*8z&*s');
define('SECURE_AUTH_SALT', 'oG%G.8bY3LKZ$e32/wK#,[&CoJAtwI:k~`/QH#i]Q`pV%Bhz{!P^cVT2jl`um&)-');
define('LOGGED_IN_SALT',   '+uF[wU55VNj<&8H^cUk5,M2aJ_=M(+#%)oaY;*)JldFxv /QoH|Pd1f=W8Mc-j(C');
define('NONCE_SALT',       'a+qE0N~iy^Zlg[p173(+T`+=LLO1&!fdX6$1?@|9,D*)DwtOBP(*hZ.p_7`g|_Zi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'beatrix5000abc_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
