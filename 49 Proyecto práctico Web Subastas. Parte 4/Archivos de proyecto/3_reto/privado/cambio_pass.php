<?

include("MySQL.php");
include("funciones.php");
if(isset($_SESSION['nivel']) &&  $_SESSION['nivel'] == '1'){
	
	$password_antiguo = addslashes(strip_tags($_POST['password1']));
	$password_nuevo = addslashes(strip_tags($_POST['password2']));
	
$sql = new MySQL('localhost','root','','subastas'); 
$user = $_SESSION['user'];
$password = $password_antiguo;
$consulta = $sql->enviarQuery("SELECT * FROM usuarios WHERE user='$user' and password='$password'");
	if($consulta){
		$id = $_SESSION['id'];
		$consulta = $sql->enviarQuery("UPDATE usuarios SET password = '$password_nuevo' WHERE id = '$id' ");
		header('Location: cambiar_login.php?mensaje=ok');
	}else{
		header('Location: cambiar_login.php?mensaje=error');
	}

}else{
	header('Location:../index.php');
}
?>