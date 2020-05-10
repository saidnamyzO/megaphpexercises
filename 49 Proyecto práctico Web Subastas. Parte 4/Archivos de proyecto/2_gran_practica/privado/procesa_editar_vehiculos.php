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
if($tamano!=0){
move_uploaded_file($_FILES['foto']['tmp_name'],$directorio.$nombre);
}
$nombre = $directorio.$nombre;

	
$sql = new MySQL('localhost','root','','subastas'); 
$id = $_GET['id'];
$consulta = $sql->enviarQuery("UPDATE vehiculos SET bastidor = '$bastidor', matricula = '$matricula', marca = '$marca', modelo = '$modelo', url = '$nombre', precio = '$precio' WHERE id = '$id' ");

if($consulta){
header('Location:editar_vehiculos.php?id='.$_GET['id'].'&mensaje=ok');
}else{
	header('Location:editar_vehiculos.php?id='.$_GET['id'].'&mensaje=error');
}

?>