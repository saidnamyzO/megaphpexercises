<?
include("funciones.php");
$menu = menu(3);
$resultado = verAutobuses();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ver Autobuses</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Ver Autobuses</h2>
<?
if(isset($_SESSION['permiso'])){
?>
<a href="funciones.php?salir=true" class="cerrar">Cerrar Sesión</a>
<?
}
?>
</header>
<nav>
	<ul>
    	<?= $menu ?>
    </ul>
</nav>
<section>
<?= $resultado ?>
</section>
<article id="ver_autobuses">
	<img src="images/autobus.png" alt="Autobus"/>
</article>
<div class="nuevobus">
	<a href="alta_autobuses.php"><img src="images/nuevobus.png" alt="Dar de Alta Autobús"/></a>
</div>
</body>
</html>






