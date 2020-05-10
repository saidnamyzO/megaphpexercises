<?php

include('funciones/menu.php');

session_start();

//impedimos el acceso a las personas que NO se han logado

if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){


//asignamos el menú en función de si es NIVEL 1 o NIVEL 2
if($_SESSION['nivel']=='1'){
	$menu = getMenuAdministrador();
}else{
	$menu = getMenuEmpleado();
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inicio Intranet</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container">
<header>
<h1>Intranet Megacursos.com</h1>
<h2>Bienvenido a la Intranet, <?= $_SESSION['nombre'] ?></h2>
</header>
<?= $menu ?>

	<a href="../login/salir.php">Cerrar sesión</a>

</div><!--end .container-->
</body>
</html>

<?
} else {
	
	define('PAGINA_INICIO','../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
	
}
?>











