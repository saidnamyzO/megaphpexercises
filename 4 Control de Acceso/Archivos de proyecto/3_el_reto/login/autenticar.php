<?php

//recuperamos usuario mediante el método POST y lo filtramos para evitar códigos maliciosos
$usuario = $_POST['p_username'];
$usuario = addslashes($usuario);
$usuario = strip_tags($usuario);

//recuperamos la contraseña mediante el método POST y lo filtramos para evitar códigos maliciosos
$contrasena = $_POST['p_password'];
$contrasena = addslashes($contrasena);
$contrasena = strip_tags($contrasena);

//CONEXIÓN CON LA BASE DE DATOS



//Comprobación manual que el usuario y la contraseña es correcta

if($usuario=='moises' && $contrasena==1234){
	
	//Una vez comprobamos que el login es correcto, asignamos las variables de sesión
	session_start();
	$_SESSION['nombre']='Moises';
	$_SESSION['nivel']='2';
	
	define('PAGINA_INICIO','../main/index.php');
	header('Location: '.PAGINA_INICIO);
}else{
	//redireccionar a la página de inicio
	define('PAGINA_INICIO','../index.php?mensaje=mensaje_error');
	header('Location: '.PAGINA_INICIO); //header redirecciona a donde queramos
}


?>











