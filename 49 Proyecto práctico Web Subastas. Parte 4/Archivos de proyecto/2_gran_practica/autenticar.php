<?

include("privado/MySQL.php");
include("privado/funciones.php");

//recuperamos las variables del index.php
$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("SELECT * FROM usuarios WHERE user='$usuario' and password='$password'");

if($consulta && $consulta[0]['permiso'] == 'si'){
		$_SESSION['nombre'] = $consulta[0]['nombre'];
		$_SESSION['email'] = $consulta[0]['email'];
		$_SESSION['user'] = $consulta[0]['user'];
		$_SESSION['id'] = $consulta[0]['id'];
		$_SESSION['nivel'] = '1';
		header('Location:privado/index.php');
	
}else if($consulta && $consulta[0]['permiso'] == 'no'){
	header('Location:index.php?error=nopermiso');	
}else{
	header('Location:index.php?error=nologin');
}

?>