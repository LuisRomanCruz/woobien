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
define('DB_NAME', 'woodb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Jl%{w?R~K%fLrDTgp/OcMvr),o]Rs!*/KzA^Y g[)jcY!f$LJLl5]Cs3$e(@49vU');
define('SECURE_AUTH_KEY',  '8L8*QeTKOaiZb;<{-p(T[g&v~)91F!<Xf{[kICD+8y0KGpU2{Y?Fp`R@3t-Hv4o^');
define('LOGGED_IN_KEY',    'B&KQY7T|;K_=w_=AwQsc?^OI~ec)[Vyicl~l4BMp0^ee?w[?H!!x2R5wBi-n_/8Y');
define('NONCE_KEY',        'rRk/5;iw.0z$KbO-]_#U(*lF+hQ*1d9JqsQ|$r m;k;H ;y{45Y;*$$v2;Kq9&dc');
define('AUTH_SALT',        'e;g]Az=O;s9>yf)4|mY}UY@;}$O+q]zJGvA,of#r[k/*[R3hz}F!N36%#<@:oWv0');
define('SECURE_AUTH_SALT', ']I@w+K?9aM-1cB{xhe)e)HEUg%5pGk?gukVlV|D22*jsNPenbg_]M.?M?G1B*DD`');
define('LOGGED_IN_SALT',   'zyiq~r M,dn7p*5C-@(uJ>o&wMz}Rqb`1rhmVH>sahKX}ww&k]#@hl0-s`u<2n}v');
define('NONCE_SALT',       ' ibm3QUqF:1DlQxlxP0wfg!-eF@b;0@ZmP]lIP_+?HC]sWWHj=nezY5@HY]9zs.*');

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
