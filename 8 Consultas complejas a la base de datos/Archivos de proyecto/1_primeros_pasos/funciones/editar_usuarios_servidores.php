<?php

//en este php vamos a centralizar todas las consultas de la intranet
include('configuracion.php');

if($_SESSION['nivel']==1){
	
	//Recogemos el parámetro del id mediante el método GET
	$id = $_GET['id'];
	
	//Vamos a recoger las variables que nos han puesto en el formulario
	
	$nombre = strip_tags(addslashes($_POST['nombre']));
	$apellidos = strip_tags(addslashes($_POST['apellidos']));
	$user = strip_tags(addslashes($_POST['user']));
	$pass = strip_tags(addslashes($_POST['pass']));
	$email = strip_tags(addslashes($_POST['email']));
	$telefono = strip_tags(addslashes($_POST['telefono']));
	$nivel = strip_tags(addslashes($_POST['nivel']));
	
	mysql_query("UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', user='$user', pass='$pass', email='$email', telefono='$telefono', nivel='$nivel' WHERE id='$id'");

	define('PAGINA_INICIO','../usuarios.php');
	header('Location: '.PAGINA_INICIO);

	
}else {
	
	define('PAGINA_INICIO','../../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
}

?>











