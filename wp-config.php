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
define( 'DB_NAME', 'wp_pfbi' );

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
define( 'AUTH_KEY',         '!L!]nRjT*s/1f ,*Pp<(>eMqxmZiJ_D6A$=3;KK}#`U]$R~r}s[Z^[,XMpm,>Vau' );
define( 'SECURE_AUTH_KEY',  'b~%1Npl}`H@RnIu>(-}~XHk>tr6I3^E]C `YMmRWa~+)W5A:e=M!$fQn:lM;LR<B' );
define( 'LOGGED_IN_KEY',    '%b&S*)8BsL>B%pXAM3RP9_(*2VuaTV-p1=&oz(7AvF:a9F>fM r[E;J-PQ7<Pgz?' );
define( 'NONCE_KEY',        '?Ai$yiV/]&B-lwg0|]z8_,RN E|`bO11.B;;B#pg~agC L1o<ZFGQb.+=|`k6p5e' );
define( 'AUTH_SALT',        ';*m_TbS;q{Ul5lP/X:k;g=IP77r3=F.0f8s5.JKJJa}Pk:j:lV_@O~_w9LUR6iXV' );
define( 'SECURE_AUTH_SALT', 'Em1:fD<c:2G!:s@a4k8^2T@!w4e?[F/)lXxVAd1-=.>[he.Wd A1Jc5rtlygx)(r' );
define( 'LOGGED_IN_SALT',   'Rg,/QV#Ps/#;/vX(AA;dw4:_T(kELkRF(W)8ch9]TY!nui. |/adxJox3eeZLXXG' );
define( 'NONCE_SALT',       'O-b~CuW6EpiTvqFI yEj{JzAvl.__Sn{Y/E~#(yF+R)V?SVYw&EP_y&Z|I%z_~G8' );

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
