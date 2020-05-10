<?php
	$dbhost = 'localhost'; //hosting del servidor, nos lo da la empresa que contratemos
	$db = 'megacursos'; //nombre de la base de datos
	$dbuser = 'root'; //usuario para la base de datos
	$dbpass = ''; //contraseña para la base de datos
	
	//contectamos y seleccionamos la base de datos
	mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db);
	
	//comenzamos la sesión
	session_start();	
?>