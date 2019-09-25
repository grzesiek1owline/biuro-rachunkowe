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
define( 'DB_NAME', 'm1156_projekty' );

/** MySQL database username */
define( 'DB_USER', 'm1156_projekty' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x9DNPFTYP3JJED9' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql36.mydevil.net' );

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
define( 'AUTH_KEY',         '[&UB,%!?$n]dV`#8O>b+4r$T~*i[.y*I+Y-}v#M]4a:A8W]Rp.?E-hq3eSacm>(!' );
define( 'SECURE_AUTH_KEY',  '<|~eNZi@-j.=swPuVSG(fVls~dY zv!(j=@%-%O/D@W91<)i9Z2O))htB@hmLmHy' );
define( 'LOGGED_IN_KEY',    ';I1(qrX|.!#D[Bd{<*gng3w/d5CF5&T!_>? ._vWy1Z]K1;_z;*daX%g(qr#+XE`' );
define( 'NONCE_KEY',        'e_7@ 1(oDCE/lY2?j?MEqv3(En&GPU-k3H`KDP-K<!R}]qI*A3Ul~hsg@Cg{k(dp' );
define( 'AUTH_SALT',        '@bMT<W$hQ?R+elmL%6Lr*dNhX[vA tUUj T<)Q2GQd[..*x?WEeL_f8k|9wN$|7C' );
define( 'SECURE_AUTH_SALT', 'jv@0$nESmhHPXI7*-2v45-}w@M;IfJ.k?&3tZY$C_%Qu]zm >[_u;34nH*a.x{dx' );
define( 'LOGGED_IN_SALT',   'NgBhkTQkiA(4(tw^gRSU(CT5y(DtBR3[lD[dz{FioT.q`<=u,EzMv[w>qTRSqv},' );
define( 'NONCE_SALT',       'z)e2j%I{^XhoT]1*Va4iuJuc}$uozUz6{7n{g#(&~LWQtc!.lXp.s/p%!Zx)_mzb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'brr_';

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
