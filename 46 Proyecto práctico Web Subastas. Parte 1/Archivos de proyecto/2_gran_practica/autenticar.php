<?

include("privado/MySQL.php");

//recuperamos las variables del index.php
$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("SELECT * FROM usuarios WHERE user='$usuario' and password='$password'");

if($consulta){
	header('Location:privado/index.php');
}else{
	header('Location:index.php?error=nologin');
}

?>