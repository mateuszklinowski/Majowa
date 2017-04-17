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
define('DB_NAME', 'majowaeusymadmin');

/** MySQL database username */
define('DB_USER', 'majowaeusymadmin');

/** MySQL database password */
define('DB_PASSWORD', 'At6394jksD');

/** MySQL hostname */
define('DB_HOST', 'majowaeusymadmin.mysql.db');

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
define('AUTH_KEY',         'Cu1tzR+[P.k,_~]jK25+Lgj(Cr(/+}j%Z,Xe:lkz3SMY%,2j^^zv/$EN.>=#-;yE');
define('SECURE_AUTH_KEY',  'JTwDDezo}R20-]1E-#W^c3-;0gb.od-?]jQd/E6?Hf~rt<*/4Mh;EDGnap=<}Q/L');
define('LOGGED_IN_KEY',    '-EYC+y$1]l7Vss~Nmf`)+-+fn2X;{T>3+ekGcyEXHUrrz%6ih3r1]9a.2>$J9*Vb');
define('NONCE_KEY',        'I*+r678c:%WS0jd)NHhnz2yzZ$pxHRizM)>eATU(8|QnTrY5|+LW~jo$<n {P/I ');
define('AUTH_SALT',        'JX99SSS&bcCcyRYjOBcOlS6LI<}i^1)U)~qA>F(_Z&B6vqvo6 %:xMml:t9FvN9 ');
define('SECURE_AUTH_SALT', '{EQh~PiPfB+<Ml+z!ZA}`3kLb43Q83G&9{kE+%/6kw8FR+kQ|5(Zik1O)kSh9v>2');
define('LOGGED_IN_SALT',   '|Z^pPiHD}yy|w&|}sKsf;,Z./og!3*>}H]wpg..Z--Zm1]tJieG,C-C_RfC<**79');
define('NONCE_SALT',       'TpFprMkj.>uSsp/7*luP_>6M/-;jVpfj=yERF1#Zq+KQE&St- -HUJa51uSVli?z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmaj_';

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
