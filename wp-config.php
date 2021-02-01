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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'db_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'db_password' );

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
define( 'AUTH_KEY',         '1baM~*G,7E^k4sG7A_2%>PAIB`xGo.Zj:nMI3xOB,7< hY;=tko5&n.>8TlA+2LM' );
define( 'SECURE_AUTH_KEY',  '&z2#l1>+|G~&xpKQG:v9GXE}L/uAY04rWmvmP}.^x]p<^T}(fB]M!(J2{^:]ymXG' );
define( 'LOGGED_IN_KEY',    '0(3,1,@;Q&]<*3vmVU)de&XJwtmh;o=EoL)e =<yvK,Whrl^.TM8OK41.uKQ1UCD' );
define( 'NONCE_KEY',        'YPxuCtk_67-.l):m9Y%Mquie;UNC$LbSecs:CB Tj[:j %3eFgvAn(euBZcBE|Y<' );
define( 'AUTH_SALT',        '>~Ps/EMxbjm*~|{J1=q)$c((*RTP1l=e99cOurfAoocjY6!Ux)#aOopZOZz:pbZs' );
define( 'SECURE_AUTH_SALT', '.+HXB&E)MLUywYZAiltVo~5hy7crO(ecH,08t}qnu8J80xS9p]ASKV+.WE.-dJ.A' );
define( 'LOGGED_IN_SALT',   '^P)(c8(N}vsD1bN=*z!P lYgm[7n^i!r;(x4fZA&j&WEo!t|zRcQ)@[TYa;/$6ib' );
define( 'NONCE_SALT',       '8A5WP.rPsq$)~fAhFSV^ZQt}ZXRqw19D=S~2gG8%$+r]@Zmv:yksqzEprA%b+WE%' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
