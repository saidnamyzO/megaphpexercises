<?
include("funciones.php");
$menu = menu(2);

//Gestión errores de validación
$error_nombre='';
$error_color='';
$error_capacidad='';
if(isset($_GET['error']) && $_GET['error']=='nombre'){
	$error_nombre = 'Debe escribir su nombre';
}
if(isset($_GET['error']) && $_GET['error']=='color'){
	$error_color = 'Debe escribir un color';
}
if(isset($_GET['error']) && $_GET['error']=='capacidad'){
	$error_color = 'Debe escribir la capacidad';
}
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


<form method="post" action="funciones.php">
	<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre"/>
    <?= $error_nombre ?>
    <label for="Color">Color</label>
    <input type="text" name="Color" id="Color"/>
    <?= $error_color ?>
    <label for="Capacidad">Capacidad</label>
    <input type="text" name="Capacidad" id="Capacidad"/>
    <?= $error_capacidad ?>
    <input type="submit" value="Dar de Alta" name="alta"/>
    <div class="clearfix"></div>
</form>



<article id="autobus">
	<img src="images/autobus.png" alt="Autobus"/>
</article>

</body>
</html>






