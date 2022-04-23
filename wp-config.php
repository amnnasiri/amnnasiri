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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'data' );

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
define( 'AUTH_KEY',         '2$<O7T[!P}i,B{j1l`AT]P9%kYB>ktP/du{nU,hm~C87lV IC?ZlnF93yNyAq&s1' );
define( 'SECURE_AUTH_KEY',  'm3,<dC~}#?-+13#IT-jq%1rk:(TR0>Y^!jl:J<b~+gbM4MF^gHV-BVy4_6//.}]F' );
define( 'LOGGED_IN_KEY',    '6V?}a$X/o+$XCq:~|Q3_tt}=q~q _Z^<&-myD%jn73V$zS6tW1g ej%VoRA8EFu@' );
define( 'NONCE_KEY',        'A[$Q~_hJd^%AGx3&[zNOPLZT6*djhRh^RBa3u3c%/w/`Q{7ilR+hc81JsZ5ZH`cZ' );
define( 'AUTH_SALT',        'Lj%:@>x,tIk%{L.=iNdXL;M(L]a0(3TtFf={^ej<;@h,y|LdS?,fBm#|4=,Iot&0' );
define( 'SECURE_AUTH_SALT', '2t;:Or%i(2N/T;s/w:4eY:O6GjXc$A~TD=t4~6C{rTWWjoA(D.0Z.oz)CjrKPuxx' );
define( 'LOGGED_IN_SALT',   'ka1v35>rvledhL+uB!ox19+KIdnoh|p;V$# noon:Iu|S/b9%x _WDv^M-Ac9VIk' );
define( 'NONCE_SALT',       'u8=+DPwacI9XWQWjGweRTGUINqdU/1B@ =x->xE]9,`4qGj*8-v}aw=h:}Bv?L^v' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
