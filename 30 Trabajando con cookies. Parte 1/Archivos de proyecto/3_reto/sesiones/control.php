<?

session_start();
include("Login.php");

$login = new Login();

if(isset($_GET['salir'])){
	$login->cerrarSesion();
}

$login->inicia(3600, $_POST['user'], $_POST['pass']);



?>