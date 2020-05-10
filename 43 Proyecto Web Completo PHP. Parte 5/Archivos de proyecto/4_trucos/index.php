<?
include("funciones.php");
$menu = menu(1);

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
	$error_capacidad = 'Debe escribir la capacidad';
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Alta Viajes</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Alta Viajes</h2>
</header>
<nav>
	<ul>
    	<?= $menu ?>
    </ul>
</nav>


<form method="post" action="funciones.php">
	<label for="Nombre">Nombre</label><div class="error"><?= $error_nombre ?></div>
    <input type="text" name="Nombre" id="Nombre" required/>
    
    <label for="Color">Color</label><div class="error"><?= $error_color ?></div>
    <input type="text" name="Color" id="Color" required/>
    
    <label for="Capacidad">Capacidad</label> <div class="error"><?= $error_capacidad ?></div>
    <input type="text" name="Capacidad" id="Capacidad" required/>
   
    <input type="submit" value="Dar de Alta" name="alta"/>
    <div class="clearfix"></div>
</form>



<article id="autobus">
	<img src="images/autobus.png" alt="Autobus"/>
</article>

</body>
</html>






