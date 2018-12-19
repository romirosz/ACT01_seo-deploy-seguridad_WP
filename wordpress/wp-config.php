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
define('DB_NAME', 'seo-deploy');

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
define('AUTH_KEY',         '&T>U<Ig=49w*B8T$*>hwMWVfZ$=i4,46w[&:e ${)J2w6o&[q3.t$l+TWgR#FWd&');
define('SECURE_AUTH_KEY',  '~b1F+uMDJ4v-Jr ]v*Jk3<paE1*Hi,|Dy_&m}T=$pOLY%X]4g,Se8% .*6v.t|4)');
define('LOGGED_IN_KEY',    'g2o#}vHQ=v~1/ij64^[FnBp7!C40@WVTyD,+6TL6A@oS}z$6`Q16w?U-ytV&}:/B');
define('NONCE_KEY',        '[4;3n D-VC$g:xcx}pTi}f{)mIM^hYp=]J<92uKGtfQ*^PuP-pSKvVV-/!aV&qS9');
define('AUTH_SALT',        'bI`_z{rV)Z++6!}~FG2,8I4b,<w!BbPyeOIV3/$I6V]&}+6V)(3-#wtx!0IEY$L`');
define('SECURE_AUTH_SALT', 'b/%xkTU$NeWbsQBEQ>kk!S#[pu7pf+xW@KF-U@ZqH`pB^Dq@y6qyItX6no=Hu)sv');
define('LOGGED_IN_SALT',   '+/~7JSa=pB28d(IO^M{o$w:GAWmE2QKlA&M#RraS|b?h=OjxSkYU<2a[T(S(5Q$j');
define('NONCE_SALT',       'AR<.}crM%x^dWsUB8VP[~ 3{p>mW =]=&~<[6N|Tl0[GXTO).[ICvoU{6[!8ivgc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
