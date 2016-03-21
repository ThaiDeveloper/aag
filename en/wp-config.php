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
define('DB_NAME', 'aag_en');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'gnaht123');

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
define('AUTH_KEY',         '+)5;VCf>c_en.;gi2UU>!hE1-T(;%#CAc{v+jy6n!;x[xI5*cb%9Tp+!^h5P;i N');
define('SECURE_AUTH_KEY',  'OS Li:n;yc#u#8lxpD^:0U+D:wEvMo*X@uydjZcCVJgK5a7ReC/BW;C0{kw)=1fl');
define('LOGGED_IN_KEY',    'ODG*wi0n<iZnR@hzKg3cu%%EUYw?gna@{jPp|4]|dNH+s=YW;/b78T.rW| &QPjX');
define('NONCE_KEY',        '(-D4rn}kV<! gIFME18+:oSBOHmq]Dsh~4a+T-C>Uv],H7oAeLx-q4P?F,)=d%eo');
define('AUTH_SALT',        'v0,<eCG-%Tn7Zx;jIw2d!*H-kiiy-db+*QK^b*t[D-y?GL$OBGn@l%bY8oT*`BO`');
define('SECURE_AUTH_SALT', 'PlDvC:+NPK3Hm=iT4F73[.JahQgK?8ph(|O<|$:*SIL=jc:Nj_Z=3[{, 0WQm[-q');
define('LOGGED_IN_SALT',   '+|`WEn,Q[$B[:|EFhBiVM$jiBzib^ Ouww5Ew 3+Fr,0|-(V2|qJ+_E)jTQ]Pd:N');
define('NONCE_SALT',       '>?JMogfP>OgK,FBu@9OF(/f6`pXXi,Y?O,cMgWmA#4wtX-(528/ap[qZR0H1Lkjq');

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
