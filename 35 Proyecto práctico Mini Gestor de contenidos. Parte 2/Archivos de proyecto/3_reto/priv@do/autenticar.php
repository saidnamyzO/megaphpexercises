<?

include('../priv2467/configuracion.php');

$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

$consulta = mysql_query("SELECT * FROM usuarios WHERE user='$usuario' AND pass='$password'");

if($user_ok = mysql_fetch_array($consulta)){
	
	$_SESSION['nombre'] = $user_ok['nombre'];
	$_SESSION['user'] = $user_ok['user'];
	$_SESSION['level'] = '1';
	
	header('Location:index3.php');
	
}else{
	
	header('Location:index.php?error=1');
}

?>