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
define( 'DB_NAME', 'users' );

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
define( 'AUTH_KEY',         '5gUd,&o<dG<_&*pk|}FLlMnp5>F1`&:?reJ?~S1oVk_zMK[9Jn!6RKgHY7^*B-z~' );
define( 'SECURE_AUTH_KEY',  '4h:4  j6>tVh^cA+|YWcS?8+;/X#9$RS@ean,9{;U<DwrT2,pgY2R)u{Np{GN5[g' );
define( 'LOGGED_IN_KEY',    '{Z?t*Ckx?&E^s&+K&OsDD8gYSDDb.!yFq$*!(sG)0zuR@U)*!kNWex}f~_MK=Ng_' );
define( 'NONCE_KEY',        '#K4V,*rs9_ApJrrycU TeueZ/bDg-*0k9dJG ^&)pMXE<oC(4.<E{=~Py4]V09+`' );
define( 'AUTH_SALT',        '<(Ax G[m>LY@**_)oL8K0uJ4J72}TlPWaV/`9}*6uhM^Pv^IT<|eq1eA>tF{y6^=' );
define( 'SECURE_AUTH_SALT', '*zuDGp16Mhk;g0=nDS?1TM0q.3uZ/;FY6 z{Q-YKA{CyqS &Mo1&aiJyjo}/I,>{' );
define( 'LOGGED_IN_SALT',   'Qg~S,GgW0mzSR5pVt@<&(9{& UbYgB1:xp<~ 3l*|wQ ^#o<>kXcH{qNWosu/VDT' );
define( 'NONCE_SALT',       'M8Yn$C eG&tD3rYmfyR?Shl[u.}EO4~<6F{iHV5n~1+!{$Gpb%ebZ)J4iS3Qf6vO' );

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
