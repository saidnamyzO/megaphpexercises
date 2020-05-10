<?
include("funciones.php");
$menu = menu(0);

//SELECT VIAJES
$resultadoViajes = selectViajes();
$longitudViajes = count($resultadoViajes);

$select_viajes = '<select name="viaje" id="viaje" class="especial">';
for($n=0;$n<$longitudViajes;$n++){
	$select_viajes .= '<option value="'.$resultadoViajes[$n].'">'.$resultadoViajes[$n].'</option>';
}
$select_viajes .= '</select>';

//INFORMACIÓN RESUMIDA DE LOS VIAJES
$resultado = verViajes2();

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Reserva de Viaje</title>
<link rel="stylesheet" href="estilos.css" type="text/css">
</head>

<body>
<header>
<h1><img src="images/logo.png" alt="Logo"/></h1>
<h2>Reserva de Viaje</h2>
</header>
<nav>
	<ul>
    	<?= $menu ?>
    </ul>
</nav>

<section class="viajes">
<h2>Viajes disponibles</h2>
<?= $resultado ?>
</section>


<form method="post" action="funciones.php" class="viajes">
<h2>Reserva tu viaje</h2>
	<label for="viaje">Nombre del Viaje</label>
    <?= $select_viajes ?>
    
    <label for="plazas">Número de Plazas</label>
    <input type="text" name="plazas" id="plazas" required/>
   
   
    <input type="submit" value="Dar de Alta" name="reserva"/>
    <div class="clearfix"></div>
</form>







</body>
</html>






