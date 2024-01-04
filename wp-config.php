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
define( 'DB_NAME', 'codingpathshala' );

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
define( 'AUTH_KEY',         'WF*{{mhB 7|~ng(fRJ+VY#<Z5iW{c~oRJF%xH{/uXvaS}3`7Lp+JB}I|b91{KI~ ' );
define( 'SECURE_AUTH_KEY',  '&:%odyUmU>E*T}91]E0]0Nz[|7RlpM*$ 6j9LBHele{$<4jC^v:gY<`&0%xG@Dp[' );
define( 'LOGGED_IN_KEY',    '(DGH<}>Q|.s2`|5;kX9vaZ#@u$N`]g4d7>~(:R=V3XrY1wt&/i``,MG,4?2A3A)z' );
define( 'NONCE_KEY',        'x2A$@421Eea-Zv`yv+%|<hpK^uG-U_]vE%cgI&nx:}-?s*YKch-5^O:W~GUbtaj{' );
define( 'AUTH_SALT',        '#Hhp!U8Q;We:8=1^9ij&vlqL(6O}|OdUnAN?aA9pXhvHx=p,#<p%L-%{L)Ki|an!' );
define( 'SECURE_AUTH_SALT', 'T ,$jwguOCy0Li|7m7^BDQ%doJL!r0<4wasXaY2]0ho.ANn8-]=)WiCnw`p:SzI)' );
define( 'LOGGED_IN_SALT',   '[p^%GuaGDER1`BX00NjNXAVE_ H=m`JgkDW7V}pv%5y.HmdeyAZ|C6vx8DTT.tKg' );
define( 'NONCE_SALT',       '$!:AF<=7:iE.3>dlYsn6dtg=t?)@MQ=D a7H/JqwT&Z)[Zm/uB4NS=s?+/z3}Ftb' );

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
