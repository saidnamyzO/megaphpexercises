<?

include('../priv2467/configuracion.php');

$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

$consulta = mysql_query("SELECT * FROM usuarios WHERE user='$usuario' AND pass='$password'");

if($user_ok = mysql_fetch_array($consulta)){
	
}else{
	
}

?>