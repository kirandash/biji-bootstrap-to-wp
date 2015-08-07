<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'biji-bootstrap-to-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         'M}Q-CJ}@]L4)p,+vUEg[XM<4>ERGUlVWlG3Cva,Uc%nF0,[=&]xzNq+-+{e-1;2L');
define('SECURE_AUTH_KEY',  'M|)}+j1fok3f6U|aYddI(8:W&g|5ZvvQ8Qq)z:1@|40Xo`-l~+%`=C^aLI[W+K4~');
define('LOGGED_IN_KEY',    'L5:`b 0JWyJ$t1%#J:.j )WQb5Y+8!7&M-=fwjW=p._i3 X_f`+|4*dn+|=|L7& ');
define('NONCE_KEY',        '+sLC31;6~m_~Vf+#&4-.*n5fJoIgmo:h3.oF0-oIvN M3_*F_+*pXPIY,T}(#?~-');
define('AUTH_SALT',        '>-L9EjKt/<^qk$=]8Ck?0qm,b_0=o:1JfD:|s*)Xa)c)GFkz6JaLb_nNB&?zA.(G');
define('SECURE_AUTH_SALT', '< }Wq$CeQk) Cb-[rHB!!d:~`N?sHqRI3b5q[xK+`}1;@Y2AB+R`4=Y yjbR4b6.');
define('LOGGED_IN_SALT',   'sa.Ib|RCF8MGp7?+}IKwCNBy<|6|/mu4L{P@#!<:z@%-QxLzXND]Ow*){$FG#;)n');
define('NONCE_SALT',       's/;<Cr`eZ|PN8vr[iGy}DvF+H|j]FI+c83I5V#}$IrqGX2M+#VjZ@t^hh+se^JMV');

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
