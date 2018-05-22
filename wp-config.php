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
define('DB_NAME', 'wp_test1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'pPNCx/`Ja}?1Z_e?p?^q!XA|Agwy0/I=q`wQb{T&G!IH^Aqzc(yX-;zDk$qBZMKr');
define('SECURE_AUTH_KEY',  'HpMd,XRs1^24;/mQsE_[(Oxfj woB?CzZ>=C=!a?)2IU[oRI,t=]]G-l3?12OC1]');
define('LOGGED_IN_KEY',    '8%H^UgGStb9MP-^4(.l_8%V|Ybkw<,@|$LLZHojW#In+JN=aDY.z[rJPgUw2x+bu');
define('NONCE_KEY',        '^|ug92d@&U*7|VA~u1jmKAV,zl7 ZsaZ<}&r$bK1 DURp>V||#M1fK!>(v`^RD7N');
define('AUTH_SALT',        'sM8Y*0#I9N{?xf`3^1$>aQ*u~U^&G{LJkg2+##ePhMaJEdyd9yU9.QW1)LcJJX$C');
define('SECURE_AUTH_SALT', 'sxEl%T40&-C2o-7YCA*V+@n@I$*$crMdK|<O-8nA]Fc#]yb9l=Ya3HNs!kEzH5he');
define('LOGGED_IN_SALT',   'AUd*W`n3c4=ie&z,u%<=g1YIx-ZoI?c89k|y}_Rcr}8pa@y_u{Ums}n#X~XmO(So');
define('NONCE_SALT',       'Ykm)!!Kn&Dx}nf`XW^0_bi&K80kd8>u>h% /G)@QM*}z$!1(K<w<HZyr1*(8:JzA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test1';

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
