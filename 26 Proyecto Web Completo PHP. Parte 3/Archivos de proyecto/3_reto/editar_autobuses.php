<?
include("funciones.php");
$menu = menu(0);
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$resultado = cargarAutobusEditar($id);

$nombre = $resultado[0];
$color = $resultado[1];
$capacidad = $resultado[2];

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Autobús</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Editar Autobús</h2>
</header>
<nav>
	<ul>
    	<?= $menu ?>
    </ul>
</nav>


<form method="post" action="funciones.php">
	<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" value="<?= $nombre ?>"/>
    <label for="Color">Color</label>
    <input type="text" name="Color" id="Color" value="<?= $color ?>"/>
    <label for="Capacidad">Capacidad</label>
    <input type="text" name="Capacidad" id="Capacidad" value="<?= $capacidad ?>"/>
    <input type="submit" value="Dar de Alta" name="alta"/>
    <div class="clearfix"></div>
</form>



<article id="ver_autobuses">
	<img src="images/autobus.png" alt="Autobus"/>
</article>

</body>
</html>






