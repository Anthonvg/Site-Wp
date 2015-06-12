<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpDataSite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'opO;*{[CXo[{(|[84u5=!>wOs|eIys+z=k@#8f8`ZiN1{ y~22qyE14oBzK$K[<C');
define('SECURE_AUTH_KEY',  '!a*c3yG]5pdj4/,CvM(x(3jXp9(#P#Y_}zDLV+@2~-IrDp;20|tr(IXA}pIpcx-B');
define('LOGGED_IN_KEY',    'uO$pn~gd8=|S21ejYjY&NJOt$Xx-7Ge}xWIIQ-g+!{[DT(&)ME}iQ!qAbwo$G_(#');
define('NONCE_KEY',        ':ZaZF55/~Sq>j/g9#Kl_dcA>9N.5O+oEPC>=G?166qvGGY=Hc>hUY#& )h@vm&d2');
define('AUTH_SALT',        'D_GwhV?&40#|z-.yq..-QwXColl5<:g#Bs;|{vlA O!D<3H&Gact-rb#rDQQmIcl');
define('SECURE_AUTH_SALT', ']@bW$iAH?d0y2DL0z@a]GOUz4NU5=^1K5dQFr?JADrcRauMN/,wEJ<+Q]9{zR-3r');
define('LOGGED_IN_SALT',   'Ffj:A|_+k;c}o@Q&i,h1nf?/rm5[E+h+>_IZ+BJJ$a-K]|d:q?^&[IovV@eTPUun');
define('NONCE_SALT',       'Y c-%Fg]Q+7W*O#A1^D)OmOKkiO7[Zyr!k|6{<rX=x$w^v)l6j-afXERiB!?{]l6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
