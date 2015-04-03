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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'jkush');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '}q@+B>JKD]TjIL^e@| }bV_P|8~_w{/9[`7y5%L-VZz)>lE,0-~E`.bb}*-Jg.i%');
define('SECURE_AUTH_KEY',  '/$eHW,L0:,Qzs]ES;$-Jg;x}~h^.]p(ilMONz)CF{xG0@Ntmv#F`iC:G||4995;b');
define('LOGGED_IN_KEY',    'n3sLNQ|Ft09t+D|9ZDcs-6(ID^/}ob3}9E>vd+:+9;VMM~7Dn-fq|HRBgv@~!CaA');
define('NONCE_KEY',        '2zV<c3cTw/M=!=|_ZvFKzQ=Gehg6Ws}x5.>NhY$e#v{MuV=|S=_>--T n_&EWmAZ');
define('AUTH_SALT',        '}V#PTBA%`q`4._]:mw74Xg}jymh/T|~=wt?Ar%_AO-f}]cd<%o|.sb,=VNbGTYuL');
define('SECURE_AUTH_SALT', '(`zun1,-KJ7ghS:s*euqTfC,ASGA{{1G=~5zp6@D4!PKB2lI|^E,&w+=AfMk^~a|');
define('LOGGED_IN_SALT',   'e;u+UYRh ^jn8|q6$6Bu?~R>&5L!)_q;dP{ G(d+I;I<E,UrC2+a78=2Q#OlqEbl');
define('NONCE_SALT',       's>]P)1hCpEf=ADK)T{iJEb?L`PEp>|]3Ze+7p1.,Y>|y)!#tW9W,AN#!i|2NHJzw');

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
