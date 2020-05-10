<?

require("Validacion.php");

$validacion = new Validacion();

$nombre = $_POST['nombre'];

$error_nombre = $validacion->ValidaTexto($nombre,false,false,true,'Por favor, tienes que poner tu nombre');

if($error_nombre==1){
header('Location:formulario.php');
}else{
header('Location:formulario.php?error=nombre');
}


?>