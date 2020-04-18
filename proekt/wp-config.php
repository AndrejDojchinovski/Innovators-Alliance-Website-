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
define('DB_NAME', 'proekt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']nSG8N i12k]~fhUF:z[%lI}fym&G:S:F=P~X^BUc;cUwYTU3H/rO?F@XZSE_p5V');
define('SECURE_AUTH_KEY',  'a;>I&xqa (4}+/ AsbjgGv6PId=v?+;-8E^DM0_mezQZfi3CaOF)/>~4$!NJL97I');
define('LOGGED_IN_KEY',    'eF}90KG7B7/8;||Hy${8>ozy#=k[K]}cpbsP| [d|TO$?CJB;Ds(Wm4R-14SuiK=');
define('NONCE_KEY',        '-u:rI+?iAFe?}dd6U^*R4YC<a;_6-%qRFQlaxOo+$.#Sn-=A$07yqkxWLCZUKVf<');
define('AUTH_SALT',        'rBCBku nK5!oe==&(|H8E0e&(oB=;il|A``@Fi_Ri*k5G:*@UY|,.xNC5}|z.Z:r');
define('SECURE_AUTH_SALT', ']+46k6ko:#hgPe7Y0y;M!$(3v$g]4/f{ZmWBI1NYY=45~%e[xAfWeoz2DbM9>=uA');
define('LOGGED_IN_SALT',   'EQ=El^I`;6vD7Lu{azF=VV5M{dB=F?:T[O2|}AwrZ3-zZkThYwu0Hg,zfMO[jay#');
define('NONCE_SALT',       'vpse4arV{=AqyGf;jrMo#zP%UrDm;a~Dc{$~:!3o:%U,ey:n<3]y%pk,U(Rb6!!o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
