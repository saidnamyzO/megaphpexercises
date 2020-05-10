<?
include("MySQL.php");
include("funciones.php");

$bastidor = addslashes(strip_tags($_POST['bastidor']));
$precio = addslashes(strip_tags($_POST['precio']));
$precio = (int)$precio;
$precio_comprador = addslashes(strip_tags($_POST['mipuja']));
$precio_comprador = (int)$precio_comprador;
$id = addslashes(strip_tags($_POST['id']));

$sql = new MySQL('localhost','root','','subastas'); 

$consulta1 = $sql->enviarQuery("SELECT * FROM vehiculos WHERE bastidor = '$bastidor'");
$propietario = $consulta1[0]['propietario'];
$pujador = $_SESSION['nif'];

$consulta2 = $sql->enviarQuery("SELECT * FROM pujas WHERE bastidor = '$bastidor' ORDER BY id DESC LIMIT 1");
if($consulta2){
	$precio_actual = $consulta2[0]['precio'];
	$precio_actual = (int)$precio_actual;
}else{
	$precio_actual = $precio;
}

$comparar_precio = $precio_actual+99;

if($precio_comprador > $comparar_precio){
	$consulta3 = $sql->enviarQuery("INSERT INTO pujas (bastidor,propietario,pujador,precio,hora) VALUES ('$bastidor','$propietario','$pujador','$precio_comprador',NULL)");
	header('Location:ficha_vehiculo.php?id='.$id.'&mensaje=ok');
} else {
	header('Location:ficha_vehiculo.php?id='.$id.'&mensaje=error');
}


?>