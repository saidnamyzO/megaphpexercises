<?php

include('funciones/menu.php');

session_start();

//impedimos el acceso a las personas que NO se han logado

if($_SESSION['nivel']==1 || $_SESSION['nivel']==2){
	
	$url_foto = $_SESSION['id'].'.jpg';


//asignamos el menú en función de si es NIVEL 1 o NIVEL 2
if($_SESSION['nivel']=='1'){
	$menu = getMenuAdministrador();
	$perfil = 'ADMINISTRADOR';
}else{
	$menu = getMenuEmpleado();
	$perfil = 'EMPLEADO';
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
<div class="cerrar_sesion">
<a href="../login/salir.php">Cerrar sesión</a>
</div><!--end .cerrar_sesion -->
</header>
<?= $menu ?>
<div class="clearfix"></div>
<h2 class="principal">Inicio</h2>

<div class="avatar">
<img src="uploads/<?= $url_foto ?>"/>
</div>

<div class="formulario">
	<form action="funciones/upload.php" method="post" enctype="multipart/form-data" class="inicio">
    <p>Selecciona una foto con un tamaño inferior a 2MB.</p>
    <input type="file" name="photo">
    <br/>
    <input type="submit" name="ok" value="Enviar" class="b_inicio">
    
    </form>

</div>

	

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











