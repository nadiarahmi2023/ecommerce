<?php
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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'IU`BLynChx ld_&``;S17An7W+y F>9eK3fJ ta!4WE 2g;~=IrU>CArGL>b{. O' );
define( 'SECURE_AUTH_KEY',  '=241?gHEDTUE+nke/A(Y9bZF2$sKzV7kucWKn$7i!WaFIIQy78_JnG-)cltAZpq0' );
define( 'LOGGED_IN_KEY',    '@l]THSG8Ls;RZxDBP02}vwkHIj~|0%dRH}s/n_rYptqsW{*N{YNE=/eP73.%?mT3' );
define( 'NONCE_KEY',        'Mk/uDZr*+++f<:]}:p-M-&0VItyc(P)wUM$.XU-9>n:GG1V1r(1r^$o0WV%9VhM5' );
define( 'AUTH_SALT',        '7BZ6=#[}rl@Wc]YsW`:)En1)>Sn*=ZTnU]pn&Cljk3[vN*6&jv:siBQ_QaM6W!l`' );
define( 'SECURE_AUTH_SALT', '@o/ub+?Mr;Dj6e21hVoB%<Un:#$QAEU}W;$IBoQ([ZCx6W~gyJ`-v>BM{=R?P>K[' );
define( 'LOGGED_IN_SALT',   '(G6)hv![HADmn:pekXPo`5`7KV5mcb 74LF2)a%x(i5oxl3DfNLOZx@ovoXg2aDJ' );
define( 'NONCE_SALT',       'uE5u=U)pBI/*W+}QJd#`-aAE#z}]Z9Z3C}UG%Cad|[S#a0SD] wL:-WQ;+7=%{N-' );

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
