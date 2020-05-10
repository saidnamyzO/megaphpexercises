<?

include("MySQL.php");
include("funciones.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
		
	$nombre = addslashes(strip_tags($_POST['nombre']));
	$nif = addslashes(strip_tags($_POST['nif']));
	$email = addslashes(strip_tags($_POST['email']));
	$usuario = addslashes(strip_tags($_POST['usuario']));
	$password = addslashes(strip_tags($_POST['password']));
	
$sql = new MySQL('localhost','root','','subastas'); 
$id = $_SESSION['id'];

$consulta = $sql->enviarQuery("UPDATE usuarios SET nombre = '$nombre', NIF = '$nif', email = '$email', user = '$usuario', password = '$password' WHERE id = '$id'");

	if($consulta){
		header('Location: editar_datos.php?mensaje=ok');
	}else{
		header('Location: editar_datos.php?mensaje=error');
	}
	
}else{
	header('Location:../index.php');
}

?>