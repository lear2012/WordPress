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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'r00tispwd');

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
define('AUTH_KEY',         '7E)XdMcHih(5rUw-O9+{Ar+4[/h[O3nzg68P8+*K49N^T%GAB[E.  G$*mqQb67V');
define('SECURE_AUTH_KEY',  'LQa+L.Y}c+sLbx|4Yv%}I}I37~EknjXecor<tKGkljSh(~4}ZXEXc_s-<GID8`Hh');
define('LOGGED_IN_KEY',    'kDs[VN/c?6z-Bv%J0*S-4]`g+|uUOpEKlVADe_X/a%068nnrCcaF~l expWWV!hG');
define('NONCE_KEY',        '+.C7`yUmJGOL;y+sPf/w5lQlS@L4GK}4T|fQNgV99E_-b6f),]`PM>3]4+WJ?bR<');
define('AUTH_SALT',        'D!B<13l7v:n-YJ(V94fXgU[go*!1+tE+2-uM>K44p5bcCA4.zWAQ[/K?~[>74zbG');
define('SECURE_AUTH_SALT', 'Yn,PW>|r5kBb uvL9hZ$AiwV(O-MFqyrQ3Sg]#QJ;f;;r?[2-D^e3P)o4#G1mK[|');
define('LOGGED_IN_SALT',   '^^+nONv50}2$p$,rqJd+h^9H!0a6*hIm(9N9u&APp-b<JMpdl<,rlG|<~5gZVn_]');
define('NONCE_SALT',       '_(G$m8~f^hcDO%(rzkZ`x;$/qA/%X|wXt_|rc2T4#vHkTrWc:u8,fO?Aa n vf25');

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
