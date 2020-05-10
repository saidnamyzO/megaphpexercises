<?

include("MySQL.php");
include("funciones.php");

$bastidor = addslashes(strip_tags($_POST['bastidor']));
$matricula = addslashes(strip_tags($_POST['matricula']));
$marca = addslashes(strip_tags($_POST['marca']));
$modelo = addslashes(strip_tags($_POST['modelo']));
$precio = addslashes(strip_tags($_POST['precio']));

//Recibimos la imagen
$directorio = 'uploads/';
$nombre = $bastidor.'_img.jpg';
$tipo = $_FILES['foto']['type'];
$tamano = $_FILES['foto']['size'];
move_uploaded_file($_FILES['foto']['tmp_name'],$directorio.$nombre);

$nombre = $directorio.$nombre;
	
$sql = new MySQL('localhost','root','','subastas'); 
$propietario = $_SESSION['nif'];
$consulta = $sql->enviarQuery("INSERT INTO vehiculos (bastidor,matricula,propietario,marca,modelo,url,precio) VALUE ('$bastidor','$matricula', '$propietario', '$marca','$modelo','$nombre','$precio')");

if($consulta){
header('Location:alta_vehiculos.php?mensaje=ok');
}else{
	header('Location:alta_vehiculos.php?mensaje=error');
}

?>