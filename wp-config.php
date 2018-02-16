<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'a-wor-6sl-u-165257');

/** MySQL database username */
define('DB_USER', 'a-wor-6sl-u-165257');

/** MySQL database password */
define('DB_PASSWORD', 'rfEGhE.xJ');

/** MySQL hostname */
define('DB_HOST', 'mysql1.clusterdb.net');

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
define('AUTH_KEY',         '7RN9_aK7skc)-c(TyUjtpeZKJQ9BpoGHliKCddoMnL71ySRP2wXT_4L7Gu=K4eo4');
define('SECURE_AUTH_KEY',  'wea(fT+TD!37SN-2HW3f7sly-8V9kJmy=R^eoO/0wd71Cb7NCq620D-zJ6k=uaMb');
define('LOGGED_IN_KEY',    'RlPXqxHFl4ewkiWBsO25+kcH9pvi8dFZLO237yjkPh+c#13vm^Y_RMd1(3JW9t1m');
define('NONCE_KEY',        'CbZ2TsKVIDqkSLcte0Q3hsB-pn(9QnthyT+QeUdi#orFoyHl5oMS63bxWAgX13c)');
define('AUTH_SALT',        'SM#pmWi!d9wML_3MpCgN^KlU#7l4Qla(VXrOgk=ZVXReoj6_WDj)6+mRP2rfZx87');
define('SECURE_AUTH_SALT', '9AgiMRsWswNs!7tE0Q64P(IJ7KLyKbb+PfBj(1(PRvpH5e/+nr_dzj2GrZI7uKi^');
define('LOGGED_IN_SALT',   'ay6eJ8AnK!fc9XTPtRWF0Vb2#19PsVIpp=Z_pUd4HtZmp9fqvEzxYFe1v5V#c68D');
define('NONCE_SALT',       'e)(/IjBK00-kxI_vvQ7j+y37ADhAccNQsc38T0fntG7GvvecvHd7l22i(LBDBgWg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

