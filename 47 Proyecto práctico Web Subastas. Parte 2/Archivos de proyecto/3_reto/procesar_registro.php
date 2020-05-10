<?

include("privado/MySQL.php");
include("privado/funciones.php");

$nombre = addslashes(strip_tags($_POST['nombre']));
$email = addslashes(strip_tags($_POST['email']));
$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

$sql = new MySQL('localhost','root','','subastas'); 
$consulta = $sql->enviarQuery("INSERT INTO usuarios (nombre,user,password,email) VALUE ('$nombre','$usuario', '$password', '$email')");

header('Location:registro.php?mensaje=ok');

?>