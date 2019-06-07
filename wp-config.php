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
if($_SERVER['HTTP_HOST'] == 'localhost'){
	define( 'DB_NAME', 'bensenville-pd' );

	/** MySQL database username */
	define( 'DB_USER', 'sunil' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'sunil' );

	/** MySQL hostname */
	define( 'DB_HOST', '192.168.0.200' );

	/** Database Charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8mb4' );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );
} else {
	define('DB_NAME', 'bensenville-pd');
	define('DB_USER', 'developm_general');
	define('DB_PASSWORD', 'Lw20$qpKFhTo');
	define('DB_HOST', '173.236.133.20');	
}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u5WysrAaD78~f;{Ds:.`d-;3U>P83pb|cm@rFH+aV1F48Gt8jcXYCC)e{;oyKk36' );
define( 'SECURE_AUTH_KEY',  'UHQf>.s8Aa>9U>)>j5~vjZ?mQrvp`T1=k0L>wPnrCSowX>Al 7yK7o-~F{kS4|KB' );
define( 'LOGGED_IN_KEY',    'WFM|2RVr;=fiGIoL?t701:.%JKR?74?L9*POh&pyqXg>|qJ,-i`|7t=#6T<8LQO;' );
define( 'NONCE_KEY',        'gaFyMX~a~YE|k8VF{E^ZQ; 0dGY5UGgaK!4!/@hWt{rZZD_^Y*B1bpi@1pbX ,{a' );
define( 'AUTH_SALT',        'yOq|x/[{c?@&2`R|K) %O!YEBV^-Ih</kI$;[9`Dbe5U5Nt_:jTlj5DrP@.~CJN ' );
define( 'SECURE_AUTH_SALT', 'jP%=jf%!qJdq=&6,s2tH&86K4fD2=_TGM.!){{}R+{?@cA~b:#]vH}XjH=@Nfs%p' );
define( 'LOGGED_IN_SALT',   '9F-1#>|Q(1&cD8`]ydSI6;fB%953}`:L[Q(7^3&+@E9h&>3D+a|M1lEuRZ1OQN((' );
define( 'NONCE_SALT',       'I15Rc~0c?%Sfio&p,XuQikXJ6J8*(1zKRZJcV#3th^N^f/y jf-RM=p:z*5d`ZF0' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define( 'DISALLOW_FILE_EDIT', true );
define('WP_POST_REVISIONS', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
