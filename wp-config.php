<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbpete' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j <VAETl:0%C{cLeh=W)bvc1297|hyA|j6_&!eYsY~)rfUQfCMZ5@G#8z;<dUD$F' );
define( 'SECURE_AUTH_KEY',  'beQSB wxIC>=F+k;zSX>OAr]xt3)lZ~dtuENkd-l1;6WHPtng3b+q?9+.NlGj[vS' );
define( 'LOGGED_IN_KEY',    'B}U]=|NnA~>c*<vsfs#>9{?1+`)a(yY?+PmmwfW7RU^z<4dayg_YBl&9Sr!9G77P' );
define( 'NONCE_KEY',        'r1}AfU 5~6Dh^/pAXGRqx6PXqP@/RZFg8&Pp{74W1.`38]Qd0FVxD[D7{O0,)rx_' );
define( 'AUTH_SALT',        '4=^SHj;{[;J$X5/9a$-+p.HQDBr;C1usUz|RvI}0qMXR!hz^F=.|Reicf!}Z|HP_' );
define( 'SECURE_AUTH_SALT', 'PGK nJK1VT{)ZU<j4}*9h$)IPvb57y`26[Hk_Sa>rFQ0hqx*Y-:q*N-k6Vi%eKho' );
define( 'LOGGED_IN_SALT',   'TThXNc~uQ1Ny?Jzo5~D3M/=^z,;DO,C[q~4oM53t9BOe90P4UaO;w%F?^t2;@?/&' );
define( 'NONCE_SALT',       '_/.F}n09J$@0W}im<L8|;)L^9dA2{N(.+)ely]tM2QDht[PiEy+x5B+1dvD],Q3E' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
