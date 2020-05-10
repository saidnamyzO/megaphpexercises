<?
include("MySQL.php");
include("funciones.php");

$bastidor = $_POST['bastidor'];

$sql = new MySQL('localhost','root','','subastas'); 

$consulta2 = $sql->enviarQuery("SELECT * FROM pujas WHERE bastidor = '$bastidor' ORDER BY id DESC LIMIT 1");
if($consulta2){
	$precio_actual = $consulta2[0]['precio'];
	$precio_actual = (int)$precio_actual;
}else{
	$precio_actual = "Aún no hay pujas";
}

echo $precio_actual;

?>