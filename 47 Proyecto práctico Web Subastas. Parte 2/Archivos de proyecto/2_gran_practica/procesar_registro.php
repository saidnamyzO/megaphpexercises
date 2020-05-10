<?

$nombre = addslashes(strip_tags($_POST['nombre']));
$email = addslashes(strip_tags($_POST['email']));
$usuario = addslashes(strip_tags($_POST['usuario']));
$password = addslashes(strip_tags($_POST['password']));

echo $nombre.' - '.$email.' - '.$usuario.' - '.$password;

?>