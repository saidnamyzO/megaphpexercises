<?

include("MySQL.php");
include("funciones.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
	
$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("DELETE * FROM vehiculos WHERE id='$id'");

	if($consulta){
		header('Location: baja_vehiculos.php?mensaje=ok');
	}else{
		header('Location: baja_vehiculos.php?mensaje=error');
	}

}else{
	header('Location:../index.php');
}
?>