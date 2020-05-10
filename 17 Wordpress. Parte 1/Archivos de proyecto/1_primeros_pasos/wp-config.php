<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1Z[3NelMtKW7nv0>[Z9ZK^G|:pnBw 1!R#w|!Mkg5DqXrkRHPgtdf*Vt.R$PN&MV');
define('SECURE_AUTH_KEY', '$tLd8X93 =NEEId)yPqT++yP}`$d=/Qf2d|xF8Xg:M3j@?T-0Li)PCE9-OQcU{b:');
define('LOGGED_IN_KEY', 'i20=lKPOXE&Dih;Zn+1[/  Bhq8?0-/4&V:w[5AH@Rgb+lpyvGhKB74Ou8%YCjJh');
define('NONCE_KEY', 'gi7D=jJeFVpj6DOYE?4|2P&{RzcY+84r(*^&(T@F|KAjeUE,T Cb;=?^E blUduk');
define('AUTH_SALT', '+spn4LYS@6m5q26cD~XtDmb9hHG:tZ,|2clm0FNDD4;@A`od];LB}+vz/OZW@S^K');
define('SECURE_AUTH_SALT', '1ti3[b%|q%t_Jrd+6.(H#=DuGcDxn.~@5Dz!QVn*9gx|;JJ|M$||Z26=+~eP3-+W');
define('LOGGED_IN_SALT', '<Um*q@~{j~@4,7Xu)#w7Ww{D`m5SA+_6|Rfp.py3=?.q}~g@7uCqajiu3OPH#>N%');
define('NONCE_SALT', 'X+^y.LK=6&Aaiw`=sF],.>qKNsl[i/~_/rST;fR|)1d.E)@A2|79&nk$qscZG&Pl');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
