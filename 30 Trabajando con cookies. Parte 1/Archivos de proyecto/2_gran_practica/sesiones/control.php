<?

session_start();
include("Login.php");
$login = new Login();
$login->inicia(3600, $_POST['user'], $_POST['pass']);

?>