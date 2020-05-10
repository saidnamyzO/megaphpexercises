<?
include("funciones.php");
$menu = menu(0);
$resultado = verViajes();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ver Viajes</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Ver Viajes</h2>
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






