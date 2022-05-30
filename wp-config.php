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
define( 'DB_NAME', 'commerce' );

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
define( 'AUTH_KEY',         '$2uj/N*m1-Bx~B5+h}xQ%dFuy5{Ehu)JqC@<f4y-ZaY!c3}wV^SfF:!EebTWwF`i' );
define( 'SECURE_AUTH_KEY',  'oHwnW2x_FL5.o$|ngq@1-]Z+Fg$OzgIcF(ioCG+Zv;;yZa1w,MS(]KF6[ -,jl@V' );
define( 'LOGGED_IN_KEY',    'B,ip8F.B$:abxq-pVyC.@@zcG7vtai%eKg@PsbMjW!uBe/uVJS(sh{=2rX)}>|cQ' );
define( 'NONCE_KEY',        'sB~#Lu4`U$WZ HerYXOHBA7%-l=0Wx)^S){J?Br,ddiW~rQ4(oga2%Y6q%xsxT <' );
define( 'AUTH_SALT',        ',OCn/VOpqht-i#VF{3~&>da~4u/FK=BWxTGtb!^hcDd}si 6Nl+<??twhQv1yX.9' );
define( 'SECURE_AUTH_SALT', '^]dvQN3XVV>=BEn/zk<:Tkp]={ xtG=]2pQ<%spKKJFA,GwK7OP0-BfRRKC15B{3' );
define( 'LOGGED_IN_SALT',   'hy-/;kgq8HZ.ZYab]gr6MO-4,F2gK8V%?_V]]+/.AKT$jK>E>j++r)a c&dK:!;[' );
define( 'NONCE_SALT',       '-MRh9aBe?bkSIE,g41(Os$v>6#<^F7oiV33jj;m=yQ^]6cQ8j iGS{omU7vrOdb/' );

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
