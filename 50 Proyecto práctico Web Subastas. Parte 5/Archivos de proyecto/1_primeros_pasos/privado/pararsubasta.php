<?
include("MySQL.php");
include("funciones.php");

if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
	
$sql = new MySQL('localhost','root','','subastas'); 

$consulta1 = $sql->enviarQuery("UPDATE subasta SET activa = 'no' WHERE id = '1' ");

$consulta2 = $sql->enviarQuery("SELECT * FROM pujas ORDER BY precio DESC");

if($consulta2){
	$bastidor = $consulta2[0]['bastidor'];
	$propietario = $consulta2[0]['propietario'];
	$comprador = $consulta2[0]['pujador'];
	$precio = $consulta2[0]['precio'];
}else{
	echo 'Error interno';
}

$consulta3 = $sql->enviarQuery("INSERT into adjudicaciones (bastidor,propietario,comprador,precio) VALUES ('$bastidor','$propietario','$comprador','$precio')");



echo 'Subasta cerrada con éxito';
}else{
	header('Location:../index.php');
}
?>