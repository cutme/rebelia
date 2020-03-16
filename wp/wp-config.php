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
define( 'DB_NAME', 'mediger_rebelia' );

/** MySQL database username */
define( 'DB_USER', 'mediger_rebelia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'v4tlEooMq4' );

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
define( 'AUTH_KEY',         '_Er&9bN(jQ?a-U4dMy4`l$?,ZzKEgbylRE({kOLJG)x+UI Cb:1c9GEBL2Bs)fJW' );
define( 'SECURE_AUTH_KEY',  'a4%t^tLZ]HN6DNb)HKs4-GB)+k&UZP Xs(c54Xy(%~&mBLxp24JYdrVw7V[a8;E[' );
define( 'LOGGED_IN_KEY',    'H^CB-e+>J`}`}2[dMnG-R8%vJ5>]jP=YS1.,51e#IP.?w#7U2:]08X4OYy+Rw(I/' );
define( 'NONCE_KEY',        'Ji|}iIm;-mOIV;vm3`bD$DhAeWq,1SW=/iC.86SW@#N{7GQ:Ub ZXM)u+Y;Fey4m' );
define( 'AUTH_SALT',        'X)88k&I*$YCB&RLM%i@^N98gl@=jsk|*Nm2HgVa29=&whY}^yQ&@*a3z`UZZ?{2r' );
define( 'SECURE_AUTH_SALT', 'Z<~24+>5N/VnmNz~$6pQXzM```P3*#_tXn#^N%L9|9?p&|=8)A8I9gVk=@og]$VV' );
define( 'LOGGED_IN_SALT',   ':!#oA24*O_##6SKC?~^v!KZUHy_Oh(3kV9`1%hp]xKyN`.I1%Ty1hn}#3,l}&Ji-' );
define( 'NONCE_SALT',       'K.4 R(%QuVRB+RT]NQCA6U8P xmak<dl}o,PyS?<9s,/J, S=|([o39@s:{`M{E:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'reb_';

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
