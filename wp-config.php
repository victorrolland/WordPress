<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         's6E)s5l7tD-Dwk;5| u!piJ(?_@!qn=ANFC7%/pqA1-sz-BO7^-C. hYMKP-K(rw');
define('SECURE_AUTH_KEY',  'RC7e3q+T4#O;{RM:-,!0 X5*gE-5>m|M|9<7j]{R:+kn keT=J?$%yo-S[VQpM>P');
define('LOGGED_IN_KEY',    '-CReeS2fyy5M#|n8#(Eaf{W%7GR-@(NJ@#VTR9c}R| 9nwAOpL=<^#rl EW^;<jh');
define('NONCE_KEY',        'c>aP>lRijxA>64u!4>SmD$5XwDT6 n#>:[I8w]R(b_V+_ssnw0;x9[0L|1pLooey');
define('AUTH_SALT',        'Y>Ww[>jSAc*Kwc3zs*`<*emVgMOxa4Gtg!F7+{Z`JVzOMzdzoT|+J8/^TYt^.1af');
define('SECURE_AUTH_SALT', 'HaZW~Bl3y$qtz;$zl@Jnw,n?^v>kYs5qv[&8RW8kGpkULx{r#.rN0)@p.I+k~i[}');
define('LOGGED_IN_SALT',   'zx6y#34`;o[B-q41Rf`DNh%@S,^t;U /&mf|cBzp4IEo(5C4akd`*O:)T^-)n:Lc');
define('NONCE_SALT',       '-~)=EE1rfqH lMgXjnK*4mQA`ieku!g2bL|n.D~Z;~>3Jv1?iOuQv11=dw*(={V;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
