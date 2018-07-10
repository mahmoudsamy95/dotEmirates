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
define('DB_NAME', 'dotemirates');

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
define('AUTH_KEY',         'qxKl*4Br^;*_Y|.fR[siMG9SrDa6+aLm``i)OF:`W]>l-C@gv$T6l=UDt2YHyl2W');
define('SECURE_AUTH_KEY',  'v.t~f*>bd$xw:$-aE0AE~@J;3)OVEXXz`6ztREAQ]4*$2hQn]l7kk9)!65}ifV:v');
define('LOGGED_IN_KEY',    'CO]{.yhR#%IB$bh.q&Q5I<Fixz8?X|Na9a!Tn<XZBP*<Z|VOS+g1)H%+|_y4A)~{');
define('NONCE_KEY',        'aS3U:oJfutrgq{Zt@v}*q$t;exT?=Z;txWFHqR8!JZ6XdgqpqTM@Q7pz8twMG4QD');
define('AUTH_SALT',        '^1>_dFdq=.KepVH2Vf8dI`Z;DRj@`~JctMNn0;x[(I&#aIVl:qJ<a}cSWC20S(H<');
define('SECURE_AUTH_SALT', 'Whjos3ngP]hsXcjxoFLdMchsA<ajq}RSL{s}X1D.)!vz3xX(?f[K(3mZg1pzg6rH');
define('LOGGED_IN_SALT',   '1VZ=?+bzuM`lWDz:HL%$pV3P,^*]Du)8a}xT`{(?-8Dtzq*{S}_?]6=Fk:KQ~CB8');
define('NONCE_SALT',       'gX:t^+LyXeOng:fr-*qW]+[W>lw{9<VYFrr1.c6rG:l*1*nbTyIANsI:lcHQEY` ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
