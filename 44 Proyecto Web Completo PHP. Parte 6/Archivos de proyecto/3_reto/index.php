<?
include("funciones.php");
$menu = menu(1);

//SELECT AUTOBUSES
$resultadoAutobuses = selectAutobuses();
$longitudAutobuses = count($resultadoAutobuses);

$select_autobuses = '<select name="autobus" id="autobuses" class="especial">';
for($n=0;$n<$longitudAutobuses;$n++){
	$select_autobuses .= '<option value="'.$resultadoAutobuses[$n].'">'.$resultadoAutobuses[$n].'</option>';
}
$select_autobuses .= '</select>';

//SELECT CONDUCTORES
$resultadoConductores = selectConductores();
$longitudConductores = count($resultadoConductores);

$select_conductores = '<select name="conductor" id="conductores" class="especial">';
for($n=0;$n<$longitudConductores;$n++){
	$select_conductores .= '<option value="'.$resultadoConductores[$n].'">'.$resultadoConductores[$n].'</option>';
}
$select_conductores .= '</select>';
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
	<label for="nombre">Nombre</label><div class="error"></div>
    <input type="text" name="nombre" id="nombre" required/>
    
    <label for="autobus">Autobús</label><div class="error"></div>
    <?= $select_autobuses ?>
    
    <label for="conductor">Conductor</label> <div class="error"></div>
    <?= $select_conductores ?>
    
    <label for="fecha">Fecha</label><div class="error"></div>
    <input type="text" name="fecha" id="fecha" required/>
   
   
    <input type="submit" value="Dar de Alta" name="altaviajes"/>
    <div class="clearfix"></div>
</form>



<article id="autobus">
	<img src="images/autobus.png" alt="Autobus"/>
</article>

<article id="verviajes">
	<a href="ver_viajes.php">Ver Viajes</a>
</article>

</body>
</html>






