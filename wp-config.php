<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db384083690');

/** MySQL database username */
define('DB_USER', 'dbo384083690');

/** MySQL database password */
define('DB_PASSWORD', 'd6tNJrlW58Yv');

/** MySQL hostname */
define('DB_HOST', 'db384083690.db.1and1.com');

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
define('AUTH_KEY',         '-pQr+=jy`Gl#CZRR4-uz2xk 4zhNY<qOlBp3!BbH-7|5LC+}fj;ad%n AdnDS// ');
define('SECURE_AUTH_KEY',  '|kn-eBglmNDQ^dgEgG<M|e>Tk&pb{NiS~7d9$X7G j`69 C1BEX&RB }@WoqOog+');
define('LOGGED_IN_KEY',    ',yRM7+y+ElcxWP2J+-aW/1>~a(&</=}px:4DJ]F)2#|#Um=js<!l!{X|TJv=03kx');
define('NONCE_KEY',        'v+NT5-?K`C{,f3U{ C3cHdT/X@pj[W>|P3T=y<8sOWsl<+f%P,LEHctAZ>#H,`2u');
define('AUTH_SALT',        '!HxXtE=V?;q.i)ytfN~#B,^*,$b^MX+*ZCR2C6N0-@|0 mZhYVfr8(!wEgObz-&s');
define('SECURE_AUTH_SALT', 'N[hk=`o68#6OfZBu-N[5b46tsIR]w,9mQ}Jk&5pl,eTz)<AEQ <[{%.R}EDC<Zph');
define('LOGGED_IN_SALT',   '~QYg;R_eVeJ{s>f;*{s_vL,-k{Ws-6Z>?.v,!zQX3Av<J-tZ0UT{#s}*(2.rh/={');
define('NONCE_SALT',       ' )rmns6Q*v,W#q{GiIZf+jf,-]zP+pmtzEUpK^E%3XJ4gMpH,4&V` -p@nk>wRON');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
