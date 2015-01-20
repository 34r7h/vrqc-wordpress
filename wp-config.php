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
define('DB_NAME', 'vrqc');

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
define('AUTH_KEY',         '+]Zjv7TsqqvZlVKHL>`5^E(:Lq8%]Y2oCyG$yT}+ Y4Qh{3[QAy-9{6b/8`^/P-6');
define('SECURE_AUTH_KEY',  'JE;oY*O)><R3yT4+p{X9cy=VevE~BuN`:E`7{.7Sjz-uIq0_nJI+34IPB>J2u|+f');
define('LOGGED_IN_KEY',    '+]|hh-o/)2C5?@W0q=0}Q:Ir%7>(?.L{_W1Hk?t/2xoaVbThmt#DNN:tsX174;Zi');
define('NONCE_KEY',        'l^){c$bSk|BT1=!n+a#?%`$]hJ~@{,qgrT{>nJ6c*[r[s>0W|8NwNi5*.9o`QU^0');
define('AUTH_SALT',        '.}B/hEn;KaDKdXZ}Lk0U( y!rVw|OpYiA94k#iUwKw(lQ9hl&-7`6F(MP(&Y(_VH');
define('SECURE_AUTH_SALT', '-N_U aqh-PRZ@Fss>Xc@{!}t_Tdnf|Z2DOsY&4| ^fH+Q(A1g@J-s(ER_|gtn]7S');
define('LOGGED_IN_SALT',   '!-7F-wSsV|GNe0q>W-C+hW|uoO{|P>=8UK47Hv;jp#jNVL_OV%+Q++Ox{K}@:@ID');
define('NONCE_SALT',       'F2NsLQab+P?MjPi>)Q`$O8,9F<^Ec5x43r.{39G,b^!nECxxaxX|8?Ym.NVn_h+R');

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
