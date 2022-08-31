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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'krnews');

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
define('AUTH_KEY',         '~>Ln/hZn3tWkt0}FCQ ^YSCh-YfEGCNC/JpQSnE>0wT[w&cG$VJM4hWth[KoO^ph');
define('SECURE_AUTH_KEY',  '*Q7nR6f?5hqu$NRzg+,wTi|wV(k}S/,v4oy3HGf@e`uF&iI<RBJ&l tHDUJexTaF');
define('LOGGED_IN_KEY',    'V2TSD|qrR)B#KJHxnuYOY`nepyC73* wvM+fdGV(#SniQP^ff|lO875n 0A0^-UA');
define('NONCE_KEY',        '/3gX!<qaf#|HHa^quKz:M}W9W5,zwNngK<^77_3jzYFQ?cQ!w<PG)J!TQt7$*bwY');
define('AUTH_SALT',        ']S?:#,jk>80-o.(_4HUtnPdg3B{Ii8n~24!E4^7?BFh_Z)o%)8#z7VZ{kbd8y9OX');
define('SECURE_AUTH_SALT', '`vrC/v~1?|@=/k007N:D#T3.o9X> !9Yf)N>NWDqP!v,V!CdI$pfp]UGjnD?KPu%');
define('LOGGED_IN_SALT',   'N}>v Wu]7=E&V9}COi?3*AbYT2+Kj*Ya,IvO2q4^rIMKr6#Kk!O]YF#+?dM:10.c');
define('NONCE_SALT',       '8TizlD65>v3bkjnEoY3OF>Q!H-g?kMCQyL]vGeI*;eda&6A0;Cg``W}Pf$JK*[(K');
define('CONCATENATE_SCRIPTS', false);
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
