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
?>