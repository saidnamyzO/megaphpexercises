<?
include("funciones.php");
$menu = menu(5);
$resultado = verConductores();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ver Conductores</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Ver Conductores</h2>
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

</body>
</html>






