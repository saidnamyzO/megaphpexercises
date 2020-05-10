<?
include("funciones.php");
$menu = menu(0);
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
$resultado = cargarConductorEditar($id);

$nombre = $resultado[0];
$fnacimiento = $resultado[1];
$nif = $resultado[2];
$telefono = $resultado[3];
$email = $resultado[4];
$carnet = $resultado[5];

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Conductor</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Editar Conductor</h2>
</header>
<nav>
	<ul>
    	<?= $menu ?>
    </ul>
</nav>


<form method="post" action="funciones.php">
<input type="hidden" name="ID" value="<?= $id ?>"/>
	<label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="<?= $nombre ?>"/>
    
    <label for="fnacimiento">Fecha de Nacimiento</label><div class="error"></div>
    <input type="text" name="fnacimiento" id="fnacimiento" required value="<?= $fnacimiento ?>"/>
    
    <label for="nif">NIF</label> <div class="error"></div>
    <input type="text" name="nif" id="nif" required value="<?= $nif ?>"/>
    
    <label for="telefono">Teléfono</label> <div class="error"></div>
    <input type="text" name="telefono" id="telefono" required value="<?= $telefono ?>"/>
    
    <label for="email">Email</label> <div class="error"></div>
    <input type="text" name="email" id="email" required value="<?= $email ?>"/>
    
    <label for="carnet">Carnet</label> <div class="error"></div>
    <input type="text" name="carnet" id="carnet" required value="<?= $carnet ?>"/>
    
    <input type="submit" value="Guardar" name="editarconductor" class="boton_editar"/>
    <a href="funciones.php?borrarconductor=<?= $id ?>" class="borrar">Eliminar</a>
    <div class="clearfix"></div>
</form>



<article id="ver_autobuses">
	<img src="images/autobus.png" alt="Autobus"/>
</article>

</body>
</html>






