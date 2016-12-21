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
define('DB_NAME', 'minhlong');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456a@');

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
define('AUTH_KEY',         'C,Mp|i1IS}~`|LNv%yu;zC}x&hXff3IDV7eT4lfx=ys>ST$c,V7MI]4n|As%[@d]');
define('SECURE_AUTH_KEY',  '$Q6qCEsQMH5(jlfaT2qU]A[K4R;o1!vqNy>dG>;]Yat7BcL6 yLu,#SF#IhkLCY}');
define('LOGGED_IN_KEY',    'Lj/fq%@Fs3(9F-*4MOP+$+$!feCmc#3CDo91yG JoJwE,P{#$~E1]Ru<L-gDj~p)');
define('NONCE_KEY',        'bJ=q_%`zKZ4zag0EB!luit?J/uI|{{03 <b ,fPGUkVilNijgI<Pf[<4Jgq{,s;e');
define('AUTH_SALT',        '9B?a;?rM;>S-*Z;Fg GX#@%5B$#[4,*5a$Tr!RL-x6tRJj!]7abToB||@4/ga^hD');
define('SECURE_AUTH_SALT', 'n3% Vhpb#.qE.D UWw)WD2{~i*@2sez=K47O%XS$^0?cE.KqEo?Ec^,Dvgk qvzY');
define('LOGGED_IN_SALT',   'dZQJtB}pnWt;Of+ 233r`|CAgL_m:ZpiZkmlDsd=b2!gW%tYHCgmpHb,}>by8u>g');
define('NONCE_SALT',       'iX?KpS+WEPnH4d|qlQk},-KlA5WZ/p:aK8ENmKq|`3xyB(i@)a~!<$dn2]<%onNT');

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
