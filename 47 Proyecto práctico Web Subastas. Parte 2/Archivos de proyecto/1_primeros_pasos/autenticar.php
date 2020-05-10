<?

include("privado/MySQL.php");
include("privado/funciones.php");

//recuperamos las variables del index.php
$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("SELECT * FROM usuarios WHERE user='$usuario' and password='$password'");

if($consulta){
		$_SESSION['nombre'] = $consulta[0]['nombre'];
		$_SESSION['email'] = $consulta[0]['email'];
		$_SESSION['user'] = $consulta[0]['user'];
		$_SESSION['nivel'] = '1';
		header('Location:privado/index.php');
	
}else{
	header('Location:index.php?error=nologin');
}

?>