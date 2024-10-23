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
define( 'DB_NAME', 'janatravel' );

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
define( 'AUTH_KEY',         'Q^,Ed;kDcNq}BN6gepf:Xt2EO :d+.:95TEl*(K&KYfgc!(Vl01PqeO32n!-?rDs' );
define( 'SECURE_AUTH_KEY',  'Arokg7,K%t(r+No2|rnQ)tT:Z|j:>wG2>fYEI^&fE[DsV.^ZXBpZP9dOsV0z^P_R' );
define( 'LOGGED_IN_KEY',    'FD@?k`^qU;@V5^n;r!>>d3VUh|n<@P(sw8@@(rt49tio3&Ud=:,/Y>Jlh-gd6^i4' );
define( 'NONCE_KEY',        'KjR@<X(/FjN6$hT;%r/-0OIS|<n,hDev|<99JdxhUI_?Uw#0nV,dE-yMO~)H8t0,' );
define( 'AUTH_SALT',        '<YX_`/BQ7T<pelqFlVX&/@FzzG9<?Xc:>:)+~jGmqUo[xNLJD`Hapoht86>1--:p' );
define( 'SECURE_AUTH_SALT', 'j:mjrn{q6v#1U#1N*HcIz_^#}bTnKIHv^BJ1R1obFg^xz]f|WOZZ^-J96!;9zktL' );
define( 'LOGGED_IN_SALT',   'X,uOf.8Y5hP7c1]Z&e&.pEYS}7:jmqKatck3)DloP4e6bDH3ZGYu<C{d<opokDD#' );
define( 'NONCE_SALT',       'k(_U6TF@br|,~sBr9~M_+RhmkdAh.8e`<IlmMH>2?y8L)%Eskt2aTG:O<Hd{ui}Y' );

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
