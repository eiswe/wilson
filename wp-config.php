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
define('DB_NAME', 'soe_enterprise');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'n:@z8_[j9z?:0 X67FCr~&D5D3H+[lG$9H, `]>XI3H~r8xJ?VsuIk`sa@i7LX}U');
define('SECURE_AUTH_KEY',  '}7|S`;],bgWG@B,MjQs]:SE~N$0Qg/ec$OTSyEpQ8Q<saEhv# WPK174sv`71R+%');
define('LOGGED_IN_KEY',    '_;36J?#c078Yd]/Y@+N>8+&EFiQk8otP_H]lE=H%/^0,_Eae6?;x{*O!4S.|RPQn');
define('NONCE_KEY',        'CvzBMib]a<bS$j21q](w-]h@R5Y~o2?:Ah?ruW#^_8]KzScnNSR?6V&*WK,N?n)f');
define('AUTH_SALT',        '#o-:,:zpjfa?#M<B0=enoTYNm$69&`1prenW^m)4s?9Z|Xh9*]GI]z8@]MZk]bz9');
define('SECURE_AUTH_SALT', '7l7r^x$C?kGD`3GV=qk4pK6a,EKnMgqf) xc}8<wDb2rQ}i{w^=1JQbl%>I$L,,.');
define('LOGGED_IN_SALT',   '<|&( fn.7s!F^Pp4@! S ~DO^fp}B:i0c_#&]8Kx_4P s!V0JSnoXf6`dR2TnV1n');
define('NONCE_SALT',       'b^C7_C~c 5}OD@xrN1c/{/F^m:hk~R~?]s%u(R$AA@!VXRjB{@o&w#X%t%s|xWhn');

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
