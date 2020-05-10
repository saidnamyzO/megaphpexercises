<?
$dbhost="localhost"; /* Nuestro server mysql */
$dbuser="root"; /* Nuestro user mysql */
$dbpass=""; /*Nuestro password mysql */
$db="publicidad"; /* Nuestra base de datos */

//conectamos y seleccionamos db
mysql_connect("$dbhost","$dbuser","$dbpass") or
    die("No se pudo conectar a la base de datos: " . mysql_error());
mysql_select_db("$db"); 

//Comenzamos la sesión, esto se explica despues en el Sistema de Login
session_start(); 

function cache(){
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header("Pragma: no-cache"); // HTTP/1.0
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
}
?>