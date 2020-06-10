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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '5U/kZUv8i<hq%7f>e9dJF}72/LMxAWFzK&LI;wga;f=@N_72,P;&*Yd(Gd(}, gK' );
define( 'SECURE_AUTH_KEY',   '1a_q5HihL8=]^U;p}>.Ch,=Ze {YlHyTFWylhb[7KK#~f,r?8g kJ9=8&O3yR cM' );
define( 'LOGGED_IN_KEY',     'LS/>Q>fa,l!yJR@m8=IEmh(Xthv!~2D!<[I{fjy;.N;N4&D/)[z^loi[8/$9JFP|' );
define( 'NONCE_KEY',         '>Qu9LdPyCF1$3{]:?yS>Gi25K!>@QotD/5M}0{{`:guNY>8brr^ac/&&;z g<4ac' );
define( 'AUTH_SALT',         '#hk#-{%@un@:7#L9q]s5La|`T>@$Z@91Kv?=Ls%(Mn;|817H4iV)W|YV}pD{G>sx' );
define( 'SECURE_AUTH_SALT',  'V|I90<1w~PlB#ik2MRVup0OH|^TPDY8T^O5_inbOx_3B#A~j4x`5GTb4V3/:cK$`' );
define( 'LOGGED_IN_SALT',    '4PU@.?au^$:_|_H:Tj5&E}<7ijY4G4#5N1D3[p*6//mdPudIV9d!BGwZN9wmkx$-' );
define( 'NONCE_SALT',        '0(=:(]NeV1Y.{lqC(gqC5)Gna,1p(t!O6`uJ^l)rSQ3a]BAO. X&GW#f],_{%x_1' );
define( 'WP_CACHE_KEY_SALT', 's9dn@uA_fsPKHlofbhS^/kpTw4jxwp$e?5V}!X?uMEiQ}0XCTH;XA4[!M,uWU!MX' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
