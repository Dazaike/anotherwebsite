<?php
define( 'WP_CACHE', true );


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anotherwebsite' );

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
define( 'AUTH_KEY',         'x{gGTnEfd3m!B*M;].Gx;y]vTpv$pLEs,Gst@hA=Rn4#S`1Tuk]xuh< DK)=38;6' );
define( 'SECURE_AUTH_KEY',  'o6e$uF;eszC|_Fj:W6V?9npc.E2*qQKAQfK0W,K8IPM/2XpTBDZr#LfRPDao]ZnP' );
define( 'LOGGED_IN_KEY',    'T5U<uwWsxDy3$ZXaMiZA>khRO3csw/p0Q69$C|=aAI*rgZK0xI6QTbn;f n3cSg$' );
define( 'NONCE_KEY',        'f;iXVpH-1JJvDm8ym7m]:M)I?_oKv^wXtjx9@WH7O8Q$yMVh/[k^uD6VI$_=h3g]' );
define( 'AUTH_SALT',        ';=z]w_WGEKdF@mV}cl;Y%3lG),=G!krtYd|yY8M:* 1[jl.2Zy7ZW3@|@7SBv2o&' );
define( 'SECURE_AUTH_SALT', 'HlH!}vm;.>Tl)U_VZkj-7,Ak`bt>n9n<ccjN>le|msizdCyQSk.5uP6+AvTebxQ|' );
define( 'LOGGED_IN_SALT',   '*aa4yPwt_^1[&zTAv/UT/NRd.irYAA,Qe)g| .+4#PF3r`T)RjGcd) L0b+]-tzd' );
define( 'NONCE_SALT',       'MIGjq4>QyRel*%mp*nksNT6^-,1`f{h2,+Mhv_]}O%ulQ2B[!5 U::C&p]Ug`SFK' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
