<?php

include('funciones/menu.php');
include('funciones/consultas.php');

//impedimos el acceso a las personas que NO se han logado

if($_SESSION['nivel']==1){


//asignamos el menú en función de si es NIVEL 1 o NIVEL 2

	$menu = getMenuAdministrador();
	$perfil = 'ADMINISTRADOR';
	$usuarios = getUsuarios();


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
<div class="cerrar_sesion">
<a href="../login/salir.php">Cerrar sesión</a>
</div><!--end .cerrar_sesion -->
</header>
<?= $menu ?>
<div class="clearfix"></div>
<h2 class="principal">Usuarios</h2>
	<?= $usuarios ?>

</div><!--end .container-->
<footer>
<div class="left">
Teléfono: <strong><a href="tel:<?= $_SESSION['telefono'] ?>"><?= $_SESSION['telefono'] ?></a></strong>
</div><!--end .left-->

<div class="right">
<?= $_SESSION['nombre'] ?>, has entrado con el perfil de <strong><?= $perfil ?></strong>
</div><!--end .right-->
</footer>
</body>
</html>

<?
} else {
	
	define('PAGINA_INICIO','../index.php?mensaje=sin_permiso');
	header('Location: '.PAGINA_INICIO);
	
}
?>











