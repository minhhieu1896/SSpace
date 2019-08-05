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
define( 'DB_NAME', 'new_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5*B3FCg4Vr9+dMaEb3Whp.eW9E~-Ex(Vjq2*C:cvnwSw0I0@nQJja3?LjP50bJmD' );
define( 'SECURE_AUTH_KEY',  'TfN*$-*JJei|3iY.N~6d#!@@m+)$!|D4~AX7}25ZAF=8=Zc +j7DAea*6_^<)Ohz' );
define( 'LOGGED_IN_KEY',    'rj8Y;HUq{iZsBRR0~|o R^#v~_gc-<+u<MAtU>_ikO-`$0kEW^/y;Z1q0(bM&/Cc' );
define( 'NONCE_KEY',        'M#:SPQ:h]XTPKd#FL9:^#6L$4W#C9P^OWd,-Zr`xSBq?Wb^xZ/&JdX5zx:AnAMiR' );
define( 'AUTH_SALT',        '1M<x&k~bV4<~A@Xro_dy{T|{#o=HJuTS>qIV]c?M=73EAdUb~uzHu,O+}nf+q DW' );
define( 'SECURE_AUTH_SALT', 'Y%%}hiRCHr3NTzGfM TN;^Q^T6Os:1B*|q3yla{wN$QL~8;?!O+ScV[JIH3!i0U ' );
define( 'LOGGED_IN_SALT',   '( .x9U%n@ye{[e V_^F<~,E2u}Cx_q+^B:B,EQCzX( c$H]Kohl&JUuhjQ)w>hi_' );
define( 'NONCE_SALT',       '(=:qo2PBL#2LYM^lkXK5,aRQ5Pq!<x/<k-C:+E2OwwkLW>+_J_}/U/{8n5:R|d{s' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
