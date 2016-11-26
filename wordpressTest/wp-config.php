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
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '34504');

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
define('AUTH_KEY',         ';f0PP.f=gjegU<Q$gwSyCMVsd)z7h@;7%!39,<PL?(Y#feI9pH4SfkM%+0LZ1|]~');
define('SECURE_AUTH_KEY',  'MBpbNv4nR#qE<7v<Xf<TdlPSzt6d&>F0@w*9$k2X_T3iCi)|FxYGWU.k[V^IWac ');
define('LOGGED_IN_KEY',    '?#?`,0o (_ScO[V7~}KfJPa,LGTvDfaD&rzrET1-,NlMUf[I9Y%V3-s[LUo#1[y-');
define('NONCE_KEY',        't9qJ8pIS7t3Tzm*Sk43YM1!u&-x4Zn.Z-YJwns}0$1`XV0zO$TeP=OYJ+<f0NOrb');
define('AUTH_SALT',        'tq.x-u(zYbx}Q5OZEl`f[l5!J/ie?F%{ckbz#LcCu#-%#?2nOYP(Ug[Qqju$EdOK');
define('SECURE_AUTH_SALT', '68?b>M_IPMGA8|@Vi_h$N}^Sf+CvS,({ai,0>;5]Zw8jlxx)[.kH_>dF,}?-o3;=');
define('LOGGED_IN_SALT',   'LPaj(-c(cT~.J*a5s=tUf]@_P((q]A)[iHtsy 7[8RVsjjDceV;QY;Av)ziYs/jJ');
define('NONCE_SALT',       '{KiCdv&Ih,Ba19QNQo(IP6+27X4&v74@Sgi[AG*Jr9y^<V9iExt+vbE ffx5rVY<');

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
