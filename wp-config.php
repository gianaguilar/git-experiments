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
define('DB_NAME', 'gitexperDBcln19');

/** MySQL database username */
define('DB_USER', 'gitexperDBcln19');

/** MySQL database password */
define('DB_PASSWORD', 'Lfr1CRctw7');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'rY7.{bIQ^juE<3mTb{3*MXAqyfnE<2fmT*{uEM2A2+<TAHx*m2E<emSa]x*P6Dq');
define('SECURE_AUTH_KEY',  'X7,bIT.qAMfqX6.TAIyfqA.emT.;+L2AqXiA.;eL+<tE]6pWi2*PWDt*mD]5hOa');
define('LOGGED_IN_KEY',    'zYEr$fn7^{YfM^<u$M7juX<y,XEMy*muE<bjQXL2Aqyb{2+<TAI+.qxH]6iqX.');
define('NONCE_KEY',        '+TAx*m6E<2iLT.{xLW9Hxam2*#WeH~#t+L;9lta#2+SaDO-hp5H]ahLW[w~OWDp-d');
define('AUTH_SALT',        'Wxm6#aLX2~SDte2*aKW]-L5pW1_SDO_tD:[wK5lV[-|hR!sG:hR[zNZJ-k8[gR!sF');
define('SECURE_AUTH_SALT', 'Iuf2.XEyjA{eqb+P6xi2.XiT<uP9pa]+PaLH;hS_tH;pZl9#aK-lG:hSd1~SD-k8');
define('LOGGED_IN_SALT',   '9-h1~#WDL_[wDO1hpWd:x_VCK-_p9G[ZlO|:-!R4GsZh18|ZkN@|s-K08oRdR8Fs@');
define('NONCE_SALT',       'eh9]lW]-O9pa5|1lW[wK5wd1!VCwhsN8oZ:@O8zg4|ZJV[zVBvg0!VC@nB}7rc0@z');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
