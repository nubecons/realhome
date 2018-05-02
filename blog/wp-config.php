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
define('DB_NAME', 'trylcpvv_realhome_blog');

/** MySQL database username */
define('DB_USER', 'trylcpvv_relblog');

/** MySQL database password */
define('DB_PASSWORD', '4Sg}gWE^DZz,');

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
define('AUTH_KEY',         'e3Z=y6?^-GuVcwW845n>[HZJ4khU=ZgG^6z,Fp?w:@xNA3&1kYwc6@aea<}ji) n');
define('SECURE_AUTH_KEY',  ',/PSFTY|x@j^djDmi!LL:F^YoWsMLt56N|s=svPEb`[elzKSml64e~~Q]z%4;QA~');
define('LOGGED_IN_KEY',    'kd*GWtYhZ&^XmJ7,+~xR{8PTh#mI/%tp-D}zEJW^>=iT>-hAV3:2+~yc=yiS@R`z');
define('NONCE_KEY',        'X]$lNAn|BT(FQR:#7a%)Qap2/k.Tgk)e$@s8HW9)awu%yH3Xg .gwm.T~cue0C%(');
define('AUTH_SALT',        '3c$AMJ+x!d;9j]<0fd5[FG0IL5_D.xULqEQ-*2`m6B!?!,1;fpK v%CaRN$1EAXM');
define('SECURE_AUTH_SALT', '{</tp3o{Bph<]hLRA!0,F=d<[tZ_#^=@|JDZ>}V;wYKe0wup:o@$&B#y5J@^1z9h');
define('LOGGED_IN_SALT',   '#*mbv<1j ]$C#($t$~MEYRS-qzHFSy(&o,u $LI?3u,z[ao_9qCW8#d[Vz1(uTg?');
define('NONCE_SALT',       '%#Ri,pw<c=0e+.MJ8EEcuv3,x0iC-rgWt7q}J%{j5t.p Y<4rA=/6L5lN/NxT)K:');

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
