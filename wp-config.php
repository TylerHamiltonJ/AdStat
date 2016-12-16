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
define('DB_NAME', 'wpAdStat');

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
define('AUTH_KEY',         '7%h&57Vq(%;ew~0XQ1gkurHtq!PnVL`&Q<UHkF?@.cSDPZ.yR.vm=Fj&tovk+wf{');
define('SECURE_AUTH_KEY',  '%Z6&$#W^o}9JktyNpsYgO{7*hIH=qIIa(/)k*n09:|:h(+}e2_pv5iy0HfV8r.XG');
define('LOGGED_IN_KEY',    'an=4e4~c`r)gAjjRx6T6W@:S2Bh~Slz+2)H|G$>|DY<mp&mvg/D>1`UGIC%z+M0h');
define('NONCE_KEY',        '.? Xm2wVFhru:w;t]Dkfk$1q+u[3lwlmiEFTsYR/?%YMnK5=`HJ6kk@NG#bj=u(S');
define('AUTH_SALT',        '8Fm#^%y6ZW`:P}qFLZiptO:|kuObgNL}!PbD,a6_[[T6i,7LB*X[LL;{FQxzNI2r');
define('SECURE_AUTH_SALT', 'Q7GGapSf}U [PTU[zd~t)O/^D&5*J5p@h^1BS2drJ?Ssp%uw+G5!AIe;SVZ_Y|M;');
define('LOGGED_IN_SALT',   '==ZGzn[`.AY-NdG[:k#ll#bF{`!N#HY4-(LrgsnH+Xbx8ln}Uvtz(x`Q`VIN~jRo');
define('NONCE_SALT',       '<6:8[LXYUNcxt/^Iet>(.GcHX/)wxpw3RU}m9N-YLx_Crc%0P!q`.) ^i!5ci,h$');

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
