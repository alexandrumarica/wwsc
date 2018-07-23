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
define('DB_NAME', 'wwsc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hjkl');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

define('WP_DEBUG', true);

define('WP_DEBUG_DISPLAY', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '! +<GSgM+`-P:n)dUmH$2Y6*/_*aj?<8fPMOVT:d%SP;>m !PJsb;H/(I#0BQG?D');
define('SECURE_AUTH_KEY',  'u(r3P_mev2,#Ehv/-9dzZ5+<E/GEB#ajb2&THQf:#MTCPHJ[&*x`Re$n=y%0(Im|');
define('LOGGED_IN_KEY',    'xwX5}J|N+[:%n@t4nfp&4<i.(WzC7Ue54lW9=F>(l -2uTJl,_KKx<g4BjPs<|0R');
define('NONCE_KEY',        '@WQR_kHdoU$pN4u*XU=983CDKK0ib/(61zuhIk ne%1q-[~S6H;N~~a+S$xE^};_');
define('AUTH_SALT',        '9hb6l0g4g eUI)J1Fj;.&1kS18~qmU1v`&L2@$B&.3?w`x1%#N/fXM?|pPu!6^&s');
define('SECURE_AUTH_SALT', 'LG10<Z8(9$hS?;a:<@1GQr3~(+}Lb-~_|w]oOrC?NX[,z*hXaca0,~GPdKFKnKr*');
define('LOGGED_IN_SALT',   '? 3G(fNzY1(eP2LCNga.v[Jy~#Ol)0D6/^gR;d2^pD1U&%iEV6CkT1lHcm$/gyer');
define('NONCE_SALT',       '&scm*~<mn!E*ge/KA+`3yV}PA9lG!mmY1k<UfC@e.Bom9H{K-UT$dh,z*hq@v^&O');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
