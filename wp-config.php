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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':H?)oeAc^{`A0.xuSU$EY;JZ,^M^T|#(`L&k5&_[gGRU.vzHK9Qw1hds,wF/<N]U');
define('SECURE_AUTH_KEY',  'sox%2)`6vI_D%FG(cI<bE3K%s//=T@u56BhgM72ONtddr2HFO4hA #q+bBj;Cd_u');
define('LOGGED_IN_KEY',    'REdC7C/o8zuXW8j7Zr3E<W-$TliBi&J*F+}Q-9C+l->zrvX jU-PqL^eN eM@3Yw');
define('NONCE_KEY',        'qX8 vQR3tx 1Q-Kh6d>FQ9Ib}E&AmkNx?qfveE^|_!6B0M=5tsU#_ 2A0XULapI8');
define('AUTH_SALT',        'a~v$[gwpsZg}E`?{&|z__2L<A1}s@uwe7#-8A`+Ba1nTD(WN##JM0{YAFL+g>:;R');
define('SECURE_AUTH_SALT', '4zepi[n<n9sg=S67&ur3/MK;,rcRHC~5}Uj8;N/2HV_O|,;+5}8,0.82{88vud/Y');
define('LOGGED_IN_SALT',   '[zepa6OPyv`?HkV-~p/u5;:6MacDi7N4-@y4;?Mjf,5uK(JGOYh(tH+5`*<bO57+');
define('NONCE_SALT',       '^m0k?<h]`YXz<,OE|rX}4&gYR1&1S0$-]RZZx@_oTH-A|6dB+epZNVJG|Y2I<}lx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
