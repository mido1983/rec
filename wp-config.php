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

define( ‘WP_DEBUG’, FALSE );
define( ‘WP_DEBUG_LOG’, TRUE );
define('DB_NAME', 'recipes2');

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
define('AUTH_KEY',         '0&?uv<VG%G uEHnF(0igPS]@Yr&%2qA%L;510&Smqn;KX|rtmg&g&UfUOx;T*FST');
define('SECURE_AUTH_KEY',  ']^@LGaZZ356|C6sQ:|PMu*NUG7b}NaM.Zl#3KNK-]~*1VD=OEv+lYg<{Q~;u<HR?');
define('LOGGED_IN_KEY',    '^/bC$FKBgP+[;g#w=HeoMh|14J<iJ_:0k-!+;FTEouHv%>UN0S9g7wnZ5|(1,O(S');
define('NONCE_KEY',        'Qc3$9bbzL-415p^c*uj;>(evi$VHd6?y t-3UAv2;t6{s,{zNnQs=11U](wFqj-h');
define('AUTH_SALT',        'Kf7x8YT7wVwp<kPY8NLKob=^nUh^&yr}57BIvDE5x9jRR]/Tr*YGk8Q)v5*5ph.@');
define('SECURE_AUTH_SALT', 'D^P],7)1-xf9d0t+ZiM?#A{qh6yHxRGT-AzcM|Hv#}T4A?$a(&|mzZ0KNxGhm=6k');
define('LOGGED_IN_SALT',   '@m=AShIgS<mPQlbUfAP5.$Ago#M(]Mn.tqmfOeyhmsZo,uWCY0=!cq,gypU.EMs]');
define('NONCE_SALT',       'Mf@d@^DD4)Y?>lFhWWcLvI`OG$;ObgvA&JP; vvL^z9)GE#oE&+G%8-MMW+JNl`n');

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


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
