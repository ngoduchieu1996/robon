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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'hieu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin@123!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DT!_{pyIoS2vvpBS3S$)Z5$^D.uwJ{)z?/(?P.Wf1t|YtNZ*V54[k;lo_0iX~)en' );
define( 'SECURE_AUTH_KEY',  'by;J7^0M!66Xq$V$Bw`FGw8Vu~65~OzBp^C^p@oZ[-Cc;Q6}p<?G*a`+#ty[UGCM' );
define( 'LOGGED_IN_KEY',    'I?R&mF~!(v>.-.<pPR.FOG{Qh]Y_}/LOk/RFrd0r.x?*Lj {G2LBH] +{pBV763T' );
define( 'NONCE_KEY',        'rr3nsJyd4Or9?OGtQdSu&2;1}[)m-`R6FyD5n766u0]kbQaaV5gssZ^MXOc|?TEY' );
define( 'AUTH_SALT',        'M` K9;Gidn9bn]xb#E/uOf,)+LRx@Y@DPwe,%TYVEVDMwVH(`z7MAv1E+Q0ujIcz' );
define( 'SECURE_AUTH_SALT', 'Ezg`E6Z:-)VNr&7]4YFs20lykY7pLEy9r:_h~DxBTP`T-r<qu&yw!R1!%IV3%+Vx' );
define( 'LOGGED_IN_SALT',   '.Qt$UYkdbm*p]h_nQ+[%fal3c#KItg-k?8q**^t?2OLq.k`.6zQg}Pnj2a?)lgfn' );
define( 'NONCE_SALT',       'Y!y,DbQSs^)xnflERk8#e`mL^8ev)x@]{ROsuA%zvU[&qvn?_ik-$Ci@vaootG0}' );

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
