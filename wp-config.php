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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'MQOE<`$$<qd|3RF*RWQu0 -vA/gg:R&q}GMPlYt52W|b^dp)yj@&[!_WR%I?E6@]');
define('SECURE_AUTH_KEY',  'Q93Amp9CKyvESNFxy.ZV-%}oMZL7{!(ZMB704JD!+)hOs24hk{Q()z#P%#(^S]DX');
define('LOGGED_IN_KEY',    '5Ta;Nd]IuO>=Wlll,yx+gyNnd:iudikF[]:BKc5%Zin;os+}07{YL.Y %.qSf 2Q');
define('NONCE_KEY',        'EgX7$2}w[.4XjB7J&KrPQ~Zuq*>x.lVV+!g^G2U#0P?eGYxi0E,MT/e|/GKVqx37');
define('AUTH_SALT',        ',/M?K,i%K=)sLIR =9*M|+?]=:P[H 3[;a5#~5[SH{!XZ=oNC+[>+@!]72km4D1t');
define('SECURE_AUTH_SALT', 'g2h0%|_W!V;e!augf_;5q>3$dtW[%Y?U;j.<Ln9=B}XrpH%p5I+T0zPL,~fb,qu.');
define('LOGGED_IN_SALT',   'Ovg>l$<4w>+tKS5RU;Ql`;^@N}Wro/FmP| ,(gY_$y3v({qI_aG}dOg7KwAfl:ra');
define('NONCE_SALT',       'TrEw&fBQm[24T} C7seEW~r/Bl~(PB{b$LmhvRqutw8ML$o*Ff^QJ3|%NohCZq_%');

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
