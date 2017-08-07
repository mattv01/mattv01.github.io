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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ',uRxi~-WXSRPR6ck|w3]9nP|,Q)Qy-F:B>:`@)RWaPp=7@!;{w@)3au[J#{jNV_n');
define('SECURE_AUTH_KEY',  'W,):UI}#$l^,@2iX&{eH5_,(<f=R`h2[|vW(ON07#0N}xn2h(-NCO*/R&wmW?wib');
define('LOGGED_IN_KEY',    'rC =<q9i3`radb]z;~Zbl@h|9k*2bX4=|]p2wau:l$&(q1BAP.,gq!&#;+{x2tGd');
define('NONCE_KEY',        'HM<,Sju4!091NVg0Ywoc(ov.w-04PtRPvWVi[g^w.zq,k@FXVpD>CU@(XC(5UU9C');
define('AUTH_SALT',        '!:)t]K*2uYu57pGeVfTNui7onWNTr6lx4*GC8nIw^C/$2lI0h@L66],]QtdjOG8B');
define('SECURE_AUTH_SALT', '_UzKIka]{Yv1gZ9,<_q.a,M&1bo;+O&*J];k:6gV!rf-cF}MXbBq|w+jfiexLO`7');
define('LOGGED_IN_SALT',   'U9|:`c[_S]34onp,|v7L}/lQC.Ser-|Om<f~3TrsjcGR$aCt)aZ`r.fLO ~|*UJ/');
define('NONCE_SALT',       'o9gcAee4S?E=3Z#Kh0VQ^9SwI;=4rKN w2.Hqh{8bU34cVkOZ7wXWbI.Y!_97~58');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
