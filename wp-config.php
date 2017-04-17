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
define('DB_NAME', 'wp625');

/** MySQL database username */
define('DB_USER', 'wp625');

/** MySQL database password */
define('DB_PASSWORD', '.SP7-b1A64');

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
define('AUTH_KEY',         'bqqmxszpvuxj5gicingevv3cjtzrtmbi7fztqzbiloe7wrrx2rwgc6c0voqce3cp');
define('SECURE_AUTH_KEY',  'hslor3dlhnlbatypltwhfo9xqbmlauqac0zuaf8utlochnuhnwtfqxi3dgdkdliq');
define('LOGGED_IN_KEY',    'bn40ildwetyhjzcvmzlwdjknr0fi1v2r3fuo1xx9wau11t5smue0jpa7nuhhn4e6');
define('NONCE_KEY',        'csmoyihue6ydbsymkeyfphwkxm5ausy02rei908ztl5okmrnxfcy38wyu0cjxj7i');
define('AUTH_SALT',        'mhmiu0lq6osdsa7bcxzngwn58tp0ucwbjwddeiaf1kn9gjv729qterwbtp58zcnc');
define('SECURE_AUTH_SALT', 'c9qrqsahpyowkpkyq9rrmxlykn6tduhdnp7uwnnspfpnojdfguwmbp2rsma77tiz');
define('LOGGED_IN_SALT',   'd4ccwzetbfiir7d8y23a3zadhakhvo0kbznb1va4sjhxzw6ghqmpgjvhphbcx7vu');
define('NONCE_SALT',       'sdaczyqepposhasdsfa22m5vtyzhbk6kb9omwotogftxmb9aza53mlab6236gxis');

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
