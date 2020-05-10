<?
include("funciones.php");
$menu = menu(2);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Alta Autobuses</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Alta Autobuses</h2>
</header>
<nav>
	<ul>
    	<?= $menu ?>
    </ul>
</nav>

<form>
	<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"/>
    <label for="Color">Color</label>
    <input type="text" name="Color" id="Color"/>
    <label for="Capacidad">Capacidad</label>
    <input type="text" name="Capacidad" id="Capacidad"/>
    <input type="submit" value="Dar de Alta"/>
</form>

<article id="autobus">
	<img src="images/autobus.png" alt="Autobus"/>
</article>

</body>
</html>






